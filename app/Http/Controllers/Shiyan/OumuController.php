<?php

namespace App\Http\Controllers\Shiyan;

use App\Http\Controllers\Controller;
use App\models\Shiyan\Huoer;
use App\models\Shiyan\Oumu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mpdf;
class OumuController extends Controller
{
    /**
     * 欧姆表的改装设计实验相关数据的存入
     * @anthor Wzh
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
   public function WzhOumu(\App\Http\Requests\Oumu $request){
       $student_id=auth('api')->user()->student_id;
       $ig1 = sprintf("%.1f",$request['ig1']);
       $rg1 = sprintf("%.1f",$request['rg1']);
       $e = sprintf("%.1f",$request['e']);

       $ra = $request['ra'];
       $e1 = sprintf("%.1f",$request['e1']);
       $i = sprintf("%.1f",$request['i']);
       $ig2 = sprintf("%.1f",$request['ig2']);
       $r1 = sprintf("%.1f",$request['r1']);

       $e2 = sprintf("%.1f",$request['e2']);
       $rb = sprintf("%.1f",$request['rb']);
       $rg2 = sprintf("%.1f",$request['rg2']);
       $r2 = sprintf("%.1f",$request['r2']);


       $r3 = sprintf("%.1f",$request['r3']);
       $r4 = sprintf("%.1f",$request['r4']);
       $rx = sprintf("%.1f",$request['rx']);
       $p1=$request['p1'];
       $p2=$request['p2'];
       $pd1=$request['pd1'];
       $pd2=$request['pd2'];
       $pd3=$request['pd3'];

       $res1 = Oumu::establish(
           $student_id,
           $ig1,
           $rg1,
           $e,
           $ra,
           $e1,
           $i,
           $ig2,
           $r1,
           $e2,
           $rb,
           $rg2,
           $r2,
           $r3,
           $r4,
           $rx,
           $p1,
           $p2,
           $pd1,
           $pd2,
           $pd3
       );
       Oumu::StateChange($student_id);
       $fraction_p1= 0;
       $fraction_p2= 0;
       $grade = 0;
       $grade_xp=$request['grade_xp'];

       if($ig1 == 500.0) $grade+=5;

       if($rg1 == 560.0) $grade+=5;

       if($e == 1.5) $grade+=5;

       if($ra == "E/Ig-Rg") $grade+=5;

       if($e1==1.5) $grade+=5;

       if($i==500.0) $grade+=5;

       if($ig2==560.0) $grade+=5;

       if($r1==2440.0) $grade+=5;


       if($e2==1.5) $grade+=5;

       if($rb==2440.0) $grade+=5;

       if($rg2==560.0) $grade+=5;

       if($r2==43.5) $grade+=5;

       if(($r3>=2390.0)&&($r3<=2450.0)) $grade+=5;

       if(($r4>=43.0)&&($r4<=45.0)) $grade+=5;

       if($rx>=20.0&&$rx<=275.0) $grade+=5;
       $grade=$grade+$grade_xp;

       $res2 = Oumu::grade($student_id, $grade,$grade_xp,$fraction_p1,$fraction_p2);

       $res['res1'] = $res1;
       $res['res2'] = $res2;

       return $res ?
           json_success('操作成功!', $res1, 200) :
           json_fail('操作失败!', null, 100);
   }

    /**
     *  欧姆表的改装设计实验pdf导出
     * @anthor Wzh
     * @param Request $request
     * @throws Mpdf\MpdfException
     */
    public function pdf(Request $request)
    {
        $student_id = $request['student_id'];

        $student_a = Oumu::show($student_id);

        $student_b = json_decode($student_a);

        $ig1= $student_b[0]->ig1;
        $rg1 = $student_b[0]->rg1;
        $e		 = $student_b[0]->e;
        $ra = $student_b[0]->ra;
        $e1	 = $student_b[0]->e1;
        $i	 = $student_b[0]->i;
        $ig2	 = $student_b[0]->ig2;
        $r1 = $student_b[0]->r1;
        $e2	 = $student_b[0]->e2;
        $rb = $student_b[0]->rb;
        $rg2 = $student_b[0]->rg2;
        $r2	 = $student_b[0]->r2;
        $r3	 = $student_b[0]->r3;
        $r4	 = $student_b[0]->r4;
        $rx = $student_b[0]->rx;
        $p1	 = $student_b[0]->p1;
        $p2 = $student_b[0]->p2;
        $pd1 = $student_b[0]->pd1;

        $pd2 = $student_b[0]->pd2;

        $pd3 = $student_b[0]->pd3;

        $student_name = $student_b[0]->student_name;
        $student_level = $student_b[0]->student_level;
        $student_spec = $student_b[0]->student_spec;
        $student_year = $student_b[0]->student_year;
        $student_class = $student_b[0]->student_class;
        $student_num = $student_b[0]->student_num;
        $student_teacher = $student_b[0]->student_teacher;
        $created_at = $student_b[0]->created_at;
        $updated_at = $student_b[0]->updated_at;
        $grade = $student_b[0]->grade;
        $grade_xp = $student_b[0]->grade_xp;


        $res = view('oumu', [
            'student_name' => $student_name,
            'student_level' => $student_level,
            'student_spec' => $student_spec,
            'student_year' => $student_year,
            'student_teacher' => $student_teacher,
            'student_num' => $student_num,
            'student_class' => $student_class,
            'grade' => $grade,
            'grade_xp' => $grade_xp,
            'grade_tk' => ($grade - $grade_xp),
            'created_at' => $created_at,
            'updated_at' => $updated_at,

            'ig1' => $ig1,
            'rg1' => $rg1,
            'e' => $e,
            'ra' => $ra,
            'e1' => $e1,
            'i' => $i,
            'ig2' => $ig2,
            'r1' => $r1,
            'e2' =>  $e2,
            'rb' => $rb,
            'rg2' => $rg2,
            'r2' =>  $r2,
            'r3' => $r3,
            'r4' => $r4,
            'rx' => $rx,
            'p1' => $p1,
            'p2' => $p2,
            'pd1' => $pd1,
            'pd2' => $pd2,
            'pd3' => $pd3,

        ]);

        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);

        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-欧姆表的改装设计'.".pdf", "D");

        exit;
    }

    /**
     *  欧姆表的改装设计实验打分
     * @anthor Wzh
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function DaFen(Request $request){
        $poste = DB::table('oumubiao')->value('poste');
        $grade = DB::table('oumubiao')->value('grade');
        $student_id=$request['student_id'];
        $fraction_p1 = $request['fraction_p1'];
        $fraction_p2 = $request['fraction_p2'];
        if($poste == 1){
            return
                json_fail('您已经打过分数了',null,101);
        }
        else if($poste == 0){
            $grade += $fraction_p1+$fraction_p2;
            $res =  Oumu::cunfen($grade,$student_id,$fraction_p1,$fraction_p2);
            return $res?
                json_success('打分成功',$res,200):
                json_fail('打分失败',$res,100);
        }
        else
            return
                json_fail('出大问题了！请联系代码维护人员！',null,999);;
    }
}

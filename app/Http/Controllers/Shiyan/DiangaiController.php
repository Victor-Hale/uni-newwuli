<?php

namespace App\Http\Controllers\Shiyan;

use App\Http\Controllers\Controller;
use App\models\Shiyan\Diangai;
use Illuminate\Http\Request;
use Mpdf;

class DiangaiController extends Controller
{
    /**
     * 电表改装实验数据录入
     * @anthor Wzh
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
   public function WzhDiangai(\App\Http\Requests\Diangai $request){
       $student_id=auth('api')->user()->student_id;
       $xz1 = $request['xz1'];
       $xz2 = $request['xz2'];
       $xz3 = $request['xz3'];
       $xz4 = $request['xz4'];

       $res1 = Diangai::establish($student_id,$xz1,$xz2,$xz3,$xz4);
               Diangai::StateChange($student_id);
       $grade = 0;
       $grade_xp = 0;
       if ($xz1 == 'B') {
           $grade_xp += 25;
       }
       if ($xz2 == 'A') {
           $grade_xp += 25;
       }
       if ($xz3 == 'E') {
           $grade_xp += 25;
       }
       if ($xz4 == 'D') {
           $grade_xp += 25;
       }
       $grade=$grade+$grade_xp;

       $res2 = Diangai::Grade($student_id, $grade,$grade_xp);

       $res['res1'] = $res1;
       $res['res2'] = $res2;

       return $res1 ?
           json_success('操作成功!', $res1, 200) :
           json_fail('操作失败!', null, 100);
   }

    /**
     * 电表改装实验PDF导出
     * @anthor Wzh
     * @param Request $request
     * @throws Mpdf\MpdfException
     */
    public function pdf(Request $request)
    {
        $student_id = $request['student_id'];
        $student_a = Diangai::show($student_id); //数据获取
        $student_b = json_decode($student_a);  //转换json
        $xz1		 = $student_b[0]->xz1;
        $xz2		 = $student_b[0]->xz2;
        $xz3		 = $student_b[0]->xz3;
        $xz4		 = $student_b[0]->xz4;
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
        //传入view
        $res = view('dianbiao'
            , [
                'student_level' => $student_level,
                'student_spec' => $student_spec,
                'student_year' => $student_year,
                'student_teacher' => $student_teacher,
                'student_name' => $student_name,
                'student_num' => $student_num,
                'student_class' => $student_class,
                'created_at' => $created_at,
                'updated_at' => $updated_at,
                'grade' => $grade,
                'grade_xp' => $grade_xp,
                'grade_tk' => ($grade - $grade_xp),
                'pd1' => $xz1,
                'pd2' => $xz2,
                'pd3' => $xz3,
                'pd4' => $xz4,
            ]

        );
        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);


        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-电表改装实验'.".pdf", "D");

    }

}

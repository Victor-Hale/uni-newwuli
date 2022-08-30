<?php

namespace App\Http\Controllers;

use App\models\CompoleteModel\Physics;
use App\models\UserorStudentModel\Student;
use Illuminate\Http\Request;

use Mpdf;

class PhysicsController extends Controller
{

    /**
     * @param \App\Http\Requests\Physics $request
     * @return \Illuminate\Http\JsonResponse
     * 将大学物理实验一入库
     * @author
     *  yjx
     *
     */
    public function YJXphysics (\App\Http\Requests\Physics $request)
    {
         $student_id = auth('api')->user()->student_id;
         //dd($student_id);
       // $student_id = $request['student_id'];

        $pd1 = $request['one'];
        $pd2 = $request['two'];
        $pd3 = $request['three'];
        $pd4 = $request['four'];
        $pd5 = $request['five'];
        $pd6 = $request['six'];
        $pd7 = $request['seven'];
        $pd8 = $request['eight'];
        $xz1 = $request['cone'];
        $xz2 = $request['ctwo'];
        $xz3 = $request['cthree'];
        $xz4 = $request['cfour'];
        $xz5 = $request['cfive'];
        $xz6 = $request['csix'];
        $xz7 = $request['cseven'];
        $xz8 = $request['ceight'];
        $xz9 = $request['cnine'];
        $xz10 = $request['cten'];
        $xz11 = $request['celeven'];
        $xz12 = $request['ctwelve'];
//dd($xz12);

        $rr = Physics::rr($student_id);
        if ($rr != 0){
            return json_fail('重复答题!', null, 150);
        }

        $res1 =Physics::establish(
            $student_id,
            $pd1,
            $pd2,
            $pd3,
            $pd4,
            $pd5,
            $pd6,
            $pd7,
            $pd8,
            $xz1,
            $xz2,
            $xz3,
            $xz4,
            $xz5,
            $xz6,
            $xz7,
            $xz8,
            $xz9,
            $xz10,
            $xz11,
            $xz12
        );
//dd(6657);

        //表入库变为2
        $resruku = Physics::ruku($student_id);


        $grade = 0;
        $grade_xp = 0;

        if ($pd1 == 'T') {
            $grade_xp += 5;
        }
        if ($pd2 == 'F') {
            $grade_xp += 5;
        }
        if ($pd3 == 'T') {
            $grade_xp += 5;
        }
        if ($pd4 == 'T') {
            $grade_xp += 5;
        }
        if ($pd5 == 'T') {
            $grade_xp += 5;
        }
        if ($pd6 == 'F') {
            $grade_xp += 5;
        }
        if ($pd7 == 'T') {
            $grade_xp += 5;
        }
        if ($pd8 == 'T') {
            $grade_xp += 5;
        }
        if ($xz1 == 'D') {
            $grade_xp += 5;
        }
        if ($xz2 == 'A') {
            $grade_xp += 5;
        }
        if ($xz3 == 'D') {
            $grade_xp += 5;
        }
        if ($xz4 == 'C') {
            $grade_xp += 5;
        }
        if ($xz5 == 'B') {
            $grade_xp += 5;
        }
        if ($xz6 == 'A') {
            $grade_xp += 5;
        }
        if ($xz7 == 'C') {
            $grade_xp += 5;
        }
        if ($xz8 == 'A') {
            $grade_xp += 5;
        }
        if ($xz9 == 'B') {
            $grade_xp += 5;
        }
        if ($xz10 == 'A') {
            $grade_xp += 5;
        }
        if ($xz11 == 'B') {
            $grade_xp += 5;
        }
        if ($xz12 == 'A') {
            $grade_xp += 5;
        }


        $grade = $grade + $grade_xp;

        $tianfen = Physics::tianfen($student_id,$grade,$grade_xp);
//dd($grade);
        //表入库变为3
        $resruku2 = Physics::ruku2($student_id);
//dd(6657);
        //批改状态变为1（该实验无需批改）
        $pigai  = Physics::pigai($student_id);

        //$res2 = Student::grade($student_id, $grade, $grade_xp);

        //Student::statechange($student_id);
        return $res1 ?
            json_success('操作成功!', $res1, 200) :
            json_fail('操作失败!', null, 100);

    }

    /**
     * @return \Illuminate\Http\JsonResponse
     * 查询入学层次
     * yjx
     */
    public function yjxshowxxlevel()
    {
        //$level = $request['level'];
        $res = Physics::yjxshowxxlevel();

        return $res?
            json_success('查询成功!',$res,  200):
            json_fail('查询失败',null, 100 ) ;

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * 查询所有班级（在一个专业里）
     * yjx
     */
    public function yjxshowxxclass(Request $request)
    {

         $spec = $request['specname'];
         //dd($spec);
        $res = Physics::yjxshowxxclass($spec);

        return $res?
            json_success('查询成功!',$res,  200):
            json_fail('查询失败',null, 100 ) ;

    }

    /**
     * @return \Illuminate\Http\JsonResponse
     * 查询所有专业
     * yjx
     */
    public function yjxshowxxspec()
    {

        $res = Physics::yjxshowxxspec();

        return $res?
            json_success('查询成功!',$res,  200):
            json_fail('查询失败',null, 100 ) ;

    }

    /**
     * @return \Illuminate\Http\JsonResponse
     * 查询所有年级
     * yjx
     */
    public function yjxshowxxyear()
    {

        $res = Physics::yjxshowxxyear();

        return $res?
            json_success('查询成功!',$res,  200):
            json_fail('查询失败',null, 100 ) ;

    }

    /***
     * pdf
     * yjx
     * @param Request $request
     */
    public function pdf1(Request $request)
    {

        $student_id = $request['student_id'];
        //dd($student_id);
        $student_a = Physics::YJXshow($student_id);
        //dd($student_a);

        $student_b = json_decode($student_a);
        //dd($student_b);

        $pd1		 = $student_b[0]->pd1;
        $pd2		 = $student_b[0]->pd2;
        $pd3		 = $student_b[0]->pd3;
        $pd4		 = $student_b[0]->pd4;
        $pd5		 = $student_b[0]->pd5;
        $pd6		 = $student_b[0]->pd6;
        $pd7		 = $student_b[0]->pd7;
        $pd8		 = $student_b[0]->pd8;
        $xz1		 = $student_b[0]->xz1;
        $xz2		 = $student_b[0]->xz2;
        $xz3		 = $student_b[0]->xz3;
        $xz4         = $student_b[0]->xz4;
        $xz5	     = $student_b[0]->xz5;
        $xz6         = $student_b[0]->xz6;
        $xz7	     = $student_b[0]->xz7;
        $xz8         = $student_b[0]->xz8;
        $xz9         = $student_b[0]->xz9;
        $xz10         = $student_b[0]->xz10;
        $xz11         = $student_b[0]->xz11;
        $xz12         = $student_b[0]->xz12;

//dd($pdone);

        $student_name = $student_b[0]->student_name;
        //dd($student_name);
        $student_level = $student_b[0]->student_level;
        $student_spec = $student_b[0]->student_spec;
        $student_year = $student_b[0]->student_year;
        $student_class = $student_b[0]->student_class;
        $student_num = $student_b[0]->student_num;
        // $experiment_name = $student_b[0]->experiment_name;
        // $course_name = $student_b[0]->course_name;
        // $student_date = $student_b[0]->student_date;
        $student_teacher = $student_b[0]->student_teacher;
        $created_at = $student_b[0]->created_at;
        $grade = $student_b[0]->grade;
        $grade_xp = $student_b[0]->grade_xp;

//dd($grade_xp);

        $res = view('experiment1'
            , [
                'student_level' => $student_level,
                'student_spec' => $student_spec,
                'student_year' => $student_year,
                // 'experiment_name' => $experiment_name,
                // 'course_name' => $course_name,
                // 'student_date' => $student_date,
                'student_teacher' => $student_teacher,
                'name' => $student_name,
                'student_num' => $student_num,
                'student_class' => $student_class,
                'created_at' => $created_at,
                'grade' => $grade,
                'grade_xp' => $grade_xp,
                'grade_tk' => ($grade - $grade_xp),
                'pd1' => $pd1,
                'pd2' => $pd2,
                'pd3' => $pd3,
                'pd4' => $pd4,
                'pd5' => $pd5,
                'pd6' => $pd6,
                'pd7' => $pd7,
                'pd8' => $pd8,
                'xz1' => $xz1,
                'xz2' => $xz2,
                'xz3' => $xz3,
                'xz4' => $xz4,
                'xz5' => $xz5,
                'xz6' => $xz6,
                'xz7' => $xz7,
                'xz8' => $xz8,
                'xz9' => $xz9,
                'xz10' => $xz10,
                'xz11' => $xz11,
                'xz12' => $xz12,
            ]

        );

//          $pdf = PDF::loadHTML($res);
//        return $pdf->download('document.pdf');

//        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);
//
//        //调试图片错误
//        $mpdf-> showImageErrors = true;
//
//
//        $mpdf->WriteHTML($res);
//        // I 在线预览、 D 下载模式、 F 生成后保存服务器、 S 返回字符串，此模式下$filename会被忽略
//        $data = $mpdf->Output($student_num.'-'.$student_name.'-大学物理实验1'.".pdf", "D");

//
        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);


        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-大学物理实验1'.".pdf", "D");

//
//
//        exit;
//
////        $data = ['111', '222'];
//        $pdf = PDF::loadView('experiment1', ['data'=>$data]);
//// 直接在页面渲染显示PDF
//      //  return $pdf->stream();
//// 直接下载生成的PDF文件
//        return $pdf->download('test.pdf');


    }








}

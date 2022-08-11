<?php

namespace App\Http\Controllers;

use App\models\CompoleteModel\Physics;
use App\models\CompoleteModel\TeacherShow;
use App\models\UserorStudentModel\Student;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;

class TeacherShowController extends Controller
{
    public function yjxshowxxallin(Request $request)
    {

        $year = $request['year'];
        $class = $request['class'];
        $experiment = $request['experiment'];

          if ($experiment == '实验误差与数据处理') {
            $res = TeacherShow::yjxshowallin($year, $class);
            $arrayconunt = count($res);
            for($i=0;$i<$arrayconunt;$i++){
            $res[$i]['experiment']=$experiment;
            }
        } else  {
            $res = TeacherShow::yjxshowallin2($year, $class);
            $arrayconunt = count($res);
            for($i=0;$i<$arrayconunt;$i++){
                $res[$i]['experiment']=$experiment;
            }
        }
        return $res ?
            json_success('查询成功!', $res, 200) :
            json_fail('查询失败', null, 100);

    }


    public function export(Request $request)
    {
        $student_class=$request['student_class'];

        $d=Student::join('experiment','student.student_num','experiment.student_id')->join('danbai','student.student_num','danbai.student_id')
            ->select('student.student_name as 姓名','student.student_num as 学号','student.student_spec as 专业','student.student_class as 班级',
                'experiment.grade as 实验误差与数据处理总分','experiment.grade_xp as 实验误差与数据处理选判题分数',
                'danbai.grade as 单摆法测重力加速度总分','danbai.grade_xp as 单摆法测重力加速度选判题分数'
            )
            ->where('student_class','=',$student_class)->get();

        return (new FastExcel($d))->download($student_class.'物理实验成绩管理表'.'.xlsx');



    }

}

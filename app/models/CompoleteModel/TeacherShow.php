<?php

namespace App\models\CompoleteModel;

use Illuminate\Database\Eloquent\Model;

class TeacherShow extends Model
{
    protected $table = "student";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function yjxshowallin($year,$class)
    {
        try {
            $res = self::where('student_year',$year)
                ->where('student_class',$class)
                ->join('experiment','experiment.student_id','student.student_num')
                ->select('student.student_name','student.student_level','student_spec','student_year','student_class','student.student_num','student.student_teacher','experiment.grade','experiment.grade_xp','experiment.id','experiment.state','experiment.poste')
                ->get();
//dd(22);
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('chaxun错误', [$e->getMessage()]);
            return false;
        }
    }

    public static function yjxshowallin2($year,$class)
    {
        try {
            $res = self::where('student_year',$year)
                ->where('student_class',$class)
                ->join('danbai','danbai.student_id','student.student_num')
                ->select('student.student_name','student.student_level','student_spec','student_year','student_class','student.student_num','student.student_teacher','danbai.grade','danbai.grade_xp','danbai.id','danbai.state_danbai','danbai.js','danbai.poste')
                ->get();
//dd(22);
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('chaxun错误', [$e->getMessage()]);
            return false;
        }
    }
}

<?php

namespace App\models\CompoleteModel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Self_;

class Physics extends Model
{
    protected $table = "experiment";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function establish(
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
        $xz9 ,
        $xz10,
        $xz11,
        $xz12
    ){
        try {

                $res = self::create(
                //
                    [
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

                        'student_id' => $student_id,
                        'state' => 0,
                        'poste' => 0,
                    ]

                );

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('添加错误', [$e->getMessage()]);
            return false;
        }
            }


    public static function YJXshow($student_id)
    {
        try {

            $res = self::
            join('student', 'student.student_num', '=', 'experiment.student_id')
                ->where('student.student_num', '=', $student_id)
                ->select(
                    'student.student_name',
                    'student.student_level',
                    'student.student_spec',
                    'student.student_year',
                    'student.student_class',
                    'student.student_num',
                    //  'student.experiment_name',
                    //  'student.course_name',
                    // 'student.student_date',
                    'student.student_teacher',

                    'experiment.created_at',
                    'experiment.grade',
                    'experiment.grade_xp',


                    'pd1',
                    'pd2',
                    'pd3',
                    'pd4',
                    'pd5',
                    'pd6',
                    'pd7',
                    'pd8',
                    'xz1',
                    'xz2',
                    'xz3',
                    'xz4',
                    'xz5',
                    'xz6',
                    'xz7',
                    'xz8',
                    'xz9',
                    'xz10',
                    'xz11',
                    'xz12'
                )->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    /**
     * @return false|\Illuminate\Support\Collection
     * yjx
     * 层次
     */
    public static function yjxshowxxlevel()
    {
        try {
            $res = DB::table('level')->select()->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    /**
     * @return false|\Illuminate\Support\Collection
     * yjx
     * 班级
     */
    public static function yjxshowxxclass($spec)
    {
        try {
             $spec_id = DB::table('specialized')->where('student_spec',$spec)->value('id');
           // dd($spec_id);
            $res = DB::table('class')->select()->where('class_spec',$spec_id)->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    /**
     * @return false|\Illuminate\Support\Collection
     * yjx
     * 专业
     */
    public static function yjxshowxxspec()
    {
        try {
            $res = DB::table('specialized')->select()->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    /**
     * @return false|\Illuminate\Support\Collection
     * yjx
     * 年纪
     */
    public static function yjxshowxxyear()
    {
        try {
            $res = DB::table('grade')->select()->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }


    public static function rr($student_id)
    {
        try {
            $res = DB::table('experiment')->select()->where('student_id' ,'=',$student_id)->count();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    public static function ruku($student_id)
    {
        try {
            $res = self::where('student_id',$student_id)->update(['state' => 1]);

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('改变入库1错误', [$e->getMessage()]);
            return false;
        }
    }

    public static function ruku2($student_id)
    {
        try {
            $res = self::where('student_id',$student_id)->update(['state' => 2]);
//dd(22);
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('改变入库2错误', [$e->getMessage()]);
            return false;
        }
    }

    public static function tianfen($student_id,$grade,$grade_xp)
    {
        try {
            $res = self::where('student_id',$student_id)->update([
                'grade' => $grade,
                'grade_xp' => $grade_xp
            ]);

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('tianfen错误', [$e->getMessage()]);
            return false;
        }
    }

     public static function pigai($student_id)
    {
        try {
            $res = self::where('student_id',$student_id)->update(['poste' => 1]);
//dd(22);
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('pigai错误', [$e->getMessage()]);
            return false;
        }
    }





}

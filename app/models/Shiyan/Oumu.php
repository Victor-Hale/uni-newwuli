<?php

namespace App\models\Shiyan;

use Illuminate\Database\Eloquent\Model;

class Oumu extends Model
{
    protected $table = "oumubiao";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    /**
     *  欧姆表的改装设计实验数据存入
     * @anthor Wzh
     * @param $student_id
     * @param $ig1
     * @param $rg1
     * @param $e
     * @param $ra
     * @param $e1
     * @param $i
     * @param $ig2
     * @param $r1
     * @param $e2
     * @param $rb
     * @param $rg2
     * @param $r2
     * @param $r3
     * @param $r4
     * @param $rx
     * @param $p1
     * @param $p2
     * @param $pd1
     * @param $pd2
     * @param $pd3
     * @return false
     */
    public static function establish(
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
    ) {
        try {
            $res = self::create(
                [
                    'ig1' => $ig1,
                    'rg1' => $rg1,
                    'e' => $e,
                    'ra' => $ra,
                    'e1' => $e1,
                    'i' => $i,
                    'ig2' => $ig2,
                    'r1' => $r1,
                    'e2' => $e2,
                    'rb' => $rb,
                    'rg2' => $rg2,
                    'r2' => $r2,
                    'r3' => $r3,
                    'r4' => $r4,
                    'rx' => $rx,
                    'p1' => $p1,
                    'p2' => $p2,
                    'pd1' => $pd1,
                    'pd2' => $pd2,
                    'pd3' => $pd3,
                    'student_id' => $student_id,
                    'state_oumu'=>1
                ]
            );
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    /**
     *  欧姆表的改装设计实验改变状态
     * @anthor Wzh
     * @param $student_id
     * @return false
     */
    public static function StateChange($student_id){
        try {
            $res =self::where('student_id',$student_id)->update([
                'state_oumu' => 2
            ]);
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('添加错误', [$e->getMessage()]);
            return false;
        }
    }

    /**
     * 欧姆表的改装设计实验成绩录入
     * @anthor Wzh
     * @param $student_id
     * @param $grade
     * @param $grade_xp
     * @param $fraction_p1
     * @param $fraction_p2
     * @return false
     */
    public static function grade($student_id, $grade,$grade_xp,$fraction_p1,$fraction_p2){
        try {

            $res = self::where('student_id', '=', $student_id)->update([
                'grade' => $grade,
                'grade_xp' => $grade_xp,
                'fraction_p1' => $fraction_p1,
                'fraction_p2' => $fraction_p2,
                'state_oumu'=>3
            ]);
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    /**
     *  欧姆表的改装设计实验展示数据
     * @anthor Wzh
     * @param $student_id
     * @return false
     */
    public static function show($student_id)
    {
        try {
            $res = self::join('student', 'student.student_num','oumubiao.student_id')
                ->where('student.student_num', '=', $student_id)
                ->select(
                    'student.student_name',
                    'student.student_level',
                    'student.student_spec',
                    'student.student_year',
                    'student.student_class',
                    'student.student_num',
                    'student.student_teacher',
                    'oumubiao.created_at',
                    'oumubiao.updated_at',
                    'oumubiao.grade',
                    'oumubiao.grade_xp',

                    'ig1',
                    'rg1',
                    'e',
                    'ra',
                    'e1',
                    'i',
                    'ig2',
                    'r1',
                    'e2',
                    'rb',
                    'rg2',
                    'r2',
                    'r3',
                    'r4',
                    'rx',
                    'p1',
                    'p2',
                    'pd1',
                    'pd2',
                    'pd3'

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
     *  欧姆表的改装设计实验打分
     * @anthor Wzh
     * @param $grade
     * @param $student_id
     * @param $fraction_p1
     * @param $fraction_p2
     * @return false
     */
    public static function cunfen($grade,$student_id,$fraction_p1,$fraction_p2){
        try {
            $res = self::where('student_id',$student_id)->update([
                'fraction_p1' => $fraction_p1,
                'fraction_p2' => $fraction_p2,
                'grade' => $grade,
                'poste'=> 1
            ]);
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }
}

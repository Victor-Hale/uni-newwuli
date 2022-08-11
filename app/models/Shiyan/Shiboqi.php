<?php

namespace App\models\Shiyan;

use Illuminate\Database\Eloquent\Model;

class Shiboqi extends Model
{
    protected $table = "shiboqi";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    /**
     * 示波器的调整与使用 数据的存入
     * @anthor Wzh
     * @param $student_id
     * @param $b1
     * @param $b2
     * @param $b3
     * @param $b4
     * @param $b5
     * @param $b6
     * @param $b7
     * @param $c1
     * @param $c2
     * @param $c3
     * @param $c4
     * @param $c5
     * @param $c6
     * @param $c7
     * @param $c8
     * @param $c9
     * @param $c10
     * @param $c11
     * @param $c12
     * @param $d1
     * @param $d2
     * @param $d3
     * @param $d4
     * @param $d5
     * @param $d6
     * @param $e1
     * @param $e2
     * @param $e3
     * @param $e4
     * @param $f1
     * @param $f2
     * @param $f3
     * @param $g1
     * @param $g2
     * @param $g3
     * @param $x1
     * @param $x2
     * @param $x3
     * @return false
     */
    public static function establish(
        $student_id,
        $b1,
        $b2,
        $b3,
        $b4,
        $b5,
        $b6,
        $b7,
        $c1,
        $c2,
        $c3,
        $c4,
        $c5,
        $c6,
        $c7,
        $c8,
        $c9,
        $c10,
        $c11,
        $c12,
        $d1,
        $d2,
        $d3,
        $d4,
        $d5,
        $d6,
        $e1,
        $e2,
        $e3,
        $e4,
        $f1,
        $f2,
        $f3,
        $g1,
        $g2,
        $g3,
        $x1,
        $x2,
        $x3

    )
    {
        try {
            $res = self::create(
                [
                    'student_id' => $student_id,
                    'b1' => $b1,
                    'b2' => $b2,
                    'b3' => $b3,
                    'b4' => $b4,
                    'b5' => $b5,
                    'b6' => $b6,
                    'b7' => $b7,
                    'c1' => $c1,
                    'c2' => $c2,
                    'c3' => $c3,
                    'c4' => $c4,
                    'c5' => $c5,
                    'c6' => $c6,
                    'c7' => $c7,
                    'c8' => $c8,
                    'c9' => $c9,
                    'c10' => $c10,
                    'c11' => $c11,
                    'c12' => $c12,
                    'd1' => $d1,
                    'd2' => $d2,
                    'd3' => $d3,
                    'd4' => $d4,
                    'd5' => $d5,
                    'd6' => $d6,
                    'e1' => $e1,
                    'e2' => $e2,
                    'e3' => $e3,
                    'e4' => $e4,
                    'f1' => $f1,
                    'f2' => $f2,
                    'f3' => $f3,
                    'g1' => $g1,
                    'g2' => $g2,
                    'g3' => $g3,
                    'x1' => $x1,
                    'x2' => $x2,
                    'x3' => $x3,
                    'state_shiboqi' => 1
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
     * 示波器的调整与使用 状态改变
     * @anthor Wzh
     * @param $student_id
     * @return false
     */
    public static function StateChange($student_id){
        try {
            $res =self::where('student_id',$student_id)->update([
                'state_shiboqi' => 2
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
     * 示波器的调整与使用成绩的录入
     * @anthor Wzh
     * @param $student_id
     * @param $grade
     * @param $grade_xp
     * @return false
     */
    public static function grade($student_id, $grade,$grade_xp){
        try {
            $res = self::where('student_id', '=', $student_id)->update([
                'grade' => $grade,
                'grade_xp' => $grade_xp,
                'state_shiboqi'=>3
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
     * 示波器的调整与使用pdf数据获取
     * @anthor Wzh
     * @param $student_id
     * @return false
     */
    public static function show($student_id)
    {
        try {
            $res = self::join('student', 'student.student_num','shiboqi.student_id')
                ->where('student.student_num', '=', $student_id)
                ->select(
                    'student.student_name',
                    'student.student_level',
                    'student.student_spec',
                    'student.student_year',
                    'student.student_class',
                    'student.student_num',
                    'student.student_teacher',
                    'shiboqi.created_at',
                    'shiboqi.updated_at',
                    'shiboqi.grade',
                    'shiboqi.grade_xp',

                    'b1',
                    'b2',
                    'b3',
                    'b4',
                    'b5',
                    'b6',
                    'b7',
                    'c1',
                    'c2',
                    'c3',
                    'c4',
                    'c5',
                    'c6',
                    'c7',
                    'c8',
                    'c9',
                    'c10',
                    'c11',
                    'c12',
                    'd1',
                    'd2',
                    'd3',
                    'd4',
                    'd5',
                    'd6',
                    'e1',
                    'e2',
                    'e3',
                    'e4',
                    'f1',
                    'f2',
                    'f3',
                    'g1',
                    'g2',
                    'g3',
                    'x1',
                    'x2',
                    'x3'

                )->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }
}

<?php

namespace App\models\Shiyan;

use Illuminate\Database\Eloquent\Model;

class Diangai extends Model
{
    protected $table = "dianbiao";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    /**
     * 电表改装实验答题数据录入此时状态为1
     * @anthor Wzh
     * @param $student_id
     * @param $xz1
     * @param $xz2
     * @param $xz3
     * @param $xz4
     * @return false
     */
    public static function establish($student_id,$xz1,$xz2,$xz3,$xz4){
        try {
            $res = self::create([
                'student_id'=>$student_id,
                'xz1'=>$xz1,
                'xz2'=>$xz2,
                'xz3'=>$xz3,
                'xz4'=>$xz4,
                'state_dianbiao'=>1
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
     * 电表改装实验状态修改此时状态为2
     * @anthor Wzh
     * @param $student_id
     * @return false
     */
    public static function StateChange($student_id){
        try {
            $res =self::where('student_id',$student_id)->update([
                'state_dianbiao' => 2
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
     * 电表改装实验成绩录入此时状态为3
     * @anthor Wzh
     * @param $student_id
     * @param $grade
     * @param $grade_xp
     * @return false
     */
    public static function Grade($student_id, $grade,$grade_xp){
        try {

            $res = self::where('student_id', '=', $student_id)->update([
                'grade' => $grade,
                'grade_xp' => $grade_xp,
                'state_dianbiao'=>3
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
     * 电表改装实验PDF导出数据获取
     * @anthor Wzh
     * @param $student_id
     * @return false
     */
    public static function show($student_id){
        try {
            $res = self::join('student', 'student.student_num','dianbiao.student_id')
                ->where('student.student_num', '=', $student_id)
                ->select(
                    'student.student_name',
                    'student.student_level',
                    'student.student_spec',
                    'student.student_year',
                    'student.student_class',
                    'student.student_num',
                    'student.student_teacher',
                    'dianbiao.created_at',
                    'dianbiao.updated_at',
                    'dianbiao.grade',
                    'dianbiao.grade_xp',
                    'xz1',
                    'xz2',
                    'xz3',
                    'xz4'
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

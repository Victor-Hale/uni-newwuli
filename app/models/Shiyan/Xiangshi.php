<?php

namespace App\models\Shiyan;

use Illuminate\Database\Eloquent\Model;

class Xiangshi extends Model
{
    protected $table = "xiangshi_dianqiao";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    /**
     * 箱式直流电桥测量电阻数据录入
     * @param $ra1
     * @param $ra2
     * @param $ra3
     * @param $rx
     * @param $rx1
     * @param $rx2
     * @param $rx3
     * @param $rb1
     * @param $rb2
     * @param $rb3
     * @param $rchange1a
     * @param $rchange2a
     * @param $rchange3a
     * @param $s1
     * @param $s2
     * @param $s3
     * @param $s
     * @param $rc1
     * @param $rc2
     * @param $rc3
     * @param $rwait1
     * @param $rwait2
     * @param $rwait3
     * @param $student_id
     * @param $xz1
     * @param $xz2
     * @param $pd1
     * @param $pd2
     * @return false
     */
    public static function establish(
        $ra1,
        $ra2,
        $ra3,
        $rx,
        $rx1,
        $rx2,
        $rx3,
        $rb1,
        $rb2,
        $rb3,
        $rchange1a,
        $rchange2a,
        $rchange3a,
        $s1,
        $s2,
        $s3,
        $s,
        $rc1,
        $rc2,
        $rc3,
        $rwait1,
        $rwait2,
        $rwait3,
        // $ss,
        $student_id,
        $xz1,
        $xz2,
        $pd1,
        $pd2
    ){
        try{

            $res = self::create(
                [
                    'ra1' => $ra1,
                    'ra2' => $ra2,
                    'ra3' => $ra3,
                    'rx' => $rx,
                    'rx1' => $rx1,
                    'rx2' => $rx2,
                    'rx3' => $rx3,
                    'rb1' => $rb1,
                    'rb2' => $rb2,
                    'rb3' => $rb3,
                    'rchange1a' => $rchange1a,
                    'rchange2a' =>  $rchange2a,
                    'rchange3a' =>  $rchange3a,
                    's1' =>  $s1,
                    's2' => $s2,
                    's3' => $s3,
                    's' =>  $s,
                    'rc1' => $rc1,
                    'rc2' => $rc2,
                    'rc3' => $rc3,
                    'rwait1' => $rwait1,
                    'rwait2' => $rwait2,
                    'rwait3' => $rwait3,

                    'student_id' => $student_id,
                    'xz1' => $xz1,
                    'xz2' => $xz2,
                    'pd1' => $pd1,
                    'pd2' => $pd2,
                    'state_xs_dianqiao' => 1
                ]
            );

            return $res ?
                $res :
                false;
        }catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    /**
     * 箱式直流电桥测量电阻状态改变
     * @anthor Wzh
     * @param $student_id
     * @return false
     */
    public static function StateChange($student_id){
        try {
            $res =self::where('student_id',$student_id)->update([
                'state_xs_dianqiao' => 2
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
     * 箱式直流电桥测量电阻成绩录入
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
                'state_xs_dianqiao'=>3
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
     * 箱式直流电桥测量电阻数据展示
     * @anthor Wzh
     * @param $student_id
     * @return false
     */
    public static function show($student_id)
    {
        try {
            $res = self::join('student', 'student.student_num','xiangshi_dianqiao.student_id')
                ->where('student.student_num', '=', $student_id)
                ->select(
                    'student.student_name',
                    'student.student_level',
                    'student.student_spec',
                    'student.student_year',
                    'student.student_class',
                    'student.student_num',
                    'student.student_teacher',
                    'xiangshi_dianqiao.created_at',
                    'xiangshi_dianqiao.updated_at',
                    'xiangshi_dianqiao.grade',
                    'xiangshi_dianqiao.grade_xp',

                    'xiangshi_dianqiao.ra1',
                    'xiangshi_dianqiao.ra2',
                    'xiangshi_dianqiao.ra3',
                    'xiangshi_dianqiao.rx1',
                    'xiangshi_dianqiao.rx2',
                    'xiangshi_dianqiao.rx3',
                    'xiangshi_dianqiao.rx',
                    'xiangshi_dianqiao.rb1',
                    'xiangshi_dianqiao.rb2',
                    'xiangshi_dianqiao.rb3',
                    'xiangshi_dianqiao.rchange1a',
                    'xiangshi_dianqiao.rchange2a',
                    'xiangshi_dianqiao.rchange3a',
                    'xiangshi_dianqiao.s1',
                    'xiangshi_dianqiao.s2',
                    'xiangshi_dianqiao.s3',
                    'xiangshi_dianqiao.s',
                    'xiangshi_dianqiao.rc1',
                    'xiangshi_dianqiao.rc2',
                    'xiangshi_dianqiao.rc3',
                    'xiangshi_dianqiao.rwait1',
                    'xiangshi_dianqiao.rwait2',
                    'xiangshi_dianqiao.rwait3',

//                    'xiangshi_dianqiao.rd1',
//                    'xiangshi_dianqiao.rd2',
//                    'xiangshi_dianqiao.rd3',
//                    'xiangshi_dianqiao.rchange1b',
//                    'xiangshi_dianqiao.rchange2b',
//                    'xiangshi_dianqiao.rchange3b',
//                    'xiangshi_dianqiao.ss1',
//                    'xiangshi_dianqiao.ss2',
//                    'xiangshi_dianqiao.ss3',

                    'xiangshi_dianqiao.xz1',
                    'xiangshi_dianqiao.xz2',
                    'xiangshi_dianqiao.pd1',
                    'xiangshi_dianqiao.pd2'

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

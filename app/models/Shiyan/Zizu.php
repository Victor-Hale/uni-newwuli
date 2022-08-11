<?php

namespace App\models\Shiyan;

use Illuminate\Database\Eloquent\Model;

class Zizu extends Model
{
    protected $table = "zhiliu_dianqiao";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    /**
     * 自主式直流电桥测量电阻相关数据录入
     * @param $ra1
     * @param $ra2
     * @param $ra3
     * @param $rx_a1
     * @param $rx_a2
     * @param $rx_a3
     * @param $rx
     * @param $rb1
     * @param $rb2
     * @param $rb3
     * @param $ra_change1
     * @param $ra_change2
     * @param $ra_change3
     * @param $s1
     * @param $s2
     * @param $s3
     * @param $s
     * @param $rc1
     * @param $rc2
     * @param $rc3
     * @param $rx_b1
     * @param $rx_b2
     * @param $rx_b3
     * @param $rxx
     * @param $rd1
     * @param $rd2
     * @param $rd3
     * @param $rb_change1
     * @param $rb_change2
     * @param $rb_change3
     * @param $ss1
     * @param $ss2
     * @param $ss3
     * @param $ss
     * @param $xz1
     * @param $xz2
     * @param $pd1
     * @param $pd2
     * @param $student_id
     * @return false
     */
    public static function establish(
        $ra1,
        $ra2,
        $ra3,
        $rx_a1,
        $rx_a2,
        $rx_a3,
        $rx,
        $rb1,
        $rb2,
        $rb3,
        $ra_change1,
        $ra_change2,
        $ra_change3,
        $s1,
        $s2,
        $s3,
        $s,
        $rc1,
        $rc2,
        $rc3,
        $rx_b1,
        $rx_b2,
        $rx_b3,
        $rxx,
        $rd1,
        $rd2,
        $rd3,
        $rb_change1,
        $rb_change2,
        $rb_change3,
        $ss1,
        $ss2,
        $ss3,
        $ss,
        $xz1,
        $xz2,
        $pd1,
        $pd2,
        $student_id
    ){
        try{

            $res = self::create(
                [
                    'ra1' => $ra1,
                    'ra2' => $ra2,
                    'ra3' => $ra3,
                    'rx' => $rx,
                    'rx_a1' => $rx_a1,
                    'rx_a2' => $rx_a2,
                    'rx_a3' => $rx_a3,
                    'rb1' => $rb1,
                    'rb2' => $rb2,
                    'rb3' => $rb3,
                    'ra_change1' => $ra_change1,
                    'ra_change2' =>  $ra_change2,
                    'ra_change3' =>  $ra_change3,
                    's1' =>  $s1,
                    's2' => $s2,
                    's3' => $s3,
                    's' => $s,
                    'rc1' => $rc1,
                    'rc2' => $rc2,
                    'rc3' => $rc3,
                    'rx_b1' => $rx_b1,
                    'rx_b2' => $rx_b2,
                    'rx_b3' => $rx_b3,
                    'rxx' => $rxx,
                    'rd1' => $rd1,
                    'rd2' => $rd2,
                    'rd3' => $rd3,
                    'rb_change1' => $rb_change1,
                    'rb_change2' => $rb_change2,
                    'rb_change3' => $rb_change3,
                    'ss1' => $ss1,
                    'ss2' => $ss2,
                    'ss3' => $ss3,
                    'ss' => $ss,
                    'xz1' => $xz1,
                    'xz2' => $xz2,
                    'pd1' => $pd1,
                    'pd2' => $pd2,
                    'student_id' => $student_id,
                    'state_zl_dianqiao' => 1
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
     * 自主式直流电桥测量电阻状态改变
     * @anthor Wzh
     * @param $student_id
     * @return false
     */
    public static function StateChange($student_id){
        try {
            $res =self::where('student_id',$student_id)->update([
                'state_zl_dianqiao' => 2
            ]);
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('添加错误', [$e->getMessage()]);
            return false;
        }
    }

    public static function grade($student_id, $grade,$grade_xp){
        try {
            $res = self::where('student_id', '=', $student_id)->update([
                'grade' => $grade,
                'grade_xp' => $grade_xp,
                'state_zl_dianqiao'=>3
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
     * 自主式直流电桥测量电阻数据展示获取
     * @anthor Wzh
     * @param $student_id
     * @return false
     */
    public static function show($student_id)
    {
        try {
            $res = self::join('student', 'student.student_num','zhiliu_dianqiao.student_id')
                ->where('student.student_num', '=', $student_id)
                ->select(
                    'student.student_name',
                    'student.student_level',
                    'student.student_spec',
                    'student.student_year',
                    'student.student_class',
                    'student.student_num',
                    'student.student_teacher',
                    'zhiliu_dianqiao.created_at',
                    'zhiliu_dianqiao.updated_at',
                    'zhiliu_dianqiao.grade',
                    'zhiliu_dianqiao.grade_xp',

                    'zhiliu_dianqiao.ra1',
                    'zhiliu_dianqiao.ra2',
                    'zhiliu_dianqiao.ra3',
                    'zhiliu_dianqiao.rx_a1',
                    'zhiliu_dianqiao.rx_a2',
                    'zhiliu_dianqiao.rx_a3',
                    'zhiliu_dianqiao.rx',
                    'zhiliu_dianqiao.rb1',
                    'zhiliu_dianqiao.rb2',
                    'zhiliu_dianqiao.rb3',
                    'zhiliu_dianqiao.ra_change1',
                    'zhiliu_dianqiao.ra_change2',
                    'zhiliu_dianqiao.ra_change3',
                    'zhiliu_dianqiao.s1',
                    'zhiliu_dianqiao.s2',
                    'zhiliu_dianqiao.s3',
                    'zhiliu_dianqiao.s',
                    'zhiliu_dianqiao.rc1',
                    'zhiliu_dianqiao.rc2',
                    'zhiliu_dianqiao.rc3',
                    'zhiliu_dianqiao.rx_b1',
                    'zhiliu_dianqiao.rx_b2',
                    'zhiliu_dianqiao.rx_b3',
                    'zhiliu_dianqiao.rxx',
                    'zhiliu_dianqiao.rd1',
                    'zhiliu_dianqiao.rd2',
                    'zhiliu_dianqiao.rd3',
                    'zhiliu_dianqiao.rb_change1',
                    'zhiliu_dianqiao.rb_change2',
                    'zhiliu_dianqiao.rb_change3',
                    'zhiliu_dianqiao.ss1',
                    'zhiliu_dianqiao.ss2',
                    'zhiliu_dianqiao.ss3',
                    'zhiliu_dianqiao.ss',
                    'zhiliu_dianqiao.xz1',
                    'zhiliu_dianqiao.xz2',
                    'zhiliu_dianqiao.pd1',
                    'zhiliu_dianqiao.pd2'

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

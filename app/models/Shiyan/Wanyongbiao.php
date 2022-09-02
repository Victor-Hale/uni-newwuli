<?php

namespace App\models\Shiyan;

use Illuminate\Database\Eloquent\Model;

class Wanyongbiao extends Model
{
    protected $table = "wangyongbiao";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    /**
     * 万用表的改装设计数据存入
     * @anthor Wzh
     * @param $one_ig
     * @param $one_rg
     * @param $one_e
     * @param $two_one_rg
     * @param $two_one_ig
     * @param $two_one_im
     * @param $two_one_r1
     * @param $two_two_rn
     * @param $two_two_im
     * @param $two_two_vm
     * @param $two_two_im2
     * @param $two_two_rn2
     * @param $two_two_r2
     * @param $two_thr_e
     * @param $two_thr_im2
     * @param $two_thr_rn
     * @param $two_thr_r42
     * @param $two_four_e
     * @param $two_four_r4
     * @param $two_four_rn4
     * @param $two_four_r3
     * @param $thr_one_r1
     * @param $thr_one_ix
     * @param $thr_one_ds
     * @param $thr_two_r2
     * @param $thr_two_vx
     * @param $thr_two_ds
     * @param $thr_thr_r4
     * @param $thr_thr_r3
     * @param $thr_thr_rx
     * @param $thr_thr_ds
     * @param $four_one_r1
     * @param $four_one_r2
     * @param $four_one_r3
     * @param $four_one_r4
     * @param $four_one_ix
     * @param $four_two_1
     * @param $four_two_2
     * @param $four_two_3
     * @param $four_two_4
     * @param $four_two_5
     * @param $student_id
     * @return false
     */
    public static function establish(
        $one_ig,
        $one_rg,
        $one_e,

        $two_one_rg,
        $two_one_ig,
        $two_one_im,
        $two_one_r1,
        $two_one_lx,
        $two_one_rn,
        $two_one_im2,

        $two_two_vm,
        $two_two_im,
        $two_two_rn,
        $two_two_r2,
        $two_two_vx,

        $two_thr_e,
        $two_thr_im,
        $two_thr_rn,
        $two_thr_r3,

        $two_four_e,
        $two_four_i3,
        $two_four_rx,
        $two_four_r3rn,
        $two_four_r4,
        $two_four_rx2,

        $thir_one_one,
        $thir_one_two,
        $thir_one_three,
        $thir_one_four,
        $thir_two_one,
        $thir_two_two,


        $student_id

    ) {
       try {
            $res = self::create(
                [
                    'one_ig' => $one_ig,
                    'one_rg' => $one_rg,
                    'one_e' => $one_e,

                    'two_one_rg' => $two_one_rg,
                    'two_one_ig' => $two_one_ig,
                    'two_one_im' => $two_one_im,
                    'two_one_r1' => $two_one_r1,
                    'two_one_lx' => $two_one_lx,
                    'two_one_rn' => $two_one_rn,
                    'two_one_im2' => $two_one_im2,

                    'two_two_vm' => $two_two_vm,
                    'two_two_im' => $two_two_im,
                    'two_two_rn' => $two_two_rn,
                    'two_two_r2' => $two_two_r2,
                    'two_two_vx' => $two_two_vx,

                    'two_thr_e' => $two_thr_e,
                    'two_thr_im' => $two_thr_im,
                    'two_thr_rn' => $two_thr_rn,
                    'two_thr_r3' => $two_thr_r3,

                    'two_four_e' => $two_four_e,
                    'two_four_i3' => $two_four_i3,
                    'two_four_rx' => $two_four_rx,
                    'two_four_r3rn' => $two_four_r3rn,
                    'two_four_r4' => $two_four_r4,
                    'two_four_rx2' => $two_four_rx2,


                    'thir_one_one' => $thir_one_one,
                    'thir_one_two' => $thir_one_two,
                    'thir_one_three' => $thir_one_three,
                    'thir_one_four' => $thir_one_four,
                    'thir_two_one' => $thir_two_one,
                    'thir_two_two' => $thir_two_two,

                    'student_id' => $student_id,
                    'state_wangyongbiao' => 1
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
     * 万用表的改装设计改变状态
     * @anthor Wzh
     * @param $student_id
     * @return false
     */
    public static function StateChange($student_id){
        try {
            $res =self::where('student_id',$student_id)->update([
                'state_wangyongbiao' => 2
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
     * 万用表的改装设计成绩的录入
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
                'state_wangyongbiao'=>3
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
     * 万用表的改装设计数据展示获取
     * @anthor Wzh
     * @param $student_id
     * @return false
     */
    public static function show($student_id)
    {
        try {
            $res = self::join('student', 'student.student_num','wangyongbiao.student_id')
                ->where('student.student_num', '=', $student_id)
                ->select(
                    'student.student_name',
                    'student.student_level',
                    'student.student_spec',
                    'student.student_year',
                    'student.student_class',
                    'student.student_num',
                    'student.student_teacher',
                    'wangyongbiao.created_at',
                    'wangyongbiao.updated_at',
                    'wangyongbiao.grade',
                    'wangyongbiao.grade_xp',

                    'one_ig',
                    'one_rg',
                    'one_e',

                    'two_one_rg',
                    'two_one_ig',
                    'two_one_im',
                    'two_one_r1',
                    'two_one_lx',
                    'two_one_rn',
                    'two_one_im2',



                    'two_two_vm',
                    'two_two_im',
                    'two_two_rn',
                    'two_two_r2',
                    'two_two_vx',

                    'two_thr_e',
                    'two_thr_im',
                    'two_thr_rn',
                    'two_thr_r3',

                    'two_four_e',
                    'two_four_i3',
                    'two_four_rx',
                    'two_four_r3rn',
                    'two_four_r4',
                    'two_four_rx2',




                    'thir_one_one',
                    'thir_one_two',
                    'thir_one_three',
                    'thir_one_four',
                    'thir_two_one',
                    'thir_two_two'

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

<?php

namespace App\Http\Controllers\Shiyan;

use App\Http\Controllers\Controller;
use App\models\Shiyan\Wanyongbiao;
use Illuminate\Http\Request;
use Mpdf;
class WanyongbiaoController extends Controller
{
    /**
     * 万用表的改装设计实验相关数据存入
     * @anthor Wzh
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function WzhWanyongbiao(Request $request){
        $student_id=auth('api')->user()->student_id;

        $one_ig = sprintf("%.1f",$request['one_ig']);
        $one_rg = sprintf("%.1f",$request['one_rg']);
        $one_e = sprintf("%.1f",$request['one_e']);

        $two_one_rg = sprintf("%.1f",$request['two_one_rg']);
        $two_one_ig = sprintf("%.1f",$request['two_one_ig']);
        $two_one_im = sprintf("%.1f",$request['two_one_im']);
        $two_one_r1 = sprintf("%.1f",$request['two_one_r1']);
        $two_one_lx = sprintf("%.1f",$request['two_one_lx']);
        $two_one_rn = sprintf("%.1f",$request['two_one_rn']);
        $two_one_im2 = sprintf("%.1f",$request['two_one_im2']);

        $two_two_vm = sprintf("%.1f",$request['two_two_vm']);
        $two_two_im = sprintf("%.2f",$request['two_two_im']);
        $two_two_rn = sprintf("%.1f",$request['two_two_rn']);
        $two_two_r2 = sprintf("%.1f",$request['two_two_r2']);
        $two_two_vx = sprintf("%.1f",$request['two_two_vx']);

        $two_thr_e = sprintf("%.1f",$request['two_thr_e']);
        $two_thr_im = sprintf("%.2f",$request['two_thr_im']);
        $two_thr_rn = sprintf("%.1f",$request['two_thr_rn']);
        $two_thr_r3 = sprintf("%.1f",$request['two_thr_r3']);



        $two_four_e = sprintf("%.1f",$request['two_four_e']);
        $two_four_i3 = sprintf("%.3f",$request['two_four_i3']);
        $two_four_rx = sprintf("%.1f",$request['two_four_rx']);
        $two_four_r3rn = sprintf("%.1f",$request['two_four_r3rn']);
        $two_four_r4 = sprintf("%.1f",$request['two_four_r4']);
        $two_four_rx2 = sprintf("%.1f",$request['two_four_rx2']);


        $thir_one_one = $request['thir_one_one'];
        $thir_one_two = $request['thir_one_two'];
        $thir_one_three = $request['thir_one_three'];
        $thir_one_four = $request['thir_one_four'];
        $thir_two_one = $request['thir_two_one'];
        $thir_two_two = $request['thir_two_two'];






        $res1 = Wanyongbiao::establish(
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

        );

        $grade = 0;
        $grade_xp = 0;

        Wanyongbiao::statechange($student_id);
        if ($one_ig ==0.5) {
            $grade += 3;
        }
        if ($one_rg == 560.0) {
            $grade += 3;
        }
        if ($one_e == 1.5) {
            $grade += 3;
        }

        if ($two_one_rg == 560.0) {
            $grade += 3;
        }
        if ($two_one_ig == 0.5) {
            $grade += 3;
        }
        if ($two_one_im == 10.0) {
            $grade += 3;
        }

        if ($two_one_r1 == 29.5) {
            $grade += 3;
        }
        if ($two_one_lx>= 1.0&&$two_one_lx<=9.0) {
            $grade += 3;
        }
        if ($two_one_rn ==28.0) {
            $grade += 3;
        }

        if ($two_one_im2 == 10) {
            $grade += 3;
        }
        if ($two_two_vm == 5.0) {
            $grade += 3;
        }


        if ($two_two_im == 0.01) {
            $grade += 3;
        }

        if ($two_two_rn == 28) {
            $grade += 3;
        }
        if ($two_two_r2 == 472.0) {
            $grade += 3;
        }
        if ($two_two_vx <= 4.5&&$two_two_vx>=1.0) {
            $grade += 3;
        }
        if ($two_thr_e == 1.5) {
            $grade += 3;
        }

        if ($two_thr_im == 0.01) {
            $grade += 3;
        }
        if ($two_thr_rn == 28.0) {
            $grade += 3;
        }
        if ($two_thr_r3 == 122.0) {
            $grade += 3;
        }
        if ($two_four_e == 1.5) {
            $grade += 3;
        }

        if ($two_four_i3 == 0.003) {
            $grade += 3;
        }
        if ($two_four_rx == 100.0) {//
            $grade += 3;
        }

        if ($two_four_r3rn == 150.0) {
            $grade += 3;
        }
        if ($two_four_r4 == 60.0) {
            $grade += 3;
        }
        if ($two_four_rx2 <=250.0&&$two_four_rx2>=50.0) {//
            $grade += 3;
        }

        if ($thir_one_one == 'B') {
            $grade_xp += 5;
        }
        if ($thir_one_two =='C') {
            $grade_xp += 5;
        }
        if ($thir_one_three =='D') {//
            $grade_xp += 5;
        }
        if ($thir_one_four =='A') {
            $grade_xp += 5;
        }


        if ($thir_two_one == 'T') {
            $grade_xp += 2.5;
        }
        if ($thir_two_two == 'T') {
            $grade_xp += 2.5;
        }



        $grade = $grade + $grade_xp;



        $res2 = Wanyongbiao::grade($student_id, $grade,$grade_xp);


        $res['res1'] = $res1;
        $res['res2'] = $res2;

        return $res1 ?
            json_success('操作成功!', $res1, 200) :
            json_fail('操作失败!', null, 100);
    }

    /**
     * 万用表的改装设计 导出pdf
     * @anthor Wzh
     * @param Request $request
     * @throws Mpdf\MpdfException
     */
    public function pdf(Request $request)
    {

        $student_id = $request['student_id'];

        $student_a = Wanyongbiao::show($student_id);

        $student_b = json_decode($student_a);

        $student_name = $student_b[0]->student_name;
        $student_level = $student_b[0]->student_level;
        $student_spec = $student_b[0]->student_spec;
        $student_year = $student_b[0]->student_year;
        $student_class = $student_b[0]->student_class;
        $student_num = $student_b[0]->student_num;
        $student_teacher = $student_b[0]->student_teacher;
        $created_at = $student_b[0]->created_at;
        $updated_at = $student_b[0]->updated_at;
        $grade = $student_b[0]->grade;
        $grade_xp = $student_b[0]->grade_xp;

        $one_ig		 = $student_b[0]->one_ig;
        $one_rg		 = $student_b[0]->one_rg;
        $one_e		 = $student_b[0]->one_e;

        $two_one_rg	 = $student_b[0]->two_one_rg;
        $two_one_ig	 = $student_b[0]->two_one_ig;
        $two_one_im	 = $student_b[0]->two_one_im;
        $two_one_r1	 = $student_b[0]->two_one_r1;
        $two_one_lx	 = $student_b[0]->two_one_lx;
        $two_one_rn = $student_b[0]->two_one_rn;
        $two_one_im2 = $student_b[0]->two_one_im2;


        $two_two_vm = $student_b[0]->two_two_vm;
        $two_two_im = $student_b[0]->two_two_im;
        $two_two_rn	 = $student_b[0]->two_two_rn;;
        $two_two_r2 = $student_b[0]->two_two_r2;
        $two_two_vx	 = $student_b[0]->two_two_vx;

        $two_thr_e = $student_b[0]->two_thr_e;
        $two_thr_im	 = $student_b[0]->two_thr_im;
        $two_thr_rn = $student_b[0]->two_thr_rn;
        $two_thr_r3 = $student_b[0]->two_thr_r3;

        $two_four_e = $student_b[0]->two_four_e;
        $two_four_i3 = $student_b[0]->two_four_i3;
        $two_four_rx	 = $student_b[0]->two_four_rx;
        $two_four_r3rn	 = $student_b[0]->two_four_r3rn;
        $two_four_r4	 = $student_b[0]->two_four_r4;
        $two_four_rx2	 = $student_b[0]->two_four_rx2;

        $thir_one_one	 = $student_b[0]->thir_one_one;
        $thir_one_two	 = $student_b[0]->thir_one_two;
        $thir_one_three	 = $student_b[0]->thir_one_three;
        $thir_one_four	 = $student_b[0]->thir_one_four;
        $thr_thr_ds	 = $student_b[0]->thr_thr_ds;
        $thir_two_one = $student_b[0]->thir_two_one;
        $thir_two_two = $student_b[0]->thir_two_two;





        $res = view('wanyongbiao', [
            'name' => $student_name,
            'student_level' => $student_level,
            'student_spec' => $student_spec,
            'student_year' => $student_year,
            'student_teacher' => $student_teacher,
            'student_num' => $student_num,
            'student_class' => $student_class,
            'grade' => $grade,
            'grade_xp' => $grade_xp,
            'grade_tk' => ($grade - $grade_xp),



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
           'created_at' => $created_at,
            'updated_at' => $updated_at,

        ]);

        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);


        //$mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-万用表的改装设计'.".pdf", "D");

        exit;
    }


}

<?php

namespace App\Http\Controllers\Shiyan;

use App\Http\Controllers\Controller;
use App\models\Shiyan\Xiangshi;
use Illuminate\Http\Request;
use Mpdf;
class XiangshiController extends Controller
{
    /**
     * 箱式直流电桥测量电阻相关数据录入
     * @anthor Wzh
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function WzhXiangshi(\App\Http\Requests\Xiangshi $request){
        $student_id=auth('api')->user()->student_id;
        $ra1 = $request['ra1'];
        $ra2 = $request['ra2'];
        $ra3 = $request['ra3'];
        $rx = $request['rx'];
        $rx1 = $request['rx1'];
        $rx2 = $request['rx2'];
        $rx3 = $request['rx3'];
        $rb1 = $request['rb1'];
        $rb2 = $request['rb2'];
        $rb3 = $request['rb3'];
        $rchange1a = $request['rchange1a'];
        $rchange2a = $request['rchange2a'];
        $rchange3a = $request['rchange3a'];
        $s1 = $request['s1'];
        $s2 = $request['s2'];
        $s3 = $request['s3'];
        $s = $request['s'];
        $rc1 = $request['rc1'];
        $rc2 = $request['rc2'];
        $rc3 = $request['rc3'];
        $rwait1 = $request['rwait1'];
        $rwait2 = $request['rwait2'];
        $rwait3 = $request['rwait3'];

        $xz1 = $request['xz1'];
        $xz2 = $request['xz2'];
        $pd1 = $request['pd1'];
        $pd2 = $request['pd2'];




        $res1 = Xiangshi::establish(
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
        );
        $grade_xp = 0;//选择判断题分
        $grade = 0;

        Xiangshi::statechange($student_id);
        if(1500 <= $ra1 && $ra1 <= 2500 && sprintf("%.0f",$ra1) == $ra1){
            $grade += 3;

        }
        if(1500 <= $ra2 && $ra2 <= 2500 && sprintf("%.0f",$ra2) == $ra2){
            $grade += 3;

        }
        if(1500 <= $ra3 && $ra3 <= 2500 && sprintf("%.0f",$ra3) == $ra3){
            $grade += 3;

        }
        if(150 <= $rx1 && $rx1 <= 250  && $rx1 == sprintf("%.1f",$ra1*0.1)){
            $grade += 3;

        }
        if(0 < $rx2 && $rx2 < 999 && $rx2 == sprintf("%.1f",$ra2*0.1)){
            $grade += 3;
        }
        if(0 < $rx3 && $rx3 < 999 &&   $rx3 == sprintf("%.1f",$ra3*0.1)){
            $grade += 3;
        }


        if($rx == ($rx1+$rx2+$rx3)/3  &&  $rx == sprintf("%.1f",$rx)){
            $grade += 3;
        }

        if(1500 <= $rb1 && $rb1 <= 2500 && sprintf("%.0f",$rb1) == $rb1){
            $grade += 3;
        }
        if(1500 <= $rb2 && $rb2 <= 2500 && sprintf("%.0f",$rb2) == $rb2){
            $grade += 3;
        }
        if(1500 <= $rb3 && $rb3 <= 2500 && sprintf("%.0f",$rb3) == $rb3){
            $grade += 3;
        }


        if(0 <= $rchange1a && $rchange1a <=30 && (sprintf("%.0f",$rchange1a) == $rchange1a || sprintf("%.1f",$rchange1a) == $rchange1a )){
            $grade += 3;
        }

        if(0 <= $rchange2a && $rchange2a <=30 && $rchange2a >$rchange1a  && (sprintf("%.0f",$rchange2a) == $rchange2a || sprintf("%.1f",$rchange2a) == $rchange2a )){
            $grade += 3;
        }

        if(0 <= $rchange3a && $rchange3a <=30 && $rchange3a > $rchange1a && $rchange3a >$rchange2a && (sprintf("%.0f",$rchange3a) == $rchange3a || sprintf("%.1f",$rchange3a) == $rchange3a )){
            $grade += 3;
        }


        if($s1 == sprintf("%.1f",($rb1 * $rchange1a))){
            $grade += 3;
        }

        if($s2 == sprintf("%.1f",($rchange2a * $rb2/2))){
            $grade += 3;
        }
        if($s3 == sprintf("%.1f",($rchange3a * $rb3/3))){
            $grade += 3;
        }

        if($s == sprintf("%.1f",($s1+$s2+$s3)/3)){
            $grade += 3;
        }


        if(1500 <= $rc1 && $rc1 <= 2500 && sprintf("%.0f",$rc1) == $rc1){
            $grade += 3;
        }

        if(1500 <= $rc2 && $rc2 <= 2500 && sprintf("%.0f",$rc2) == $rc2 ){
            $grade += 3;
        }
        if(1500 <= $rc3 && $rc3 <= 2500 && sprintf("%.0f",$rc3) == $rc3){
            $grade += 3;
        }
        if(1500 <= $rwait1 && $rwait1 <= 2500 && $rwait1 == $rc1 ){
            $grade += 3;
        }

        if(15000 <= $rwait2 && $rwait2 <= 25000 && $rwait2 == $rc2*10){
            $grade += 3;
        }

        if(150 <= $rwait3 && $rwait3 <= 250 && (int)$rwait3 ==(int) ($rc3*0.1)){
            $grade += 3;
        }


        if ($xz1 == 'D'){
            $grade_xp += 10;
        }
        if ($xz2 == 'A'){
            $grade_xp += 10;
        }
        if ($pd1 == '0'){
            $grade_xp += 5.5;
        }
        if ($pd2 == '0'){
            $grade_xp += 5.5;
        }

        $grade = $grade + $grade_xp;

        $res2 = Xiangshi::grade($student_id, $grade,$grade_xp);

        $res['res1'] = $res1;
        $res['res2'] = $res2;

        return $res ?
            json_success('操作成功',$res1, 200) :
            json_fail('操作失败',null,100);

    }

    /**
     * 箱式直流电桥测量电阻pdf导出
     * @anthor Wzh
     * @param Request $request
     * @throws Mpdf\MpdfException
     */
    public function pdf(Request $request)
    {

        $student_id = $request['student_id'];


        $student_a = Xiangshi::show($student_id);

        $student_b = json_decode($student_a);

        $ra1 = $student_b[0] -> ra1;
        $ra2 = $student_b[0] -> ra2;
        $ra3 = $student_b[0] -> ra3;
        $rx = $student_b[0] -> rx;
        $rx1 = $student_b[0] -> rx1;
        $rx2 = $student_b[0] -> rx2;
        $rx3 = $student_b[0] -> rx3;
        $rb1 = $student_b[0] -> rb1;
        $rb2 = $student_b[0] -> rb2;
        $rb3 = $student_b[0] -> rb3;
        $rchange1a = $student_b[0] -> rchange1a;
        $rchange2a = $student_b[0] -> rchange2a;
        $rchange3a = $student_b[0] ->  rchange3a;
        $s1 = $student_b[0] -> s1;
        $s2 = $student_b[0] -> s2;
        $s3 = $student_b[0] -> s3;
        $s = $student_b[0] -> s;
        $rc1 = $student_b[0] -> rc1;
        $rc2 = $student_b[0] -> rc2;
        $rc3 = $student_b[0] -> rc3;
        $rwait1 = $student_b[0] -> rwait1;
        $rwait2 = $student_b[0] -> rwait2;
        $rwait3 = $student_b[0] -> rwait3;

        // $ss = $student_b[0] -> ss;
        $xz1 = $student_b[0] -> xz1;
        $xz2 = $student_b[0] -> xz2;
        $pd1 = $student_b[0] -> pd1;
        $pd2 = $student_b[0] -> pd2;

        if($pd1==1){
            $pd1='对';
        }else{
            $pd1='错';
        }
        if($pd2==1){
            $pd2='对';
        }else{
            $pd2='错';
        }


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




        $res = view('innew', [
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
            'created_at' => $created_at,
            'updated_at' => $updated_at,

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
            'rchange2a' => $rchange2a,
            'rchange3a' => $rchange3a,
            's1' => $s1,
            's2' => $s2,
            's3' => $s3,
            's' => $s,
            'rc1' => $rc1,
            'rc2' => $rc2,
            'rc3' => $rc3,
            'rwait1' => $rwait1,
            'rwait2' => $rwait2,
            'rwait3' => $rwait3,

            // 'ss' => $ss,
            'xz1' => $xz1,
            'xz2' => $xz2,
            'pd1' => $pd1,
            'pd2' => $pd2

        ]);



        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);


        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-箱式直流电桥测量电阻'.".pdf", "D");

        exit;
    }
}

<?php

namespace App\Http\Controllers\Shiyan;

use App\Http\Controllers\Controller;
use App\models\Shiyan\Zizu;
use Illuminate\Http\Request;
use Mpdf;

class ZizuController extends Controller
{
    /**
     * 自主式直流电桥测量电阻相关数据录入
     * @anthor Wzh
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function WzhZizu(\App\Http\Requests\Zizu $request){
        $student_id=auth('api')->user()->student_id;
        $ra1 = $request['ra1'];
        $ra2 = $request['ra2'];
        $ra3 = $request['ra3'];
        $rx_a1 = $request['rx_a1'];
        $rx_a2 = $request['rx_a2'];
        $rx_a3 = $request['rx_a3'];
        $rx = $request['rx'];
        $rb1 = $request['rb1'];
        $rb2 = $request['rb2'];
        $rb3 = $request['rb3'];
        $ra_change1 = $request['ra_change1'];
        $ra_change2 = $request['ra_change2'];
        $ra_change3 = $request['ra_change3'];
        $s1 = $request['s1'];
        $s2 = $request['s2'];
        $s3 = $request['s3'];
        $s = $request['s'];
        $rc1 = $request['rc1'];
        $rc2 = $request['rc2'];
        $rc3 = $request['rc3'];
        $rx_b1 = $request['rx_b1'];
        $rx_b2 = $request['rx_b2'];
        $rx_b3 = $request['rx_b3'];
        $rxx = $request['rxx'];
        $rd1 = $request['rd1'];
        $rd2 = $request['rd2'];
        $rd3 = $request['rd3'];
        $rb_change1 = $request['rb_change1'];
        $rb_change2 = $request['rb_change2'];
        $rb_change3 = $request['rb_change3'];
        $ss1 = $request['ss1'];
        $ss2 = $request['ss2'];
        $ss3 = $request['ss3'];
        $ss = $request['ss'];
        $xz1 = $request['xz1'];
        $xz2 = $request['xz2'];
        $pd1 = $request['pd1'];
        $pd2 = $request['pd2'];
        $grade_xp = $request['grade_xp'];//选择判断题分


        $res1 = Zizu::establish(
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
        );
        Zizu::statechange($student_id);
        $grade = 0;

        if(100 < $ra1 && $ra1 < 999 && strlen(substr(strrchr($ra1,"."),1)) == 1){
            $grade += 2;

        }


        if(100 < $ra2 && $ra2 < 999 && strlen(substr(strrchr($ra2,"."),1)) == 1){
            $grade += 2;

        }

        if(100 < $ra3 && $ra3 < 999&& strlen(substr(strrchr($ra3,"."),1)) == 1){
            $grade += 2;

        }

        if(100 < $rx_a1 && $rx_a1 < 999&& $rx_a1==$ra1 && strlen(substr(strrchr($rx_a1,"."),1)) == 1){
            $grade += 2;
        }

        if(100 < $rx_a2 && $rx_a2 < 999 &&$rx_a2==$ra2 && strlen(substr(strrchr($rx_a2,"."),1)) == 1){
            $grade += 2;
        }

        if(100 < $rx_a3 && $rx_a3 < 999 && $rx_a3==$ra3 && strlen(substr(strrchr($rx_a3,"."),1)) == 1){
            $grade += 2;
        }

        if(100 < $rx && $rx< 999 && $rx==($rx_a1+$rx_a2+$rx_a3)/3 && strlen(substr(strrchr($rx,"."),1)) == 1){
            $grade += 2;
        }


        if($rb1 == $ra1&&100 < $rb1 && $rb1< 999  && $rx_a3==$ra3 && strlen(substr(strrchr($rb1,"."),1)) == 1){
            $grade += 2;
        }

        if($rb2 == $ra2&&100 < $rb2 && $rb2< 999  && $rx_a3==$ra3 && strlen(substr(strrchr($rb2,"."),1)) == 1 ){
            $grade += 2;
        }

        if($rb3 == $ra3&& 100 < $rb3 && $rb3< 999  && $rx_a3==$ra3 && strlen(substr(strrchr($rb3,"."),1)) == 1){
            $grade += 2;
        }

        if($ra_change1 <= 99 && $ra_change1 >= 0 && $ra_change1 <$ra_change2 && $ra_change2 < $ra_change3&& strlen(substr(strrchr($ra_change1,"."),1)) == 1){
            $grade += 2;
        }

        if($ra_change2 <= 99 && $ra_change2 >= 0 && $ra_change1 <$ra_change2 && $ra_change2 < $ra_change3&& strlen(substr(strrchr($ra_change2,"."),1)) == 1){
            $grade += 2;
        }

        if($ra_change3 <= 99 && $ra_change3  >=0 && $ra_change1 <$ra_change2 && $ra_change2 < $ra_change3&& strlen(substr(strrchr($ra_change3,"."),1)) == 1){
            $grade += 2;
        }





        if($s1 == sprintf("%.1f",(1*$rb1/$ra_change1)) && $s1 < 250 && $s1 > 1 && strlen(substr(strrchr($s1,"."),1)) == 1){
            $grade += 2;
        }


        if($s2 == sprintf("%.1f",(2*$rb2/$ra_change2)) && $s2 < 250 && $s2 > 1 && strlen(substr(strrchr($s2,"."),1)) == 1){
            $grade += 2;
        }

        if($s3 == sprintf("%.1f",(3*$rb3/$ra_change3)) && $s3 < 250 && $s3 > 1 && strlen(substr(strrchr($s3,"."),1)) == 1){
            $grade += 2;
        }

        if($s === sprintf("%.1f",($s1+$s2+$s3)/3) && $s < 250 && $s > 1 && strlen(substr(strrchr($s,"."),1)) == 1){
            $grade += 2;
        }



        if($rc1 > 100 && $rc1 < 999&& strlen(substr(strrchr($rc1,"."),1)) == 1){
            $grade += 2;
        }

        if($rc2 > 100 && $rc2 < 999&& strlen(substr(strrchr($rc2,"."),1)) == 1){
            $grade += 2;
        }

        if($rc3 > 100 && $rc3 < 999&& strlen(substr(strrchr($rc3,"."),1)) == 1){
            $grade += 2;
        }

        if($rx_b1 == 1/2*$rc1 &&$rx_b1 > 100 && $rx_b1 < 999 && strlen(substr(strrchr($rx_b1,"."),1)) == 1){
            $grade += 2;
        }

        if($rx_b2 == 2*$rc2 &&$rx_b2 > 100 && $rx_b2 < 999 && strlen(substr(strrchr($rx_b2,"."),1)) == 1){
            $grade += 2;
        }

        if($rx_b3 == 4*$rc3 &&$rx_b2 > 100 && $rx_b2 < 999 && strlen(substr(strrchr($rx_b3,"."),1)) == 1){
            $grade += 2;
        }


        if($rxx == sprintf("%.1f",($rx_b1+$rx_b2+$rx_b3)/3) && $rxx > 100 && $rxx < 999 && strlen(substr(strrchr($rxx,"."),1)) == 1){
            $grade += 2;
        }


        if($rd1 == $rc1&& $rd1 > 100 && $rd1 < 999 && strlen(substr(strrchr($rd1,"."),1)) == 1){
            $grade += 2;
        }

        if($rd2 == $rc2&& $rd2 > 100 && $rd2 < 999 && strlen(substr(strrchr($rd2,"."),1)) == 1){
            $grade += 2;
        }

        if($rd3 == $rc3&& $rd3 > 100 && $rd3 < 999 && strlen(substr(strrchr($rd3,"."),1)) == 1){
            $grade += 2;
        }


        if($rb_change1 < 99&&$rb_change1 > 0 && $rb_change1 < $rd1 && strlen(substr(strrchr($rb_change1,"."),1)) == 1){
            $grade += 2;
        }

        if($rb_change2 < 99&&$rb_change2 > 0 && $rb_change2 < $rd2 && strlen(substr(strrchr($rb_change2,"."),1)) == 1){
            $grade += 2;
        }

        if($rb_change3 < 99&&$rb_change3 > 0 && $rb_change3 < $rd3 && strlen(substr(strrchr($rb_change3,"."),1)) == 1){
            $grade += 2;
        }

        if($ss1 == sprintf("%.1f",(1*$rd1/$rb_change1)) && $ss1 < 250 && $ss1 > 1 && strlen(substr(strrchr($ss1,"."),1)) == 1 ){
            $grade += 2;
        }

        if($ss2 == sprintf("%.1f",(1*$rd2/$rb_change2)) && $ss2 < 250 && $ss2 > 1 && strlen(substr(strrchr($ss2,"."),1)) == 1){
            $grade += 2;
        }

        if($ss3 == sprintf("%.1f",(1*$rd3/$rb_change3)) && $ss3 < 250 && $ss3 > 1 && strlen(substr(strrchr($ss3,"."),1)) == 1){
            $grade += 2;
        }

        if( $ss ==sprintf("%.1f",($ss1 + $ss2 + $ss3)/3) && $ss < 250 &&$ss > 1 && strlen(substr(strrchr($ss,"."),1)) == 1){
            $grade += 2;
        }


        $grade = $grade + $grade_xp;



        $res2 = Zizu::grade($student_id, $grade,$grade_xp);

        $res['res1'] = $res1;
        $res['res2'] = $res2;

        return $res ?
            json_success('操作成功',$res1, 200) :
            json_fail('操作失败',null,100);
    }

    /**
     * 自主式直流电桥测量电阻pdf导出
     * @anthor Wzh
     * @param Request $request
     * @throws Mpdf\MpdfException
     */
    public function pdf(Request $request)
    {

        $student_id = $request['student_id'];
        $student_a = Zizu::show($student_id);
        $student_b = json_decode($student_a);

        $ra1 = $student_b[0] -> ra1;
        $ra2 = $student_b[0] -> ra2;
        $ra3 = $student_b[0] -> ra3;
        $rx_a1 = $student_b[0] -> rx_a1;
        $rx_a2 = $student_b[0] -> rx_a2;
        $rx_a3 = $student_b[0] -> rx_a3;
        $rx = $student_b[0] -> rx;
        $rb1 = $student_b[0] -> rb1;
        $rb2 = $student_b[0] -> rb2;
        $rb3 = $student_b[0] -> rb3;
        $ra_change1 = $student_b[0] -> ra_change1;
        $ra_change2 = $student_b[0] -> ra_change2;
        $ra_change3 = $student_b[0] ->  ra_change3;
        $s1 = $student_b[0] -> s1;
        $s2 = $student_b[0] -> s2;
        $s3 = $student_b[0] -> s3;
        $s = $student_b[0] -> s;
        $rc1 = $student_b[0] -> rc1;
        $rc2 = $student_b[0] -> rc2;
        $rc3 = $student_b[0] -> rc3;
        $rx_b1 = $student_b[0] -> rx_b1;
        $rx_b2 = $student_b[0] -> rx_b2;
        $rx_b3 = $student_b[0] -> rx_b3;
        $rxx = $student_b[0] -> rxx;
        $rd1 = $student_b[0] -> rd1;
        $rd2 = $student_b[0] -> rd2;
        $rd3 = $student_b[0] -> rd3;
        $rb_change1 = $student_b[0] -> rb_change1;
        $rb_change2 = $student_b[0] -> rb_change2;
        $rb_change3 = $student_b[0] -> rb_change3;
        $ss1 = $student_b[0] -> ss1;
        $ss2 = $student_b[0] -> ss2;
        $ss3 = $student_b[0] -> ss3;
        $ss = $student_b[0] -> ss;
        $xz1 = $student_b[0] -> xz1;
        $xz2 = $student_b[0] -> xz2;
        $pd1 = $student_b[0] -> pd1;
        $pd2 = $student_b[0] -> pd2;




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


        $res = view('wanyongbiao1', [
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
            'rx_a1' => $rx_a1,
            'rx_a2' => $rx_a2,
            'rx_a3' => $rx_a3,
            'rx'    =>$rx,
            'rb1' => $rb1,
            'rb2' => $rb2,
            'rb3' => $rb3,
            'ra_change1' => $ra_change1,
            'ra_change2' => $ra_change2,
            'ra_change3' => $ra_change3,
            's1' => $s1,
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
            'pd2' => $pd2

        ]);



        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);


        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-自主式直流电桥测量电阻'.".pdf", "D");

        exit;
    }

}

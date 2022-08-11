<?php

namespace App\Http\Controllers;

use App\models\CompoleteModel\Pendulum;
use Illuminate\Http\Request;
use Mpdf;

class PendulumController extends Controller
{
    //
    public static function zlcDanbai(Request $request){
        $student_id=auth('api')->user()->student_id;

        $zq=sprintf("%.3f",$request['zq']);
        $dcm1=sprintf("%.3f",$request['dcm1']);
        $dcm2=sprintf("%.3f",$request['dcm2']);
        $dcm3=sprintf("%.3f",$request['dcm3']);
        $dcm4=sprintf("%.3f",$request['dcm4']);
        $dcm5=sprintf("%.3f",$request['dcm5']);
        $dcm6=sprintf("%.3f",$request['dcm6']);
        $average_dcm=sprintf("%.3f",$request['average_dcm']);
        $sd1=sprintf("%.3f",$request['sd1']);
        $sd2=sprintf("%.3f",$request['sd2']);
        $sd3=sprintf("%.3f",$request['sd3']);
        $sd4=sprintf("%.3f",$request['sd4']);
        $sd5=sprintf("%.3f",$request['sd5']);
        $sd6=sprintf("%.3f",$request['sd6']);
        $average_sd=sprintf("%.3f",$request['average_sd']);
        $average_d=sprintf("%.3f",$request['average_d']);
        $averages_dcm=sprintf("%.3f",$request['averages_dcm']);
        $l=sprintf("%.2f",$request['l']);
        $js=$request['js'];
        $xz1=$request['xz1'];
        $xz2=$request['xz2'];
        $xz3=$request['xz3'];

        $res1=Pendulum::zlcEstablish(  $student_id,
            $zq,
            $dcm1,$dcm2,$dcm3,$dcm4,$dcm5,$dcm6,
            $average_dcm,
            $sd1,$sd2,$sd3,$sd4,$sd5,$sd6,
            $average_sd,$average_d,$averages_dcm,
            $l,$js,
            $xz1,$xz2,$xz3);


        $grade = 0;
        $grade_xp = 0;
        Pendulum::zlcStateChange($student_id);
        if($zq==1.967)
        {
            $grade+=5;
        }
        if($dcm1==1.662)
        {
            $grade+=3;
        }
        if($dcm2==1.702)
        {
            $grade+=3;
        }

        if($dcm3==1.672)
        {
            $grade+=3;
        }
        if($dcm4==1.672)
        {
            $grade+=3;
        }
        if($dcm5==1.692)
        {
            $grade+=3;
        }
        if($dcm6==1.721)
        {
            $grade+=3;
        }
        if( $average_dcm==1.687)
        {
            $grade+=3;
        }


        if($sd1==0.025)
        {
            $grade+=3;
        }
        if($sd2==0.015)
        {
            $grade+=3;
        }
        if($sd3==0.015)
        {
            $grade+=3;
        }
        if($sd4==0.015)
        {
            $grade+=3;
        }
        if($sd5==0.015)
        {
            $grade+=3;
        }
        if($sd6==0.039)
        {
            $grade+=3;
        }

        if($average_sd==0.021)
        {
            $grade+=3;
        }

        if($average_d==1.687)
        {
            $grade+=2;
        }


        if($averages_dcm==0.021)
        {
            $grade+=2;
        }

        if($l==91.78)
        {
            $grade+=5;
        }


        if($xz1=='C')
        {
            $grade_xp+=5;
        }
        if($xz2=='C')
        {
            $grade_xp+=5;
        }
        if($xz3=='A')
        {
            $grade_xp+=5;
        }

        $grade=$grade+$grade_xp;

        $res2 = Pendulum::zlcGrade($student_id, $grade,$grade_xp);

        $res['res1'] = $res1;
        $res['res2'] = $res2;

        return $res1 ?
            json_success('操作成功!', null, 200) :
            json_fail('操作失败!', null, 100);
    }

    public static function zlcJs(Request $request){
        $student_id=$request['student_id'];
        $tgrade=$request['tgrade'];
        $res=null;
        if($tgrade<=29)
            $res= Pendulum::zlcJs($student_id,$tgrade);

        return $res ?
            json_success('操作成功!', null, 200) :
            json_fail('操作失败!', null, 100);
    }

    public  static  function  ZlcPdfDanbai(Request $request){
          $student_id=$request['student_id'];
          $student_a=Pendulum::zlcShow($student_id);
          $student_b=json_decode($student_a);
          $student_name=$student_b[0]->student_name;
          $student_level= $student_b[0]->student_level;
          $student_spec= $student_b[0]->student_spec;
          $student_year = $student_b[0]->student_year;
          $student_class= $student_b[0]->student_class;
          $student_num  = $student_b[0]->student_num;
          $student_teacher=$student_b[0]->student_teacher;
          $update_at=$student_b[0]->updated_at;
          $grade_xp = $student_b[0]->grade_xp;
          $grade= $student_b[0]->grade;
          $zq=$student_b[0]->zq;
          $dcm1=$student_b[0]->dcm1;
         $dcm2=$student_b[0]->dcm2;
         $dcm3=$student_b[0]->dcm3;
         $dcm4=$student_b[0]->dcm4;
         $dcm5=$student_b[0]->dcm5;
         $dcm6=$student_b[0]->dcm6;
         $average_dcm=$student_b[0]->average_dcm;
         $sd1=$student_b[0]->sd1;
        $sd2=$student_b[0]->sd2;
        $sd3=$student_b[0]->sd3;
        $sd4=$student_b[0]->sd4;
        $sd5=$student_b[0]->sd5;
        $sd6=$student_b[0]->sd6;
        $average_sd=$student_b[0]->average_sd;
        $average_d=$student_b[0]->average_d;
        $averages_dcm=$student_b[0]->averages_dcm;
        $l=$student_b[0]->l;
        $js=$student_b[0]->js;
        $xz1=$student_b[0]->xz1;
        $xz2=$student_b[0]->xz2;
        $xz3=$student_b[0]->xz3;


        $res=view("danbai",[
            'student_name'=>$student_name,
            'student_level'=>$student_level,
            'student_spec'=>$student_spec,
            'student_year'=>$student_year,
            'student_class'=>$student_class,
            'student_num'=>$student_num,
            'student_teacher'=>$student_teacher,
            'update_at'=>$update_at,
            'grade_xp'=>$grade_xp,
            'grade'=>$grade,
            'zq'=>$zq,
            'dcm1'=>$dcm1,
            'dcm2'=>$dcm2,
            'dcm3'=>$dcm3,
            'dcm4'=>$dcm4,
            'dcm5'=>$dcm5,
            'dcm6'=>$dcm6,
            'average_dcm'=>$average_dcm,
            'sd1'=>$sd1,
            'sd2'=>$sd2,
            'sd3'=>$sd3,
            'sd4'=>$sd4,
            'sd5'=>$sd5,
            'sd6'=>$sd6,
            'average_sd'=>$average_sd,
            'average_d'=>$average_d,
            'averages_acm'=>$averages_dcm,
            'l'=>$l,
            'js'=>$js,
            'xz1'=>$xz1,
            'xz2'=>$xz2,
            'xz3'=>$xz3

        ]);

        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);

        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-'.$update_at.".pdf", "D");

        exit;
    }
}

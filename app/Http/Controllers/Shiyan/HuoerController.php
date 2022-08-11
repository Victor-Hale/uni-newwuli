<?php

namespace App\Http\Controllers\Shiyan;

use App\Http\Controllers\Controller;
use App\models\Shiyan\Diangai;
use App\models\Shiyan\Huoer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mpdf;
class HuoerController extends Controller
{
    /**
     * 霍尔效应测量磁感应强度相关数据存入
     * @anthor Wzh
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
   public function WzhHuoer(\App\Http\Requests\Huoer $request){
       $student_id=auth('api')->user()->student_id;
       $grade_xp = $request['grade_xp'];
       $number = $request['number'];
       $constant = $request['constant'];
       $a1 = $request['a1'];
       $a2 = $request['a2'];
       $a3 = $request['a3'];
       $a4 = $request['a4'];
       $a5 = $request['a5'];
       $a6 = $request['a6'];

       $b1 = $request['b1'];
       $b2 = $request['b2'];
       $b3 = $request['b3'];
       $b4 = $request['b4'];
       $b5 = $request['b5'];
       $b6 = $request['b6'];

       $c1 = $request['c1'];
       $c2 = $request['c2'];
       $c3 = $request['c3'];
       $c4 = $request['c4'];
       $c5 = $request['c5'];
       $c6 = $request['c6'];

       $d1 = $request['d1'];
       $d2 = $request['d2'];
       $d3 = $request['d3'];
       $d4 = $request['d4'];
       $d5 = $request['d5'];
       $d6 = $request['d6'];

       $e1 = $request['e1'];
       $e2 = $request['e2'];
       $e3 = $request['e3'];
       $e4 = $request['e4'];
       $e5 = $request['e5'];
       $e6 = $request['e6'];

       $f1 = $request['f1'];
       $f2 = $request['f2'];
       $f3 = $request['f3'];
       $f4 = $request['f4'];
       $f5 = $request['f5'];
       $f6 = $request['f6'];

       $g1 = $request['g1'];
       $g2 = $request['g2'];
       $g3 = $request['g3'];
       $g4 = $request['g4'];
       $g5 = $request['g5'];
       $g6 = $request['g6'];

       $h1 = $request['h1'];
       $h2 = $request['h2'];
       $h3 = $request['h3'];
       $h4 = $request['h4'];
       $h5 = $request['h5'];
       $h6 = $request['h6'];

       $i1 = $request['i1'];
       $i2 = $request['i2'];
       $i3 = $request['i3'];
       $i4 = $request['i4'];
       $i5 = $request['i5'];
       $i6 = $request['i6'];

       $j1 = $request['j1'];
       $j2 = $request['j2'];
       $j3 = $request['j3'];
       $j4 = $request['j4'];
       $j5 = $request['j5'];
       $j6 = $request['j6'];

       $k1 = $request['k1'];
       $k2 = $request['k2'];
       $k3 = $request['k3'];
       $k4 = $request['k4'];
       $k5 = $request['k5'];
       $k6 = $request['k6'];

       $l1 = $request['l1'];
       $l2 = $request['l2'];
       $l3 = $request['l3'];
       $l4 = $request['l4'];
       $l5 = $request['l5'];
       $l6 = $request['l6'];

       $m1 = $request['m1'];
       $m2 = $request['m2'];
       $m3 = $request['m3'];
       $m4 = $request['m4'];
       $m5 = $request['m5'];
       $m6 = $request['m6'];

       $n1 = $request['n1'];
       $n2 = $request['n2'];
       $n3 = $request['n3'];
       $n4 = $request['n4'];
       $n5 = $request['n5'];
       $n6 = $request['n6'];

       $o1 = $request['o1'];
       $o2 = $request['o2'];
       $o3 = $request['o3'];
       $o4 = $request['o4'];
       $o5 = $request['o5'];
       $o6 = $request['o6'];

       $p1 = $request['p1'];
       $p2 = $request['p2'];
       $p3 = $request['p3'];
       $p4 = $request['p4'];
       $p5 = $request['p5'];
       $p6 = $request['p6'];

       $tu = $request['tu'];

       $xz1 = $request['xz1'];
       $xz2 = $request['xz2'];
       $xz3 = $request['xz3'];
       $xz4 = $request['xz4'];
       $res1 = Huoer::establish($request,$student_id);
               Huoer::StateChange($student_id);


       //$grade = 35;
       $grade = 3;
       $fraction = 0;
       $k = 0.173;
       $is = 5.00;
       if($constant >= 200 && $constant <= 350)
       {
           $grade += 3;
       }
       /*if ($a5 == ((abs($a1) + abs($a2) + abs($a3) + abs($a4)) * 0.25)) {
           $grade += 1;
       }
       if($a6 == $a5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($b5 == ((abs($b1) + abs($b2) + abs($b3) + abs($b4)) * 0.25)) {
           $grade += 1;
       }
       if($b6 == $b5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($c5 == ((abs($c1) + abs($c2) + abs($c3) + abs($c4)) * 0.25)) {
           $grade += 1;
       }
       if($c6 == $c5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($d5 == ((abs($d1) + abs($d2) + abs($d3) + abs($d4)) * 0.25)) {
           $grade += 1;
       }
       if($d6 == $d5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($e5 == ((abs($e1) + abs($e2) + abs($e3) + abs($e4)) * 0.25)) {
           $grade += 1;
       }
       if($e6 == $e5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($f5 == ((abs($f1) + abs($f2) + abs($f3) + abs($f4)) * 0.25)) {
           $grade += 1;
       }
       if($f6 == $f5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($g5 == ((abs($g1) + abs($g2) + abs($g3) + abs($g4)) * 0.25)) {
           $grade += 1;
       }
       if($g6 == $g5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($h5 == ((abs($h1) + abs($h2) + abs($h3) + abs($h4)) * 0.25)) {
           $grade += 1;
       }
       if($h6 == $h5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($i5 == ((abs($i1) + abs($i2) + abs($i3) + abs($i4)) * 0.25)) {
           $grade += 1;
       }
       if($i6 == $i5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($j5 == ((abs($j1) + abs($j2) + abs($j3) + abs($j4)) * 0.25)) {
           $grade += 1;
       }
       if($j6 == $j5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($k5 == ((abs($k1) + abs($k2) + abs($k3) + abs($k4)) * 0.25)) {
           $grade += 1;
       }
       if($k6 == $k5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($l5 == ((abs($l1) + abs($l2) + abs($l3) + abs($l4)) * 0.25)) {
           $grade += 1;
       }
       if($l6 == $l5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($m5 == ((abs($m1) + abs($m2) + abs($m3) + abs($m4)) * 0.25)) {
           $grade += 1;
       }
       if($m6 == $m5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($n5 == ((abs($n1) + abs($n2) + abs($n3) + abs($n4)) * 0.25)) {
           $grade += 1;
       }
       if($n6 == $n5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($o5 == ((abs($o1) + abs($o2) + abs($o3) + abs($o4)) * 0.25)) {
           $grade += 1;
       }
       if($o6 == $o5 / ($k * $is))
       {
           $grade += 1;
       }
       if ($p5 == ((abs($p1) + abs($p2) + abs($p3) + abs($p4)) * 0.25)) {
           $grade += 1;
       }
       if($p6 == $p5 / ($k * $is))
       {
           $grade += 1;
       }*/


       //two
       /*  if ($a5 ==sprintf("%.1f", ((abs($a1) + abs($a2) + abs($a3) + abs($a4)) * 0.25)) && strlen(substr(strrchr($a5,"."),1)) == 1) {
            $grade += 1;
        }
        if($a6 ==sprintf("%.3f", ($a5 / ($k * $is)))||$a6 == sprintf("%.4f", ($a5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($b5 ==sprintf("%.1f", ((abs($b1) + abs($b2) + abs($b3) + abs($b4)) * 0.25)) && strlen(substr(strrchr($b5,"."),1)) == 1) {
            $grade += 1;
        }
        if($b6 ==sprintf("%.3f", ($b5 / ($k * $is)))||$b6 == sprintf("%.4f", ($b5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($c5 ==sprintf("%.1f", ((abs($c1) + abs($c2) + abs($c3) + abs($c4)) * 0.25)) && strlen(substr(strrchr($c5,"."),1)) == 1) {
            $grade += 1;
        }
        if($c6 ==sprintf("%.3f", ($c5 / ($k * $is)))||$c6 == sprintf("%.4f", ($c5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($d5 ==sprintf("%.1f", ((abs($d1) + abs($d2) + abs($d3) + abs($d4)) * 0.25)) && strlen(substr(strrchr($d5,"."),1)) == 1) {
            $grade += 1;
        }
        if($d6 ==sprintf("%.3f", ($d5 / ($k * $is)))||$d6 == sprintf("%.4f", ($d5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($e5 ==sprintf("%.1f", ((abs($e1) + abs($e2) + abs($e3) + abs($e4)) * 0.25)) && strlen(substr(strrchr($e5,"."),1)) == 1) {
            $grade += 1;
        }
        if($e6 ==sprintf("%.3f", ($e5 / ($k * $is)))||$e6 == sprintf("%.4f", ($e5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($f5 ==sprintf("%.1f", ((abs($f1) + abs($f2) + abs($f3) + abs($f4)) * 0.25)) && strlen(substr(strrchr($f5,"."),1)) == 1) {
            $grade += 1;
        }
        if($f6 ==sprintf("%.3f", ($f5 / ($k * $is)))||$f6 == sprintf("%.4f", ($f5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($g5 ==sprintf("%.1f", ((abs($g1) + abs($g2) + abs($g3) + abs($g4)) * 0.25)) && strlen(substr(strrchr($g5,"."),1)) == 1) {
            $grade += 1;
        }
        if($g6 ==sprintf("%.3f", ($g5 / ($k * $is)))||$g6 == sprintf("%.4f", ($g5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($h5 ==sprintf("%.1f", ((abs($h1) + abs($h2) + abs($h3) + abs($h4)) * 0.25)) && strlen(substr(strrchr($h5,"."),1)) == 1) {
            $grade += 1;
        }
        if($h6 ==sprintf("%.3f", ($h5 / ($k * $is)))||$h6 == sprintf("%.4f", ($h5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($i5 ==sprintf("%.1f", ((abs($i1) + abs($i2) + abs($i3) + abs($i4)) * 0.25)) && strlen(substr(strrchr($i5,"."),1)) == 1) {
            $grade += 1;
        }
        if($i6 ==sprintf("%.3f", ($i5 / ($k * $is)))||$i6 == sprintf("%.4f", ($i5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($j5 ==sprintf("%.1f", ((abs($j1) + abs($j2) + abs($j3) + abs($j4)) * 0.25)) && strlen(substr(strrchr($j5,"."),1)) == 1) {
            $grade += 1;
        }
        if($j6 ==sprintf("%.3f", ($j5 / ($k * $is)))||$j6 == sprintf("%.4f", ($j5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($k5 ==sprintf("%.1f", ((abs($k1) + abs($k2) + abs($k3) + abs($k4)) * 0.25)) && strlen(substr(strrchr($k5,"."),1)) == 1) {
            $grade += 1;
        }
        if($k6 ==sprintf("%.3f", ($k5 / ($k * $is)))||$k6 == sprintf("%.4f", ($k5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($l5 ==sprintf("%.1f", ((abs($l1) + abs($l2) + abs($l3) + abs($l4)) * 0.25)) && strlen(substr(strrchr($l5,"."),1)) == 1) {
            $grade += 1;
        }
        if($l6 ==sprintf("%.3f", ($l5 / ($k * $is)))||$l6 == sprintf("%.4f", ($l5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($m5 ==sprintf("%.1f", ((abs($m1) + abs($m2) + abs($m3) + abs($m4)) * 0.25)) && strlen(substr(strrchr($m5,"."),1)) == 1) {
            $grade += 1;
        }
        if($m6 ==sprintf("%.3f", ($m5 / ($k * $is)))||$m6 == sprintf("%.4f", ($m5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($n5 ==sprintf("%.1f", ((abs($n1) + abs($n2) + abs($n3) + abs($n4)) * 0.25)) && strlen(substr(strrchr($n5,"."),1)) == 1) {
            $grade += 1;
        }
        if($n6 ==sprintf("%.3f", ($n5 / ($k * $is)))||$n6 == sprintf("%.4f", ($n5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($o5 ==sprintf("%.1f", ((abs($o1) + abs($o2) + abs($o3) + abs($o4)) * 0.25)) && strlen(substr(strrchr($o5,"."),1)) == 1) {
            $grade += 1;
        }
        if($o6 ==sprintf("%.3f", ($o5 / ($k * $is)))||$o6 == sprintf("%.4f", ($o5 / ($k * $is))))
        {
            $grade += 1;
        }
        if ($p5 ==sprintf("%.1f", ((abs($p1) + abs($p2) + abs($p3) + abs($p4)) * 0.25)) && strlen(substr(strrchr($p5,"."),1)) == 1) {
            $grade += 1;
        }
        if($p6 ==sprintf("%.3f", ($p5 / ($k * $is)))||$p6 == sprintf("%.4f", ($p5 / ($k * $is))))
        {
            $grade += 1;
        }*/
       //three
       if ($a1 >= 0 && $a1 <= 100 && effective($a1) == 3 && strlen(substr(strrchr($a1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($a2 <= 0 && $a2 >= -100 && effective($a2) == 4 && strlen(substr(strrchr($a2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($a3 <= 0 && $a3 >= -100 && effective($a3) == 4 && strlen(substr(strrchr($a3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($a4 >= 0 && $a4 <= 100 && effective($a4) == 3 && strlen(substr(strrchr($a4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($b1 >= 0 && $b1 <= 100 && effective($b1) == 3 && strlen(substr(strrchr($b1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($b2 <= 0 && $b2 >= -100 && effective($b2) == 4 && strlen(substr(strrchr($b2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($b3 <= 0 && $b3 >= -100 && effective($b3) == 4 && strlen(substr(strrchr($b3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($b4 >= 0 && $b4 <= 100 && effective($b4) == 3 && strlen(substr(strrchr($b4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($c1 >= 0 && $c1 <= 100 && effective($c1) == 3 && strlen(substr(strrchr($c1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($c2 <= 0 && $c2 >= -100 && effective($c2) == 4 && strlen(substr(strrchr($c2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($c3 <= 0 && $c3 >= -100 && effective($c3) == 4 && strlen(substr(strrchr($c3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($c4 >= 0 && $c4 <= 100 && effective($c4) == 3 && strlen(substr(strrchr($c4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($d1 >= 0 && $d1 <= 100 && effective($d1) == 3 && strlen(substr(strrchr($d1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($d2 <= 0 && $d2 >= -100 && effective($d2) == 4 && strlen(substr(strrchr($d2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($d3 <= 0 && $d3 >= -100 && effective($d3) == 4 && strlen(substr(strrchr($d3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($d4 >= 0 && $d4 <= 100 && effective($d4) == 3 && strlen(substr(strrchr($d4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($e1 >= 0 && $e1 <= 100 && effective($e1) == 3 && strlen(substr(strrchr($e1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($e2 <= 0 && $e2 >= -100 && effective($e2) == 4 && strlen(substr(strrchr($e2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($e3 <= 0 && $e3 >= -100 && effective($e3) == 4 && strlen(substr(strrchr($e3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($e4 >= 0 && $e4 <= 100 && effective($e4) == 3 && strlen(substr(strrchr($e4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($f1 >= 0 && $f1 <= 100 && effective($f1) == 3 && strlen(substr(strrchr($f1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($f2 <= 0 && $f2 >= -100 && effective($f2) == 4 && strlen(substr(strrchr($f2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($f3 <= 0 && $f3 >= -100 && effective($f3) == 4 && strlen(substr(strrchr($f3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($f4 >= 0 && $f4 <= 100 && effective($f4) == 3 && strlen(substr(strrchr($f4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($g1 >= 0 && $g1 <= 100 && effective($g1) == 3 && strlen(substr(strrchr($g1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($g2 <= 0 && $g2 >= -100 && effective($g2) == 4 && strlen(substr(strrchr($g2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($g3 <= 0 && $g3 >= -100 && effective($g3) == 4 && strlen(substr(strrchr($g3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($g4 >= 0 && $g4 <= 100 && effective($g4) == 3 && strlen(substr(strrchr($g4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($h1 >= 0 && $h1 <= 100 && effective($h1) == 3 && strlen(substr(strrchr($h1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($h2 <= 0 && $h2 >= -100 && effective($h2) == 4 && strlen(substr(strrchr($h2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($h3 <= 0 && $h3 >= -100 && effective($h3) == 4 && strlen(substr(strrchr($h3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($h4 >= 0 && $h4 <= 100 && effective($h4) == 3 && strlen(substr(strrchr($h4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($i1 >= 0 && $i1 <= 100 && effective($i1) == 3 && strlen(substr(strrchr($i1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($i2 <= 0 && $i2 >= -100 && effective($i2) == 4 && strlen(substr(strrchr($i2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($i3 <= 0 && $i3 >= -100 && effective($i3) == 4 && strlen(substr(strrchr($i3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($i4 >= 0 && $i4 <= 100 && effective($i4) == 3 && strlen(substr(strrchr($i4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($j1 >= 0 && $j1 <= 100 && effective($j1) == 3 && strlen(substr(strrchr($j1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($j2 <= 0 && $j2 >= -100 && effective($j2) == 4 && strlen(substr(strrchr($j2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($j3 <= 0 && $j3 >= -100 && effective($j3) == 4 && strlen(substr(strrchr($j3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($j4 >= 0 && $j4 <= 100 && effective($j4) == 3 && strlen(substr(strrchr($j4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($k1 >= 0 && $k1 <= 100 && effective($k1) == 3 && strlen(substr(strrchr($k1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($k2 <= 0 && $k2 >= -100 && effective($k2) == 4 && strlen(substr(strrchr($k2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($k3 <= 0 && $k3 >= -100 && effective($k3) == 4 && strlen(substr(strrchr($k3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($k4 >= 0 && $k4 <= 100 && effective($k4) == 3 && strlen(substr(strrchr($k4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($l1 >= 0 && $l1 <= 100 && effective($l1) == 3 && strlen(substr(strrchr($l1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($l2 <= 0 && $l2 >= -100 && effective($l2) == 4 && strlen(substr(strrchr($l2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($l3 <= 0 && $l3 >= -100 && effective($l3) == 4 && strlen(substr(strrchr($l3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($l4 >= 0 && $l4 <= 100 && effective($l4) == 3 && strlen(substr(strrchr($l4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($m1 >= 0 && $m1 <= 100 && effective($m1) == 3 && strlen(substr(strrchr($m1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($m2 <= 0 && $m2 >= -100 && effective($m2) == 4 && strlen(substr(strrchr($m2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($m3 <= 0 && $m3 >= -100 && effective($m3) == 4 && strlen(substr(strrchr($m3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($m4 >= 0 && $m4 <= 100 && effective($m4) == 3 && strlen(substr(strrchr($m4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($n1 >= 0 && $n1 <= 100 && effective($n1) == 3 && strlen(substr(strrchr($n1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($n2 <= 0 && $n2 >= -100 && effective($n2) == 4 && strlen(substr(strrchr($n2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($n3 <= 0 && $n3 >= -100 && effective($n3) == 4 && strlen(substr(strrchr($n3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($n4 >= 0 && $n4 <= 100 && effective($n4) == 3 && strlen(substr(strrchr($n4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($o1 >= 0 && $o1 <= 100 && effective($o1) == 3 && strlen(substr(strrchr($o1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($o2 <= 0 && $o2 >= -100 && effective($o2) == 4 && strlen(substr(strrchr($o2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($o3 <= 0 && $o3 >= -100 && effective($o3) == 4 && strlen(substr(strrchr($o3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($o4 >= 0 && $o4 <= 100 && effective($o4) == 3 && strlen(substr(strrchr($o4, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($p1 >= 0 && $p1 <= 100 && effective($p1) == 3 && strlen(substr(strrchr($p1, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($p2 <= 0 && $p2 >= -100 && effective($p2) == 4 && strlen(substr(strrchr($p2, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($p3 <= 0 && $p3 >= -100 && effective($p3) == 4 && strlen(substr(strrchr($p3, "."), 1)) == 1) {
           $grade += 0.5;
       }
       if ($p4 >= 0 && $p4 <= 100 && effective($p4) == 3 && strlen(substr(strrchr($p4, "."), 1)) == 1) {
           $grade += 0.5;
       }


       if (effective($a5) == 3 && strlen(substr(strrchr($a5, "."), 1)) == 2 && $a5 == sprintf("%.2f", ((abs($a1) + abs($a2) + abs($a3) + abs($a4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($a6) == 3 && strlen(substr(strrchr($a5, "."), 1)) == 1 && $a6 == sprintf("%.1f", ($a5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($b5) == 3 && strlen(substr(strrchr($b5, "."), 1)) == 2 && $b5 == sprintf("%.2f", ((abs($b1) + abs($b2) + abs($b3) + abs($b4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($b6) == 3 && strlen(substr(strrchr($b5, "."), 1)) == 1 && $b6 == sprintf("%.1f", ($b5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($c5) == 3 && strlen(substr(strrchr($c5, "."), 1)) == 2 && $c5 == sprintf("%.2f", ((abs($c1) + abs($c2) + abs($c3) + abs($c4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($c6) == 3 && strlen(substr(strrchr($c5, "."), 1)) == 1 && $c6 == sprintf("%.1f", ($c5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($d5) == 3 && strlen(substr(strrchr($d5, "."), 1)) == 2 && $d5 == sprintf("%.2f", ((abs($d1) + abs($d2) + abs($d3) + abs($d4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($d6) == 3 && strlen(substr(strrchr($d5, "."), 1)) == 1 && $d6 == sprintf("%.1f", ($d5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($e5) == 3 && strlen(substr(strrchr($e5, "."), 1)) == 2 && $e5 == sprintf("%.2f", ((abs($e1) + abs($e2) + abs($e3) + abs($e4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($e6) == 3 && strlen(substr(strrchr($e5, "."), 1)) == 1 && $e6 == sprintf("%.1f", ($e5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($f5) == 3 && strlen(substr(strrchr($f5, "."), 1)) == 2 && $f5 == sprintf("%.2f", ((abs($f1) + abs($f2) + abs($f3) + abs($f4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($f6) == 3 && strlen(substr(strrchr($f5, "."), 1)) == 1 && $f6 == sprintf("%.1f", ($f5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($g5) == 3 && strlen(substr(strrchr($g5, "."), 1)) == 2 && $g5 == sprintf("%.2f", ((abs($g1) + abs($g2) + abs($g3) + abs($g4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($g6) == 3 && strlen(substr(strrchr($g5, "."), 1)) == 1 && $g6 == sprintf("%.1f", ($g5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($h5) == 3 && strlen(substr(strrchr($h5, "."), 1)) == 2 && $h5 == sprintf("%.2f", ((abs($h1) + abs($h2) + abs($h3) + abs($h4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($h6) == 3 && strlen(substr(strrchr($h5, "."), 1)) == 1 && $h6 == sprintf("%.1f", ($h5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($i5) == 3 && strlen(substr(strrchr($i5, "."), 1)) == 2 && $i5 == sprintf("%.2f", ((abs($i1) + abs($i2) + abs($i3) + abs($i4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($i6) == 3 && strlen(substr(strrchr($i5, "."), 1)) == 1 && $i6 == sprintf("%.1f", ($i5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($j5) == 3 && strlen(substr(strrchr($j5, "."), 1)) == 2 && $j5 == sprintf("%.2f", ((abs($j1) + abs($j2) + abs($j3) + abs($j4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($j6) == 3 && strlen(substr(strrchr($j5, "."), 1)) == 1 && $j6 == sprintf("%.1f", ($j5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($k5) == 3 && strlen(substr(strrchr($k5, "."), 1)) == 2 && $k5 == sprintf("%.2f", ((abs($k1) + abs($k2) + abs($k3) + abs($k4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($k6) == 3 && strlen(substr(strrchr($k5, "."), 1)) == 1 && $k6 == sprintf("%.1f", ($k5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($l5) == 3 && strlen(substr(strrchr($l5, "."), 1)) == 2 && $l5 == sprintf("%.2f", ((abs($l1) + abs($l2) + abs($l3) + abs($l4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($l6) == 3 && strlen(substr(strrchr($l5, "."), 1)) == 1 && $l6 == sprintf("%.1f", ($l5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($m5) == 3 && strlen(substr(strrchr($m5, "."), 1)) == 2 && $m5 == sprintf("%.2f", ((abs($m1) + abs($m2) + abs($m3) + abs($m4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($m6) == 3 && strlen(substr(strrchr($m5, "."), 1)) == 1 && $m6 == sprintf("%.1f", ($m5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($o5) == 3 && strlen(substr(strrchr($o5, "."), 1)) == 2 && $o5 == sprintf("%.2f", ((abs($o1) + abs($o2) + abs($o3) + abs($o4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($o6) == 3 && strlen(substr(strrchr($o5, "."), 1)) == 1 && $o6 == sprintf("%.1f", ($o5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($n5) == 3 && strlen(substr(strrchr($n5, "."), 1)) == 2 && $n5 == sprintf("%.2f", ((abs($n1) + abs($n2) + abs($n3) + abs($n4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($n6) == 3 && strlen(substr(strrchr($n5, "."), 1)) == 1 && $n6 == sprintf("%.1f", ($n5 / ($k * $is)))) {
           $grade += 1;
       }
       if (effective($p5) == 3 && strlen(substr(strrchr($p5, "."), 1)) == 2 && $p5 == sprintf("%.2f", ((abs($p1) + abs($p2) + abs($p3) + abs($p4)) * 0.25))) {
           $grade += 1;
       }
       if (effective($p6) == 3 && strlen(substr(strrchr($p5, "."), 1)) == 1 && $p6 == sprintf("%.1f", ($p5 / ($k * $is)))) {
           $grade += 1;
       }

       $grade = $grade + $grade_xp;
       $res2 = Huoer::grade($student_id, $grade,$grade_xp,$fraction);

       return $res1 && $res2 ?
           json_success('操作成功!', $res1, 200) :
           json_fail('操作失败!', null, 100);

   }

    /**
     * 霍尔pdf导出
     * @anthor Wzh
     * @param Request $request
     * @throws Mpdf\MpdfException
     */

public function pdf(Request $request)
{

    $student_id = $request['student_id'];

    $student_a = Huoer::show($student_id);

    $student_b = json_decode($student_a);

    $number = $student_b[0]->number;
    $constant = $student_b[0]->constant;
    $a1 = $student_b[0]->a1;
    $a2	= $student_b[0]->a2;
    $a3 = $student_b[0]->a3;
    $a4 = $student_b[0]->a4;
    $a5 = $student_b[0]->a5;
    $a6 = $student_b[0]->a6;

    $b1 = $student_b[0]->b1;
    $b2	= $student_b[0]->b2;
    $b3 = $student_b[0]->b3;
    $b4 = $student_b[0]->b4;
    $b5 = $student_b[0]->b5;
    $b6 = $student_b[0]->b6;

    $c1 = $student_b[0]->c1;
    $c2	= $student_b[0]->c2;
    $c3 = $student_b[0]->c3;
    $c4 = $student_b[0]->c4;
    $c5 = $student_b[0]->c5;
    $c6 = $student_b[0]->c6;

    $d1 = $student_b[0]->d1;
    $d2	= $student_b[0]->d2;
    $d3 = $student_b[0]->d3;
    $d4 = $student_b[0]->d4;
    $d5 = $student_b[0]->d5;
    $d6 = $student_b[0]->d6;

    $e1 = $student_b[0]->e1;
    $e2	= $student_b[0]->e2;
    $e3 = $student_b[0]->e3;
    $e4 = $student_b[0]->e4;
    $e5 = $student_b[0]->e5;
    $e6 = $student_b[0]->e6;

    $f1 = $student_b[0]->f1;
    $f2	= $student_b[0]->f2;
    $f3 = $student_b[0]->f3;
    $f4 = $student_b[0]->f4;
    $f5 = $student_b[0]->f5;
    $f6 = $student_b[0]->f6;

    $g1 = $student_b[0]->g1;
    $g2	= $student_b[0]->g2;
    $g3 = $student_b[0]->g3;
    $g4 = $student_b[0]->g4;
    $g5 = $student_b[0]->g5;
    $g6 = $student_b[0]->g6;

    $h1 = $student_b[0]->h1;
    $h2	= $student_b[0]->h2;
    $h3 = $student_b[0]->h3;
    $h4 = $student_b[0]->h4;
    $h5 = $student_b[0]->h5;
    $h6 = $student_b[0]->h6;

    $i1 = $student_b[0]->i1;
    $i2	= $student_b[0]->i2;
    $i3 = $student_b[0]->i3;
    $i4 = $student_b[0]->i4;
    $i5 = $student_b[0]->i5;
    $i6 = $student_b[0]->i6;

    $j1 = $student_b[0]->j1;
    $j2	= $student_b[0]->j2;
    $j3 = $student_b[0]->j3;
    $j4 = $student_b[0]->j4;
    $j5 = $student_b[0]->j5;
    $j6 = $student_b[0]->j6;

    $k1 = $student_b[0]->k1;
    $k2	= $student_b[0]->k2;
    $k3 = $student_b[0]->k3;
    $k4 = $student_b[0]->k4;
    $k5 = $student_b[0]->k5;
    $k6 = $student_b[0]->k6;

    $l1 = $student_b[0]->l1;
    $l2	= $student_b[0]->l2;
    $l3 = $student_b[0]->l3;
    $l4 = $student_b[0]->l4;
    $l5 = $student_b[0]->l5;
    $l6 = $student_b[0]->l6;

    $m1 = $student_b[0]->m1;
    $m2	= $student_b[0]->m2;
    $m3 = $student_b[0]->m3;
    $m4 = $student_b[0]->m4;
    $m5 = $student_b[0]->m5;
    $m6 = $student_b[0]->m6;

    $n1 = $student_b[0]->n1;
    $n2	= $student_b[0]->n2;
    $n3 = $student_b[0]->n3;
    $n4 = $student_b[0]->n4;
    $n5 = $student_b[0]->n5;
    $n6 = $student_b[0]->n6;

    $o1 = $student_b[0]->o1;
    $o2	= $student_b[0]->o2;
    $o3 = $student_b[0]->o3;
    $o4 = $student_b[0]->o4;
    $o5 = $student_b[0]->o5;
    $o6 = $student_b[0]->o6;

    $p1 = $student_b[0]->p1;
    $p2	= $student_b[0]->p2;
    $p3 = $student_b[0]->p3;
    $p4 = $student_b[0]->p4;
    $p5 = $student_b[0]->p5;
    $p6 = $student_b[0]->p6;

    $xz1 = $student_b[0]->xz1;
    $xz2 = $student_b[0]->xz2;
    $xz3 = $student_b[0]->xz3;
    $xz4 = $student_b[0]->xz4;

    $tu = $student_b[0]->tu;

    $student_name = $student_b[0]->student_name;
    $student_level = $student_b[0]->student_level;
    $student_spec = $student_b[0]->student_spec;
    $student_year = $student_b[0]->student_year;
    $student_class = $student_b[0]->student_class;
    $student_num = $student_b[0]->student_num;
    $student_teacher = $student_b[0]->student_teacher;
    $grade = $student_b[0]->grade;
    $grade_xp = $student_b[0]->grade_xp;



    $res = view('huoer', [
        'student_name' => $student_name,
        'student_level' => $student_level,
        'student_spec' => $student_spec,
        'student_year' => $student_year,
        'student_teacher' => $student_teacher,
        'student_num' => $student_num,
        'student_class' => $student_class,
        'grade' => $grade,
        'grade_xp' => $grade_xp,
        'grade_tk' => ($grade - $grade_xp),



        'number' => $number,
        'constant' => $constant,
        'a1' => $a1,
        'a2' => $a2,
        'a3' => $a3,
        'a4' => $a4,
        'a5' => $a5 ,
        'a6' => $a6 ,
        'b1' => $b1 ,
        'b2' => $b2 ,
        'b3' => $b3 ,
        'b4' => $b4 ,
        'b5' => $b5 ,
        'b6' => $b6 ,
        'c1' => $c1 ,
        'c2' => $c2 ,
        'c3' => $c3 ,
        'c4' => $c4 ,
        'c5' => $c5 ,
        'c6' => $c6 ,
        'd1' => $d1 ,
        'd2' => $d2 ,
        'd3' => $d3 ,
        'd4' => $d4 ,
        'd5' => $d5 ,
        'd6' => $d6 ,
        'e1' => $e1 ,
        'e2' => $e2 ,
        'e3' => $e3 ,
        'e4' => $e4 ,
        'e5' => $e5 ,
        'e6' => $e6 ,
        'f1' => $f1 ,
        'f2' => $f2 ,
        'f3' => $f3 ,
        'f4' => $f4 ,
        'f5' => $f5 ,
        'f6' => $f6 ,
        'g1' => $g1 ,
        'g2' => $g2 ,
        'g3' => $g3 ,
        'g4' => $g4 ,
        'g5' => $g5 ,
        'g6' => $g6 ,
        'h1' => $h1 ,
        'h2' => $h2 ,
        'h3' => $h3 ,
        'h4' => $h4 ,
        'h5' => $h5 ,
        'h6' => $h6 ,
        'i1' => $i1 ,
        'i2' => $i2 ,
        'i3' => $i3 ,
        'i4' => $i4 ,
        'i5' => $i5 ,
        'i6' => $i6 ,
        'j1' => $j1 ,
        'j2' => $j2 ,
        'j3' => $j3 ,
        'j4' => $j4 ,
        'j5' => $j5 ,
        'j6' => $j6 ,
        'k1' => $k1 ,
        'k2' => $k2 ,
        'k3' => $k3 ,
        'k4' => $k4 ,
        'k5' => $k5 ,
        'k6' => $k6 ,
        'l1' => $l1 ,
        'l2' => $l2 ,
        'l3' => $l3 ,
        'l4' => $l4 ,
        'l5' => $l5 ,
        'l6' => $l6 ,
        'm1' => $m1 ,
        'm2' => $m2 ,
        'm3' => $m3 ,
        'm4' => $m4 ,
        'm5' => $m5 ,
        'm6' => $m6 ,
        'n1' => $n1 ,
        'n2' => $n2 ,
        'n3' => $n3 ,
        'n4' => $n4 ,
        'n5' => $n5 ,
        'n6' => $n6 ,
        'o1' => $o1 ,
        'o2' => $o2 ,
        'o3' => $o3 ,
        'o4' => $o4 ,
        'o5' => $o5 ,
        'o6' => $o6 ,
        'p1' => $p1 ,
        'p2' => $p2 ,
        'p3' => $p3 ,
        'p4' => $p4 ,
        'p5' => $p5 ,
        'p6' => $p6 ,
        'xz1' => $xz1 ,
        'xz2' => $xz2 ,
        'xz3' => $xz3 ,
        'xz4' => $xz4 ,
        'student_id' => $student_id ,
        'tu' => $tu

    ]);

    $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);


    //$mpdf->showImageErrors = true;

    $mpdf->WriteHTML($res);

    $mpdf->Output($student_num.'-'.$student_name.'-霍尔效应测量磁感应强度'.".pdf", "D");

    exit;
}

    /**
     * 霍尔打分
     * @anthor Wzh
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
   public function DaFen(Request $request){
    $poste = DB::table('huoer')->value('poste');
    $grade = DB::table('huoer')->value('grade');
    $student_id=$request['student_id'];
    $gradetu = $request['gradetu'];
    if($poste == 1){
     return
         json_fail('您已经打过分数了',null,101);
    }
    else if($poste == 0){
        $grade += $gradetu;
        $res =  Huoer::cunfen($grade,$student_id,$gradetu);
        return $res?
            json_success('打分成功',$res,200):
            json_fail('打分失败',$res,100);
    }
    else
       return
           json_fail('出大问题了！请联系代码维护人员！',null,999);;
   }
//    public function test(Request $request){
//        $student_id = $request['student_id'];
//        $student_a = Huoer::show($student_id); //数据获取
//      return  json_success($student_a);
//    }
}

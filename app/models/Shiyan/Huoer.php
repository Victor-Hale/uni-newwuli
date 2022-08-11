<?php

namespace App\models\Shiyan;

use Illuminate\Database\Eloquent\Model;

class Huoer extends Model
{
    protected $table = "huoer";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    /**
     * 霍尔实验答题数据录入此时状态为1
     * @anthor wzh
     * @param $request
     * @param $student_id
     * @return false
     */
    public static function establish($request,$student_id){
        try {
            $res = self::create(
                [
                    'student_id' => $student_id,
                    'number' => $request['number'],
                    'constant' => $request['constant'],
                    'a1' => $request['a1'],
                    'a2' => $request['a2'],
                    'a3' => $request['a3'],
                    'a4' => $request['a4'],
                    'a5' => $request['a5'],
                    'a6' => $request['a6'],
                    'b1' => $request['b1'],
                    'b2' => $request['b2'],
                    'b3' => $request['b3'],
                    'b4' => $request['b4'],
                    'b5' => $request['b5'],
                    'b6' => $request['b6'],
                    'c1' => $request['c1'],
                    'c2' => $request['c2'],
                    'c3' => $request['c3'],
                    'c4' => $request['c4'],
                    'c5' => $request['c5'],
                    'c6' => $request['c6'],
                    'd1' => $request['d1'],
                    'd2' => $request['d2'],
                    'd3' => $request['d3'],
                    'd4' => $request['d4'],
                    'd5' => $request['d5'],
                    'd6' => $request['d6'],
                    'e1' => $request['e1'],
                    'e2' => $request['e2'],
                    'e3' => $request['e3'],
                    'e4' => $request['e4'],
                    'e5' => $request['e5'],
                    'e6' => $request['e6'],
                    'f1' => $request['f1'],
                    'f2' => $request['f2'],
                    'f3' => $request['f3'],
                    'f4' => $request['f4'],
                    'f5' => $request['f5'],
                    'f6' => $request['f6'],
                    'g1' => $request['g1'],
                    'g2' => $request['g2'],
                    'g3' => $request['g3'],
                    'g4' => $request['g4'],
                    'g5' => $request['g5'],
                    'g6' => $request['g6'],
                    'h1' => $request['h1'],
                    'h2' => $request['h2'],
                    'h3' => $request['h3'],
                    'h4' => $request['h4'],
                    'h5' => $request['h5'],
                    'h6' => $request['h6'],
                    'i1' => $request['i1'],
                    'i2' => $request['i2'],
                    'i3' => $request['i3'],
                    'i4' => $request['i4'],
                    'i5' => $request['i5'],
                    'i6' => $request['i6'],
                    'j1' => $request['j1'],
                    'j2' => $request['j2'],
                    'j3' => $request['j3'],
                    'j4' => $request['j4'],
                    'j5' => $request['j5'],
                    'j6' => $request['j6'],
                    'k1' => $request['k1'],
                    'k2' => $request['k2'],
                    'k3' => $request['k3'],
                    'k4' => $request['k4'],
                    'k5' => $request['k5'],
                    'k6' => $request['k6'],
                    'l1' => $request['l1'],
                    'l2' => $request['l2'],
                    'l3' => $request['l3'],
                    'l4' => $request['l4'],
                    'l5' => $request['l5'],
                    'l6' => $request['l6'],
                    'm1' => $request['m1'],
                    'm2' => $request['m2'],
                    'm3' => $request['m3'],
                    'm4' => $request['m4'],
                    'm5' => $request['m5'],
                    'm6' => $request['m6'],
                    'n1' => $request['n1'],
                    'n2' => $request['n2'],
                    'n3' => $request['n3'],
                    'n4' => $request['n4'],
                    'n5' => $request['n5'],
                    'n6' => $request['n6'],
                    'o1' => $request['o1'],
                    'o2' => $request['o2'],
                    'o3' => $request['o3'],
                    'o4' => $request['o4'],
                    'o5' => $request['o5'],
                    'o6' => $request['o6'],
                    'p1' => $request['p1'],
                    'p2' => $request['p2'],
                    'p3' => $request['p3'],
                    'p4' => $request['p4'],
                    'p5' => $request['p5'],
                    'p6' => $request['p6'],
                    'xz1' => $request['xz1'],
                    'xz2' => $request['xz2'],
                    'xz3' => $request['xz3'],
                    'xz4' => $request['xz4'],

                    'tu' => $request['tu'],
                    'state_huoer'=>1
                ]

            );
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('存储失败！', [$e->getMessage()]);
            return false;
        }
    }

    /**
     * 霍尔实验状态修改此时状态为2
     * @anthor
     * @param $student_id
     * @return false
     */
    public static function StateChange($student_id){
        try {
            $res =self::where('student_id',$student_id)->update([
                'state_huoer' => 2
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
     * 霍尔实验成绩录入此时状态为3
     * @Wzh
     * @param $student_id
     * @param $grade
     * @param $grade_xp
     * @return false
     */
    public static function Grade($student_id, $grade,$grade_xp,$fraction){
        try {

            $res = self::where('student_id', '=', $student_id)->update([
                'grade' => $grade,
                'grade_xp' => $grade_xp,
                'fraction' => $fraction,
                'state_huoer'=>3
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
     * 霍尔实验PDF导出数据获取
     * @anthor Wzh
     * @param $student_id
     * @return false
     */
    public static function show($student_id){
        try {
            $res = self::join('student', 'student.student_num','huoer.student_id')
                ->where('student.student_num', '=', $student_id)
                ->select(
                    'student.student_name',
                    'student.student_level',
                    'student.student_spec',
                    'student.student_year',
                    'student.student_class',
                    'student.student_num',
                    'student.student_teacher',
                    'huoer.created_at',
                    'huoer.updated_at',
                    'huoer.grade',
                    'huoer.grade_xp',

                    'number',
                    'constant',
                    'a1',
                    'a2',
                    'a3',
                    'a4',
                    'a5',
                    'a6',

                    'b1',
                    'b2',
                    'b3',
                    'b4',
                    'b5',
                    'b6',

                    'c1',
                    'c2',
                    'c3',
                    'c4',
                    'c5',
                    'c6',

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
                    'e5',
                    'e6',

                    'f1',
                    'f2',
                    'f3',
                    'f4',
                    'f5',
                    'f6',

                    'g1',
                    'g2',
                    'g3',
                    'g4',
                    'g5',
                    'g6',

                    'h1',
                    'h2',
                    'h3',
                    'h4',
                    'h5',
                    'h6',

                    'i1',
                    'i2',
                    'i3',
                    'i4',
                    'i5',
                    'i6',

                    'j1',
                    'j2',
                    'j3',
                    'j4',
                    'j5',
                    'j6',

                    'k1',
                    'k2',
                    'k3',
                    'k4',
                    'k5',
                    'k6',

                    'l1',
                    'l2',
                    'l3',
                    'l4',
                    'l5',
                    'l6',

                    'm1',
                    'm2',
                    'm3',
                    'm4',
                    'm5',
                    'm6',

                    'n1',
                    'n2',
                    'n3',
                    'n4',
                    'n5',
                    'n6',

                    'o1',
                    'o2',
                    'o3',
                    'o4',
                    'o5',
                    'o6',

                    'p1',
                    'p2',
                    'p3',
                    'p4',
                    'p5',
                    'p6',

                    'xz1',
                    'xz2',
                    'xz3',
                    'xz4',
                    'tu'

                )->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    /**
     * 霍尔打分
     * @anthor Wzh
     * @param $grade
     * @param $student_id
     * @param $gradetu
     * @return false
     */
    public static function cunfen($grade,$student_id,$gradetu){
        try {
            $res = self::where('student_id',$student_id)->update([
                'fraction' => $gradetu,
                'grade' => $grade,
                'poste'=> 1
            ]);
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }
}

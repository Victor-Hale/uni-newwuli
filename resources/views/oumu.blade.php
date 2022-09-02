<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>实验七 欧姆表的改装设计</title>
    <!-- <link rel="stylesheet" href="../assets/css/xiangShi.css"> -->

</head>

<body style=" height: 100%;margin: 0;padding: 0;">
    <!-- 校徽 -->
    <div style="height: 45px;width: 200px;background-repeat: no-repeat;margin-top: 10px;margin-left: 15px;">
        <img src="img/pic/school.jpg" alt="">
    </div>
    <div style="width: 90%;margin: 0 auto;">
        <!-- 标题 + 总分 -->
        <div style="width: 90%;margin: 0 auto;">
            <h1 style="font-weight: 500;font-size: 25px;display: block;width: 100%;height: 30px;line-height: 30px;text-align: center;">实验七欧姆表的改装设计</h1>
        </div>
        <div style="height:120px;">
            <div style="width: 20%;float: right;">
                <h5 style="font-weight: 400;width: 100%;text-align: center;font-size: 15px;margin: 0;">总分：</h5>
                <h1 style="font-weight: 400;text-align: right;font-size: 80px;margin: 0;padding-right: 30px;">95</h1>
            </div>
        </div>
        <!-- 主体 -->
        <div style="padding-top: 8%;">
            <!-- 一：基本信息 -->
            <div>
                <h4 style="text-align: left;font-weight: 500;color: #363739;">一：基本信息</h4>
                <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                    <table cellpadding="15" cellspacing="0" style="margin: 0 auto;width:90%;table-layout:fixed;text-align: center;" frame="void" rules="none">
                        <tr>
                            <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">学生姓名</td>
                            <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">{{$student_name}}</td>
                            <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">学生层次</td>
                            <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">{{$student_level}}</td>
                            <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">学生专业</td>
                            <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">{{$student_spec}}</td>
                            <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">学生年级</td>
                            <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">{{$student_year}}</td>
                        </tr>
                        <tr>
                            <td style="width:7%;word-wrap:break-word;padding-bottom: 0;">学生班级</td>
                            <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">{{$student_class}}</td>
                            <td style="width:7%;word-wrap:break-word;padding-bottom: 0;">学生学号</td>
                            <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">{{$student_num}}</td>
                            <td style="width:7%;word-wrap:break-word;padding-bottom: 0;">任课教师</td>
                            <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">{{$student_teacher}}</td>
                            <td style="width:7%;word-wrap:break-word;padding-bottom: 0;">完成日期</td>
                            <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">{{$created_at}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- 二：实验目的 -->
            <div>
                <h4 style="text-align: left;font-weight: 500;color: #363739;">二：实验目的</h4>
                <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                    <div>

                        1.初步培养学生根据实验要求，设计简单实验的独立工作能力。
                    </div>
                    <div>
                        2.通过设计和组装欧姆表及其定标，使学生加深了解欧姆表的原理和结构，以便正确合理地使用欧姆表。
                    </div>
                </div>
            </div>
            <!-- 三：实验仪器 -->
            <div>
                <h4 style="text-align: left;font-weight: 500;color: #363739;">三：实验仪器</h4>
                <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                    <div>
                        500µA微安表一个、六档位多档开关一组、9999.9型电阻箱三个、 红黑表笔一副、1.5V电池一节、单刀开关一个、待测信号箱。
                    </div>
                </div>
            </div>
            <!-- 四：实验原理 -->
            <div>
                <h4 style="text-align: left;font-weight: 500;color: #363739;">四：实验原理</h4>
                <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                    <div>
                        <p style="text-indent: 2em;">
                            1) 欧姆表的原理
                        </p>
                        <p style="text-indent: 2em;">
                            根据调零方式的不同，欧姆表可分为串联分压式和并联分流式两种．其原理电路如图（a）和图（b）所示。
                        </p>
                        <!-- <div style="background-image: url(https://liuru1.oss-cn-chengdu.aliyuncs.com/img/20220824184053.png);background-repeat: no-repeat;height: 300px;width: 100%;background-position: center center;text-align: center;margin: 0;"></div> -->
                        <div style="text-align: center;">
                            <img src="img/pic/oumu_p1.jpg" alt="">
                        </div>
                        <p style="text-indent: 2em;"> 由图知 </p>
                        <!-- <div style="background-image: url(https://liuru1.oss-cn-chengdu.aliyuncs.com/img/20220825172232.png);background-repeat: no-repeat;height: 60px;width: 100%;background-position: center center;text-align: center;margin: 0;"> </div> -->
                        <div style="text-align: center;">
                            <img src="img/pic/oumu_p2.jpg" alt="">
                        </div>
                        <p style="text-indent: 2em;"> 式中 Rz 为欧姆表的总内阻．对于图（a）：</p>
                        <!-- <div style="background-image: url(https://liuru1.oss-cn-chengdu.aliyuncs.com/img/20220825172413.png);background-repeat: no-repeat;height: 40px;width: 100%;background-position: center center;text-align: center;margin: 0;"></div> -->
                        <div style="text-align: center;">
                            <img src="img/pic/oumu_p3.jpg" alt="">
                        </div>
                        <p style="text-indent: 2em;">图（b）：</p>
                        <!-- <div style="background-image: url(https://liuru1.oss-cn-chengdu.aliyuncs.com/img/20220825172838.png);background-repeat: no-repeat;width: 100%;height: 40px;background-position: center center;text-align: center;margin: 0;"></div> -->
                        <div style="text-align: center;">
                            <img src="img/pic/oumu_p4.jpg" alt="">
                        </div>
                        <p style="text-indent: 2em;">当欧姆表短路（即 Rx=0），电路中电流为最大值 </p>
                        <!-- <div style="background-image: url(https://liuru1.oss-cn-chengdu.aliyuncs.com/img/20220825173046.png);background-repeat: no-repeat;width: 100%;height: 51px;background-position: center center;text-align: center;margin: 0;"></div> -->
                        <div style="text-align: center;">
                            <img src="img/pic/oumu_p5.jpg" alt="">
                        </div>
                        <p style="text-indent: 2em;">设计时，应使表头满偏</p>
                        <!-- <div style="background-image: url(https://liuru1.oss-cn-chengdu.aliyuncs.com/img/20220825173356.png);background-repeat: no-repeat;background-repeat: no-repeat;width: 100%;height: 52px;background-position: center center;text-align: center;margin: 0;"></div> -->
                        <div style="text-align: center;">
                            <img src="img/pic/oumu_p6.jpg" alt="">
                        </div>
                        <p style="text-indent: 2em;">（即欧姆表调零，可通过调节 Rw 得到，所以 Rw 称作欧姆表的调零电阻）．将</p>
                        <!-- <div style="background-image: url(https://liuru1.oss-cn-chengdu.aliyuncs.com/img/20220825174100.png);background-repeat: no-repeat;background-repeat: no-repeat;width: 100%;height: 55px;background-position: center center;text-align: center;margin: 0;"></div> -->
                        <div style="text-align: center;">
                            <img src="img/pic/oumu_p7.jpg" alt="">
                        </div>
                        <p style="text-indent: 2em;">代入（１）式可得</p>
                        <!-- <div style="background-image: url(https://liuru1.oss-cn-chengdu.aliyuncs.com/img/20220825173737.png);background-repeat: no-repeat;background-repeat: no-repeat;width: 100%;height: 55px;background-position: center center;text-align: center;margin: 0;"></div> -->
                        <div style="text-align: center;">
                            <img src="img/pic/oumu_p8.jpg" alt="">
                        </div>
                        <p style="text-indent: 2em;">可见Ｉ与 Rx 有一一对应的关系，如果表头的标度尺预先按已知电阻值来刻度，就可用来直接测量电阻了．由（２）式可知，I 与 Rx 成非线性，且</p>
                        <!-- <div style="background-image: url(https://liuru1.oss-cn-chengdu.aliyuncs.com/img/20220825174139.png);background-repeat: no-repeat;background-repeat: no-repeat;width: 100%;height: 150px;background-position: center center;text-align: center;margin: 0;"></div> -->
                        <div style="text-align: center;">
                            <img src="img/pic/oumu_p9.jpg" alt="">
                        </div>
                        <p style="text-indent: 2em;">
                            Rz 称作欧姆表的中值电阻。所以欧姆表的标度尺是反向非均匀的，且 Rx 越大，刻度间隔愈密。 </p>
                        <p style="text-indent: 2em;">2) 欧姆表的量程档可由其中值电阻的数量级来设定：通常将数量级为千欧姆的中值电阻 Rz 的欧姆表设定为 R×100 档，数量级为几百欧姆的中值电阻 Rz 的欧姆表设定为 R×10 档，数量级为几十欧姆的中值电阻 Rz 的欧姆表设定为 R×1 档。</p>
                        <p style="text-indent: 2em;">3)欧姆表参数的调整：设计好的欧姆表其参数要在实验中作出调整然后才能进行校准。调整的原则是在标准条件下，组装表的满偏（外接电阻 Rx=0，时，表头指示满偏）和半偏（外接电阻 Rx=Rz 时，表头指示半偏）条件均得到满足；调整方法是先由半偏条件改变调零电阻 Rw 滑动触头位置，再由满偏条件调整 R <span style="font-size: 13px;position: relative;left: -4px;">0</span>的值，经过若干循环后，最终
                            R <span style="font-size: 13px;position: relative;left: -4px;">0</span>的值可同时满足满偏和中偏条件(注意，此调整方法若改变调整顺序，则调整最终不收敛，即经过若干循环后，最终 R <span style="font-size: 13px;position: relative;left: -4px;">0</span>的值不可同时满足满偏和中偏条件。</p>
                        <p style="text-indent: 2em;">4) 欧姆表的扩程</p>
                        <p style="text-indent: 2em;">
                            两种方法：
                            <!-- <div style="background-image: url(https://liuru1.oss-cn-chengdu.aliyuncs.com/img/20220825174727.png);background-repeat: no-repeat;background-repeat: no-repeat;width: 100%;height: 300px;background-position: center center;text-align: center;margin: 0;"></div> -->
                            <div style="text-align: center;">
                                <img src="img/pic/oumu_p10.jpg" alt="">
                            </div>
                        </p>
                        <p style="text-indent: 2em;">（1）并联不同的分流电阻以减小量程：</p>
                        <p style="text-indent: 2em;">如图２所示，在相同的电源电压下，在基准档的基础上，并联一电阻 R<span style="font-size: 13px;">1</span>，使回路电流增大为原来的10倍，中值电阻降为原来的 1/10，欧姆表此时量程和倍率都变为原来的 1/10；若并联一电阻 R<span style="font-size: 13px;">2</span>，使回路电流增大为原来的100倍，中值电阻降为原来的1/100，欧姆表此时量程和倍率都变为原来的1/100。</p>
                        <p style="text-indent: 2em;">（2）提高电源电压以增大量程</p>
                        <p style="text-indent: 2em;">在表头灵敏度（Ig ）不变的情况下，若要增大量程以测更高的阻值的电阻，可以提高电源电压，使中值电阻增大。</p>
                        <p style="text-indent: 2em;">5) 定标：欧姆表表盘的标度尺可按下式确定
                            <!-- <div style="background-image: url(https://liuru1.oss-cn-chengdu.aliyuncs.com/img/20220825175232.png);background-repeat: no-repeat;background-repeat: no-repeat;width: 100%;height: 52px;background-position: center center;text-align: center;margin: 0;"></div> -->
                            <div style="text-align: center;">
                                <img src="img/pic/oumu_p11.jpg" alt="">
                            </div>
                        </p>
                        <p style="text-indent: 2em;">式中 n 为对应于 Rx 的表盘格数，
                            <span style="font-size: 18px;">n</span> <span style="font-size: 14px;position: relative;left: -4px;">m</span> 为表盘总格数（表盘的原刻度是均匀分格的）</p>

                    </div>
                </div>
            </div>
            <!-- 五：实验内容及实验数据记录与处理 -->
            <div>
                <h4 style="margin-bottom: 0%; text-align: left;font-weight: 500;color: #363739;">五：实验内容及实验数据记录与处理</h4>
                <div style="text-align: right;margin-bottom: 1%;color: #606166;font-size: 12px;">
                    该部分得分：80分
                </div>
                <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                    <div>
                        <!-- <div style="background-image: url(https://liuru1.oss-cn-chengdu.aliyuncs.com/img/20220825175354.png);background-repeat: no-repeat;background-repeat: no-repeat;width: 100%;height: 250px;background-position: center center;text-align: center;margin: 0;"></div> -->
                        <div style="text-align: center;">
                            <img src="img/pic/oumu_p12.jpg" alt="">
                        </div>
                        <p style="text-indent: 2em;">从微安表表盘读取表头满量程电流Ig和对应的表头内阻Rg，并机械调零。按照改装要求，连接电路，根据改装后的欧姆表量程比率为×1Ω的要求，调节调零电阻（校准电阻支路保持断路，红黑表笔短路，调节调零电阻的大小使表针满偏）和校准电阻（校准电阻支路接入电路，连接100Ω标准电阻，调节校准电阻的大小使表针对准100）值，完成仪器的调节，并测量出待测信号箱的未知电阻值，并记录数据。</p>

                        <p style="text-indent: 2em;">实验数据记录与处理</p>
                        <p style="text-indent: 2em;">待改装微安表参数记录（每空5分，共15分）</p>
                        <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;text-align: center;">
                            <tr>
                                <th style="width: 200px;">微安表表头满量程电流Ig</th>
                                <th style="width: 200px;">{{$ig1}}</th>
                                <th style="width: 200px;">μA</th>
                            </tr>
                            <tr>
                                <th>表头内阻Rg</th>
                                <th>{{$rg1 }}</th>
                                <th>Ω</th>
                            </tr>
                            <tr>
                                <th>电池电压E</th>
                                <th>{{$e}}</th>
                                <th>V</th>
                            </tr>
                        </table>
                        <p style="text-indent: 2em;">各电阻阻值设置计算（要求四舍五入精确到小数点后1位，每空5分，共45分）</p>
                        <p style="text-indent: 2em;">调零电阻 R<span style="font-size: 13px;">1</span>计算（理论值）{{$ra}}</p>
                        <p style="text-indent: 2em;">根据电路图，单刀开关开启，短接红黑表笔，此时调零电阻计算公式为：R<span style="font-size: 13px;">1</span>=E/Ig-Rg </p>
                        <p style="text-indent: 2em;">代入E= {{$e1}} μA,ig={{$i}},
                            Rg= {{$ig2}} Ω</p>
                        <p style="text-indent: 2em;"> 计算出R<span style="font-size: 13px;">1</span>= {{$r1}} Ω</p>
                        <p style="text-indent: 2em;">校准电阻R<span style="font-size: 13px;">2</span>计算（理论值）</p>
                        <p style="text-indent: 2em;">根据电路图，单刀开关闭合，红黑表笔接100Ω电阻，此时校准电阻计算公式为：R<span style="font-size: 13px;">2</span>=[0.00015×(R<span style="font-size: 13px;">1</span>+Rg)]/[(E-0.00015×(R<span style="font-size: 13px;">1</span>+Rg))/100-0.00015]</p>
                        <p style="text-indent: 2em;">代入E= {{$e2}} V,R<span style="font-size: 13px;">1</span>= {{$rb}} Ω,
                            Rg= {{$rg2}} Ω</p>
                        <p style="text-indent: 2em;">计算出R<span style="font-size: 13px;">2</span>= {{$r2}} Ω </p>
                        <p style="text-indent: 2em;">万用表改装设计实验数据记录表（每空5分，共15分，截图分值另计）</p>
                        <!-- <table cellspacing="0 " style="border-collapse: collapse;border: 1px #525152 solid;width: 90%;margin: 0 auto;">
                            <tr>
                                <th rowspan="4" style="border: 1px #525152 solid;text-align: center;font-size: 17px;">欧姆表的改装设计</th>
                                <th style="width: 15%;border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">改装要求</th>
                                <th colspan="3" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">量程比率×1Ω</th>
                                <th style="width: 25%;border: 1px #525152 solid;" rowspan="4">
                                    Rx表头测量数据截图，要求将Rx读数标记在图上（5分）
                                </th>
                            </tr>
                            <tr>
                                <th rowspan="2" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">改装计算</th>
                                <th style="width: 20%;text-align: center;font-size: 17px;line-height: 30px;">调零电阻R<span style="font-size: 13px;">1</span>=</th>
                                <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></th>
                                <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;width: 50px;">Ω</th>
                            </tr>

                            <tr>
                                <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">校准电阻R<span style="font-size: 13px;">2</span>=</th>
                                <th style="width: 50px"></th>
                                <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">Ω</th>
                            </tr>
                            <tr>
                                <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">测量电阻</th>
                                <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">Rx=</th>
                                <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></th>
                                <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">Ω</th>
                            </tr>
                            <tr>
                                <th colspan="6">
                                    <p style="float: left; display: block; margin-left: 10px;height: 200px;">
                                        实验电路连线截图（5分）
                                    </p>
                                </th>
                            </tr>

                        </table> -->
                        <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;text-align: center;border-collapse: collapse;">
                            <tr>
                                <th rowspan="4">欧姆表的改装设计</th>
                                <th style="width: 200px;height:80px">改装要求</th>
                                <th colspan="3" style="width: 300px;height:80px">量程比率×1Ω</th>
                                <th rowspan="4" style="width: 300px;height:80px">Rx表头测量数据截图,要求将Rx读数标记在图上 (5分) {{$p1}}</th>
                            </tr>
                            <tr>
                                <th rowspan="2">改装计算</th>
                                <th>调零电阻R1=</th>
                                <th style="width: 80px;">{{$r3}}</th>
                                <th style="width: 40px;">Ω</th>
                            </tr>
                            <tr>
                                <th>校准电阻R2=</th>
                                <th>{{$r4}}</th>
                                <th>Ω</th>
                            </tr>
                            <tr>
                                <th>测量电阻</th>
                                <th>Rx=</th>
                                <th>{{$rx}}</th>
                                <th>Ω</th>
                            </tr>
                            <tr>
                                <th colspan="6" style="height: 200px;">
                                    <p style="float: left; display: block; margin-left: 10px;height: 200px;">
                                        实验电路连线截图 (5分)

                                    </p>
                                    {{$p2}}
                                </th>
                            </tr>
                        </table>


                    </div>
                </div>
            </div>
            <!-- 六：思考题 -->
            <div>
                <h4 style="margin-bottom: 0%; text-align: left;
                font-weight: 500;
                color: #363739;">六：思考题</h4>
                <div style="text-align: right;margin-bottom: 1%;color: #606166;font-size: 12px;">
                    该部分得分：20分
                </div>
                <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                    <div>
                        一、选择题
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">1.关于使用万用表欧姆档测电阻的下列说法中正确的是({{$pd1}}&nbsp;&nbsp;&nbsp;&nbsp;)</div>
                            <!-- <div style="background-image: url(https://liuru1.oss-cn-chengdu.aliyuncs.com/img/20220825181655.png);background-repeat: no-repeat;background-repeat: no-repeat;width: 100%;height: 150px;background-position: center center;text-align: center;margin: 0; "></div> -->
                            <div style="text-align: center;">
                                <img src="img/pic/oumu_p13.jpg" alt="">
                            </div>
                            <div style="text-indent: 2em;margin: 5px auto;">A.测量阻值不同的电阻时必须重新调零</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.测量电路中的某个电阻，不需要把该电阻与电路断开</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.测量电阻时，为了使测量准确，应当尽量使指针指在中心刻度的附近</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.如图为某同学的实验测量结果，指针在a位置处表示被测电阻的阻值为50Ω</div>
                        </div>
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">2.把一个量程为5mA的电流表改装成欧姆表Rx1档，电流表的内阻是50Ω，电池的电动势是1.5v，经过调零之后测电阻，当欧姆表指针指到满偏的3/4位置时，被测电阻的阻值是({{$pd2}}&nbsp;&nbsp;&nbsp;&nbsp;)</div>
                            <div style="text-indent: 2em;margin: 5px auto;">A.50 Ω</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.100 Ω</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.16.7 Ω</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.400 Ω</div>
                        </div>
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">3.关于欧姆表，下列说法正确的是({{$pd3}}&nbsp;&nbsp;&nbsp;&nbsp;)</div>
                            <div style="text-indent: 2em;margin: 5px auto;">A.刻度盘上的刻度是均匀的</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.指针指在最左边，表示待测电阻为零</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.指针指在最左边，表示待测电阻为无穷大</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.欧姆表可以精确的测量电阻</div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- 七：线上资源 -->
            <div>
                <h4 style="text-align: left;
                font-weight: 500;
                color: #363739;">七：线上资源</h4>
                <div style="background-color: #EEEEEE;
                padding: 2%;
                border-radius: 3px;
                text-align: left;">
                    <div style="text-indent: 1em;margin:1%;">
                        <div style="margin-bottom: 10px;">1）在线实验报告系统链接：<a style=" text-decoration: none;" href="http://180.76.111.200/#/login">http://180.76.111.200/#/login</a></div>
                        <div style="margin-bottom: 10px;">2）在线资源链接：FTP://ftp.cs.nsu.edu.cn/大学物理实验</div>
                    </div>
                </div>
            </div>
            <br />
        </div>
    </div>
</body>

</html>

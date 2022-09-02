<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>实验四 自组式直流电桥测量电阻值</title>
</head>
    <body style="height: 100%;margin: 0;padding: 0;min-width: 500px;">
    <!-- 校徽 -->
    <div style="height: 45px;width: 200px;margin-top: 10px;margin-left: 15px;">
       <img src="img/pic/school.jpg" alt="">
    </div>
    <div style="width: 90%;margin: 0 auto;">
    <!-- 标题 + 总分 -->
    <div style="width: 90%;margin: 0 auto;">
        <h1 style="font-weight: 500;font-size: 25px;display: block;width: 100%;height: 30px;line-height: 30px;text-align: center;">实验四 自组式直流电桥测量电阻值</h1>
    </div>
    <div style="height:120px;">
        <div style="width: 20%;float: right;">
            <h5 style="font-weight: 400;width: 100%;text-align: center;font-size: 15px;margin: 0;">总分：</h5>
            <h1 style="font-weight: 400;text-align: right;font-size: 80px;margin: 0;padding-right: 30px;">95</h1>
        </div>
    </div>
    <!-- 主体 -->
    <div>
        <!-- 一：基本信息 -->
        <div>
            <h4 style="text-align: left;font-weight: 500;color: #363739;">一：基本信息</h4>
            <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                <table cellpadding="15" cellspacing="0" style="margin: 0 auto;width:90%;table-layout:fixed;text-align: center;" frame="void" rules="none">
                    <tr>
                        <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">学生姓名</td>
                        <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">
                            {{$student_name}}</td>
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
                        <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">
                            {{$student_num}}</td>
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
                   <!-- <textarea rows="10"></textarea> -->
                   本实验是用滑线变阻器、电阻箱和检流计等仪器组成惠斯通电桥电路测量电阻，掌握调节电桥平衡的方法，并要求了解电桥灵敏度与元件参数之间的关系，从而正确选择这些元件，以达到所要求的测量精度。
                </div>
            </div>
        </div>
        <!-- 三：实验仪器 -->
        <div>
            <h4 style="text-align: left;font-weight: 500;color: #363739;">三：实验仪器</h4>
            <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                <div>
                     <!-- <textarea rows="10"></textarea> -->
                     电压源、滑线变阻器（2个）、四线电阻箱（3个）、检流计、待测电阻、电源开关
                </div>
            </div>
        </div>
        <!-- 四：实验原理 -->
        <div>
            <h4 style="text-align: left;font-weight: 500;color: #363739;">四：实验原理</h4>
            <div style="  background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                <div>
                    <!-- <textarea rows="10"></textarea> -->
                    <div style="height: 200px;width: 100%;text-align: center;margin: 0 auto;">
                       <img src="img/pic/four.png" alt="">
                    </div>
                    <p>
                        电桥是一种用电位比较法进行测量的仪器，直流电桥是用来测量电阻或与电阻有关的物理量的仪器，主要由比例臂、比较臂、检流计等构成桥式线路。
                    </p>
                    <p>
                        1）直流电桥平衡条件
                    </p>
                    <p>
                        如图所示，检流计G对两端点B、D的电位进行比较，当B、D电位相等时，检流计中无电流通过，称电桥达到平衡。电桥平衡时有：
                        <div style="height: 45px;width: 200px;text-align: center;margin: 0 auto;">
                          <img src="img/pic/six1.png" alt="">
                        </div>
                        <div style="height: 45px;width: 200px;text-align: center;margin: 0 auto;">
                          <img src="img/pic/six2.png" alt="">
                        </div>
                    </p>
                    <p>
                        2）直流电桥平衡测量电阻的误差
                    </p>
                    <p>
                        平衡电桥的测量电阻误差有两个来源：
                    </p>
                    <p>
                        （一）桥臂电阻的误差
                    </p>
                    <p>
                        RX的测量误差可用下列不确定度公式估计：
                    </p>
                    <div style="height: 45px;width: 200px;text-align: center;margin: 0 auto;">
                       <img src="img/pic/seven.png" alt="">
                    </div>
                    <p>
                        式中，σR1、σR2、σR0分别是R1，R2，R0的不确定度。为消除R1 ⁄ R2的比值误差，可交换R1，R2的位置再测，取两次结果的RX1，RX2的平均值为RX，有
                    </p>
                    <div style="height: 45px;width: 200px;text-align: center;margin: 0 auto;">
                     <img src="img/pic/eight.png" alt="">
                    </div>
                    <p>
                        （二）电桥灵敏度的误差
                    </p>
                    <p>
                        电桥是否已经平衡，是由检流计是否指零来判断的。因而检流计的灵敏度大小直接影响了判断性。换言之，判断检流计是否指零所产生的误差决定了电桥的灵敏度。
                    </p>
                    <p>
                        电桥平衡时，改变单位电阻检流计的偏转格数Δn称作电桥灵敏度。
                    </p>
                    <div style="height: 45px;width: 200px;text-align: center;margin: 0 auto;">
                    <img src="img/pic/nine1.png" alt="">
                    </div>
                    <div style="height: 45px;width: 200px;text-align: center;margin: 0 auto;margin-top: 30px;">
                       <img src="img/pic/nine2.png" alt="">
                    </div>
                    <div style="height: 45px;width: 200px;text-align: center;margin: 0 auto;"></div>
                    <p>
                        它表示电桥平衡后，RX的相对该变量ΔRX / RX 所引起的检流计偏转的格数Δn，具体测量时用ΔR0/R0 代替ΔRX/RX 。
                    </p>
                </div>
            </div>
        </div>
        <!-- 五：实验内容及实验数据记录与处理 -->
        <div>
            <h4 style="margin-bottom: 0%;text-align: left;font-weight: 500;color: #363739;">五：实验内容及实验数据记录与处理</h4>
            <div style="text-align: right;margin-bottom: 1%;color: #606166;font-size: 12px;">
                该部分得分：45分
            </div>
            <div style=" background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                <div>
                    <!-- <textarea rows="10"></textarea> -->
                    <p>
                        5.1  实验内容与步骤
                    </p>
                    <div style="height: 150px;width: 200px;text-align: center;margin: 0 auto;">
                     <img src="img/pic/four.png" alt="">
                    </div>
                    <p>
                        (1) 按图5.2所示实验电路图正确连线。
                    </p>
                    <p>
                        (2) 线路连接好以后，检流计调零（档位置“白点”）。
                    </p>
                    <p>
                        (3) 选取合适的比例臂R1/R2(比如R1、R2均设置为1000Ω)，两个滑线变阻器的滑片置中。电源输出设置为5V,合上电键开关，保持检流计的“电计按钮”闭合,调节R0使电路平衡，记录下电阻箱R1、R2、R0的电阻值，并计算RX。
                    </p>
                    <p>
                        (4) 根据待测电阻值RX，调节并设定合适的比例臂R1/R2，电压源，滑线变阻器的值，调节R0，使电桥平衡，然后在小范围内改变R0的电阻值，记下R0相对平衡位置改变的值，即ΔR0，和检流计指针相对平衡位置偏转的格数，即△n，测量三次，并根据电桥灵敏度公式: S=△n/(△R0/ R0)计算出直流电桥的电桥灵敏度。
                    </p>
                    <p>
                        5.2 实验数据记录与处理
                    </p>
                    <div style="height: 450px;width: 100%;text-align: center;margin: 0 auto;">
                 <img src="img/pic/s1.png" alt="">
                    </div>
                    <div style="height: 450px;width: 100%;text-align: center;margin: 0 auto;">
                      <img src="img/pic/s2.png" alt="">
                    </div>
                    <div style="height: 450px;width: 100%;text-align: center;margin: 0 auto;">
                        <img src="img/pic/s3.png" alt="">
                    </div>
                    <p>
                        5.3 实验数据记录与处理
                    </p>
                    <div>
                        <!-- 1.自组式直流电桥测量电阻值 -->
                        <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;text-align: center;">
                            <tr>
                                <th colspan="8" style="text-align: left;">1.自组式直流电桥测量电阻值</th>
                            </tr>
                            <tr>
                            <th style="width: 200px;padding: 0;">
                                <div style=" border-top: 55px #D6D3D6 solid;width: 0px;height: 0px;border-left: 200px #BDBABD solid;position: relative;">
                                    <b style="font-style: normal;display: block;position: absolute;top: -50px;left: -90px;width: 100px;">测量次数</b>
                                    <em style="font-style: normal;display: block;position: absolute;top: -30px;left: -200px;width: 100px;">测量内容</em>
                                </div>
                            </th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th colspan="3">测量结果</th>
                            </tr>
                            <tr>
                                <td>R1(Ω)</td>
                                <td>500</td>
                                <td>2000</td>
                                <td>100</td>
                                <td rowspan="4" style="width: 10%">RX={{$rx}}</td>
                                <td rowspan="4" style="width: 10%"></td>
                                <td rowspan="4" style="width: 10%">Ω</td>
                            </tr>
                            <tr>
                                <td>R2(Ω)</td>
                                <td>500</td>
                                <td>2000</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>电阻臂R0(Ω)</td>
                                <td>
                                   {{$ra1}}
                                </td>
                                <td>{{$ra2}}</td>
                                <td>{{$ra3}}</td>
                            </tr>
                            <tr>
                            <td>待测电阻值RX(Ω)</td>
                            <td>{{$rx_a1}}</td>
                            <td>{{$rx_a1}}</td>
                            <td>{{$rx_a1}}</td>
                            </tr>
                        </table>
                        <!-- 2.测量并计算自组式直流电桥的灵敏度 -->
                        <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;text-align: center;">
                            <tr>
                                <th colspan="8" style="text-align: left;">2.测量并计算自组式直流电桥的灵敏度</th>
                            </tr>
                            <tr>
                            <th style="width: 200px;padding: 0;">
                                <div style=" border-top: 55px #D6D3D6 solid;width: 0px;height: 0px;border-left: 200px #BDBABD solid;position: relative;">
                                    <b style="font-style: normal;display: block;position: absolute;top: -50px;left: -90px;width: 100px;">测量次数</b>
                                    <em style="font-style: normal;display: block;position: absolute;top: -30px;left: -200px;width: 100px;">测量内容</em>
                                </div>
                            </th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th colspan="3">测量结果</th>
                            </tr>
                            <tr>
                            <td>电阻臂R0(Ω)</td>
                            <td>{{$rb1}}</td>
                            <td>{{$rb2}}</td>
                            <td>{{$rb3}}</td>
                            <td rowspan="4" style="width: 10%">S={{$s}}</td>
                            <td rowspan="4" style="width: 10%"></td>
                            </tr>
                            <tr>
                                <td>偏转格数Δn</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>变化量ΔR0(Ω)</td>
                                <td>{{$ra_change1}}</td>
                                <td>{{$ra_change2}}</td>
                                <td>{{$ra_change3}}</td>
                                </tr>
                            <tr>
                            <td>电桥灵敏度S</td>
                            <td>{{ $s1}}</td>
                            <td>{{ $s2}}</td>
                            <td>{{ $s3}}</td>
                            </tr>
                        </table>
                        <!-- 3.自组式直流电桥测量电阻值 -->
                        <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;text-align: center;">
                            <tr>
                                <th colspan="8" style="text-align: left;">3.自组式直流电桥测量电阻值</th>
                            </tr>
                            <tr>
                            <th style="width: 200px;padding: 0;">
                                <div style=" border-top: 55px #D6D3D6 solid;width: 0px;height: 0px;border-left: 200px #BDBABD solid;position: relative;">
                                    <b style="font-style: normal;display: block;position: absolute;top: -50px;left: -90px;width: 100px;">测量次数</b>
                                    <em style="font-style: normal;display: block;position: absolute;top: -30px;left: -200px;width: 100px;">测量内容</em>
                                </div>
                            </th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th colspan="3">测量结果</th>
                            </tr>
                            <tr>
                                <td>R1(Ω)</td>
                                <td>200</td>
                                <td>500</td>
                                <td>1000</td>
                                <td rowspan="4" style="width: 10%">RX={{$rxx}}</td>
                                <td rowspan="4" style="width: 10%"></td>
                                <td rowspan="4" style="width: 10%">Ω</td>
                            </tr>
                            <tr>
                                <td>R2(Ω)</td>
                                <td>100</td>
                                <td>1000</td>
                                <td>4000</td>
                            </tr>
                            <tr>
                                <td>电阻臂R0(Ω)</td>
                                <td>
                                    {{$rc1}}
                                </td>
                                <td>{{$rc2}}</td>
                                <td>{{$rc3}}</td>
                            </tr>
                            <tr>
                            <td>待测电阻值RX(Ω)</td>
                            <td>{{$rx_b1}}</td>
                            <td>{{$rx_b2}}</td>
                            <td>{{$rx_b3}}</td>
                            </tr>
                        </table>
                        <!-- 4.测量并计算自组式直流电桥的灵敏度 -->
                        <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;text-align: center;">
                            <tr>
                                <th colspan="8" style="text-align: left;">4.测量并计算自组式直流电桥的灵敏度</th>
                            </tr>
                            <tr>
                            <th style="width: 200px;padding: 0;">
                            <div style=" border-top: 55px #D6D3D6 solid;width: 0px;height: 0px;border-left: 200px #BDBABD solid;position: relative;">
                                <b style="font-style: normal;display: block;position: absolute;top: -50px;left: -90px;width: 100px;">测量次数</b>
                                <em style="font-style: normal;display: block;position: absolute;top: -30px;left: -200px;width: 100px;">测量内容</em>
                            </div>
                            </th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th colspan="3">测量结果</th>
                            </tr>
                            <tr>
                            <td>电阻臂R0(Ω)</td>
                            <td>{{$rd1}}</td>
                            <td>{{$rd2}}</td>
                            <td>{{$rd3}}</td>
                            <td rowspan="4" style="width: 10%">S={{$ss}}</td>
                            <td rowspan="4" style="width: 10%"></td>
                            </tr>
                            <tr>
                                <td>偏转格数Δn</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>变化量ΔR0(Ω)</td>
                                <td>{{$rb_change1}}</td>
                                <td>{{$rb_change2}}</td>
                                <td>{{$rb_change3}}</td>
                                </tr>
                            <tr>
                            <td>电桥灵敏度S</td>
                            <td>{{$ss1}}</td>
                            <td>{{$ss1}}</td>
                            <td>{{$ss1}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- 六：思考题 -->
        <div>
            <h4 style="margin-bottom: 0%;text-align: left;font-weight: 500;color: #363739;">六：思考题</h4>
            <div style="text-align: right;margin-bottom: 1%;color: #606166;font-size: 12px;">
                该部分得分：50分
            </div>
            <div style=" background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                <div>
                    Ⅰ.选择题(选择题部分：40分)
                    <div style="text-indent: 1em;margin:1%;">
                        <div style="margin-bottom: 10px;">1.单独对于实验仪器本身来说，电压源的电压值是({{$xz1}}&nbsp;&nbsp;&nbsp;&nbsp;)？</div>
                        <div style="text-indent: 2em;margin: 5px auto;">A.可调节的</div>
                        <div style="text-indent: 2em;margin: 5px auto;">B.不可调节的</div>
                        <div style="text-indent: 2em;margin: 5px auto;">C.0 V</div>
                        <div style="text-indent: 2em;margin: 5px auto;">D.50 V</div>
                    </div>
                    <div style="text-indent: 1em;margin:1%;">
                        <div style="margin-bottom: 10px;">2.列有关比例臂的说法中，正确的是({{$xz1}}&nbsp;&nbsp;&nbsp;&nbsp;)？</div>
                        <div style="text-indent: 2em;margin: 5px auto;">A.自组式直流电桥的比例臂可以随意选取</div>
                        <div style="text-indent: 2em;margin: 5px auto;">B.自组式直流电桥的比例臂不可以选取10:1</div>
                        <div style="text-indent: 2em;margin: 5px auto;">C.自组式直流电桥的比例臂可以选取1:1</div>
                        <div style="text-indent: 2em;margin: 5px auto;">D.自组式直流电桥的比例臂只有固定的几个选项</div>
                    </div>
                    <!-- <textarea rows="10"></textarea> -->
                    Ⅱ.判断题(判断题部分：10分)
                    <!-- <textarea rows="10"></textarea> -->
                    <div style="text-indent: 1em;margin:1%;">
                        <div style="margin-bottom: 10px;">1.在实验初始状态下，检流计需要调零。 (&nbsp;{{$pd1}}&nbsp;&nbsp;&nbsp;)</div>
                        <div style="margin-bottom: 10px;">2.在实验过程中，只需要使用一个滑线变阻器。 ({{$pd2}}&nbsp;&nbsp;&nbsp;&nbsp;)</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 七：线上资源 -->
        <div>
            <h4 style="text-align: left;font-weight: 500;color: #363739;">七：线上资源</h4>
            <div style=" background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                <div style="text-indent: 1em;margin:1%;">
                    <div style="margin-bottom: 10px;">1）在线实验报告系统链接：<a href="http://180.76.111.200/#/login">http://180.76.111.200/#/login</a></div>
                    <div style="margin-bottom: 10px;">2）在线资源链接：FTP://ftp.cs.nsu.edu.cn/大学物理实验</div>
                    <div>
                        3）ttps://www.renrendoc.com/paper/88259084.html
                    </div>
                </div>
            </div>
        </div>
        <br />
    </div>
</div>
</body>
</html>

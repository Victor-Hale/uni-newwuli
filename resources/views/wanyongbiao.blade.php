<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>实验八 万用表的改装设计</title>
    <!-- <link rel="stylesheet" href="../assets/css/xiangShi.css"> -->

</head>

<body style=" height: 100%;margin: 0;padding: 0;">
    <!-- 校徽 -->
    <div style="height: 45px;width: 200px;background-repeat: no-repeat;margin-top: 10px;margin-left: 15px;">
        <img src="img/pic/school.jpg" alt="">--}}
    </div>
    <div style="width: 90%;margin: 0 auto;">
        <!-- 标题 + 总分 -->
        <div style="width: 90%;margin: 0 auto;">
            <h1 style="font-weight: 500;font-size: 25px;display: block;width: 100%;height: 30px;line-height: 30px;text-align: center;">实验八万用表的改装设计</h1>
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
                            <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">{{ $student_num}}</td>
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
                        使用微安表500µA档位进行实验电路设计, 实现万用表的基本功能。要求改装后的万用表电流满偏量程为10mA，电压满偏量程为5V和欧姆表量程比率为×1Ω。
                    </div>
                </div>
            </div>
            <!-- 三：实验仪器 -->
            <div>
                <h4 style="text-align: left;font-weight: 500;color: #363739;">三：实验仪器</h4>
                <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                    <div>
                        微安表1个、六档位多档开关1个、9999.9型电阻箱3个、红黑表笔1副、待测信号箱1个、单刀开关1个、1.5V干电池1个
                    </div>
                </div>
            </div>
            <!-- 四：实验原理 -->
            <div>
                <h4 style="text-align: left;font-weight: 500;color: #363739;">四：实验原理</h4>
                <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                    <div>
                        <p style="text-indent: 2em;">万用表实际上是一种多用途电表，由一个高灵敏度的电流表，配以不同的电路组成，只需通过多档转换开关，就可以测量电路的电流、电压，电阻等。</p>
                        <p style="text-indent: 2em;">根据《电表改装设计实验》的内容和原理，要将直流电流档扩程，直流电压档改装，欧姆档改装三者融合在一个电路中，以实现万用表的基本功能——即在此电路中，通过不同的测量挡位开关选择，达到测量电流、电压及电阻阻值的三项功能。</p>
                        <p style="text-indent: 2em;">为此，根据提供的实验仪器与设备，我们设计了如图8.1所示的电路原理图。在此电路的搭建过程中，按照先并联分流电阻R1，扩程直流电流档;再串联分压电阻R2，改装直流电压档;最后在电路中串并联电压源、校准电阻R3、调零电阻R4、单刀开关等设备后组装实现电路的欧姆档测量功能。</p>
                        <!-- <div style="background-image: url(./img/p1.jpg);background-repeat: no-repeat;height: 350px;background-position: center center;text-align: center;margin: 0;"></div> -->

                        <div style="text-align: center;">
                         <img src="img/pic/wanyong_p1.jpg" style="margin: auto;" alt="">
                        </div>
                        <p style="text-indent: 2em;">在进行本实验电路搭建时，要注意各电阻值的计算与《电表改装设计实验》有所不同，具体注意如下：</p>
                        <p style="text-indent: 2em;">1. 扩程直流电流档，分流电阻的计算不变。</p>
                        <p style="text-indent: 2em;">2. 改装直流电压档，分压电阻的计算时，以及改装欧姆档，凡是涉及表头内阻时，都应注意此时表头的内阻大小已变为微安表内阻与分流电阻R1并联后的阻值了，而表头的量程程已变为10mA了。</p>
                        <p style="text-indent: 2em;">3. 另外，改装欧姆档时需校准时，应借用R2来调试校准，因此建议在电路搭建时，先进行扩程直流电流档电路搭建，其次进行欧姆档改装，最后进行直流电压改装的顺序进行。</p>
                        <p style="text-indent: 2em;">4. 电路搭建好后，具体测量时要注意，测量电流和电压时，务必断开单刀开关，测量电阻时务必接通单刀开关。</p>

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
                        <p style="text-indent: 2em;">从微安表表盘读取表头满量程电流Ig和对应的表头内阻Rg，并机械调零。</p>
                        <p style="text-indent: 2em;">1. 根据改装后的电流表满偏量程Im为10mA，电压表满偏量程Vm为5V和欧姆表量程比率为×1的要求，分别计算或调试出所需电流档分流电阻值R1、电压档分压电阻值R2、欧姆档调零电阻值R4、欧姆档校准电阻值R3。</p>
                        <p style="text-indent: 2em;">2. 按照改装要求，连接电路，完成电阻箱阻值的调节，并分别测量出待测信号箱的未知电压Vx、电流Ix以及电阻值Rx。并记录数据。</p>
                        <p style="text-indent: 2em;">注意：测量电流和电压时，务必断开单刀开关，测量电阻时务必接通单刀开关。</p>
                        <p style="text-indent: 2em;">1.待改装微安表参数记录：</p>
                        <p style="text-indent: 2em;">微安表满量程电流Ig=
                            <span>{{$one_ig}}</span>
                        mA;表头内阻Rg=
                            <span>{{ $one_rg}}</span>
                        Ω;</p>
                        <p style="text-indent: 2em;">电池电压E=
                            <span>{{$one_e}}</span>
                        V;</p>
                        <p style="text-indent: 2em;">2.各电阻阻值设置计算（计算结果要求保留1位小数）</p>
                        <p style="text-indent: 2em;">⑴分流电阻R1计算：</p>
                        <p style="text-indent: 2em;">仅闭合转换开关1，此时分流电阻计算公式为：</p>
                        <!-- <div style="background-image: url(./img/p2.jpg);background-repeat: no-repeat;height: 60px;width: 100%;background-position: center center;text-align: center;margin: 0;"><img src="./img/p2.jpg" alt=""></div> -->
                      <div style="text-align: center;"> <img src="img/pic/wanyong_p2.jpg" alt=""></div>
                        <p style="text-indent: 2em;">带入Rg=
                            <span>{{$two_one_rg}}</span>
                        Ω;Ig=
                            <span>{{$two_one_ig}}</span>
                        mA;Im=
                            <span>{{$two_one_im}}</span>
                        mA;</p>
                        <p style="text-indent: 2em;">计算出：R1=
                            <span>{{$two_one_r1}}</span>
                        Ω;</p>
                        <p style="text-indent: 2em;">接入待测电流，得到：Ix=
                            <span>{{$two_one_lx}}</span>
                        mA;</p>
                        <p style="text-indent: 2em;">为了后续改装电压档和欧姆档的方便，根据电路图，在扩程电流档实现后，可将整个电流扩程电路看作为：</p>
                        <p style="text-indent: 2em;">内阻：R_n=(R_g∕)⁄R_1 =
                            <span>{{$two_one_rn}}</span>
                            <span>{{$two_one_im2}}</span>
                        mA的电流表。</p>
                        <p style="text-indent: 2em;">⑵分压电阻R2计算：</p>
                        <p style="text-indent: 2em;">仅闭合转换开关2，此时分压电阻计算公式为：</p>
                        <!-- <div style="background-image: url(./img/p3.jpg);background-repeat: no-repeat;height: 60px;width: 100%;background-position: center center;text-align: center;margin: 0;"></div> -->
                       <div style="text-align: center;"> <img src="img/pic/wanyong_p3.jpg" alt=""></div>
                        <p style="text-indent: 2em;">带入Vm=
                            <span>{{$two_two_vm}}</span>
                            Ω;</p>
                        <p style="text-indent: 2em;">im={{$two_two_im}} Rn={{$two_two_rn}}</p>

                        <p style="text-indent: 2em;">计算出R2=
                            <span>{{$two_two_r2}}</span>
                            Ω;</p>
                        <p style="text-indent: 2em;">接入待测电压，得到：Vx=={{$two_two_vx}} V;</p>
                        <p style="text-indent: 2em;">⑶调零电阻R3计算（理论值）：</p>
                        <p style="text-indent: 2em;">根据电路图，仅闭合转换开关3，短接红黑表笔，此时调零电阻计算公式为
                            <!-- <div style="background-image: url(./img/p4.jpg);background-repeat: no-repeat;height: 60px;width: 100%;background-position: center center;text-align: center;margin: 0;"></div> -->
                         <div style="text-align: center;"> <img src="img/pic/wanyong_p4.jpg" alt=""></div>
                        </p>
                        <p style="text-indent: 2em;">带入E=
                            <span>{{ $two_thr_e}}</span>
                            Ω;</p>
                        <p style="text-indent: 2em;">im={{$two_thr_im}} Rn={{$two_thr_rn}}</p>



                        <p style="text-indent: 2em;">计算出R3=
                            <span>{{$two_thr_r3}}</span>
                            Ω;</p>
                        <p style="text-indent: 2em;">⑷校准电阻R4计算（理论值）：</p>
                        <p style="text-indent: 2em;">根据电路图及此微安表表盘刻度，闭合转换开关3和单刀开关，红黑表笔接100Ω电阻。此时校准电阻计算公式为：
                            <!-- <div style="background-image: url(./img/p5.jpg);background-repeat: no-repeat;height: 90px;width: 100%;background-position: center center;text-align: center;margin: 0;"></div> -->
                         <div style="text-align: center;"><img src="img/pic/wanyong_p5.jpg" alt=""></div>
                        </p>
                        <p style="text-indent: 2em;">带入：E=
                            <span>{{$two_four_e}}</span>
                            Ω;</p>
                        <p style="text-indent: 2em;">i3={{$two_four_i3}}rx={{$two_four_rx}} r3+rn={{$two_four_r3rn}}</p>



                        <p style="text-indent: 2em;">计算出R4=
                            <span>{{$two_four_r4}}</span>
                            Ω;</p>
                        <p style="text-indent: 2em;">接入待测电阻，得到Rx=
                            <span>{{$two_four_rx2}}</span>
                            Ω;</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- 六：思考题 -->
        <div>
            <h4 style="margin-bottom: 0%; text-align: left;
            font-weight: 500;
            color: #363739;">六：思考题</h4>
            <div style="text-align: right;margin-bottom: 1%;color: #606166;font-size: 12px;">
                该部分得分：50分
            </div>
            <div class="formTable">
                <div style="text-indent: 1em;margin:1%;text-align: left;">下图是小明同学根据万用表改装设计实验要求，搭建的电路测试实验截图，请问：
                    <!-- <div style="background-image: url(./img/p6.jpg);background-repeat: no-repeat;height: 400px;width: 100%;background-position: center center;text-align: center;margin: 0;"></div> -->
               <div style="text-align: center;"><img src="img/pic/wanyong_p6.jpg" alt=""></div>
                    <div style="text-indent: 1em;margin:1%;text-align: left;">
                        <div style="margin-bottom: 10px;">1.指出图中各电阻箱的作用：</div>
                        <div style="text-indent: 2em;margin: 5px ;  float: left;">电阻箱1（ {{$thir_one_one}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ）</div>
                        <div style="text-indent: 2em;margin: 5px ; float: left;">电阻箱2（ {{$thir_one_two}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ）</div>
                    </div><br><br>
                    <div style="text-indent: 1em;margin:1%;">
                        <div style="text-indent: 2em;margin: 5px ;  float: left;">电阻箱3（{{$thir_one_three}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ）</div>
                        <div style="text-indent: 2em;margin: 5px ;  float: left;">电阻箱4（{{ $thir_one_four}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ）</div>
                    </div><br><br>
                    <div style="text-indent: 1em;margin:1%;text-align: left;">
                        <div style="margin-bottom: 10px;">2.判断 T or F</div>
                        <div style="text-indent: 2em;margin: 5px auto;">①实验测试前，微安表未机械调零。({{$thir_two_one}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</div>
                        <div style="text-indent: 2em;margin: 5px auto;">②实验测试中，在测量电流时，应该将单刀开关断开。({{$thir_two_two}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</div>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>实验五 箱式直流电桥测量电阻</title>
</head>

<body>
        <!-- 校徽 -->
        <div
            style="height: 45px;width: 200px;background-repeat: no-repeat;margin-top: 10px;margin-left: 15px;">
          <img src="img/pic/school.jpg">-->
        </div>
        <div style="width: 90%;text-align: center;margin-left: 5%;">
            <!-- 标题 + 总分 -->
            <div style="text-align: center;white-space:nowrap;">
                <h1 style="font-weight: 500;font-size: 25px;display: block;width: 100%;height: 30px;line-height: 30px;text-align: center;">
                    实验项目 箱式直流电桥测量电阻</h1>
            </div>
            <div style="float: right;">
                    <h5 style="font-weight: 400;width: 100%;text-align: right;font-size: 15px;margin: 0;">总分：</h5>
                    <h1 style="font-weight: 400;text-align: right;font-size: 80px;margin: 0;">95</h1>
            </div>
            <!-- 主体 -->
            <div style="padding-top: 8%;">
                <!-- 一：基本信息 -->
                <div>
                    <h4 style="text-align: left;font-weight: 500;color: #363739;">一：基本信息</h4>
                    <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                        <table cellpadding="15" cellspacing="0" style="margin: 0 auto;width:90%;table-layout:fixed;"
                            frame="void" rules="none">
                            <tr>
                                <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">学生姓名</td>
                                <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">
                                    {{$student_name}}
                                </td>
                                <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">学生层次</td>
                                <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">
                                    {{$student_level}}
                                </td>
                                <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">学生专业</td>
                                <td style="width:15%;word-wrap:break-word;padding-bottom: 0;border-bottom: 2px solid #000;">
                                    {{$student_spec}}
                                </td>
                                <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">学生年级</td>
                                <td style="width:15%;word-wrap:break-word;padding-bottom: 0;border-bottom: 2px solid #000;">
                                    {{$student_year}}
                                </td>
                            </tr>
                            <tr>
                                <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">学生班级</td>
                                <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">
                                    {{$student_class}}
                                </td>
                                <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">学生学号</td>
                                <td style="width:15%;word-wrap:break-word;padding-bottom: 0;border-bottom: 2px solid #000;">
                                    {{$student_num}}
                                </td>
                                <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">任课教师</td>
                                <td style="width:15%;word-wrap:break-word;padding-bottom: 0;border-bottom: 2px solid #000;">
                                    {{$student_teacher}}
                                </td>
                                <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">完成日期</td>
                                <td style="width:15%;word-wrap:break-word;padding-bottom: 0;border-bottom: 2px solid #000;">
                                    {{$created_at}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- 二：实验目的 -->
                <div>
                    <h4 style="text-align: left;font-weight: 500;color: #363739;">二：实验目的</h4>
                    <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                        <p style="text-indent: 2em;">
                            <!-- <textarea rows="10"></textarea> -->
                            本实验是用电桥箱和待测电阻等仪器组成惠斯通电桥电路测量电阻，掌握调节电桥平衡的方法，并要求了解电桥灵敏度与元件参数之间的关系，从而正确选择这些元件，以达到所要求的测量精度。
                        </p>
                    </div>
                </div>
                <!-- 三：实验仪器 -->
                <div>
                    <h4 style="text-align: left;font-weight: 500;color: #363739;">三：实验仪器</h4>
                    <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                        <p style="text-indent: 2em;">
                            <!-- <textarea rows="10"></textarea> -->
                            电桥箱（1个）、待测电阻。
                        </p>
                    </div>
                </div>
                <!-- 四：实验原理 -->
                <div>
                    <h4 style="text-align: left;font-weight: 500;color: #363739;">四：实验原理</h4>
                    <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                        <div>
                            <div
                                style="background-repeat: no-repeat;height: 220px;width: 100%;background-position: center center;text-align: center;margin: 0;">
                               <img src="img/pic/PictureOne.png">-->
                            </div>
                            <div style="text-align: center;">图5.1 惠斯通电桥</div>
                            <p style="text-indent: 2em;">
                                电桥是一种用电位比较法进行测量的仪器，直流电桥是用来测量电阻或与电阻有关的物理量的仪器，主要由比例臂、比较臂、检流计等构成桥式线路。
                            </p>
                            <p style="text-indent: 2em;">
                                1）直流电桥平衡条件
                            </p>
                            <p style="text-indent: 2em;">
                                如图5.1所示，检流计G对两端点B、D的电位进行比较，当B、D电位相等时，检流计中无电流通过，称电桥达到平衡。电桥平衡时有：
                            <div
                                style="background-repeat: no-repeat;width: 90px;height: 45px;background-position: center center;margin-left: 30%;background-size: 60% 60%;float: left;">
                               <img src="img/pic/PictureTwo.png">-->
                            </div>
                            <div
                                style="background-repeat: no-repeat;width: 200px;height: 45px;background-position: center center;margin-left: 50%;background-size: 100% 100%;">
                               <img src="img/pic/PictureThree.png">-->
                            </div>
                            </p>
                            <p style="text-indent: 2em;">
                                2）直流电桥平衡测量电阻的误差
                            </p>
                            <p style="text-indent: 2em;">
                                平衡电桥的测量电阻误差有两个来源：
                            </p>
                            <p style="text-indent: 2em;">
                                （一）桥臂电阻的误差
                            </p>
                            <p style="text-indent: 2em;">
                                RX的测量误差可用下列不确定度公式估计：
                            </p>
                            <div
                                style="background-repeat: no-repeat;width: 100%;height: 45px;background-position: center center;text-align: center;margin: 0;">
                               <img src="img/pic/PictureFour.png" alt="">-->
                            </div>
                            <p style="text-indent: 2em;">
                                式中，σR1、σR2、σR0分别是R1，R2，R0的不确定度。为消除R1 ⁄ R2的比值误差，可交换R1，R2的位置再测，取两次结果的RX1，RX2的平均值为RX，有
                            </p>
                            <div
                                style="background-repeat: no-repeat;width: 100%;height: 45px;background-position: center center;text-align: center;margin: 0;">
                                <img src="img/pic/PictureFive.png" alt="">-->
                            </div>
                            <p style="text-indent: 2em;">
                                （二）电桥灵敏度的误差
                            </p>
                            <p style="text-indent: 2em;">
                                电桥是否已经平衡，是由检流计是否指零来判断的。因而检流计的灵敏度大小直接影响了判断性。换言之，判断检流计是否指零所产生的误差决定了电桥的灵敏度。
                                电桥平衡时，改变单位电阻检流计的偏转格数Δn称作电桥灵敏度。
                            </p>
                            <div
                                style="background-repeat: no-repeat;width: 90px;height: 45px;background-position: center center;margin-left: 30%;background-size: 100% 100%;float: left;">
                               <img src="img/pic/PictureSix.png" alt="">-->
                            </div>
                            <div
                                style="background-repeat: no-repeat;width: 200px;height: 45px;background-position: center center;margin-left: 50%;background-size: 100% 100%;">
                              <img src="img/pic/PictureSeven.png" alt="">-->
                            </div>
                            <p style="text-indent: 2em;">
                                它表示电桥平衡后，RX的相对该变量ΔRX / RX 所引起的检流计偏转的格数Δn，具体测量时用ΔR0/R0 代替ΔRX/RX 。
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 五：实验内容及实验数据记录与处理 -->
                <div>
                    <h4 style="text-align: left;font-weight: 500;color: #363739;margin-bottom: 0%;">五：实验内容及实验数据记录与处理
                    </h4>
                    <div style="text-align: right;margin-bottom: 1%;color: #606166;font-size: 12px;">
                        该部分得分：45分
                    </div>
                    <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                        <div>
                            <!-- <textarea rows="10"></textarea> -->
                            <p style="text-indent: 2em;">
                                5.1 实验内容与步骤
                            </p>
                            <p style="text-indent: 2em;">1.箱式直流电桥测量电阻</p>
                            <p style="text-indent: 2em;">
                                (1)首先，保持电桥箱的内部电源开关（B）和内接检流计开关（G）均处于断开状态，连接待测电阻RX至电桥箱的“RX”接线柱上。
                            </p>
                            <p style="text-indent: 2em;">
                                (2)线路连接好以后，检流计调零。调零后，合上内部电源开关（B）。
                            </p>
                            <p style="text-indent: 2em;">
                                (3)选取合适的比例臂（×1档），合上内接检流计开关（G），调节电阻臂R0的阻值使电路平衡，测量三次，记录实验数据，并计算出待测电阻值Rx。
                            </p>
                            <p style="text-indent: 2em;">
                                (4)根据待测电阻值RX，选定一个合适的比例臂，调节电桥平衡，记下电桥平衡时电阻臂的电阻值R0，然后在小范围内改变电阻臂的电阻值，记下电阻臂相对平衡位置改变的值，即ΔR0，和指针相对平衡位置偏转的格数，即△n，测量三次，并根据电桥灵敏度公式:
                                S=△n/(△R0/ R0)计算出直流电桥的电桥灵敏度。
                            </p>
                            <p style="text-indent: 2em;">
                                5.2 系统操作截图
                            </p>
                            <div
                                style="background-repeat: no-repeat;background-position: center center;text-align: center;width: 100%;height: 741px;background-size: 95% 95%;">
                                <img src="img/pic/PictureEight.png" alt="">-->
                            </div>
                            <div
                                style="background-repeat: no-repeat;background-position: center center;text-align: center;width: 100%;height: 741px;background-size: 95% 95%;">
                                <img src="img/pic/PictureNine.png" alt="">-->
                            </div>
                            <div
                                style="background-repeat: no-repeat;background-position: center center;text-align: center;width: 100%;height: 741px;background-size: 95% 95%;">
                             <img src="img/pic/PictureTen.png" alt="">-->
                            </div>
                            <p style="text-indent: 2em;">
                                5.3 实验数据记录与处理
                            </p>
                            <div>
                                <!-- 1.箱式直流电桥测量电阻值 -->
                                <table border="1" cellpadding="10" cellspacing="0"
                                    style="text-align: center;margin: 0 auto;width:90%;table-layout:fixed;">
                                    <tr>
                                        <th colspan="8" style="text-align: left;">1.箱式直流电桥测量电阻值</th>
                                    </tr>
                                    <tr>
                                        <!-- <th style="position:relative;">
                                        <span style="float:left;margin-top:10px;">测量次数</span>
                                        <span style="border-top:solid black 1px;width:100%;position:absolute;left: 0px;top: 0px;transform: rotate(30deg);transform-origin: left top;"></span>
                                        <span style="float:right;margin-bottom:10px;">测量内容</span>
                                    </th> -->
                                        <!-- <th style="position: relative;width: 100%;line-height: 5px;text-align: left;">
                                        <div style="position: absolute;width: 1px;height: 20vh;top: 0%;left: 0%;background-color: #000;transform: rotate(-75deg);transform-origin: top;">
                                            <div style="height: 62px;line-height: 22px;position: absolute;left: 4px;bottom: 0px;">测量次数</div>
                                            <div style="height: 22px;line-height: 22px;position: absolute;right: 4px;top: 0px;">测量内容</div>
                                        </div>
                                    </th> -->
                                        <th colspan="2">
                                            <div>测量次数→</div>
                                            <div>测量内容↓</div>
                                        </th>
                                        <th style="width:15%;word-wrap:break-word;">1</th>
                                        <th style="width:15%;word-wrap:break-word;">2</th>
                                        <th style="width:15%;word-wrap:break-word;">3</th>
                                        <th style="width:15%;word-wrap:break-word;" colspan="3">测量结果</th>
                                    </tr>
                                    <tr>
                                        <td style="width:7%;word-wrap:break-word;" colspan="2">比例臂</td>
                                        <td style="width:7%;word-wrap:break-word;">0.1</td>
                                        <td style="width:7%;word-wrap:break-word;">0.1</td>
                                        <td style="width:7%;word-wrap:break-word;">0.1</td>
                                        <td rowspan="3" style="width:7%;word-wrap:break-word;">RX={{$rx}}</td>
                                        <td rowspan="3" contenteditable="true" style="width:7%;word-wrap:break-word;">
                                        </td>
                                        <td rowspan="3" style="width:7%;word-wrap:break-word;">Ω</td>
                                    </tr>
                                    <tr>
                                        <td style="width:7%;word-wrap:break-word;" colspan="2">电阻臂R0(Ω)</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{$ra1}}</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{$ra2}}</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{$ra3}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:7%;word-wrap:break-word;" colspan="2">待测电阻值RX(Ω)</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{$rx1}}</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{$rx1}}</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{$rx1}}</td>
                                    </tr>
                                </table>
                                <!-- 2.测量并计算箱式直流电桥的灵敏度 -->
                                <table border="1" cellpadding="10" cellspacing="0"
                                    style="text-align: center;margin: 0 auto;width:90%;table-layout:fixed;">
                                    <tr>
                                        <th colspan="9" style="text-align: left;">2.测量并计算箱式直流电桥的灵敏度</th>
                                    </tr>
                                    <tr>
                                        <th colspan="2">
                                            <div>测量次数→</div>
                                            <div>测量内容↓</div>
                                        </th>
                                        <th style="width:15%;word-wrap:break-word;">1</th>
                                        <th style="width:15%;word-wrap:break-word;">2</th>
                                        <th style="width:15%;word-wrap:break-word;">3</th>
                                        <th style="width:15%;word-wrap:break-word;" colspan="4">测量结果</th>
                                    </tr>
                                    <tr>
                                        <td style="width:7%;word-wrap:break-word;" colspan="2">电阻臂R0(Ω)</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{ $rb1}}</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{ $rb2}}</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{ $rb3}}</td>
                                        <td rowspan="4" style="width:7%;word-wrap:break-word;" colspan="2">S=</td>
                                        <td rowspan="4" contenteditable="true" style="width:7%;word-wrap:break-word;"
                                            colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:7%;word-wrap:break-word;" colspan="2">变化量ΔR0(Ω)</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">1</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">2</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">3</td>
                                    </tr>
                                    <tr>
                                        <td style="width:7%;word-wrap:break-word;" colspan="2">偏转格数Δn</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{$rchange1a}}</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{$rchange2a}}</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{$rchange3a}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:7%;word-wrap:break-word;" colspan="2">电桥灵敏度S</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{$s1}}</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{$s2}}</td>
                                        <td style="width:7%;word-wrap:break-word;" contenteditable="true">{{$s3}}</td>
                                    </tr>
                                </table>
                                <!-- 3.箱式直流电桥测量电阻值 -->
                                <table border="1" cellpadding="10" cellspacing="0"
                                    style="text-align: center;margin: 0 auto;width:90%;table-layout:fixed;">
                                    <tr>
                                        <th colspan="8" style="text-align: left;">3.箱式直流电桥测量电阻值</th>
                                    </tr>
                                    <tr>
                                        <th colspan="2">
                                            <div>测量次数→</div>
                                            <div>测量内容↓</div>
                                        </th>
                                        <th colspan="2">R2</th>
                                        <th colspan="2">R3</th>
                                        <th colspan="2">R1</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="t1">比例臂</td>
                                        <td colspan="2">1</td>
                                        <td colspan="2">100</td>
                                        <td colspan="2">0.1</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="t1">电阻臂R0(Ω)</td>
                                        <td colspan="2" contenteditable="true">{{$rc1}}</td>
                                        <td colspan="2" contenteditable="true">{{$rc2}}</td>
                                        <td colspan="2" contenteditable="true">{{$rc3}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="t1">待测电阻值RX(Ω)</td>
                                        <td colspan="2" contenteditable="true">{{$rwait1}}</td>
                                        <td colspan="2" contenteditable="true">{{$rwait2}}</td>
                                        <td colspan="2" contenteditable="true">{{$rwait3}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 六：思考题 -->
                <div>
                    <h4 style="text-align: left;font-weight: 500;color: #363739;margin-bottom: 0%;">六：思考题</h4>
                    <div style="text-align: right;margin-bottom: 1%;color: #606166;font-size: 12px;">
                        该部分得分：50分
                    </div>
                    <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                        <div>
                            Ⅰ.选择题(选择题部分：40分)
                            <!-- 选择题第一题 -->
                            <div style="text-indent: 1em;margin:1%;">
                                <div style="margin-bottom: 10px;">
                                    1.在使用箱式直流电桥测量电阻时，为什么选取的比例臂一般应使单电桥的四个测量盘尽可能用上({{$xz1}}&nbsp;&nbsp;
                                    <span id="value"></span>
                                    &nbsp;&nbsp;)?
                                </div>
                                <!-- <div style="text-indent: 2em;margin: 5px auto;">A.测量盘必须全用上</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.比例臂的选取与测量盘使用个数无关</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.使用一个测量盘时，读出的测量值精度最高</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.读出的测量值有效位数多，测量精度有保证</div> -->
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="A" name="radio" onclick="show_select()">
                                        A.测量盘必须全用上
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="B" name="radio" onclick="show_select()">
                                        B.比例臂的选取与测量盘使用个数无关
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="C" name="radio" onclick="show_select()">
                                        C.使用一个测量盘时，读出的测量值精度最高
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="D" name="radio" onclick="show_select()">
                                        D.读出的测量值有效位数多，测量精度有保证
                                    </label>
                                </div>
                            </div>
                            <!-- 选择题第二题 -->
                            <div style="text-indent: 1em;margin:1%;">
                                <div style="margin-bottom: 10px;">2.为了提高电桥测量的灵敏度，应采取哪些措施({{$xz1}}&nbsp;&nbsp;
                                    <span id="valueTwo"></span>
                                    &nbsp;&nbsp;)?
                                </div>
                                <!-- <div style="text-indent: 2em;margin: 5px auto;">A.提高电源电压</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.使用低灵敏度检流计</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.比例臂可以随意选取</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.不使用等臂电桥</div> -->
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="A" name="radioTwo" onclick="show_selectTwo()">
                                        A.提高电源电压
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="B" name="radioTwo" onclick="show_selectTwo()">
                                        B.使用低灵敏度检流计
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="C" name="radioTwo" onclick="show_selectTwo()">
                                        C.比例臂可以随意选取
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="D" name="radioTwo" onclick="show_selectTwo()">
                                        D.不使用等臂电桥
                                    </label>
                                </div>
                            </div>
                            <!-- <textarea rows="10"></textarea> -->
                            Ⅱ.判断题(判断题部分：10分)
                            <!-- <textarea rows="10"></textarea> -->
                            <div style="text-indent: 1em;margin:1%;">
                                <div style="margin-bottom: 10px;">
                                    1.因为电桥箱是设计生产精良的专业实验仪器，电桥箱中的检流计不用调零。(&nbsp;&nbsp;
                                    <span id="valueThree"></span>
                                    &nbsp;&nbsp;{{$pd1}})
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="√" name="radioThree" onclick="show_selectThree()">
                                        √
                                    </label>
                                    <label>
                                        <input type="radio" value="×" name="radioThree" onclick="show_selectThree()">
                                        ×
                                    </label>
                                </div>
                                <div style="margin-bottom: 10px;">2.在电阻值的测量过程中，只用按下内接检流计开关这一个开关。({{$pd2}}&nbsp;&nbsp;
                                    <span id="valueFour"></span>
                                    &nbsp;&nbsp;)
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="√" name="radioFour" onclick="show_selectFour()">
                                        √
                                    </label>
                                    <label>
                                        <input type="radio" value="×" name="radioFour" onclick="show_selectFour()">
                                        ×
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 七：线上资源 -->
                <div>
                    <h4 style="text-align: left;font-weight: 500;color: #363739;">七：线上资源</h4>
                    <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">1）在线实验报告系统链接：
                                <a style="text-decoration: none;" href="http://180.76.111.200/#/login">http://180.76.111.200/#/login</a></div>
                            <div style="margin-bottom: 10px;">2）在线资源链接：FTP://ftp.cs.nsu.edu.cn/大学物理实验</div>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>
</body>

</html>

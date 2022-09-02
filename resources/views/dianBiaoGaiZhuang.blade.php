<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>实验六 电表的改装设计</title>
    <!-- <link rel="stylesheet" href="../assets/css/dianBiaoGaiZhuangImages.css"> -->
</head>

<body style="height: 100%;margin: 0 auto;padding: 0;min-width: 500px;">
        <!-- 校徽 -->
        <div
            style="height: 45px;width: 200px;background-repeat: no-repeat;margin-top: 10px;margin-left: 15px;">
            <img src="img/pic/huoer/school.jpg">
        </div>
        <div style="width: 90%;text-align: center;margin-left: 5%;">
            <!-- 标题 + 总分 -->
            <div style="width: 90%;margin: 0 auto auto;">
                <h1 style="font-weight: 500;font-size: 25px;display: block;width: 100%;height: 30px;line-height: 30px;text-align: center;">实验三霍尔效应测量磁感应强度</h1>
            </div>
            <div style="height:120px;">
                <div style="width: 35%;float: right;">
                    <h5 style="font-weight: 400;width: 100%;text-align: center;font-size: 15px;margin: 0 auto;">总分:</h5>
                    <h1 style="font-weight: 400;text-align: right;font-size: 80px;margin: 0 auto;padding-right: 30px;">{{$grade}}</h1>
                </div>
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
                        <div>
                            <p style="text-indent: 2em;">
                                1)理解电流表和电压表改装量程的基本原理.
                            </p>
                            <p style="text-indent: 2em;">
                                2)掌握利用微安表改装为指定量程电流表的方法.
                            </p>
                            <p style="text-indent: 2em;">
                                3)掌握利用微安表改装为指定量程电压表的方法.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 三：实验仪器 -->
                <div>
                    <h4 style="text-align: left;font-weight: 500;color: #363739;">三：实验仪器</h4>
                    <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                        <p style="text-indent: 2em;">
                            99999.9型电阻箱、微安表、六档位多档开关、表笔、待测信号箱
                        </p>
                    </div>
                </div>
                <!-- 四：实验原理 -->
                <div>
                    <h4 style="text-align: left;font-weight: 500;color: #363739;">四：实验原理</h4>
                    <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                        <div>
                            <p style="text-indent: 2em;">
                                1）万用表简介
                            </p>
                            <p style="text-indent: 2em;">
                                万用表是实验室和工程测量中最常备的“工具”,它包含了分流,分压,整流等多种基本电路和电表改装的各种方法.
                            </p>
                            <p style="text-indent: 2em;">
                                万用表实际上是一种多用途电表,由一个高灵敏度的电流表(通常量程为50mA或100mA,又称微安表),配以不同的电路组成,可以测量交流和直流的电流及电压,电阻(有些还可测电感和电容)等.
                            </p>
                            <p style="text-indent: 2em;">
                                直流电流档(表)扩程改装
                            </p>
                            <div style="background-repeat: no-repeat;height: 250px;width: 100%;background-position: center center;text-align: center;margin: 0;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/PictureOne.png">
                            </div>
                            <p style="text-indent: 2em;">
                                当选择开关拨到mA档时，万用表呈现为一个多量程直流毫安表。它是利用不同的分流电阻与表头并联，达到扩大量程的目的。设电流表头原量程为，内阻为，扩程后的量程为I，则分流电阻由式（1）决定。
                            </p>
                            <div style="background-repeat: no-repeat;height: 50px;width: 100%;background-position: center center;text-align: center;margin: 0;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/one.png">
                            </div>
                            <p style="text-indent: 2em;">
                                式中：Rs —— 不同量程时需并联的分流电阻；
                            </p>
                            <p style="text-indent: 2em;">
                                N ——（N = I / Ig）为电表扩程的倍率。
                            </p>
                            <p style="text-indent: 2em;">
                                由式（1）可知，电表扩程倍率越大，分流电阻越小。
                            </p>
                            <p style="text-indent: 2em;">
                                直流电压档（表）改装
                            </p>
                            <div style="background-repeat: no-repeat;height: 180px;width: 100%;background-position: center center;text-align: center;margin: 0;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/PictureTwo.png">
                            </div>
                            <p style="text-indent: 2em;">
                                档位选择开关拨至V档时，万用表呈现为一个多量程直流电压表，它是利用不同的分压电阻与表头串联，达到改装的目的。
                                电流表串联的分压电阻数值由式（2）决定。
                            </p>
                            <div style="background-repeat: no-repeat;height: 50px;width: 100%;background-position: center center;text-align: center;margin: 0;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/Two.png">
                            </div>
                            <p style="text-indent: 2em;">
                                式中：VM —— 需要改装成电压表的满量程值；
                            </p>
                            <p style="text-indent: 2em;">
                                Ig —— 为电表的满量程值(如50μA或100μA).
                            </p>
                            <p style="text-indent: 2em;">
                                由式（2）可知，电阻Rf由扩程后电压的满度值决定。量程越大Rf就越大。
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 五：实验内容及实验数据记录与处理 -->
                <div>
                    <h4 style="text-align: left;font-weight: 500;color: #363739;margin-bottom: 0%;">五：实验内容及实验数据记录与处理</h4>
                    <div style="text-align: right;margin-bottom: 1%;color: #606166;font-size: 12px;">
                        该部分得分：45分
                    </div>
                    <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                        <div>
                            <p style="text-indent: 2em;">
                                直流电流档（表）扩程改装
                            </p>
                            <p style="text-indent: 2em;">进入实验场景窗体，进入第二个实验内容“电流表改装实验”。</p>
                            <div style="background-repeat: no-repeat;background-position: center center;text-align: center;width: 100%;height: 741px;background-size: 95% 95%;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/PictureThree.png">
                            </div>
                            <p style="text-indent: 2em;">
                                根据电流表改装实验原理，对实验器材进行连线。
                            </p>
                            <div style="background-repeat: no-repeat;background-position: center center;text-align: center;width: 100%;height: 741px;background-size: 95% 95%;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/PictureFour.png">
                            </div>
                            <p style="text-indent: 2em;">微安表调零。</p>
                            <div style="background-repeat: no-repeat;background-position: center center;text-align: center;width: 100%;height: 741px;background-size: 95% 95%;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/PictureFive.png">
                            </div>
                            <p style="text-indent: 2em;">
                                计算分流电阻值。实验中要求必须使用微安表的500档位进行实验改装.根据改装的量程(实验中要求将微安表改装为量程为10mA的电流表),从微安表表盘上读取表头内阻为560Ω.
                            </p>
                            <div style="background-repeat: no-repeat;background-position: center center;text-align: center;width: 100%;height: 741px;background-size: 95% 95%;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/PictureSix.png">
                            </div>
                            <p style="text-indent: 2em;">
                                调节电阻箱。双击打开电阻箱窗体,用鼠标点击阻值调节旋钮，调节电阻箱,使电阻箱的阻值等于计算得到的分流电阻值.
                            </p>
                            <div style="background-repeat: no-repeat;background-position: center center;text-align: center;width: 100%;height: 741px;background-size: 95% 95%;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/PictureSeven.png">
                            </div>
                            <p style="text-indent: 2em;">
                                测量待测信号箱的未知电流值.将改装好的电流表通过表笔连接到待测信号箱的“I”字上面的接线柱（注意正负极的连接）,并将多档开关置于所使用的档位,根据改装后的电流表测量出未知信号的直流电流值,并将测量结果填写到数据表格中.
                            </p>
                            <div style="background-repeat: no-repeat;background-position: center center;text-align: center;width: 100%;height: 741px;background-size: 95% 95%;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/PictureEight.png">
                            </div>
                            <p style="text-indent: 2em;">
                                直流电压档（表）扩程改装
                            </p>
                            <p style="text-indent: 2em;">
                                进入实验场景窗体，进入第二个实验内容“电压表改装实验”.
                            </p>
                            <div style="background-repeat: no-repeat;background-position: center center;text-align: center;width: 100%;height: 741px;background-size: 95% 95%;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/PictureNine.png">
                            </div>
                            <p style="text-indent: 2em;">
                                根据电压表改装实验原理，对实验器材进行连线。
                            </p>
                            <div style="background-repeat: no-repeat;background-position: center center;text-align: center;width: 100%;height: 741px;background-size: 95% 95%;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/PictureTen.png">
                            </div>
                            <p style="text-indent: 2em;">
                                微安表调零。
                            </p>
                            <p style="text-indent: 2em;">
                                计算分压电阻值。实验中要求必须使用微安表的500档位进行实验改装。根据改装的量程(实验中要求将微安表改装为量程为5V的电压表),从微安表表盘上读取表头内阻为560Ω.
                            </p>
                            <p style="text-indent: 2em;">
                                调节电阻箱。双击打开电阻箱窗体，用鼠标点击阻值调节旋钮，调节电阻箱，使电阻箱的阻值等于计算得到的分压电阻值。
                            </p>
                            <div style="background-repeat: no-repeat;background-position: center center;text-align: center;width: 100%;height: 741px;background-size: 95% 95%;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/PictureTenOne.png">
                            </div>
                            <p style="text-indent: 2em;">
                                测量待测信号箱的未知电压值.将改装好的电压表通过表笔连接到待测信号箱的“V”字上面的接线柱(注意正负极的连接),并将多档开关置于所使用的档位,根据改装后的电压表测量出未知信号的直流电压值，并将测量结果填写到数据表格中
                            </p>
                            <div style="background-repeat: no-repeat;background-position: center center;text-align: center;width: 100%;height: 741px;background-size: 95% 95%;">
                                <img src="img/pic/dianBiaoGaiZhuangImages/PictureTenTwo.png">
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
                            <!-- 第一题 -->
                            <!-- <div style="text-indent: 1em;margin:1%;">
                                <div style="margin-bottom: 10px;">1.测量改装表内阻的方法，正确的是(&nbsp;&nbsp;&nbsp;&nbsp;)。</div>
                                <div style="text-indent: 2em;margin: 5px auto;">A.电压法</div>
                                <div style="text-indent: 2em;margin: 5px auto;">B.替代法</div>
                                <div style="text-indent: 2em;margin: 5px auto;">C.等效法</div>
                                <div style="text-indent: 2em;margin: 5px auto;">D.外推法</div>
                            </div> -->
                            <!-- 第一题 -->
                            <div style="text-indent: 1em;margin:1%;">
                                <div style="margin-bottom: 10px;">
                                    1.测量改装表内阻的方法，正确的是({{$pd1}}
                                    <span id="value"></span>
                                    &nbsp;&nbsp;)?
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="A" name="radio" onclick="show_select()">
                                        A.电压法
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="B" name="radio" onclick="show_select()">
                                        B.替代法
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="C" name="radio" onclick="show_select()">
                                        C.等效法
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="D" name="radio" onclick="show_select()">
                                        D.外推法
                                    </label>
                                </div>
                            </div>
                            <!-- 第二题 -->
                            <!-- <div style="text-indent: 1em;margin:1%;">
                                <div style="margin-bottom: 10px;">2.以下关于电流表的表述正确的是(&nbsp;&nbsp;&nbsp;&nbsp;)。</div>
                                <div style="text-indent: 2em;margin: 5px auto;">A.电流表的内阻较小，如果误用电流表去测电压，有烧毁电表的风险</div>
                                <div style="text-indent: 2em;margin: 5px auto;">B.电流表的档位决定了它可通过的最小电流</div>
                                <div style="text-indent: 2em;margin: 5px auto;">C.电流表可以用于测量电压，而无需切换到电压测试档</div>
                                <div style="text-indent: 2em;margin: 5px auto;">D.电流表的内阻越大越好</div>
                            </div> -->
                            <!-- 第二题 -->
                            <div style="text-indent: 1em;margin:1%;">
                                <div style="margin-bottom: 10px;">2.以下关于电流表的表述正确的是({{$pd2}}
                                    <span id="valueTwo"></span>
                                    &nbsp;&nbsp;)?
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="A" name="radioTwo" onclick="show_selectTwo()">
                                        A.电流表的内阻较小，如果误用电流表去测电压，有烧毁电表的风险
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="B" name="radioTwo" onclick="show_selectTwo()">
                                        B.电流表的档位决定了它可通过的最小电流
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="C" name="radioTwo" onclick="show_selectTwo()">
                                        C.电流表可以用于测量电压，而无需切换到电压测试档
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="D" name="radioTwo" onclick="show_selectTwo()">
                                        D.电流表的内阻越大越好
                                    </label>
                                </div>
                            </div>
                            <!-- 第三题 -->
                            <!-- <div style="text-indent: 1em;margin:1%;">
                                <div style="margin-bottom: 10px;">3.由于磁电式电表结构上的一些缺陷，使得电表在正常条件下测量依然存在误差。引起误差的主要原因有(&nbsp;&nbsp;&nbsp;&nbsp;)。</div>
                                <div style="text-indent: 2em;margin: 5px auto;">A.转动机构的摩擦</div>
                                <div style="text-indent: 2em;margin: 5px auto;">B.弹簧的弹性线性不良</div>
                                <div style="text-indent: 2em;margin: 5px auto;">C.磁场分布不均匀</div>
                                <div style="text-indent: 2em;margin: 5px auto;">D.仪表盘刻度不精确</div>
                                <div style="text-indent: 2em;margin: 5px auto;">E.以上都有</div>
                            </div> -->
                            <!-- 第三题 -->
                            <div style="text-indent: 1em;margin:1%;">
                                <div style="margin-bottom: 10px;">
                                    3.由于磁电式电表结构上的一些缺陷，使得电表在正常条件下测量依然存在误差。引起误差的主要原因有({{$pd3}}
                                    <span id="valueThree"></span>
                                    &nbsp;&nbsp;)?
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="A" name="radioThree" onclick="show_selectThree()">
                                        A.转动机构的摩擦
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="B" name="radioThree" onclick="show_selectThree()">
                                        B.弹簧的弹性线性不良
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="C" name="radioThree" onclick="show_selectThree()">
                                        C.磁场分布不均匀
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="D" name="radioThree" onclick="show_selectThree()">
                                        D.仪表盘刻度不精确
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="E" name="radioThree" onclick="show_selectThree()">
                                        E.以上都有
                                    </label>
                                </div>
                            </div>
                            <!-- 第四题 -->
                            <!-- <div style="text-indent: 1em;margin:1%;">
                                <div style="margin-bottom: 10px;">4.标称电表满刻度时，改装的电表未满刻度或超过满刻度，这种情况扩程电阻是大还是小及其原因，以下描述不正确的是(&nbsp;&nbsp;&nbsp;&nbsp;)。</div>
                                <div style="text-indent: 2em;margin: 5px auto;">A.对于改装的电流表，未满刻度时，扩程电阻小，因其分流大；</div>
                                <div style="text-indent: 2em;margin: 5px auto;">B.对于改装的电流表，超过满刻度时，扩程电阻大 ，因其分流小；</div>
                                <div style="text-indent: 2em;margin: 5px auto;">C.对于改装的电压表，未满刻度时，扩程电阻大 ，因其分压大；</div>
                                <div style="text-indent: 2em;margin: 5px auto;">D.对于改装的电压表，超过满刻度时，扩程电阻小 ，因其分压小；</div>
                            </div> -->
                            <!-- 第四题 -->
                            <div style="text-indent: 1em;margin:1%;">
                                <div style="margin-bottom: 10px;">
                                    4.标称电表满刻度时，改装的电表未满刻度或超过满刻度，这种情况扩程电阻是大还是小及其原因，以下描述不正确的是({{$pd4}}
                                    <span id="valueFour"></span>
                                    &nbsp;&nbsp;)?
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="A" name="radioFour" onclick="show_selectFour()">
                                        A.对于改装的电流表，未满刻度时，扩程电阻小，因其分流大；
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="B" name="radioFour" onclick="show_selectFour()">
                                        B.对于改装的电流表，超过满刻度时，扩程电阻大 ，因其分流小；
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="C" name="radioFour" onclick="show_selectFour()">
                                        C.对于改装的电压表，未满刻度时，扩程电阻大 ，因其分压大；
                                    </label>
                                </div>
                                <div style="text-indent: 2em;margin: 5px auto;">
                                    <label>
                                        <input type="radio" value="D" name="radioFour" onclick="show_selectFour()">
                                        D.对于改装的电压表，超过满刻度时，扩程电阻小 ，因其分压小；
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>实验三  霍尔效应测量磁感应强度</title>
</head>
<body style="height: 100%;margin: 0 auto;padding: 0;min-width: 500px;">
<!-- 校徽 -->
<div style="height: 45px;width: 200px;margin-top: 10px;margin-left: 15px;">
    <img src="img/pic/huoer/school.jpg" alt="">
</div>
<div style="width: 90%;margin: 0 auto auto;">
    <!-- 标题 + 总分 -->
    <div style="width: 90%;margin: 0 auto auto;">
        <h1 style="font-weight: 500;font-size: 25px;display: block;width: 100%;height: 30px;line-height: 30px;text-align: center;">实验三霍尔效应测量磁感应强度</h1>
    </div>
    <div style="height:120px;">
        <div style="width: 35%;float: right;">
            <h5 style="font-weight: 400;width: 100%;text-align: center;font-size: 15px;margin: 0 auto;">总分：</h5>
            <h1 style="font-weight: 400;text-align: right;font-size: 80px;margin: 0 auto;padding-right: 30px;">{{$grade}}</h1>
        </div>
    </div>
    <!-- 主体 -->
    <div>
        <!-- 一：基本信息 -->
        <div>
            <h4 style="text-align: left;font-weight: 500;color: #363739;">一：基本信息</h4>
            <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                <table cellpadding="15" cellspacing="0" style="margin: 0 auto auto;width:90%;table-layout:fixed;text-align: center;" frame="void" rules="none">
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
                    <!-- <textarea rows="10"></textarea> -->
                    1.掌握使用霍尔效应测量磁感应强度的实验原理;
                </div>
                <div>
                    2.掌握使用“对称交换法”消除负效应影响的方法。
                </div>
            </div>
        </div>
        <!-- 三：实验仪器 -->
        <div>
            <h4 style="text-align: left;font-weight: 500;color: #363739;">三：实验仪器</h4>
            <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                <div>
                    <!-- <textarea rows="10"></textarea> -->
                    1. QS-H霍尔效应实验仪（包括电磁铁，霍尔样品和样品架，换向开关和接线柱）
                </div>
                <div>
                    2.测试仪（由励磁恒流源，样品工作恒流源，数字电流表，数字毫伏表等组成）
                </div>
            </div>
        </div>
        <!-- 四：实验原理 -->
        <div>
            <h4 style="text-align: left;font-weight: 500;color: #363739;">四：实验原理</h4>
            <div style="  background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                <div>
                    <!-- <textarea rows="10"></textarea> -->
                    <div style="height: 220px;width: 100%;text-align: center;margin: 0 auto;">
                        <img src="img/pic/huoer/one.png" alt="">
                    </div>
                    <p>
                        由霍尔效应原理可知，在垂直于磁场(z轴)和工作电流(y)的方向(x轴)，将产生一个纵向电位差，其大小为：
                    </p>
                    <div style="height: 20px;width: 100%;text-align: center;margin: 0 auto;">
                        <img src="img/pic/huoer/two.png" alt="">
                    </div>
                    <p>
                        固有：
                    </p>
                    <div style="height: 40px;width: 100%;text-align: center;margin: 0 auto;">
                        <img src="img/pic/huoer/three.png" alt="">
                    </div>
                    <p>
                        式中，为霍尔元件灵敏度。当霍尔元件灵敏度已知时，可根据不同点位工作电流与霍尔电压的对应关系，得到磁场强度的分布曲线。
                    </p>
                    <p>
                        2.霍尔元件的副效应及其消除方法:
                    </p>
                    <p>
                        在实际测量过程中，会伴随一些热磁副效应，这些热磁效应有：由于霍尔片两端的温度差形成的电动势；热流通过霍尔片在其端产生的电动势；热流通过霍尔片时两侧会有温度差产生，从而产生的温差电动势；除此之外，还有由于电极不在同一等势面上引起的不等位电势差。
                    </p>
                    <p>
                        为了消除副效应，在操作时我们需要分别改变和的方向，记录4组电势差的数据，得到霍尔电压平均值，这样虽然不能消除所有的副效应，但其引入的误差不大，可以忽略不计。
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
                        1）设备电路连接
                    </p>
                    <p>
                        将霍尔效应测试仪上对应输出、输出和输入接线柱分别与实验仪上输入，输入和输出三对接线柱连接，调整二维移动尺，使x轴方向上与0刻度线对齐。
                    </p>
                    <p>
                        2） 打开测试仪电源开关，输出调零，闭合工作电流开关，通入工作电流5毫安，待至少5分钟开始实验。
                    </p>
                    <p>
                        3）打开,开关，调整=5.00mA,Im=300mA.移动y轴，找到输出最大点。
                    </p>
                    <p>
                        4）保持y轴不变，按要求刻度移动x轴，改变,开关方向，测量四组数据并记录数据。
                    </p>
                    <p>
                        5）计算对应电位磁感应强度，并绘制-X曲线。
                    </p>
                    <p>
                        6）实验完毕后，将工作电流和励磁电流调到0A,断开电源和连线，恢复原样。
                    </p>
                    <p>
                        注意：
                    </p>
                    <p>
                        1.由于励磁电流较大，所以千万不能将,接错，否则励磁电流将烧坏霍尔元件。
                    </p>
                    <p>
                        2.霍尔元件及二维移动尺容易折断、变形，应注意避免受挤压、碰撞等。实验前应检查两者及电磁铁是否松动、移位，并加以调整。
                    </p>
                    <p>
                        3.为了提高霍尔元件测量的准确性，实验前霍尔元件应至少预热5分钟，具体操作如下：断开励磁电流开关，闭合工作电流开关，通入工作电流5毫安，待至少5分钟开始实验。
                    </p>
                    <p>
                        4.为了不使电磁铁因过热而受到损坏或影响测量精度，除在短时间内读取有关数据，通以励磁电流外，其余时间最好断开励磁电流开关。
                    </p>
                    <p>
                        5.2 实验数据记录与处理
                    </p>
                    <div>
                        <!-- 1.箱式直流电桥测量电阻值 -->
                        <p>
                            实验中给定:KB = 0.173mV/(mA·mT)
                        </p>
                        <p>
                            实验仪器编号：({{$number}})；线圈常数= ({{$constant}})mT / A
                        </p>
                        <p style="text-align: center;">
                            表1.电磁铁气隙中磁感应强度的分布(=300MA, =5.00MA)
                        </p>
                        <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto auto;text-align: center;">
                            <tr>
                                <th border ="1" style="width: 100px;  text-align: center;font-size: 17px;line-height: 30px;" rowspan="2">
                                    X / mm
                                </th>
                                <th>V1 / mV</th>
                                <th>V2 / mV</th>
                                <th>V3 / mV</th>
                                <th>V4 / mV</th>
                                <th colspan="2" rowspan="2" >VH = 1/4(|V1|+|V2|+|V3|+|V4|)</th>
                                <th rowspan="2">B / mT</th>
                            </tr>
                            <tr>
                                <td border = "1">+IM / +Is</td>
                                <td style="text-align: center;">+IM / -Is</td>
                                <td style="font-size: 17px;">-IM / +Is</td>
                                <td style="line-height: 30px;">-IM / -Is</td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>{{$a1}}</td>
                                <td>{{$a2}}</td>
                                <td>{{$a3}}</td>
                                <td>{{$a4}}</td>
                                <td>{{$a5}}</td>
                                <td>{{$a6}}</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>{{$b1}}</td>
                                <td>{{$b2}}</td>
                                <td>{{$b3}}</td>
                                <td>{{$b4}}</td>
                                <td>{{$b5}}</td>
                                <td>{{$b6}}</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>{{$c1}}</td>
                                <td>{{$c2}}</td>
                                <td>{{$c3}}</td>
                                <td>{{$c4}}</td>
                                <td>{{$c5}}</td>
                                <td>{{$c6}}</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>{{$d1}}</td>
                                <td>{{$d2}}</td>
                                <td>{{$d3}}</td>
                                <td>{{$d4}}</td>
                                <td>{{$d5}}</td>
                                <td>{{$d6}}</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>{{$e1}}</td>
                                <td>{{$e2}}</td>
                                <td>{{$e3}}</td>
                                <td>{{$e4}}</td>
                                <td>{{$e5}}</td>
                                <td>{{$e6}}</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>{{$f1}}</td>
                                <td>{{$f2}}</td>
                                <td>{{$f3}}</td>
                                <td>{{$f4}}</td>
                                <td>{{$f5}}</td>
                                <td>{{$f6}}</td>
                            </tr>

                            <tr>
                                <td>12</td>
                                <td>{{$g1}}</td>
                                <td>{{$g2}}</td>
                                <td>{{$g3}}</td>
                                <td>{{$g4}}</td>
                                <td>{{$g5}}</td>
                                <td>{{$g6}}</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>{{$h1}}</td>
                                <td>{{$h2}}</td>
                                <td>{{$h3}}</td>
                                <td>{{$h4}}</td>
                                <td>{{$h5}}</td>
                                <td>{{$h6}}</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>{{$i1}}</td>
                                <td>{{$i2}}</td>
                                <td>{{$i3}}</td>
                                <td>{{$i4}}</td>
                                <td>{{$i5}}</td>
                                <td>{{$i6}}</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>{{$j1}}</td>
                                <td>{{$j2}}</td>
                                <td>{{$j3}}</td>
                                <td>{{$j4}}</td>
                                <td>{{$j5}}</td>
                                <td>{{$j6}}</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>{{$k1}}</td>
                                <td>{{$k2}}</td>
                                <td>{{$k3}}</td>
                                <td>{{$k4}}</td>
                                <td>{{$k5}}</td>
                                <td>{{$k6}}</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>{{$l1}}</td>
                                <td>{{$l2}}</td>
                                <td>{{$l3}}</td>
                                <td>{{$l4}}</td>
                                <td>{{$l5}}</td>
                                <td>{{$l6}}</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>{{$m1}}</td>
                                <td>{{$m2}}</td>
                                <td>{{$m3}}</td>
                                <td>{{$m4}}</td>
                                <td>{{$m5}}</td>
                                <td>{{$m6}}</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>{{$n1}}</td>
                                <td>{{$n2}}</td>
                                <td>{{$n3}}</td>
                                <td>{{$n4}}</td>
                                <td>{{$n5}}</td>
                                <td>{{$n6}}</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>{{$o1}}</td>
                                <td>{{$o2}}</td>
                                <td>{{$o3}}</td>
                                <td>{{$o4}}</td>
                                <td>{{$o5}}</td>
                                <td>{{$o6}}</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>{{$p1}}</td>
                                <td>{{$p2}}</td>
                                <td>{{$p3}}</td>
                                <td>{{$p4}}</td>
                                <td>{{$p5}}</td>
                                <td>{{$p6}}</td>
                            </tr>

                        </table>
                        <p style="text-align: center;text-indent: 2em;">
                            根据上表所记录数据，做出电磁铁气隙中磁感应强度X - B曲线：
                        </p>
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
                        <div style="margin-bottom: 10px;">1.在使用箱式直流电桥测量电阻时，为什么选取的比例臂一般应使单电桥的四个测量盘尽可能用上(&nbsp;{{$xz1}})?</div>
                        <div style="text-indent: 2em;margin: 5px auto;">A.Bcosa</div>
                        <div style="text-indent: 2em;margin: 5px auto;">B.Bsina</div>
                        <div style="text-indent: 2em;margin: 5px auto;">C.Btana</div>
                        <div style="text-indent: 2em;margin: 5px auto;">D.Bcota</div>
                    </div>
                    <div style="text-indent: 1em;margin:1%;">
                        <div style="margin-bottom: 10px;">2.若磁感应强度B与工作电流方向存在角度β时，作用在元件上的有效磁场大小为：({{$xz2}})?</div>
                        <div style="text-indent: 2em;margin: 5px auto;">A.Bsinβ</div>
                        <div style="text-indent: 2em;margin: 5px auto;">B.Bcosβ</div>
                        <div style="text-indent: 2em;margin: 5px auto;">C.Btanβ</div>
                        <div style="text-indent: 2em;margin: 5px auto;">D.Bcotβ</div>
                    </div>
                    <div style="text-indent: 1em;margin:1%;">
                        <div style="margin-bottom: 10px;">3.测量不等位电势差时，若不等位电势差不为0，则增大工作电流时，不等位电势差将({{$xz3}})?</div>
                        <div style="text-indent: 2em;margin: 5px auto;">A.增大</div>
                        <div style="text-indent: 2em;margin: 5px auto;">B.减小</div>
                        <div style="text-indent: 2em;margin: 5px auto;">C.不变</div>
                        <div style="text-indent: 2em;margin: 5px auto;">D.不确定</div>
                    </div>
                    <div style="text-indent: 1em;margin:1%;">
                        <div style="margin-bottom: 10px;">4.若磁感应强度B与元件平面法线存在角度α，与工作电流方向存在角度β时，作用在元件上的有效磁场大小为：({{$xz4}})?</div>
                        <div style="text-indent: 2em;margin: 5px auto;">A.Bcosasinβ</div>
                        <div style="text-indent: 2em;margin: 5px auto;">B.Bcosacosβ</div>
                        <div style="text-indent: 2em;margin: 5px auto;">C.Bsinasinβ</div>
                        <div style="text-indent: 2em;margin: 5px auto;">D.Bsinacosβ</div>
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

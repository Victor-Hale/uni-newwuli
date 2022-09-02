<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>实验二 示波器的调整与使用</title>
</head>
<body>
    <div style="height: 45px;width: 200px;background-repeat: no-repeat;margin-top: 10px;margin-left: 15px;">
    <img src="img/pic/huoer/school.jpg" alt="">
    </div>
    <div style="width: 90%;margin: 0 auto;">
        <!-- 标题 + 总分 -->
        <div style="width: 90%;margin: 0 auto;">
          <h1 style="font-weight: 500;font-size: 25px;display: block;width: 100%;height: 30px;line-height: 30px;text-align: center;">实验二示波器的调整与使用</h1>
      </div>
      <div style="height:120px;">
          <div style="width: 35%;float: right;">
              <h5 style="font-weight: 400;width: 100%;text-align: center;font-size: 15px;margin: 0;">总分：</h5>
              <h1 style="font-weight: 400;text-align: right;font-size: 80px;margin: 0;padding-right: 30px;">{{$grade}}</h1>
          </div>
      </div>
        <!-- 主体 -->
        <div style="padding-top: 8%;">
            <!-- 一：基本信息 -->
             <!-- 一：基本信息 -->
             <div>
              <h4 style="text-align: left;font-weight: 500;color: #363739;">一：基本信息</h4>
              <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                  <table cellpadding="15" cellspacing="0" style="margin: 0 auto;width:90%;table-layout:fixed;text-align: center;" frame="void" rules="none">
                      <tr>
                          <td style="width:20%;word-wrap:break-word;padding-bottom: 0;">学生姓名</td>
                          <td style="width:15%;word-wrap:break-word;border-bottom: 2px solid #000;padding-bottom: 0;">{{$name}}</td>
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
                        了解示波器的用途并熟悉示波器操作面板;掌握使用示波器直接测量信号周期（频率）的方法;掌握利用示波器间接测量信号频率的方法 (观测李萨如图形) 。
                    </div>
                </div>
            </div>
            <!-- 三：实验仪器 -->
            <div>
                <h4 style="text-align: left;font-weight: 500;color: #363739;">三：实验仪器</h4>
                <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                    <div>
                        <!-- <textarea rows="10"></textarea> -->
                        双通道示波器、信号发生器、待测信号源
                    </div>
                </div>
            </div>
            <!-- 四：实验原理 -->
            <div>
                <h4 style="text-align: left;font-weight: 500;
                color: #363739;">四：实验原理</h4>
                <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                    <div>
                        <!-- <textarea rows="10"></textarea> -->
                        <p>示波器的用途</p>
                        <p>
                          我们常用的模拟示波器是利用示波管内电子束在电场中的偏转,显示随时间变化的电信号的一种观测仪器。示波器不仅可以定性观察电路(或元件)中传输的周期信号,而且还可以定量测量各种稳态的电学量,如电压、周期、波形的宽度及上升、下降时间等。示波器应用广泛,已成为科学研究、实验教学、医药卫生、电工电子和仪器仪表等各个研究领域和行业最常用的仪器之一。
                        </p>
                        <p>
                          用时基扫描测信号周期/频率参数
                        </p>
                        <p>
                          示波器扫描信号的周期，实际上是以时基单 (时间/DIV) 来标示的。测量中,待测信号的周期可表示为:
                        </p>
                        <div style="background-repeat: no-repeat;width: 270px;height: 20px;background-position: center center;margin-left: 50%;background-size: 100% 100%;">
                        <img src="img/pic/shiboqi/gongshi2.png">
                      </div>
                        <p>
                          式中波形厘米数为信号一个整周期的读数。
                        </p>
                        <p>
                          信号频率则是信号周期的倒数，即:
                        </p>
                        <div style="background-repeat: no-repeat;width: 90px;height: 28px;background-position: center center;margin-left: 50%;background-size: 100% 100%;">
                        <img src="img/pic/shiboqi/gongshi3.png">
                      </div>
                        <p>
                          用李萨如图形测信号的频率
                        </p>
                        <p>
                            （二）电桥灵敏度的误差
                        </p>
                        <p>
                          将不同的信号分别输入到CH2 (信号发生器产生的已知信号) 和CH1  (待测信号源产生的未知信号) 的输入端,当两个信号的频率满足一定的关系时,在荧光屏上将显示出李萨如图形,可用测量李萨如图形的相位参数或波形的切点数来测量时间参数。两正交正弦信号波形的相位差一定,频率比为一个有理数时,合成的图形是一条稳定的闭合曲线。频率比与图形的切点数之间有下列关系：
                        </p>
                        <div style="background-repeat: no-repeat;height: 78px;width: 100%;background-position: center center;text-align: center;margin: 0;">
                        <img src="img/pic/shiboqi/gongshi1.png">
                      </div>
                    </div>
                </div>
            </div>
            <!-- 五：实验内容及实验数据记录与处理 -->
            <div>
                <h4 style="margin-bottom: 0%; text-align: left;font-weight: 500;color: #363739;">五：实验内容及实验数据记录与处理</h4>
                <div style="text-align: right;margin-bottom: 1%;color: #606166;font-size: 12px;">
                    该部分得分：45分
                </div>
                <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                    <div>
                        <!-- <textarea rows="10"></textarea> -->
                        <p>
                          用X轴的时基测量信号的时间参数
                        </p>
                        <p>测示波器校准信号周期连接示波器CH1和示波器校准信号。校准信号为周期1KHz,峰峰值为4V的对称方波信号。</p>
                        <div style="background-repeat: no-repeat;width: 100%;height: 741px;background-position: center center;text-align: center;margin: 0;">
                        <img src="img/pic/shiboqi/shiboqi1.png">
                      </div>
                        <p>
                          在示波器调节窗口中,左键单击示波器开关,打开示波器。
                        </p>
                        <div style="background-repeat: no-repeat;width: 100%;height: 320px;background-position: center center;text-align: center;margin: 0;">
                        <img src="img/pic/shiboqi/shiboqi2.png">
                      </div>
                        <p>
                          调节示波器面板上的触发电平旋钮，使信号稳定显示。
                        </p>
                        <div style="background-repeat: no-repeat;width: 100%;height: 420px;background-position: center center;text-align: center;margin: 0;">
                        <img src="img/pic/shiboqi/shiboqi3.png">
                      </div>
                        <p>
                          调节示波器聚焦旋钮和辉度旋钮使示波器显示屏中的信号清晰。
                        </p>
                        <div style="background-repeat: no-repeat;width: 100%;height: 280px;background-position: center center;text-align: center;margin: 0;">
                        <img src="img/pic/shiboqi/shiboqi4.png">
                      </div>
                        <p>
                          调节CH1 (或CH2) 幅度调节旋钮和CH1 (或CH2) 幅度微调旋钮,使校准信号显现峰峰值为4V。 (此时对应幅度分度旋钮打在0.5V/DIV)
                        </p>
                        <div style="background-repeat: no-repeat;width: 100%;height: 280px;background-position: center center;text-align: center;margin: 0;">
                        <img src="img/pic/shiboqi/shiboqi5.png">
                      </div>
                        <p>调节示波器时间灵敏度旋钮和扫描微调旋钮,校准信号周期显示为1KHz。 (时基分度旋钮打在0.2ms/DIV) </p>
                        <div style="background-repeat: no-repeat;width: 100%;height: 280px;background-position: center center;text-align: center;margin: 0;">
                        <img src="img/pic/shiboqi/shiboqi6.png">
                      </div>
                        <p>将信号发生器的信号输出接入接示波器CH2(Y)通道,打开示波器和信号发生器调节界面。同时把示波器中的通道选择拨动开关调到CH2档上。</p>
                        <div style="background-repeat: no-repeat;width: 100%;height: 420px;background-position: center center;text-align: center;margin: 0;">
                        <img src="img/pic/shiboqi/shiboqi7.png">
                      </div>
                        <p>左键单击信号发生器“开关”按钮,打开信号发生器,通过频率选择按钮和频率微调旋钮设定信号频率为500Hz,调节信号频率,波形选择正弦波,选择示波器合适的时基,调节时间灵敏度旋钮,使信号满屏,测量对应频率的厘米数、周期和频率。</p>
                        <div style="background-repeat: no-repeat;width: 100%;height: 700px;background-position: center center;text-align: center;margin: 0;">
                        <img src="img/pic/shiboqi/shiboqi8.png">
                      </div>
                        <p>调整信号发生器正弦波频率,分别以1KHz和2KHz正弦波输入到示波器CH2(Y)通道,并测量对应频率的厘米数、周期和频率。</p>
                        <p></p>
                        <p>观察李萨如图形并测频率</p>
                        <p>使用信号发生器接入示波器CH2 (Y) 通道;使用未知信号源接入示波器CH1 (X) 通道。</p>
                        <div style="background-repeat: no-repeat;width: 100%;height: 700px;background-position: center center;text-align: center;margin: 0;">
                        <img src="img/pic/shiboqi/shiboqi9.png">
                      </div>
                        <p>待测信号源输出为正弦波,调节信号发生器的频率,使示波器中的”X-Y”按钮按下,方式调节到CH2,触发源选择CH1,观察李萨如图形。当fy/fx =2/1时的参考图案如下图所示。 (Tips:信号跳动/不稳定时，通过调节触发电平使信号静止/稳定以利于观察图形) </p>
                        <p>记录此时的信号发生器频率读数。</p>
                        <div style="background-repeat: no-repeat;width: 100%;height: 700px;background-position: center center;text-align: center;margin: 0;">
                        <img src="img/pic/shiboqi/shiboqi10.png">
                      </div>
                        <p>调整信号发生器的频率,当fy/fx =1/1时,示波器中参考图案如下图所示。</p>
                        <p>记录此时的信号发生器频率读数。</p>
                        <div style="background-repeat: no-repeat;width: 100%;height: 700px;background-position: center center;text-align: center;margin: 0;">
                        <img src="img/pic/shiboqi/shiboqi11.png">
                      </div>
                        <p>调整信号发生器的频率,当fy/fx =1/2时,示波器中参考图案如下图所示。</p>
                        <p>记录此时的信号发生器频率读数。</p>
                        <div style="background-repeat: no-repeat;width: 100%;height: 700px;background-position: center center;text-align: center;margin: 0;">
                        <img src="img/pic/shiboqi/shiboqi12.png">
                      </div>
                        <p>实验数据记录与处理</p>
                        <p>用示波器时基扫描功能测量信号的时间/频率参数</p>
                        <p>将校准信号线分别接入到两个通道,使用示波器自带方波信号校准示波器两个测量通道,校准后把时基分度旋钮打在0.2ms/DIV, 幅度分度旋钮打在0.5V/DIV</p>
                        <p style="text-align: center">表1  测量示波器自带校准方波信号的周期/频率</p>
                        <div>
                            <!-- <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;text-align: center;">
                                <tr>
                                <th style="width: 200px;border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">
                                  通道
                                </th>
                                <th border="1" style="width: 200px;border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">CH1</th>
                                <th border="1" style="width: 200px;border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">CH2</th>
                                </tr>
                                <tr>
                                <td border="1" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">校准信号频率</td>
                                <td border="1" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;" colspan="2" contenteditable="true"></td>
                                </tr>
                                <tr>
                                  <td border="1" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">大格数 (厘米数) </td>
                                <td border="1" contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td border="1" contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                </tr>
                                <tr>
                                <td border="1" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">周期 (ms) </td>
                                <td border="1" contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td border="1" contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                </tr>
                                <tr>
                                  <td border="1" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">频率 (Hz) </td>
                                  <td border="1" contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                  <td border="1" contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                  </tr>
                            </table> -->
                            <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;text-align: center;">
                              <tr>
                                <th style="width: 200px;">通道</th>
                                <th style="width: 200px;">CH1</th>
                                <th style="width: 200px;">CH2</th>
                              </tr>
                              <tr>
                                <td>校准信号频率</td>
                                <td colspan="2">{{$b1}}</td>
                              </tr>
                              <tr>
                                <td>大格数 (厘米数)</td>
                                <td>{{$b2}}</td>
                                <td>{{$b3}}</td>
                              </tr>
                              <tr>
                                <td>周期 (ms) </td>
                                <td>{{$b4}}</td>
                                <td>{{$b5}}</td>
                              </tr>
                              <tr>
                                <td>频率 (Hz) </td>
                                <td>{{$b6}}</td>
                                <td>{{$b7}}</td>
                              </tr>
                            </table>
                            <p>注意：大格数、周期、频率三者的记录均需保留一位小数</p>
                            <p>选择信号发生器的正弦波接示波器CH2,信号发生器默认幅度2Vp-p,选择不同的时基分度和输入信号频率,测量各信号的周期;此时CH2的幅度分度仍然为0.5V/DIV</p>
                            <p style="text-align: center">表2  测量正弦波信号周期和频率</p>
                            <!-- <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;text-align: center;">
                              <tr>
                                <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">时基分度 (ms/DIV) </th>
                                <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">0.5</th>
                                <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">0.2</th>
                                <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">0.1</th>
                              </tr>
                              <tr>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">信号发生器显示频率(Hz)</td>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">500</td>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">1000</td>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">2000</td>
                              </tr>
                              <tr>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">信号发生器实际输出(Hz)</td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                              </tr>
                              <tr>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">大格数(厘米数)</td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                              </tr>
                              <tr>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">周期(ms)</td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                              </tr>
                              <tr>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">频率(Hz)</td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                              </tr>
                            </table> -->
                            <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;text-align: center;">
                              <tr>
                                <th style="width: 200px;">时基分度 (ms/DIV) </th>
                                <th style="width: 200px;">0.5</th>
                                <th style="width: 200px;">0.2</th>
                                <th style="width: 200px;">0.1</th>
                              </tr>
                              <tr>
                                <td>信号发生器显示频率(Hz)</td>
                                <td>500</td>
                                <td>1000</td>
                                <td>2000</td>
                              </tr>
                              <tr>
                                <td>信号发生器实际输出(Hz)</td>
                                <td>{{$c1}}</td>
                                <td>{{$c2}}</td>
                                <td>{{$c3}}</td>
                              </tr>
                              <tr>
                                <td>大格数(厘米数)</td>
                                <td>{{$c4}}</td>
                                <td>{{$c5}}</td>
                                <td>{{$c6}}</td>
                              </tr>
                              <tr>
                                <td>周期(ms)</td>
                                <td>{{$c7}}</td>
                                <td>{{$c8}}</td>
                                <td>{{$c9}}</td>
                              </tr>
                              <tr>
                                <td>频率(Hz)</td>
                                <td>{{$c10}}</td>
                                <td>{{$c11}}</td>
                                <td>{{$c12}}</td>
                              </tr>
                            </table>
                            <p>注意：大格数（厘米数）、周期、频率三者的记录均需保留一位小数</p>
                            <p></p>
                            <p>观察李萨如图形并测量频率</p>
                            <p>按实验步骤接好连线,调节信号发生器 (示波器CH2 (Y) 通道输入) 的信号频率fy,显示通道打到CH2,触发器通道默认为CH1,显示方式打开X-Y控制键,观察示波器对应李萨如图形。按如下要求将数据填入下表。</p>
                            <!-- <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;text-align: center;">
                              <tr>
                              <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">fy/fx</th>
                              <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">2/1</th>
                              <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">1/1</th>
                              <th style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">1/2</th>
                              </tr>
                              <tr>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">李萨如图像样例</td>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"><img class="lisaru" src="https://zj-cloudimg.oss-cn-chengdu.aliyuncs.com/img/202208261841036.png" alt="李萨如图像样例一"></td>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"><img class="lisaru" src="https://zj-cloudimg.oss-cn-chengdu.aliyuncs.com/img/202208261842955.png" alt="李萨如图像样例二"></td>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"><img class="lisaru" src="https://zj-cloudimg.oss-cn-chengdu.aliyuncs.com/img/202208261843237.png" alt="李萨如图像样例三"></td>
                              </tr>
                              <tr>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">fy(Hz)</td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                              </tr>
                              <tr>
                                <td style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;">fx(Hz)</td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                                <td contenteditable="true" style="border: 1px #525152 solid;text-align: center;font-size: 17px;line-height: 30px;"></td>
                              </tr>
                            </table> -->
                            <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;text-align: center;">
                              <tr>
                                <th style="width: 200px;">fy/fx</th>
                                <th style="width: 200px;">2/1</th>
                                <th style="width: 200px;">1/1</th>
                                <th style="width: 200px;">1/2</th>
                              </tr>
                              <tr>
                                <td>李萨如图像样例</td>
                                <td><img class="lisaru" src="img/pic/shiboqi/lisaru1.png" alt="李萨如图像样例一"></td>
                                <td><img class="lisaru" src="img/pic/shiboqi/lisaru2.png" alt="李萨如图像样例二"></td>
                                <td><img class="lisaru" src="img/pic/shiboqi/lisaru3.png" alt="李萨如图像样例三"></td>
                              </tr>
                              <tr>
                                <td>fy(Hz)</td>
                                <td>{{$d1}}</td>
                                <td>{{$d2}}</td>
                                <td>{{$d3}}</td>
                              </tr>
                              <tr>
                                <td>fx(Hz)</td>
                                <td>{{$d4}}</td>
                                <td>{{$d5}}</td>
                                <td>{{$d6}}</td>
                              </tr>
                            </table>
                            <p>注：</p>
                            <p>1、此时CH1/CH2的幅度分度均为0.2V/DIV,信号发生器默认幅度2Vp-p</p>
                            <p> 2、此时示波器时基分度为0.2ms/DIV (即使改变此值对李萨如图形测量也影响不大) </p>
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
                <div style="background-color: #EEEEEE;padding: 2%;border-radius: 3px;text-align: left;">
                    <div>
                        Ⅰ.选择题(选择题部分：40分)
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">1.请根据示波器面板的使用要求，选择正确的选项</div>
                            <div style="margin-bottom: 10px;"> (1) 当显示波形线条太粗了,可以尝试使用 (&nbsp;&nbsp;{{$e1}}&nbsp;) 使波形线条调整至适合宽度。</div>
                            <div style="margin-bottom: 10px;"> (2) 在示波器测量1KHz方波校准信号时,读数不够1KHz,可以尝试 (&nbsp;&nbsp;{{$e2}}&nbsp;) 校准。</div>
                            <div style="margin-bottom: 10px;"> (3) 当波形不够稳定不断跳跃时,可以尝试使用 (&nbsp;{{$e3}}&nbsp;) 使波形相对静止。</div>
                            <div style="margin-bottom: 10px;"> (4) 在示波器显示波形不够亮时,可以尝试使用 (&nbsp;{{$e4}}) 提高显示波形的亮度。</div>
                            <div style="text-indent: 2em;margin: 5px auto;">A.辉度按钮</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.聚焦按钮</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.水平位移</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.垂直位移</div>
                            <div style="text-indent: 2em;margin: 5px auto;">E.扫描微调旋钮</div>
                            <div style="text-indent: 2em;margin: 5px auto;">F.触发电平旋钮</div>
                        </div>
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">2.利用示波器测量信号频率的优点是 (&nbsp;{{$f1}}) ,但不足的是示波器内部时基 (&nbsp;{{$f2}}&nbsp;) ,且 (&nbsp;&nbsp;{{$f3}}) </div>
                            <div style="text-indent: 2em;margin: 5px auto;">A.精度不高</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.示波器不能测量频率</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.不能直接读数频率,使用周期读数换算到频率会引入误差</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.可以直观的观察出波形</div>
                        </div>
                        <div style="text-indent: 1em;margin:1%;">
                          <div style="margin-bottom: 10px;">3.使用李萨如图形测量信号频率实验过程中,信号波形选用 (&nbsp;{{$g1}}) 波形;得到闭合稳定的图案时,两个信号的频率比是 (&nbsp;&nbsp;{{$g2}}&nbsp;) ;在两个信号的相位关系变化时,李萨如图形会发生 (&nbsp;{{$g3}}&nbsp;&nbsp;&nbsp;) 。</div>
                          <div style="text-indent: 2em;margin: 5px auto;">A.三角波</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.正弦波</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.方波</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.整数比</div>
                            <div style="text-indent: 2em;margin: 5px auto;">E.无理数之比</div>
                            <div style="text-indent: 2em;margin: 5px auto;">F.跳出示波器窗口</div>
                            <div style="text-indent: 2em;margin: 5px auto;">G.旋转</div>
                      </div>
                        Ⅱ.判断题(判断题部分：10分)
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">1.在使用示波器的校准信号线校准示波器测量通道时,当示波器屏幕幅度读数不是5V时,可以通过调整“扫描微调旋钮”修正校准相应通道的读数。(&nbsp;&nbsp;&nbsp;{{$x1}}&nbsp;)</div>
                            <div style="margin-bottom: 10px;">2.只有正弦波信号才能利用本实验项目的李萨如图形方法测量频率。(&nbsp;&nbsp;{{$x2}}&nbsp;&nbsp;)</div>
                            <div style="margin-bottom: 10px;">3.在利用李萨如图形测量频率过程中,将示波器时基分度由默认的0.2ms/DIV改为0.1ms/DIV,则李萨如图形的纵横切点数之比会发生变化(&nbsp;{{$x3}}&nbsp;&nbsp;&nbsp;)</div>
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

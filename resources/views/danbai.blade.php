<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>大学物理实验报告</title>
    <style>
        .two td {
            text-align: center;
        }
    </style>
</head>

<body>
<div style="margin: 0 auto; width: 655px;">
    <!-- 页眉 -->
    <div style="display: flex;position: relative;height: 60px;border-bottom: 1px solid #464545;">
        <!--<div>-->
        <!--    <img src="https://s3.bmp.ovh/imgs/2021/08/0bf5497e7adffd54.png" style="height: 40px;" />-->
        <!--</div>-->
        <span style="position: absolute;left: 50%;top:50%;height: 50%;transform: translate(-50%,-50%);color: #898989;font-size: 14px;">《单摆法测重力加速度》学生实验报告</span>
    </div>
    <div style="margin: 0 auto;text-align: center;padding-bottom: 20px;padding-top: 3px;">
        <span style="font-size: 23px;">《单摆法测重力加速度》学生实验（项目）报告</span>
    </div>
    <br>
    <h3>一、基本信息</h3>
    <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;">
        <tr>
            <td>实验项目名称</td>
            <td colspan="3">单摆法测重力加速度</td>
        </tr>
        <tr>
            <td>课程名称</td>
            <td>大学物理实验</td>
            <td>学生层次</td>
            <td>{{$student_level}}</td>
        </tr>
        <tr>
            <td>学生专业</td>
            <td>{{$student_spec}}</td>
            <td>学生年级</td>
            <td>{{$student_year}}</td>
        </tr>
        <tr>
            <td>学生班级</td>
            <td>{{$student_class}}</td>
            <td>学生学号</td>
            <td>{{$student_num}}</td>
        </tr>
        <tr>
            <td>学生姓名</td>
            <td>{{$student_name}}</td>
            <td>完成日期</td>
            <td>{{$update_at}}</td>
        </tr>
        <tr>
            <td>指导教师</td>
            <td>{{$student_teacher}}</td>
            <td>报告总分</td>
            <td>{{$grade}}</td>
        </tr>
    </table>
    <span style="color: red;">以下内容应为学生项目成果，由指导教师自行定义。</span>
    <!-- 实验目的 -->
    <h3>二、 实验目的</h3>
    <div style="text-indent: 2em; width: 655px; ">
        <div>1. 理解单摆法测量重力加速的原理。</div>
        <div>2. 研究单摆振动的周期与摆长、摆角的关系。</div>
        <div>3. 学习系统误差的修正及在实验中减少不确定度的方法。</div>
    </div>
    <!-- 实验仪器与设备 -->
    <h3>三、 实验仪器与设备</h3>
    <div style="text-indent: 2em; width: 655px; ">
        <div>1)单摆仪</div>
        <div style="text-align: center;">
            <img src="img/pic/pic1.png" style="height: 300px;">
            <img src="img/pic/pic14.png" style="height: 300px;">
        </div>
        <div style="text-align: center;">实际照片和仿真图片的显示</div>
        <br>
        <div>操作提示：</div>
        <div>1.拖动摆球让摆球摆动</div>
        <div>2.用鼠标左键或者右键点击摆线末端的旋钮来增大或者减小摆线长</div>
        <!-- 、游标卡尺 -->
        <br>
        <div>2)游标卡尺</div>
        <br>
        <div style="text-align: center;">
            <img src="img/pic/pic16.png" style="height: 150px;">
            <img src="img/pic/pic11.png" style="height: 150px;">
        </div>
        <div style="text-align: center;">实际照片和仿真图片的显示</div>
        <br>
        <div>操作提示：</div>
        <div>1.可以拖动副尺部分，改变测量卡口张开的大小</div>
        <div>2.可以用鼠标左键或者右键点击锁定旋钮，来锁住或者解锁副尺</div>
        <!-- 螺旋测微器 -->
        <br>
        <div>3)螺旋测微器</div>
        <br>
        <div style="text-align: center;">
            <img src="img/pic/pic3.png" style="width: 350px;">
            <img src="img/pic/pic4.png" style="width: 350px;">
        </div>
        <div style="text-align: center;">实际照片和仿真图片的显示</div>
        <br>
        <div>操作提示：</div>
        <div>鼠标左键或者右键点击转轴可以向上或者向下旋转转轴鼠标左键或者右键点击锁，可以锁定或者解锁</div>
        <!-- 电子秒表 -->
        <br>
        <div>4)电子秒表</div>
        <br>
        <div style="text-align: center;">
            <img src="img/pic/pic5.png" style="height: 300px;">
            <img src="img/pic/pic6.png" style="height: 300px;">
        </div>
        <div style="text-align: center;">实际照片和仿真图片的显示</div>
        <br>
        <div>操作提示：</div>
        <div>鼠标点击开始暂停按钮可以开始或者暂停计时鼠标点击复位按钮可以对秒表复位。</div>
        <!-- 米尺 -->
        <br>
        <div>5)米尺</div>
        <br>
        <div style="text-align: center;">
            <img src="img/pic/pic7.png" style="height: 200px;">
            <img src="img/pic/pic8.png" style="height: 200px;">
            <img src="img/pic/pic9.png" style="height: 300px;">
        </div>
        <div style="text-align: center;">实际照片和仿真图片的显示</div>
        <br>
        <div>操作提示：</div>
        <div>用鼠标拖动左侧全景图中的白色区域，改变右侧放大区域对应的位置在右侧图中拖动米尺，可以改变米尺位置。</div>



    </div>
    <!-- 实验原理 -->
    <h3>四、实验原理</h3>
    <table style="border-bottom: 1px solid black;">
        <tr>
            <td >1、单摆是一种理想模型。</td>
                <!-- <td rowspan="4" style="border-left: 1px solid grey">
                <img src="https://gitee.com/adya/images/raw/master/img/20210903141754.png"> -->
            <!-- </td> -->
        </tr>
        <tr>
            <td style="text-indent: 2em;">
                为减小系统误差，悬线的长度要远大于小球直径，同时摆角要小于5°,并保证在同一竖直平面内摆动。固定摆长，测量振动周期T和摆长L,即可求出重力加速度g.式中:L=l+d/2 (悬线长度加小球半径);T=t/n(为减小单摆振动周期测量误差,T通过测量n次全振动时间t,用此公式间接测量单摆振动周期).
            </td>
        </tr>
        <tr>
            <td style="text-indent: 2em;">单摆的一级近似的周期公式为:</td>
        </tr>
        <tr>
            <td style="margin: 0 auto; text-align: center;">
                <img src="img/pic/picone.png" style="width: 60px;">
            </td>
        </tr>
        <tr>
            <td style="text-indent: 2em;">由此通过测量周期 T,摆长l求重力加速度</td>
        </tr>
        <tr style="height: 210px;">
            <td>
                <div>2、不确定度均分原理 </div>
                <div>在间接测量中，每个独立测量的量的不确定度都会对最终结果的不确定度有贡献。如果已知各测量之间的函数关系，可写出不确定度传递公式，并按均分原理，将测量结果的总不确定度均匀分配到各个分量中，由此分析各物理量的测量方法和使用的仪器，
                    指导实验。一般而言，这样做比较经济合理。对测量结果影响较大的物理量，应采用精度较高的仪器，而对测量结果影响不大的物理量，就不必追求高精度仪器。</div>
                <!-- <div>1）有效数字及运算</div> -->
                <!-- <div style="text-indent: 2em; ">有效数字的概念:若干位可靠数字加一位可疑数字，便组成了有效数字。掌握有效数字的加减乘除的运算规则。</div>
                <div>2）误差及运算</div>
                <div style="text-indent: 2em; ">误差分为绝对误差和相对误差，掌握其各自的表达方式及运算。</div>
                <div>3）直接测量和间接测量</div>
                <div style="text-indent: 2em; ">了解直接测量和间接测量的概念及误差计算方法。</div> -->
            </td>
        </tr>
    </table>
    <!-- <div style="margin-top:20px; ">
        <div>1.按照实验要求组装好实验仪器,电子秒表归零。</div>
        <div>2.用千分尺、游标卡尺测量小球直径d各5次,并记录数据。</div>
        <div>3.用米尺测量摆线长度l各5次,并记录数据。 </div>
        <div>4.将摆球拉离平衡位置,角度小于5度,保证单摆在竖直平面内摆动,防止形成圆锥摆,等摆动稳定后开始计时。</div>
        <div>5.用电子秒表测量单摆50次周期摆动所需时间t,并记录数据。 </div>
        <div>6.计算g的平均值,并作误差分析。</div>
    </div> -->
    <h3>五、 实验内容及实验数据记录与处理</h3>
    <!-- 准备仪器 -->
    <div style="height: 35px; margin-right: 50px;font-weight: 700; "> 1. 准备仪器</div>
        <br>
        <div style="text-align: center;">
            <img src="img/pic/pic10.png" style="height: 300px;">
        </div>
        <br>
        <div style="text-indent: 2em;">将需要用到的仪器，从仪器栏中拖到桌面上来。鼠标移动到仪器上的时候， 可以在提示信息栏中看见相应的提示信息。</div>
        <br>
        <div style="text-indent: 2em;">使用仪器之前需要双击打开调节窗口再进行调节。</div>
        <br>
    <!-- 测量摆球直径仪器 -->
    <div style="height: 35px; margin-right: 50px;font-weight: 700; ">2.测量摆球直径</div>
        <br>
        <div style="text-align: center;">
            <img src="img/pic/pic11.png" style="height: 300px;">
        </div>
        <br>
        <div style="text-indent: 2em;">双击打开千分尺或者游标卡尺窗口，点击开始测量按钮，将小球拖入进行测量。
            测量完成后关闭窗口。</div>
        <br>
    <!-- 调节摆线长度 -->
    <div style="height: 35px; margin-right: 50px;font-weight: 700; ">3.调节摆线长度</div>
        <br>
        <div style="text-align: center;">
            <img src="img/pic/pic12.png" style="height: 300px;">
        </div>
        <br>
        <div style="text-indent: 2em;">双击米尺打开米尺测量窗口，双击单摆打开单摆窗口。</div>
        <br>
        <div style="text-indent: 2em;">按住单摆窗口中摆线末端的旋钮调节摆线长度，在米尺窗口中读出摆线长度。</div>
        <br>
    <!-- 测量摆动周期 -->
    <div style="height: 35px; margin-right: 50px;font-weight: 700; ">4.测量摆动周期</div>
        <br>
        <div style="text-align: center;">
            <img src="img/pic/pic13.png" style="height: 300px;">
        </div>
        <br>
        <div style="text-indent: 2em;">打开单摆窗口和电子秒表窗口。拖动小球使其摆动，使用秒表测量周期。</div>
        <br>
    <!-- 填写实验数据 -->
    <div style="height: 35px; margin-right: 50px;font-weight: 700; ">5.填写实验数据</div>
        <div>将实验所测得的数据填入到实验数据表格中。</div>
        <br>
    <!-- 误差分析 -->
    <div style="height: 35px; margin-right: 50px;font-weight: 700; ">6.误差分析</div>
        <div>1.随机误差：</div>
        <br>
        <div>在本实验中影响随机误差的因素比较多，其中包括了：测量人员的主观因素，如测量单摆周期时的反应时间，
            在测量摆线长度时对于最后一位数字的估度等；在环境方面，温度，湿度，空气阻力的变化都会给实验结果带来误差。
            而在这些因素中，较为明显的即是人的主观因素影响，因此，为了减小实验误差，应该尽可能的多测量实验数据，
            利用求平均值法可以减小实验误差。</div>
        <br>
        <div>2.系统误差：</div>
        <br>
        <div>周期公式<img src="img/pic/pic17.png" style="height: 25px;">
            实际上是一个近似公式，它的成立是有条件的。查阅文献可知在考虑摆角，</div>
        <div><img src="img/pic/pic18.png">
            悬线质量，小球质量分布，空气浮力，空气阻力，仪器误差时的修正公式为：</div>
        <br>
        <div>摆角的影响：</div>
        <br>
        <div>在实验中，一般要求摆角要小于5°，因为在推导周期公式的时候利用了近似处理：sin（<img src="img/pic/fuhao1.png">），此公式只在<img src="img/pic/fuhao1.png">很小的时候才成立，
            而根据文献查阅可知，在<img src="img/pic/fuhao1.png">＞3°时候已经对实验结果产生了交大的影响。为消除影响，要使<img src="img/pic/fuhao1.png">≤3°或对公式进行修正。</div>
        <br>
        <div>悬线质量<img src="img/pic/fuhao2.png">的影响：</div>
        <br>
        <div>本实验是在假设悬线质量不计的情况下使用公式计算的。由修正公式可知，悬线质量越大，测得的加速度值越小。计算时应该因为误差不是远小于测量精度，所以应该给予修正。</div>
        <br>
        <div>空气浮力的影响：</div>
        <br>
        <div>在修正公式中，<img src="img/pic/fuhao3.png">为空气密度和小球密度的比值。在实验中，这个值的数量级很小，可以忽略不计。</div>
        <br>
        <div>空气阻力的影响：</div>
        <br>
        <div>修正式中，空气阻尼系数为<img src="img/pic/fuhao4.png">，在代入空气的阻尼系数后发现，误差值的数量级远小于测量精度，因此也可以忽略不计。</div>
        <br>
        <div>5）修正式中，<img src="img/pic/fuhhaoo5.png" style="height: 25px;">和<img src="img/pic/fuhao6.png" style="height: 15px;">秒表和直尺的系差修正，在实验中，经过校对的直尺和秒表的系统误差均小于仪器的精密度，因此在计算时可以忽略不计。</div>
        <br>
    <!-- 数据处理及误差分析 -->
    <div style="height: 35px; margin-right: 50px;font-weight: 700; "> 7. 数据处理及误差分析</div>
    <table style="border-bottom: 1px solid black;">
        <tr>
            <td>1)周期的计算:{{$zq}}
                <div style="float: right;">（保留三位小数，5分）</div>
                <div style="width: 200px; height:25px; border-bottom:1px solid black; float: right;"></div>

            </td>
        </tr>
        <tr>
            <td>2)摆长的计算:
                <!-- <div style="width: 200px; height:25px; border-bottom:1px solid black; float: right;"></div> -->
            </td>
        </tr>
        <tr>
            <td>钢球直径的测量数据如下表：(保留三位小数，每空3分，共42分)
            </td>
        </tr>
    </table>

    <table border=" 1 " cellspacing="0 " style="width: 675px; " class="two ">
        <tr>
            <th style="width: 172px">测量次数</th>
            <th style="width: 172px">每次数据 d (cm)</th>
            <th style="width: 172px">平均值
                <img src="img/pic/one.png" style="height: 25px;">(cm)</th>
            <!-- <th style="width: 172px">平均值
                <div style="width: 10px;border-top:1px solid black;float: right;">d</div>
                (cm) </th> -->
            <th style="width: 172px">△d=|d-<img src="img/pic/one.png" style="height: 25px;">|(cm)</th></th>
        </tr>
        <tr style="height: 30px; ">
            <td>1</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$dcm1}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; border-bottom:none">{{$dcm2}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$sd1}}</td>
        </tr>
        <tr style="height: 30px; ">
            <td>2</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$dcm2}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; border-bottom:none; border-top:none"></td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$sd2}}</td>
        </tr>
        <tr style="height: 30px; ">
            <td>3</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$dcm3}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; border-bottom:none; border-top:none"></td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$sd3}}</td>
        </tr>
        <tr style="height: 30px; ">
            <td>4</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$dcm4}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; border-bottom:none; border-top:none"></td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$sd4}}</td>
        </tr>
        <tr style="height: 30px; ">
            <td>5</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$dcm5}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; border-bottom:none; border-top:none"></td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$sd5}}</td>
        </tr>
        <tr style="height: 30px; ">
            <td>6</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$dcm6}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; border-bottom:none; border-top:none"></td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$sd6}}</td>
        </tr>
        <tr style="height: 30px; ">
            <td style="width:39px; word-wrap:break-word; word-break:break-all; border-right: none;">
            <div style="float: right;"><img src="img/pic/three.png" style="width: 50px;"></div>
            </td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; border-left: none;"></td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; border-top:none"></td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$average_sd}}</td>
        </tr>
    </table>
    <div style="width: 655px; ">
        <div>
            <div style="width: 210px;">
                <div style="float: right;">（2分）</div>
                <img src="img/pic/tow.png" style="width: 50px;">
                <div style="width: 100px; border-bottom:1px solid black; padding: -15px 0px ; margin: -20px 0px 0px 60px;position: relative;left: 0px;">
                    <p>{{$average_d}}</p>
                </div>

            </div>
            <div style="width: 210px;">
                <div style="float: right;">（2分）</div>
                <img src="img/pic/three.png" style="width: 50px;">
                <div style="width: 100px; border-bottom:1px solid black; padding: -15px 0px ; margin: -20px 0px 0px 60px;position: relative;left: 0px;">
                    <p>{{$average_sd}}</p>
                </div>
            </div>
        </div>
        <div style="width:410px">
            <div style="float: right;">（保留2位小数，5分）</div>
            所以有效摆长为:L =  <div style="width: 100px; border-bottom:1px solid black; padding: -15px 10px ; margin: -20px 150px 0px 0px;float: right; position: relative;left: 200px;">

            <p>{{$l}}</p>
            </div>
        </div>
        <div style="width: 498px; margin-top: 10px;">3)重力加速度的计算：
            <div style="float: right;">（交互式可以支持公式，老师打分，一共29分）</div>
        </div>
        <div style="border: 1px solid black; height: 150px; margin-top: 5px;">
            <p>{{$js}}</p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <h3>六、思考题（每题5分，共15分）{{$grade_xp}}</h3>
    <!-- <div>实验结果</div> -->
    <!-- <div>用单摆法测得实验所在地点重力加速度为：</div> -->
    <div>

        <!-- <div style="border: 1px solid black; height: 150px;"></div> -->
        <!-- <span style="float: left; margin-left: 50px; "><img src="https://gitee.com/adya/images/raw/master/img/20210903154627.png " ></span>
        <div style="float: left;height: 44px; margin-left: 60px; text-decoration：underline">
            <div style="font-size: 35px; font-weight: 100; margin-top: -5px; padding-left: 15px; ">
                <span style="word-wrap:break-word; word-break:break-all;"></span>
                <span style="margin-left: 7px;">±</span>
                <span style="margin-left: 7px;"></span>
                <span style="margin-left: 7px;"><img src="https://gitee.com/adya/images/raw/master/img/20210903162038.png " style="display: inline-block; margin-bottom: -15px; "></span>
            </div>
        </div> -->
    </div>
    <div style="margin-bottom: 5px; ">1.用单摆测定重力加速度g时，下面哪些做法可以减小误差？({{$xz1}} ).</div>
    <div style="margin-bottom: 5px; ">A．摆线长度不宜太长，取0.1m左右为宜</div>
    <div style="margin-bottom: 5px; ">B．因为周期跟摆球质量无关，所以摆球用木球或铁球都一样</div>
    <div style="margin-bottom: 5px; ">C．测摆长必须从悬点到摆球球心</div>
    <div style="margin-bottom: 5px; ">D．测周期必须用n次全振动总时间除以n-1</div>
    <br>

    <div style="margin-bottom: 5px; ">2.实验中某同学每次的测定值都比其它同学偏大，其原因可能是({{$xz1}} ).</div>
    <div style="margin-bottom: 5px; ">A．实验室处在高山上，离海平面太高</div>
    <div style="margin-bottom: 5px; ">B．单摆所用的摆球太重</div>
    <div style="margin-bottom: 5px; ">C．测出n次全振动的时间为t，误作为(n＋1)次全振动的时间进行计算</div>
    <div style="margin-bottom: 5px; ">D．以摆球半径和摆线之和作为摆长来计算</div>
    <br>

    <div style="margin-bottom: 5px; ">3.如果测得g值偏小，不可能原因是({{$xz1}} ).</div>
    <div style="margin-bottom: 5px; ">A．测摆线长时摆线拉得过紧</div>
    <div style="margin-bottom: 5px; ">B．摆线上端悬点未固定好，摆动中出现松动</div>
    <div style="margin-bottom: 5px; ">C．计算摆长时，忘记了加小球半径</div>
    <div style="margin-bottom: 5px; ">D．读单摆周期时，读数偏大</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
</body>

</html>

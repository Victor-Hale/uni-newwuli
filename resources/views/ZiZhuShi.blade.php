<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>实验四 自组式直流电桥测量电阻值</title>
    <!-- <link rel="stylesheet" href="../assets/css/xiangShi.css"> -->
    <style>
        /* 全局样式表 */
html,
body {
    height: 100%;
    margin: 0;
    padding: 0;
}

/* 校徽 */
.schoolBadge {
    background-image: url(https://i.postimg.cc/rwzRt8v9/l-QLPJxad-Pq83-Z3clz-KCw-AD2-s-Bo-FD1w-DAr-JAFMBUAA-160-37-png-720x720q90g.jpg);
    height: 45px;
    width: 200px;
    background-repeat: no-repeat;
    margin-top: 10px;
    margin-left: 15px;
}

/* 主体 */
.allStyle {
    width: 90%;
    text-align: center;
    margin-left: 5%;
}

/* 标题 */
.titleItem {
    font-weight: 500;
    font-size: 25px;
    display: block;
    width: 100%;
    height: 30px;
    line-height: 30px;
    text-align: center;
    margin-left: 15%;
    /* min-width: 50%; */
}

/* 总分 */
.totalPoints {
    font-weight: 400;
    width: 100%;
    text-align: center;
    font-size: 15px;
    margin: 0;
    /* min-width: 5%; */
    /* height: 30%; */
}

/* 总分分数 */
.totalNumber {
    font-weight: 400;
    text-align: right;
    font-size: 80px;
    margin: 0;
    padding-right: 30px;
    /* min-width: 10%; */
}

.infoStyle {
    /* background-color: pink; */
    padding-top: 8%;
}

h4 {
    text-align: left;
    font-weight: 500;
    color: #363739;
}

.formTable {
    background-color: #EEEEEE;
    /* height: 30%; */
    padding: 2%;
    border-radius: 3px;
    text-align: left;
}

.inputInfo {
    background-color: #EEEEEE;
    border-top-width: 0px;
    border-right-width: 0px;
    border-bottom-width: 2px;
    border-left-width: 0px;
    width: 10%;
    text-align: center;
}

.inputInfo:focus {
    outline: none;
}

textarea {
    background-color: #EEEEEE;
    border-top-width: 0px;
    border-right-width: 0px;
    border-bottom-width: 0px;
    border-left-width: 0px;
    width: 100%;
}

textarea:focus {
    outline: none;
}

.formTable .pictureOne {
    background-image: url(https://picgo-photos.oss-cn-hangzhou.aliyuncs.com/img/four.png);
    background-repeat: no-repeat;
    height: 200px;
    width: 100%;
    background-position: center center;
    text-align: center;
    margin: 0;
}

p {
    text-indent: 2em;
}

.formTable .pictureTwo {
    background-image: url(https://i.postimg.cc/Dw1ghTSJ/2.png);
    background-repeat: no-repeat;
    width: 90px;
    height: 45px;
    background-position: center center;
    margin-left: 30%;
    background-size: 60% 60%;
    float: left;
}

.formTable .pictureThree {
    background-image: url(https://i.postimg.cc/xdd1HBXx/3.png);
    background-repeat: no-repeat;
    width: 200px;
    height: 45px;
    background-position: center center;
    margin-left: 50%;
    background-size: 100% 100%;
}

.formTable .pictureFour {
    background-image: url(https://i.postimg.cc/q76tFzrV/4.png);
    background-repeat: no-repeat;
    width: 100%;
    height: 45px;
    background-position: center center;
    text-align: center;
    margin: 0;
}

.formTable .pictureFive {
    background-image: url(https://i.postimg.cc/4yQsMTnT/5.png);
    background-repeat: no-repeat;
    width: 100%;
    height: 45px;
    background-position: center center;
    text-align: center;
    margin: 0;
}

.formTable .pictureSix {
    background-image: url(https://i.postimg.cc/ZKmQHM34/6.png);
    background-repeat: no-repeat;
    width: 90px;
    height: 45px;
    background-position: center center;
    margin-left: 30%;
    background-size: 100% 100%;
    float: left;
}

.formTable .pictureSeven {
    background-image: url(https://i.postimg.cc/G2kQsbXY/7.png);
    background-repeat: no-repeat;
    width: 200px;
    height: 45px;
    background-position: center center;
    margin-left: 50%;
    background-size: 100% 100%;
}

.pictureEight {
    background-image: url(https://picgo-photos.oss-cn-hangzhou.aliyuncs.com/img/s1.png);
    background-repeat: no-repeat;
    background-position: center center;
    text-align: center;
    /* width: 1004px;
    height: 741px; */
    width: 100%;
    height: 741px;
    /* background-size:100% 100%; */
    /* margin: 0; */
    /* background-size: 1004px 741px; */
    background-size: 95% 95%;
}

.pictureNight {
    background-image: url(https://picgo-photos.oss-cn-hangzhou.aliyuncs.com/img/s2.png);
    background-repeat: no-repeat;
    background-position: center center;
    text-align: center;
    /* width: 1004px;
    height: 741px; */
    width: 100%;
    height: 741px;
    /* background-size:100% 100%; */
    /* margin: 0; */
    /* background-size: 1004px 741px; */
    background-size: 95% 95%;
}

.pictureTen {
    background-image: url(https://picgo-photos.oss-cn-hangzhou.aliyuncs.com/img/s3.png);
    background-repeat: no-repeat;
    background-position: center center;
    text-align: center;
    /* width: 1004px;
    height: 741px; */
    width: 100%;
    height: 741px;
    /* background-size:100% 100%; */
    /* margin: 0; */
    /* background-size: 1004px 741px; */
    background-size: 95% 95%;
}
.picture11 {
    background-image: url(https://picgo-photos.oss-cn-hangzhou.aliyuncs.com/img/five.png);
    background-repeat: no-repeat;
    height: 200px;
    width: 100%;
    background-position: center center;
    text-align: center;
    margin: 0;
}

table {
    border-collapse: collapse;
    border: 1px #525152 solid;
    width: 90%;
    margin: 0 auto;
}

th,
td {
    border: 1px #525152 solid;
    text-align: center;
    font-size: 17px;
    line-height: 30px;
}

/*模拟对角线*/
.out {
    border-top: 55px #D6D3D6 solid;
    /*上边框宽度等于表格第一行行高*/
    width: 0px;
    /*让容器宽度为0*/
    height: 0px;
    /*让容器高度为0*/
    border-left: 200px #BDBABD solid;
    /*左边框宽度等于表格第一行第一格宽度*/
    position: relative;
    /*让里面的两个子容器绝对定位*/
}
/* 测量次数 */
b {
    font-style: normal;
    display: block;
    position: absolute;
    top: -50px;
    left: -90px;
    width: 100px;
}
/* 测量内容 */
em {
    font-style: normal;
    display: block;
    position: absolute;
    top: -30px;
    left: -200px;
    width: 100px;
}
/* 超链接 */
a {
    text-decoration: none;
}
    </style>
</head>
<body>
    <!-- 校徽 -->
    <div class="schoolBadge"></div>
    <div class="allStyle">
        <!-- 标题 + 总分 -->
            <div style="width: 75%;float: left;white-space:nowrap;">
                <h1 class="titleItem">实验四 自组式直流电桥测量电阻值 </h1>
            </div>
            <div style="width: 25%;float: right;white-space:nowrap;">
                <h5 class="totalPoints">总分：</h5>
                <h1 class="totalNumber">95</h1>
            </div>
        <!-- 主体 -->
        <div class="infoStyle">
            <!-- 一：基本信息 -->
            <div>
                <h4>一：基本信息</h4>
                <div class="formTable">
                    <!-- 第一行 -->
                    <div style="margin-bottom: 3%;">
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            学生姓名
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            学生层次
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            学生专业
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            学生年级
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                    </div>
                    <!-- 第二行 -->
                    <div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            学生班级
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            学生学号
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            任课教师
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            完成日期
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                    </div>
                </div>
            </div>
            <!-- 二：实验目的 -->
            <div>
                <h4>二：实验目的</h4>
                <div class="formTable">
                    <div>
                        <!-- <textarea rows="10"></textarea> -->
                        本实验是用滑线变阻器、电阻箱和检流计等仪器组成惠斯通电桥电路测量电阻，掌握调节电桥平衡的方法，并要求了解电桥灵敏度与元件参数之间的关系，从而正确选择这些元件，以达到所要求的测量精度。
                    </div>
                </div>
            </div>
            <!-- 三：实验仪器 -->
            <div>
                <h4>三：实验仪器</h4>
                <div class="formTable">
                    <div>
                        <!-- <textarea rows="10"></textarea> -->
                        电压源、滑线变阻器（2个）、四线电阻箱（3个）、检流计、待测电阻、电源开关
                    </div>
                </div>
            </div>
            <!-- 四：实验原理 -->
            <div>
                <h4>四：实验原理</h4>
                <div class="formTable">
                    <div>
                        <!-- <textarea rows="10"></textarea> -->
                        <div class="pictureOne"></div>
                        <p>
                            电桥是一种用电位比较法进行测量的仪器，直流电桥是用来测量电阻或与电阻有关的物理量的仪器，主要由比例臂、比较臂、检流计等构成桥式线路。
                        </p>
                        <p>
                            1）直流电桥平衡条件
                        </p>
                        <p>
                            如图所示，检流计G对两端点B、D的电位进行比较，当B、D电位相等时，检流计中无电流通过，称电桥达到平衡。电桥平衡时有：
                            <div class="pictureTwo"></div>
                            <div class="pictureThree"></div>
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
                        <div class="pictureFour"></div>
                        <p>
                            式中，σR1、σR2、σR0分别是R1，R2，R0的不确定度。为消除R1 ⁄ R2的比值误差，可交换R1，R2的位置再测，取两次结果的RX1，RX2的平均值为RX，有
                        </p>
                        <div class="pictureFive"></div>
                        <p>
                            （二）电桥灵敏度的误差
                        </p>
                        <p>
                            电桥是否已经平衡，是由检流计是否指零来判断的。因而检流计的灵敏度大小直接影响了判断性。换言之，判断检流计是否指零所产生的误差决定了电桥的灵敏度。
                        </p>
                        <p>
                            电桥平衡时，改变单位电阻检流计的偏转格数Δn称作电桥灵敏度。
                        </p>
                        <div class="pictureSix"></div>
                        <div class="pictureSeven"></div>
                        <p>
                            它表示电桥平衡后，RX的相对该变量ΔRX / RX 所引起的检流计偏转的格数Δn，具体测量时用ΔR0/R0 代替ΔRX/RX 。
                        </p>
                    </div>
                </div>
            </div>
            <!-- 五：实验内容及实验数据记录与处理 -->
            <div>
                <h4 style="margin-bottom: 0%;">五：实验内容及实验数据记录与处理</h4>
                <div style="text-align: right;margin-bottom: 1%;color: #606166;font-size: 12px;">
                    该部分得分：45分
                </div>
                <div class="formTable">
                    <div>
                        <!-- <textarea rows="10"></textarea> -->
                        <p>
                            5.1  实验内容与步骤
                        </p>
                        <div class="picture11"></div>
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
                            5.2 系统操作截图
                        </p>
                        <div class="pictureEight"></div>
                        <div class="pictureNight"></div>
                        <div class="pictureTen"></div>
                        <p>
                            5.3 实验数据记录与处理
                        </p>
                        <div>
                            <!-- 1.自组式直流电桥测量电阻值 -->
                            <table>
                                <tr>
                                    <th colspan="8" style="text-align: left;">1.自组式直流电桥测量电阻值</th>
                                </tr>
                                <tr>
                                <th style="width: 200px;">
                                <div class="out">
                                <b>测量次数</b>
                                <em>测量内容</em>
                                </div>
                                </th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th colspan="3">测量结果</th>
                                </tr>
                                <tr>
                                    <td class="t1">R1(Ω)</td>
                                    <td>500</td>
                                    <td>2000</td>
                                    <td>100</td>
                                    <td rowspan="4" style="width: 10%">RX=</td>
                                    <td rowspan="4" contenteditable="true" style="width: 10%"></td>
                                    <td rowspan="4" style="width: 10%">Ω</td>
                                </tr>
                                <tr>
                                    <td class="t1">R2(Ω)</td>
                                    <td>500</td>
                                    <td>2000</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td class="t1">电阻臂R0(Ω)</td>
                                    <td contenteditable="true">
                                        <!-- <input type="text" /> -->
                                    </td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                <td class="t1">待测电阻值RX(Ω)</td>
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                                </tr>
                            </table>
                            <!-- 2.测量并计算自组式直流电桥的灵敏度 -->
                            <table>
                                <tr>
                                    <th colspan="8" style="text-align: left;">2.测量并计算自组式直流电桥的灵敏度</th>
                                </tr>
                                <tr>
                                <th style="width: 200px;">
                                <div class="out">
                                <b>测量次数</b>
                                <em>测量内容</em>
                                </div>
                                </th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th colspan="3">测量结果</th>
                                </tr>
                                <tr>
                                <td class="t1">电阻臂R0(Ω)</td>
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                                <td rowspan="4" style="width: 10%">S=</td>
                                <td rowspan="4" contenteditable="true" style="width: 10%"></td>
                                </tr>
                                <tr>
                                    <td class="t1">偏转格数Δn</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td class="t1">变化量ΔR0(Ω)</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    </tr>
                                <tr>
                                <td class="t1">电桥灵敏度S</td>
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                                </tr>
                            </table>
                            <!-- 3.自组式直流电桥测量电阻值 -->
                            <table>
                                <tr>
                                    <th colspan="8" style="text-align: left;">3.自组式直流电桥测量电阻值</th>
                                </tr>
                                <tr>
                                <th style="width: 200px;">
                                <div class="out">
                                <b>测量次数</b>
                                <em>测量内容</em>
                                </div>
                                </th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th colspan="3">测量结果</th>
                                </tr>
                                <tr>
                                    <td class="t1">R1(Ω)</td>
                                    <td>200</td>
                                    <td>500</td>
                                    <td>1000</td>
                                    <td rowspan="4" style="width: 10%">RX=</td>
                                    <td rowspan="4" contenteditable="true" style="width: 10%"></td>
                                    <td rowspan="4" style="width: 10%">Ω</td>
                                </tr>
                                <tr>
                                    <td class="t1">R2(Ω)</td>
                                    <td>100</td>
                                    <td>1000</td>
                                    <td>4000</td>
                                </tr>
                                <tr>
                                    <td class="t1">电阻臂R0(Ω)</td>
                                    <td contenteditable="true">
                                        <!-- <input type="text" /> -->
                                    </td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                <td class="t1">待测电阻值RX(Ω)</td>
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                                </tr>
                            </table>
                            <!-- 4.测量并计算自组式直流电桥的灵敏度 -->
                            <table>
                                <tr>
                                    <th colspan="8" style="text-align: left;">4.测量并计算自组式直流电桥的灵敏度</th>
                                </tr>
                                <tr>
                                <th style="width: 200px;">
                                <div class="out">
                                <b>测量次数</b>
                                <em>测量内容</em>
                                </div>
                                </th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th colspan="3">测量结果</th>
                                </tr>
                                <tr>
                                <td class="t1">电阻臂R0(Ω)</td>
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                                <td rowspan="4" style="width: 10%">S=</td>
                                <td rowspan="4" contenteditable="true" style="width: 10%"></td>
                                </tr>
                                <tr>
                                    <td class="t1">偏转格数Δn</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td class="t1">变化量ΔR0(Ω)</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    </tr>
                                <tr>
                                <td class="t1">电桥灵敏度S</td>
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                                <td contenteditable="true"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 六：思考题 -->
            <div>
                <h4 style="margin-bottom: 0%;">六：思考题</h4>
                <div style="text-align: right;margin-bottom: 1%;color: #606166;font-size: 12px;">
                    该部分得分：50分
                </div>
                <div class="formTable">
                    <div>
                        Ⅰ.选择题(选择题部分：40分)
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">1.单独对于实验仪器本身来说，电压源的电压值是(&nbsp;&nbsp;&nbsp;&nbsp;)？</div>
                            <div style="text-indent: 2em;margin: 5px auto;">A.可调节的</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.不可调节的</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.0 V</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.50 V</div>
                        </div>
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">2.列有关比例臂的说法中，正确的是(&nbsp;&nbsp;&nbsp;&nbsp;)？</div>
                            <div style="text-indent: 2em;margin: 5px auto;">A.自组式直流电桥的比例臂可以随意选取</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.自组式直流电桥的比例臂不可以选取10:1</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.自组式直流电桥的比例臂可以选取1:1</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.自组式直流电桥的比例臂只有固定的几个选项</div>
                        </div>
                        <!-- <textarea rows="10"></textarea> -->
                        Ⅱ.判断题(判断题部分：10分)
                        <!-- <textarea rows="10"></textarea> -->
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">1.在实验初始状态下，检流计需要调零。 (&nbsp;&nbsp;&nbsp;&nbsp;)</div>
                            <div style="margin-bottom: 10px;">2.在实验过程中，只需要使用一个滑线变阻器。 (&nbsp;&nbsp;&nbsp;&nbsp;)</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 七：线上资源 -->
            <div>
                <h4>七：线上资源</h4>
                <div class="formTable">
                    <div style="text-indent: 1em;margin:1%;">
                        <div style="margin-bottom: 10px;">1）在线实验报告系统链接：<a href="http://180.76.111.200/#/login">http://180.76.111.200/#/login</a></div>
                        <div style="margin-bottom: 10px;">2）在线资源链接：FTP://ftp.cs.nsu.edu.cn/大学物理实验</div>
                    </div>
            </div>
            </div>
            <br />
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>实验五 箱式直流电桥测量电阻</title>
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
    background-image: url(https://i.postimg.cc/5tcvrVXj/1.png);
    background-repeat: no-repeat;
    height: 140px;
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
    background-image: url(https://i.niupic.com/images/2022/08/23/a2fo.png);
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
    background-image: url(https://i.niupic.com/images/2022/08/23/a2fp.png);
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
    background-image: url(https://i.niupic.com/images/2022/08/23/a2fq.png);
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
                <h1 class="titleItem">实验项目 箱式直流电桥测量电阻</h1>
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
                        本实验是用电桥箱和待测电阻等仪器组成惠斯通电桥电路测量电阻，掌握调节电桥平衡的方法，并要求了解电桥灵敏度与元件参数之间的关系，从而正确选择这些元件，以达到所要求的测量精度。
                    </div>
                </div>
            </div>
            <!-- 三：实验仪器 -->
            <div>
                <h4>三：实验仪器</h4>
                <div class="formTable">
                    <div>
                        <!-- <textarea rows="10"></textarea> -->
                        电桥箱（1个）、待测电阻。
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
                        <div style="text-align: center;">图5.1 惠斯通电桥</div>
                        <p>
                            电桥是一种用电位比较法进行测量的仪器，直流电桥是用来测量电阻或与电阻有关的物理量的仪器，主要由比例臂、比较臂、检流计等构成桥式线路。
                        </p>
                        <p>
                            1）直流电桥平衡条件
                        </p>
                        <p>
                            如图5.1所示，检流计G对两端点B、D的电位进行比较，当B、D电位相等时，检流计中无电流通过，称电桥达到平衡。电桥平衡时有：
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
                        <p>1.箱式直流电桥测量电阻</p>
                        <p>
                        (1)首先，保持电桥箱的内部电源开关（B）和内接检流计开关（G）均处于断开状态，连接待测电阻RX至电桥箱的“RX”接线柱上。
                        </p>
                        <p>
                        (2)线路连接好以后，检流计调零。调零后，合上内部电源开关（B）。
                        </p>
                        <p>
                        (3)选取合适的比例臂（×1档），合上内接检流计开关（G），调节电阻臂R0的阻值使电路平衡，测量三次，记录实验数据，并计算出待测电阻值Rx。
                        </p>
                        <p>
                        (4)根据待测电阻值RX，选定一个合适的比例臂，调节电桥平衡，记下电桥平衡时电阻臂的电阻值R0，然后在小范围内改变电阻臂的电阻值，记下电阻臂相对平衡位置改变的值，即ΔR0，和指针相对平衡位置偏转的格数，即△n，测量三次，并根据电桥灵敏度公式: S=△n/(△R0/ R0)计算出直流电桥的电桥灵敏度。
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
                            <!-- 1.箱式直流电桥测量电阻值 -->
                            <table>
                                <tr>
                                    <th colspan="8" style="text-align: left;">1.箱式直流电桥测量电阻值</th>
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
                                <td class="t1">比例臂</td>
                                <td>0.1</td>
                                <td>0.1</td>
                                <td>0.1</td>
                                <td rowspan="3" style="width: 10%">RX=</td>
                                <td rowspan="3" contenteditable="true" style="width: 10%"></td>
                                <td rowspan="3" style="width: 10%">Ω</td>
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
                            <!-- 2.测量并计算箱式直流电桥的灵敏度 -->
                            <table>
                                <tr>
                                    <th colspan="8" style="text-align: left;">2.测量并计算箱式直流电桥的灵敏度</th>
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
                                <td class="t1">变化量ΔR0(Ω)</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                </tr>
                                <tr>
                                <td class="t1">偏转格数Δn</td>
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
                            <!-- 3.箱式直流电桥测量电阻值 -->
                            <table>
                                <tr>
                                    <th colspan="8" style="text-align: left;">3.箱式直流电桥测量电阻值</th>
                                </tr>
                                <tr>
                                <th style="width: 200px;">
                                <div class="out">
                                <b>测量次数</b>
                                <em>测量内容</em>
                                </div>
                                </th>
                                <th>R2</th>
                                <th>R3</th>
                                <th>R1</th>
                                <!-- <th colspan="3">测量结果</th> -->
                                </tr>
                                <tr>
                                <td class="t1">比例臂</td>
                                <td>1</td>
                                <td>100</td>
                                <td>0.1</td>
                                </tr>
                                <tr>
                                <td class="t1">电阻臂R0(Ω)</td>
                                <td contenteditable="true"></td>
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
                            <div style="margin-bottom: 10px;">1.在使用箱式直流电桥测量电阻时，为什么选取的比例臂一般应使单电桥的四个测量盘尽可能用上(&nbsp;&nbsp;&nbsp;&nbsp;)？</div>
                            <div style="text-indent: 2em;margin: 5px auto;">A.测量盘必须全用上</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.比例臂的选取与测量盘使用个数无关</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.使用一个测量盘时，读出的测量值精度最高</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.读出的测量值有效位数多，测量精度有保证</div>
                        </div>
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">2.为了提高电桥测量的灵敏度，应采取哪些措施(&nbsp;&nbsp;&nbsp;&nbsp;)？</div>
                            <div style="text-indent: 2em;margin: 5px auto;">A.提高电源电压</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.使用低灵敏度检流计</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.比例臂可以随意选取</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.不使用等臂电桥</div>
                        </div>
                        <!-- <textarea rows="10"></textarea> -->
                        Ⅱ.判断题(判断题部分：10分)
                        <!-- <textarea rows="10"></textarea> -->
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">1.因为电桥箱是设计生产精良的专业实验仪器，电桥箱中的检流计不用调零。(&nbsp;&nbsp;&nbsp;&nbsp;)</div>
                            <div style="margin-bottom: 10px;">2.在电阻值的测量过程中，只用按下内接检流计开关这一个开关。(&nbsp;&nbsp;&nbsp;&nbsp;)</div>
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
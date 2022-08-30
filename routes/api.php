<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/**
 * 物理数据
 * yjx
 */
Route::middleware('jwt.auth')->prefix('completion1')->group(function () {
    Route::post('completion1', 'PhysicsController@YJXphysics');//实验1答题（数据分析）
   // Route::get('pdf1', 'PhysicsController@pdf1');//实验1pdf
});

/**
 * @author yjx
 * 登录模块
 */
Route::prefix('users')->group(function () {
    Route::post('login', 'UsersController@login');  //用户登录
    Route::post('registered', 'UsersController@registered');  //用户注册
    Route::post('again', 'UsersController@again');  //修改用户密码
});
/**
 * @author yjx
 * 下拉框模块
 */
Route::prefix('show')->group(function () {
    Route::get('showlevel', 'PhysicsController@yjxshowxxlevel');  //查看层次下拉框
    Route::get('showyear', 'PhysicsController@yjxshowxxyear');  //查看级数下拉款
    Route::post('showclass', 'PhysicsController@yjxshowxxclass');  //查看班级下拉框
    Route::get('showspec', 'PhysicsController@yjxshowxxspec');  //查看专业下拉框
    Route::post('showxxallin', 'TeacherShowController@yjxshowxxallin');  //教师端3连查询
    Route::get('pdf1', 'PhysicsController@pdf1');//实验1pdf
});

Route::middleware('jwt.auth')->group(function () {
    Route::post("selectstudent",'informationFindController@zlcSelectstudent');//查看个人学生信息
    Route::post("danbai","PendulumController@zlcDanbai");//单摆
   //  Route::post("js","PendulumController@zlcJs");//单摆计算题
});

  Route::post("js","PendulumController@zlcJs");//单摆计算题
Route::get("pdf","PendulumController@ZlcPdfDanbai");//pdf
Route::get("export","TeacherShowController@export");//pdf

/**
 * 电表改装实验
 */
Route::prefix('dianbiao')->group(function () {
    Route::post("luru","Shiyan\DiangaiController@WzhDiangai")
        ->middleware('jwt.auth');//电表改装实验成绩录入
    Route::get("dianbiaopdf","Shiyan\DiangaiController@pdf");//pdf导出
});

/**
 * 霍尔效应测量磁感应强度
 */
Route::prefix('huoer')->group(function () {
    Route::post("luru","Shiyan\HuoerController@WzhHuoer")
        ->middleware('jwt.auth');//霍尔效应测量磁感应强度成绩录入
    Route::get("huoerpdf","Shiyan\HuoerController@pdf");//pdf导出
    Route::post("DaFen","Shiyan\HuoerController@DaFen")
        ->middleware('jwt.auth');                       //打分
});

/**
 * 欧姆表的改装设计实验
 */
Route::prefix('oumu')->group(function () {
    Route::post("luru","Shiyan\OumuController@WzhOumu")
        ->middleware('jwt.auth');//欧姆表的改装设计实验成绩录入
    Route::get("oumupdf","Shiyan\OumuController@pdf");//pdf导出
    Route::post("DaFen","Shiyan\OumuController@DaFen");//打分
});

/**
 * 示波器的调整与使用实验
 */
Route::prefix('shiboqi')->group(function () {
    Route::post("luru","Shiyan\ShiboqiController@Wzhshiboqi")
        ->middleware('jwt.auth');//示波器的调整与使用实验录入
    Route::get("shiboqipdf","Shiyan\ShiboqiController@pdf");//pdf导出
});

/**
 * 万用表的改装设计实验
 */
Route::prefix('wanyongbiao')->group(function () {
    Route::post("luru","Shiyan\WanyongbiaoController@WzhWanyongbiao")
        ->middleware('jwt.auth');//万用表的改装设计实验录入
    Route::get("wanyongbiaopdf","Shiyan\WanyongbiaoController@pdf");//pdf导出
});

/**
 * 箱式直流电桥测量电阻
 */
Route::prefix('xiangshi')->group(function () {
    Route::post("luru","Shiyan\XiangshiController@WzhXiangshi")
        ->middleware('jwt.auth');//箱式直流电桥测量电阻录入
    Route::get("xiangshipdf","Shiyan\XiangshiController@pdf");//pdf导出
});

/**
 * 自组直流电桥测量电阻
 */
Route::prefix('zizu')->group(function () {
    Route::post("luru","Shiyan\ZizuController@WzhZizu")
        ->middleware('jwt.auth');//箱式直流电桥测量电阻录入
    Route::get("zizupdf","Shiyan\ZizuController@pdf");//pdf导出
});



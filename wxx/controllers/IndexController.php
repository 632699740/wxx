<?php

namespace app\controllers;
use yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Users;
use  yii\web\Session;
class IndexController extends Controller
{
//    public $layout= 'common';
    public $enableCsrfValidation = false;

    //展示登录页面
    public function actionMy()
    {

        return $this->renderPartial('my');
    }
    //添加
    public function actionForm()
    {
        return $this->renderPartial('appadd');
    }
    //执行添加
    public function actionAdd()
    {
        $session = Yii::$app->session;
        if(!isset($session['language'])){
            echo  "<script>location.href='index.php?r=login/login'</script>";die;
        }
        $appid =\Yii::$app->request->post('appid');
        $appsecret = \Yii::$app->request->post('appsecret');
        $username = \Yii::$app->request->post('username');
        $info = \Yii::$app->request->post('info');

        if(trim($username)=="" || trim($appid)=="" || trim($appsecret)=="" || trim($info)==""){

            return $this->render('appadd');

    }
        $url = $this->actionUrl();
        $token = $this->actionToken();


        $users=new Users();
        $users->username = $username;
        $users->appid = $appid;
        $users->appsecret = $appsecret;
        $users->info = $info;
        $users->url = $url;
        $users->token = $token;
        $re=$users->save();
        if($re){
            return $this->redirect(array('/index/tables'));
        }


}
        //列表
    public function actionTables()
    {
        $users=new Users();
        $re=$users->find()->asArray()->all();
        return $this->renderPartial('tables', ['re'=>$re]);
    }
        //修改
    public function actionUpd(){

        $id =\Yii::$app->request->get('id');
        if(trim($id)==""){
            return $this->redirect(array('/index/tables'));
        }

        $users=new Users();
        $re=$users->find()->where(['id'=>$id])->asArray()->one();
        return $this->renderPartial('upd', ['re'=>$re]);
    }
    //修改
    public function actionUpd_pro(){

        $username = \Yii::$app->request->post('username');
        $info = \Yii::$app->request->post('info');
        $id =\Yii::$app->request->post('id');

        if( trim($username)=="" || trim($id)==""  || trim($info)==""){
            return $this->redirect(array('/index/tables'));
        }
        $users=new Users();
        $up=$users->updateAll(['username'=>$username,'info'=>$info],['id'=>$id]);
        if($up){
            return $this->redirect(array('/index/tables'));
        }else{
            return $this->redirect(array('/index/upd'));
        }
    }
    //删除
    public function actionDel(){
        $session = Yii::$app->session;
        if(!isset($session['language'])){
            echo  "<script>location.href='index.php?r=login/login'</script>";die;
        }

        $id =\Yii::$app->request->get('id');

        if(trim($id)==""){
            return $this->redirect(array('/index/tables'));
        }

        $users=new Users();
        $users->findOne($id)->delete();
        return $this->redirect(array('/index/tables'));
    }
    //退出
    public function actionLogout(){
        $session = Yii::$app->session;
        unset($session['language']);
        if(!isset($session['language'])){
            echo  "<script>location.href='index.php?r=login/login'</script>";die;
        }


    }

    //菜单管理menu
    public function actionMenu(){
        $users=new Users();
        $re=$users->find()->asArray()->all();
        return $this->renderPartial('menu', ['re'=>$re]);

    }

    public function actionMenu_pro()
    {

        $id = \Yii::$app->request->get('id');
        $users = new Users();
        $re = $users->find()->where(['id' => $id])->asArray()->one();
        $appID = $re['appid'];
        $appsecret = $re['appsecret'];
        $access_token = $this->actionAccessToken($appID, $appsecret);

           return trim($access_token);

        }


    //生成URL
    public function actionUrl(){

        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = $protocol.'192.25.194.30/zhangdi/dy.php';
        return $url;
    }

    //生成token
    function actionToken(){
        $str = null;
        $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $max = strlen($strPol)-1;

        for($i=0;$i<6;$i++){
            $str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数
        }
        return $str;
    }

    //curl
    public function actionCurlPost($url,$data,$method){
        $ch = curl_init();   //1.初始化
        curl_setopt($ch, CURLOPT_URL, $url); //2.请求地址
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);//3.请求方式
        //4.参数如下
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);//https
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');//模拟浏览器
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept-Encoding: gzip, deflate'));//gzip解压内容
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');

        if($method=="POST"){//5.post方式的时候添加数据
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tmpInfo = curl_exec($ch);//6.执行

        if (curl_errno($ch)) {//7.如果出错
            return curl_error($ch);
        }
        curl_close($ch);//8.关闭
        return $tmpInfo;
    }
    // 创建菜单
    public function actionCreatemenu(){

        $access_token=\Yii::$app->request->post('token');



        $name=\Yii::$app->request->post('menuo');

        $namet=\Yii::$app->request->post('menut');


        $nameoo=\Yii::$app->request->post('menuoo');

        $nameot=\Yii::$app->request->post('menuot');



        $nameos=\Yii::$app->request->post('menuos');


        //$access_token = $this->actionAccessToken();
        $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;
        // echo $url;die;
        $data='{
     "button":[
     {
          "type":"click",
          "name":"'.$name.'",
          "key":"V1001_TODAY_MUSIC"
      },
      {
           "name":"'.$namet.'",
           "sub_button":[
           {
               "type":"view",
               "name":"'.$nameoo.'",
               "url":"http://www.baidu.com/"
            },
            {
               "type":"view",
               "name":"'.$nameot.'",
               "url":"http://v.qq.com/"
            },
            {
               "type":"click",
               "name":"'.$nameos.'",
               "key":"V1001_GOOD"
            }]
       }]
 }';
        $json = $this->actionCurlPost($url,$data,'POST');
        // print_r($json);die;

        $arr = json_decode($json,true);
        if($arr['errcode']==0){
            return $this->redirect(array('/index/menu'));
        }else{
            return $json;
        }
    }



    //获取
    private function actionAccessToken($appID,$appsecret){
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appID."&secret="
            .$appsecret;
        $json = file_get_contents($url);
//        $json = '{"access_token":"G4YPdL1dY21VZXa0pbOFCezJwTpCBkWqvWgCbhtd21t-lJ9gbxnNR9SYuGNWASfGFscOaXQaXDhkpR3Jx9LQ-H47OR_FvqgU9u24R4avCvzamFoGmNn4sTu_iTxNQImcNMOfAHAUTV","expires_in":7200}';
        //echo $json;die;
        $arr = json_decode($json,true);
        $access_token = $arr['access_token'];
        return $access_token;
    }

}
<?php
namespace Home\Controller;

// 用户控制器
class UserController extends HomeController {

    //生成验证码
    public function verify(){
        $config = array(
            'fontsize' => 18,               //  验证码字体大小
            'length'   => 3,                //  验证码位数
            'useNoise' => true,            //  验证码杂店
            'useCurve' => true,            //  混淆曲线
            'imageW'   => 150,              //  验证码宽度
            'imageH'   => 50,               //  验证码高度
            'expire'   => 30,               //  验证码有效期
        );

        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }


    public function index(){
        $this->assign('title','用户中心');
        $this->display();
    }

    public function register(){
        $this->assign('title','用户注册');
        $this->display();
    }

    public function doRegister(){
        $user = M('user_login');
        $_POST['username'] = $_POST['email'];
        $_POST['password'] = md5($_POST['password']);
        if($user->create()){
            if($user->add()){
                $this->success('注册成功','login');
            }else{
                $this->error('注册失败');
            }
        }else{
            $this->error('数据有误');
        }
    }

    // 发送验证邮件
    public function sendMail(){
        $email = $_GET['email'];
        $nums = array(0,1,2,3,4,5,6,7,8,9);
        shuffle($nums);
        $yzm = '';
        for ($i=0; $i < 4; $i++) { 
            $yzm .= $nums[$i];
        }
        $str = '<html>
        <head>
            <title>邮箱验证码</title>
            <meta charset="utf-8"/>
        </head>
        <body>
            <h1>'.$yzm.'</h1>
        </body>
        </html>';
        $mail = new \Think\Sendmail();
        $mail->setServer("smtp.163.com", "huabancopy@163.com", "huaban@lamp109", 465, true); //设置smtp服务器，到服务器的SSL连接
        $mail->setFrom("huabancopy@163.com"); //设置发件人
        $mail->setReceiver($email); //设置收件人，多个收件人，调用多次
        $mail->setMail("享吃网注册验证", $str); //设置邮件主题、内容
        $mail->sendMail(); //发送

        $_SESSION['emailYZM'] = $yzm;
        echo $yzm;
    }

    public function login(){
        if(empty($_SESSION['home'])){
            $this->assign('title','用户登录');
            $this->display();
        }else{
            $this->redirect('Index/index');
        }
    }

    public function doLogin(){
        $username = $_GET['username'];
        $password = $_GET['password'];
        $vcode = $_GET['vcode'];

        // 检查验证码是否正确(与session匹配)
        $verify = new \Think\Verify();
        $result = $verify->check($vcode);

        // 验证码未匹配
        if(!$result){
            $this->ajaxReturn('0');
            exit;
        }

        $user = M('user_login');
        $search = $user->where("`username`='$username' or `email`='$username'")->find();
        // 用户不存在
        if(!$search){
            $this->ajaxReturn('1');
            exit;
        }

        // 密码不匹配
        if($search['password'] != md5($password)){
            $this->ajaxReturn('2');
            exit;   
        }
        
        $_SESSION['home']['uid'] = $search['id'];
        $_SESSION['home']['username'] = $search['username'];
        $this->ajaxReturn('success');       
    }

    public function selectAddress(){
        $this->assign('title','选择用户所在地址:功能实现');
        $this->display();
    }
    
    public function myOrder(){
        $this->assign('title','我的订单');
        $this->display();
    }

    public function myAssets(){
        $this->assign('title','我的资产:优惠卷/积分');
        $this->display();
    }  

    public function myCollect(){
        $this->assign('title','我的收藏店铺');
        $this->display();
    }  


}
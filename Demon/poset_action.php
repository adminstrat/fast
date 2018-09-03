<?php
/**
 * Created by PhpStorm.
 * User: lzl70
 * Date: 2018/8/31
 * Time: 11:11
 */

if ((!is_null($_POST['user']))&&(!is_null($_POST['passwd'])))
{

    $user=$_POST['user'];
    $pad=$_POST['passwd'];
   /*检测变量是否设置 if((!isset($user)) && (!isset($pad)))
    {
        exit('依然不能为空');
    }*/
if($user==='admin'&& $pad === 'admin')
{
   // echo '登陆成功';
    echo "<div align='center'><table border='1'><tr><td><a href='login.html'><image src='./img/3.jpg'/></a></td></tr></table></div>";
}else
{
    exit('用户名密码错误');
}
}else
{
    die('不能为空');
}

/*$test = null;
echo isset($test)?1:0 .'<br>';
echo is_null($test)?1:0;*/
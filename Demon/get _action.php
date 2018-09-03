<?php
/**
 * Created by PhpStorm.
 * User: lzl70
 * Date: 2018/8/30
 * Time: 17:37
 */

if ((!is_null($_GET['user']))&&(!is_null($_GET['passwd']))) {
    $user = $_GET['user'];
    $paw = $_GET['passwd'];
    if ($user === 'admin' && $paw === 'admin')
    {
        echo "登陆成功";
    }
    else {
        exit("错");//die也可以；
    }
/*    echo "用户名：" . $user;
    echo '<br>';
    echo "密码：" . $paw;*/
}
else {
    die("为空");//die也可以；
}
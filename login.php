<?php
session_start();
$_SESSION["email"] = $_POST["email"];
$_SESSION["pass"] = $_POST["pass"];

if($_SESSION["loginname"] != "guouta.com" || $_SESSION["pass"] != "pass"){
    ?>
    ログインに失敗しました。<br />
    <a href="login.html">セッション生成ページ</a>
    <?php
    exit;
}
if(isset($_POST["username"])) setcookie("username", $_POST["username"], time()+120);
?>
会員専用画面です。<br />
ログイン認証に成功しました。現在ログインしている状態です。

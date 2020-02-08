<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>帳號管理系統</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />


</head>

<body class="is-preload" style="background-image: url(images/mm.jpg);">
    <!-- Header -->
    <header id="header">
        <a class="logo" href="index.php">帳號管理系統</a>
        <nav>
            <a href="#menu">選單</a>
        </nav>
    </header>
    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="index.php">首頁</a></li>
            <li><a href="index.php?method=insert">新增</a></li>
            <li><a href="index.php?method=update">修改</a></li>
            <li><a href="index.php?method=delete">刪除</a></li>
            <li><a href="index.php?method=account">查詢</a></li>
        </ul>
    </nav>
    <?
            $method=$_GET["method"];
            switch($method){
            case "account": include "account.php"; break;
            case "update": include "update.php"; break;
            case "update1": include "update1.php"; break;
            case "insert": include "insert.php"; break;
            case "delete": include "delete.php"; break;
            case "delete1": include "delete1.php"; break;
            default: include "menu.php";
            }
        ?>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>

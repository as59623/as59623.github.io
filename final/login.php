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

<body class="is-preload">
    <form action="index.php" method="post">
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
                <li><a href="login.php">登入</a></li>
            </ul>
        </nav>
        <div id="heading">
            <h1>帳號管理系統</h1>
        </div>
        <div class="row">
            <div class="col-6 col-12-medium">
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall"></div>
                    <div class="col-6 col-12-xsmall"><br>
                        帳號<input type="text" name="account_id" placeholder="Account"><br>
                        密碼<input type="password" name="password" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="col-6 col-12-medium">
                <div class="col-12"><br><br><br><br><br><br>
                    <ul class="actions">
                        <li><input type="submit" value="登入" class="primary" /></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
    </form>
</body>

</html>

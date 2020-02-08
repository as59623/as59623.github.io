<p align=center>
    <?php
        date_default_timezone_set("Asia/Taipei");
        echo "Today is " . date("Y/m/d") . "<br>";
        $file=fopen("num.txt","r");
        $num=fgets($file);
        fclose($file);

        $num++;
        $file=fopen("num.txt","w");
        fwrite($file,$num);
        fclose($file);
        echo "瀏覽人數：" . "$num" . "<br>";
?>
</p>
<!-- Highlights -->
<section class="wrapper">
    <div class="inner">
        <div class="highlights">
            <section>
                <div class="content" style="background-color: rgba(255, 255, 255, 0.3);">
                    <header>
                        <a class="icon fa-vcard-o" href="index.php?method=insert"><span class="label">Icon</span></a>
                        <h3>新增</h3>
                    </header>
                </div>
            </section>
            <section>
                <div class="content" style="background-color: rgba(255, 255, 255, 0.3);">
                    <header>
                        <a class="icon fa-files-o" href="index.php?method=update"><span class="label">Icon</span></a>
                        <h3>修改</h3>
                    </header>
                </div>
            </section>
            <section>
                <div class="content" style="background-color: rgba(255, 255, 255, 0.3);">
                    <header>
                        <a class="icon fa-floppy-o" href="index.php?method=delete"><span class="label">Icon</span></a>
                        <h3>刪除</h3>
                    </header>
                </div>
            </section>
            <section>
                <div class="content" style="background-color: rgba(255, 255, 255, 0.3);">
                    <header>
                        <a class="icon fa-paper-plane-o" href="index.php?method=account"><span class="label">Icon</span></a>
                        <h3>查詢</h3>
                    </header>
                </div>
            </section>
            <div align=right>
                <a href="http://www.stat.fju.edu.tw" target="_blank" style="position: "><img src="images/cloud1.png" alt="" width="40%"></a>
                <a href="http://www.im.fju.edu.tw/" target="_blank"><img src="images/cloud2.png" alt="" width="40%"></a>
            </div>
            <div>
                <a href="http://www.mba.fju.edu.tw/" target="_blank"><img src="images/cloud3.png" alt="" width="40%"></a>
                <a href="http://www.acct.fju.edu.tw/" target="_blank"><img src="images/cloud4.png" alt="" width="40%"></a>
            </div>
        </div>
    </div>
</section>

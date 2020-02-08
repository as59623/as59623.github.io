<?
    $upper=$_POST["upper"];
    $upname=$_POST["upname"];
    $upid=$_POST["upid"];
    $user=$_POST["user"];
    $link=mysql_connect("localhost","root","12345");
    mysql_select_db("project_schema",$link);
    if(!$link)
	   {exit("Connection Failed: " . $link);}
	else{
        $sql="update account set permission = '$upper', name = '$upname', id = '$upid' where user = '$user'";
        }
        if(mysql_query($sql,$link)){
?>
<script>
    alert('修改完成');
    location = "index.php?method=update";

</script>
<?
        }
?>

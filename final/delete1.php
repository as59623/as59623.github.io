<?
  $user=$_GET["user"];
  $link=mysql_connect("localhost","root","12345");
  mysql_select_db("project_schema",$link);
  $sql="delete from account where user='$user'";
  mysql_query($sql,$link);
  mysql_close($link);
?>
<script>
    alert('刪除完成');
    location = "index.php?method=delete";

</script>

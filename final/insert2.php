<?
    $user=$_POST["user"];
    $password=$_POST["password"];
    $permission=$_POST["permission"];
    $name=$_POST["name"];
    $id=$_POST["id"];
    $link=mysql_connect("localhost","root","12345");
    mysql_select_db("project_schema",$link);
    $sql="insert into account (user,password,permission,name,id) values('$user','$password','$permission','$name','$id')";
    if(mysql_query($sql,$link)){
?>
<script>
    alert('新增完成');
    location = "index.php";

</script>
<?
    }
?>
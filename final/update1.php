<?
    $user=$_GET["user"];
    $link=mysql_connect("localhost","root","12345");
    mysql_select_db("project_schema",$link);
    if(!$link)
	   {exit("Connection Failed: " . $link);}
	else{
        $rs=mysql_query("select user, permission, name, id, password from account where user='$user'",$link);
        $record=mysql_fetch_row($rs);
        mysql_close($link);
        }
?>
<form action="update2.php" method="post">
    <div class="inner">
        <div class="table-wrapper">
            <br>
            <table>
                <thead>
                    <tr>
                        <th>帳號</th>
                        <th>權限</th>
                        <th>姓名</th>
                        <th>學號/證號</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <? echo $user ?>
                            <input name="user" type="hidden" value="<? echo $record[0] ?>"></td>
                        <td>
                            <div class="col-12">
                                <select id="category" name="upper">
                                    <option value="<? echo $record[1] ?>">
                                        <? echo $record[1] ?>
                                    </option>
                                    <option value="管理員">
                                        管理員
                                    </option>
                                    <option value="教師">
                                        教師
                                    </option>
                                    <option value="學生">
                                        學生
                                    </option>
                                </select>
                            </div>
                        </td>
                        <td><input name="upname" type='text' value="<? echo $record[2] ?>"></td>
                        <td><input name="upid" type='text' value="<? echo $record[3] ?>"></td>
                    </tr>
                </tbody>
            </table><input type="submit" value="確認">
        </div>
    </div>
</form>
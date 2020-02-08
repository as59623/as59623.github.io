<form action="index.php?method=account" method=post>
    <div class="inner">
        <div class="row">
            <div class="col-6 col-12-medium">
                <br>請選擇欲查詢帳號：
                <div class="col-12">
                    <br>
                    <select name="perm" id="category">
                        <option value="">- Select -</option>
                        <option value="管理員">管理員</option>
                        <option value="學生">學生</option>
                        <option value="教師">教師</option>
                    </select>
                </div>
            </div>
            <div class="col-6 col-12-medium"><br><br><br>
                <input type="submit" value="送出">
            </div>
        </div>
    </div>
</form>
<form action="index.php" method=get>
    <?
        $perm=$_POST[perm];
        if(!empty($perm)){
?>
    <div class="table-wrapper" style="width: 80%; padding-left: 15%">
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
                <?
    $link=mysql_connect("localhost","root","12345");
    mysql_select_db("project_schema",$link);
    if(!$link)
	   {exit("Connection Failed: " . $link);}
	else{
		$sql="select user, permission, name, id from account where permission='$perm'";
	}
	$rs=mysql_query($sql,$link);
	while($record=mysql_fetch_row($rs)){
		echo "<tr><td>$record[0]</td><td>$record[1]</td><td>$record[2]</td><td>$record[3]</td>";
	}
	mysql_close($link);
        }
?>
            </tbody>
        </table>
    </div>
</form>
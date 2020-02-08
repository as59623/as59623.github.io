<form action="index.php" method=get>
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
		$sql="select user, permission, name, id from account";
	}
	$rs=mysql_query($sql,$link);
	while($record=mysql_fetch_row($rs)){
		echo "<tr><td>$record[0]</td><td>$record[1]</td><td>$record[2]</td><td>$record[3]</td>";
		echo "<td><ul class=actions><li><a href=index.php?method=delete1&user=$record[0] class='button primary small'>刪除</a></li>";
	}
	mysql_close($link);
?>

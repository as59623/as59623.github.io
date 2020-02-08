<form action="insert2.php" method="post">
    <div class="inner">
        <div class="row">
            <div class="col-6 col-12-medium">
                <br>
                帳號：<input name="user" required="" type="text"><br>
                密碼：<input name="password" required="" type="password"><br>
                權限：<select id="category" name="permission">
                    <option value="">
                        - Select -
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
            <div class="col-6 col-12-medium">
                <br>
                姓名：<input name="name" required="" type='text'><br>
                學號/證號：<input name="id" required="" type='text'><br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6 col-12-medium"></div>
            <div class="col-6 col-12-medium">
                <input type="submit" value="新增">
            </div>
        </div>
    </div>
</form>
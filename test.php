<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <h1>test</h1>
    <div>Logged in as
        <?php
            echo $_SERVER['HTTP_X_MS_CLIENT_PRINCIPAL_NAME']
         ?>
    </div>
    <form action="/test.php" method="POST">
        <input class="form-control" id="hoge" name="hoge" type="text" value=""/>
        <input type="submit" value="Test PHP" class="btn"/>
    </form>
<h1>result</h1>
<?php
	echo $_POST['hoge']
?>
</body>
</html>

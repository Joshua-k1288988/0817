<?php
    
    session_start();
    if(isset($_POST["btnOK"] ) && $_POST["txUserName"] != null){
        //echo "POST";
        $_SESSION["who"] = $_POST["txUserName"];
        header('Location: hallo.php');
        exit();
    }
    if (isset($_POST["btnOK"] ) && $_POST["txUserName"] == null){
        var_export('請輸入名字');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" action = "" >
        Your Name:
        <input type="text" name = "txUserName" ><br>
        <input type="submit" name = "btnOK" value = "OK">
    </form>
</body>
</html>
<?php
if(isset($_POST)){
    @$_SESSION['kadi']=@$_POST['kadi'];
    @$_SESSION['yetki']=@$_POST['yetki'];
    print_r($_SESSION);
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="" method="post">
        kullanici adı: <input type="text" name="kadi">
        yetki= <input type="text" name="yetki" >
        <button type="submit" name="form"> kaydol</button>
    </form>
</body>
</html>
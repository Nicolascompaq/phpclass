<?php
if ($_POST["first"]){
    if (preg_match("", $_POST["first"])){
        die("not successful");
        $side = $_POST["first"];
}
echo "welcome ". $_POST['first'];
header("Location:$side");
}

?>
<<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>jkhkj</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
       <form action="<?php $_PHP_SELF?>" method="POST">
    <input type="text" name="first">
    <button type="submit">submit</button>
    </form>
        
        <script src="" async defer></script>
    </body>
</html>
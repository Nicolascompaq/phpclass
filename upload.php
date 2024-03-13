<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="upload2.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileTopUpload" id="fileTopUpload">
        <input type="submit" name="submit">
    </form>
    <!-- 
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "sorry ,only tad allowed";
    $upLoadOk = 0;
}
} -->
    
</body>
</html>
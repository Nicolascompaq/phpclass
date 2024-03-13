<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileTopUpload"] ["name"]);
$upLoadOk = 1;
$imageFile = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileTopUpload"] ["tmp_name"]);
    if($check !== false) {
        echo "file is an image" .
        $check["mime"]. ".";
        $upLoadOk = 1;

    }else{
        echo "file is not an image";
        $upLoadOk = 0;
    }
}

if(file_exists($target_file)) {
    echo "sorry ,file already exists";
    $upLoadOk = 0;
}
if($_FILES["fileTopUpload"] ["size"] > 5000000) {
    echo "sorry your file is large";
    $upLoadOk = 0;
}
// ckeek here down



if ($upLoadOk == 0) {
    echo "sorry ,your file isn't uploaded";
}else{
    if (move_uploaded_file($_FILES["fileTopUpload"] ["tmp_name"], $target_file)) {
        echo "the file". htmlspecialchars( basename($_FILES["fileTopUpload"] ["name"])) ."has been uploaded.";
    }else{
        echo "sorry, there was an error uploading your file";
    }
}

?>
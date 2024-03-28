<?php 

$ServerName = "localhost";
$UserName = "root";
$password ="";
$dbName = "form1-contact";

$con = mysqli_connect($ServerName,$UserName,$password,$dbName);
if(!$con){
    die("not connected");
}else{
    echo("connected");
}
?>
<?php 
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){

$username = $_POST['first'];
$password = $_POST['second'];
$emails = $_POST['email'];


}else{
    if(!empty($username) && !empty($password) && !empty($emails)){
        
        $query = "insert into form1-contact (username,password,emails) values ('$username','$password','$emails')";

        mysqli_query($con,$query);

        header("location:index.php");
        die;
    }else{
        echo "enter correctly";
    }

}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact page</title>
    <style>

    </style>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">

</head>
<body>
<div class="container">

<?php include("nav.html"); ?>

<!-- second row -->

<div class="row">
    <div class="col-lg-10 justify-content-center">
    </div>
</div>


<!-- third row -->
<div class="row">
    <div class="col-lg-5">
        <form method="POST">
            <label class="form-label">First Name:</label>
            <input type="text" name="first" class="form-control" placeholder="firstname">
            <label class="form-label">Second Name:</label>
            <input type="text" name="second" class="form-control" placeholder="secondname">
            <div class="form-text">
                please enter correct email
            </div>
            <label class="form-label">Address:</label>
            <input type="email" name="email" class="form-control" placeholder="email here">
       <label class="form-check-label">
        male
       </label>
       <input class="form-check-input"  type="radio" name="flexRadioDefault">
           <label class="form-check-label">
            female
           </label>
           <input class="form-check-input" name="flexRadioDefault" type="radio">
        
           <br>
                <button type="submit" class=" submit btn-dark btn-outline-success   ">submit</button>
            
            
        </form>
        <a href="new_images/image1.webp" target="blank">images</a>
    </div>
</div>


    
   
</div>
</div>
<script type="Text/script" src="bootstrap\js\bootstrap.min.js"></script>

</body>
</html>
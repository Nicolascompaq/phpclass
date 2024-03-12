<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>styling</title>
    <link rel="stylesheet" href="nico.css">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            
            <nav class="nav navbar-expand-sm  bg-dark  justify-content-end navbar-dark mb-5 ">
              <a class="navbar-brand" href="#">
                <img src="honda-removebg-preview.png"alt="Bootstrap" width="30" height="24">
              </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
               <li class="nav-item bg-dark" >  <a class="nav-link"  href="first_code.html">first-html</a></li>
               <li  class="nav-item bg-dark"> <a  class="nav-link"    href="index.html">index</a></li>
               <li  class="nav-item bg-dark"><a  class="nav-link" href="lists.html">list</a></li>
               <li  class="nav-item bg-dark"><a  class="nav-link" href="contact_page.html">contact</a></li>
            </ul>
      </div>
        </nav>
    </div>
    </div>
<div class="row">
    <div class="col-12 text-center">


    <h4>Styling attributes  </h4>
</div>
</div>
<div class="row">
    <div class="col-6 text-info align-content-start">
<?php
$more_INT = 333;
$min_int= -22;
$all_int= $more_INT+$min_int;
if ($all_int>=32){
    echo"$all_int";
}
else{
   echo ("not equal");
} 
?>
 
<p class="p1">This is paragraph one</p>
<p class="p2">This is paragraph two</p>
<p class="p3">This is paragraph three</p>
<p class="p4">This is paragraph four</p>

</div>
</div>
<div class="container-lg">
    <div class="row">
       <div class="col-12 bg-secondary">
           <div class="footer">
help faq information 
           </div>
       </div>
   </div>
</div>
</div>
<script src="bootstrap\js\bootstrap.min.js" ></script>
    
</body>
</html>
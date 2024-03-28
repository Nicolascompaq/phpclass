<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greetings</title>
</head>
<body>
<script>
var name = document.getElementById('hello');
var text = 'welcome :';
var msg =prompt("hello. whats is you name");
 name = text+msg ;
 document.write(name);
</script>
<p id="hello">

</p>

<?php 
function hello(){
    echo "nicolas";
}
hello();
?>

<?php 
function great($hello){
    echo ("welcome :". $hello);
}
echo ("enter your name" /n);
$hello = fgets(STDIN);
great($hello)
?>


<?php
function add($c){
    echo "added  =". $c;
}
$a = 10;
$b = 4;
$c = $a+$b;
add($c);
?>

<?php
function myName($get){
    echo "your name is ". $get;
}
echo"enter name:";
$get = fgets(STDIN);
myName($get);
?>
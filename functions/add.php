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

myName($get)

?>
<?php 
function addNumbers($no1,$no2){
    $no3 = $no1+$no2;
    echo "sum ". $no1 ."+" . $no2 .= $no3;
}
echo "enter first number  "  ;
$nol = fgets(STDIN);
echo "enter second number  "  ;
$no2 = fgets(STDIN);


addNumbers($nol,$no2);

?>

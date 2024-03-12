
<!-- while loop -->
<?php
$x = 0;


while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
 


}
echo "while loop ends here <br>  <br> <br>  ";
?>


<!-- do while loop -->

<?php
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
echo "do while loop ends here <br>  <br> <br>  ";

?>


<!-- for loop -->
<?php
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
echo "for loop ends here <br>  <br> <br>  ";

?>

<!-- logic -->

<?php 
 $x = 400;
 $y = 200;

 if ($x == 400 and $y == 200) {

  echo "that is right x = 400 and y = 200";
 }
echo "Logic ends here <br>  <br> <br>  ";



?>

<!-- comparison -->

<?php 
 $x = 400;
 $y = "200";

 if ($x ==$y) {

  var_dump();
 }
echo "comparison ends here <br>  <br> <br>  ";



?>
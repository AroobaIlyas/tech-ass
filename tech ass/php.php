<!DOCTYPE html>
<html>
<head>
<style>
.ds{
	background-color:gray;
	text-align:center;
	margin-bottom:25px;
	margin-top:25px;
}
.iqra{
	background-color:green;
	text-align:center;
	margin-bottom:25px;
	margin-top:25px;
}
.asad{
	background-color:brown;
	text-align:center;
	margin-bottom:25px;
	margin-top:25px;
}
.aqsa{
	text-align:center;
	font-weight:bold;
	font-size:24px;
}
</style>
</head>
<div class="aqsa">
<?php
echo "While ,While-do and For loop";
?>
</div>
<body style="background-color:lightblue;">
<div class="ds">
<?php
  
$x = 0;
 
while($x <= 10) {
  echo  $x;
  $x++;
} 
?> 
</div>
<div class="iqra">
<?php 
$x = 6;
do {
    echo "The number is: $x <br>";
    $x++;
	
} 
 while($x <=10)
?>
</div>
<div class="asad">
<?php

for ($x =0;$x<=10;$x++){
echo $x;

}
?>
</div>

</body>
</html>

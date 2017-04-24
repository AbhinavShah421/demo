<html>
<head><title>Array</title>
</head>
<body>
<pre>
<?php
$num=array(2,4,3,6,7,8);
echo $num[3];
echo "<br />";
 print_r($num);
?>
<?php $mixed=array(45,"abhinav",5.763,Array("cat","dog",array('x','y','z')));?>
<?php //echo $mixed[3];//contain error?>

<?php print_r($mixed);?>
<br/><br/>
<?php echo $mixed[1]?><br/>
<?php echo $mixed[3][1];?><br/>
<?php echo $mixed[3][2][2]?><br/>
<?php     $mixed[4]=89; ?>
<?php     $mixed[3][]=89; ?>
<?php	  $mixed[5]=67;?>
<?php     $mixed[3][2][]=89; ?>
<?php 	  $mixed[]="shah";?>
<?php   print_r($mixed);?>
</pre>

<?php
//php 5.4 added short array syntex
 $array=[1,2,3,4];?>
<pre>
<?php print_r($array);?>
</pre>
</body>
</html>
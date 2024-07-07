<?php

$h2_color = "blue";
echo "<h1 style ='color:red'>php with html</h1>";

echo "<h3 style ='color:green'>php with html</h3>";


?>


<?php

$name = "sharib";
$last = "husain";

echo "<h1  style = 'color:pink'>your name is ".$name." and your last name is ".$last." </h1>";

echo "<h1  style = 'color:pink'>your name is $name and your last name is $last </h1>";

?>



<h1 style= "color:red">
my real name is <?php echo $name; ?>
</h1>


<h2 style= "color:<?php echo $h2_color; ?>">my real name is <?php echo $name; ?></h2>



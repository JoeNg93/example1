<h2>PHP Class and Objects</h2>


<h3>Info about my cat</h3>
<?php
include 'Cat.php';
$myCat = new Cat();
$myCat->SetColor('orange');
$myCat->SetName('garfield');
echo 'The color of my cat is '.$myCat->GetColor().'<br>';
echo 'The name of my cat is '.$myCat->GetName().'<br>';
?>

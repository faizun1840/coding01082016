<?php
$name="faizun";
$course="BIT";
$cgpa=4.0;

if($cgpa==4.0)
{$grade="terbaaeeekkkk";}

else if($cgpa<=3.9)
{$grade="memuaskan";}

if($grade==null)
{echo "please enter correct cgpa";}
else
{echo "welcome ".$name.". Your course is ".$course. ". Base on your CGPA ".$cgpa.", your grade is ".$grade;}

?>
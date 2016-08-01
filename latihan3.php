<?php

#"table .textbold td{font-weight: bold;}"
class states
{
	function getstate()
	{
		return array(array("name"=>"Selangor", "city"=>"Shah Alam", "short"=>"SLG"),
			          array("name"=>"Johor", "city"=>"Johor bahru", "short"=>"JHR"),
			          array("name"=>"Kedah", "city"=>"Alor Setar", "short"=>"KDH"));

	}
}


$states = new states();
foreach($states->getstate() as $state)
#$bold="";
{echo "<table border=1><tr><td width=100px>".$state['name']."</td><td width=100px>".$state['city']."<td width=100px>".$state['short']."</tr></td>";

#if ($state['short']=='JHR')
#S{$bold="class='textbold'";}
#echo $state['city'];
}
?>
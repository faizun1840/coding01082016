

<?php

"<style>table .textbold td{font-weight: bold;}</style>"

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
$bold="";
if ($state['short']=='JHR')
{$bold = "class='textbold'";

}

{echo "<table border=1><tr".$bold."><td width=100px>".$state['name']."</td><td width=100px>".$state['city']."<td width=100px>".$state['short']."</tr></td>";}
?>
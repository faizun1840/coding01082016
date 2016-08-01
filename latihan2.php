<table border=1 >
<tr>
<th width=100px>State Name</th>
<th width=100px>City</th>
<th width=100px>Short Name</th>
</tr>


<?php
$states=array("Selangor","<b>Johor</b>","Kedah","Kelantan","Melaka","Negeri Sembilan","Pahang","Perak","Perlis","Pulau Pinang","Sabah","Sarawak","Terengganu");

$city=array("Shah Alam","<b>Johor Bahru</b>","Alor Setar","Kota Bahru","Bandar Melaka","Seremban","Kuantan","Ipoh","Kangar","Georgetown","Kota Kinabalu","Kuching","Kuala Terengganu");

$short=array("SGR","<b>JHR</b>","KDH","KTN","MLK","NSN","PHG","PRK","PLS","PNG","SBH","SWK","TRG");

$mystate="Johor";
$num=0;

do

{echo "<table border=1><tr><td align=center width=100px>".$states[$num]."</td><td align=center width=100px>".$city[$num]."</td><td align=center width=100px>".$short[$num]."</td></tr>";
#$z=$states[$num];

$num++;
}
while($num<=12);


echo "</table>"
?>

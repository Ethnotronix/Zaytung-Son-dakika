<?php 
 
$veri = file_get_contents("http://www.zaytung.com/index.asp");

preg_match_all('@style="color:black;"><font size="-1">(.*?)</font></a>@si',$veri,$sonuc);

for ($i=0; $i<count($sonuc[1]); $i++)
{
echo "",$sonuc[1][$i],"<br>\n";
}
?>

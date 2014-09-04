<html>
<head>
<link href="needs/ticker-style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script src="needs/jquery.ticker.js" type="text/javascript"></script>
<script type="text/javascript">$(function () {$('#js-news').ticker();});</script>
</head>
<body>
<ul id="js-news" class="js-hidden">
  
<?php 
 
$veri = file_get_contents("http://www.zaytung.com/index.asp");

preg_match_all('@style="color:black;"><font size="-1">(.*?)</font></a>@si',$veri,$sonuc);

for ($i=0; $i<count($sonuc[1]); $i++)
{

echo "<li class='news-item'>",$sonuc[1][$i],"</li>\n";
}
?>
</ul>


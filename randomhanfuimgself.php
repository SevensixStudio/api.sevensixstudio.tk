<?php
$url[1]="hanfu/1.jpg"; 
$url[2]="hanfu/2.jpg"; 
$url[3]="hanfu/3.jpg"; 
$url[4]="hanfu/3-c.jpg"; 
$url[5]="hanfu/5.jpg"; 
$url[6]="hanfu/6-b.jpg"; 
$url[7]="hanfu/7-b.jpg"; 
$url[8]="hanfu/8-b.jpg"; 
$url[9]="hanfu/9-b.jpg"; 
$url[10]="hanfu/1-c.jpg"; 
$url[11]="hanfu/2-c.jpg"; 
$url[12]="hanfu/4-c.jpg"; 
$url[13]="hanfu/5-c.jpg"; 
$url[14]="hanfu/6-c.jpg"; 
$url[15]="hanfu/7-c.jpg"; 
$url[16]="hanfu/8-c.jpg"; 
$url[17]="hanfu/9-c.jpg"; 
$url[18]="hanfu/10-c.jpg"; 
$url[19]="hanfu/11-c.jpg"; 
$url[20]="hanfu/12-c.jpg"; 
$url[21]="hanfu/13-c.jpg"; 

srand ((double)microtime()*1000000);
$randomnum = rand(0, count($url)-1);
header ("Location: $url[$randomnum]");
?>
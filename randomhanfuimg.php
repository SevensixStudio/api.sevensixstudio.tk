<?php
$url[1]="https://api.sevensixstudio.tk/hanfu/1.jpg"; 
$url[2]="https://api.sevensixstudio.tk/hanfu/2.jpg"; 
$url[3]="https://api.sevensixstudio.tk/hanfu/3.jpg"; 
$url[4]="https://api.sevensixstudio.tk/hanfu/3-c.jpg"; 
$url[5]="https://api.sevensixstudio.tk/hanfu/5.jpg"; 
$url[6]="https://api.sevensixstudio.tk/hanfu/6-b.jpg"; 
$url[7]="https://api.sevensixstudio.tk/hanfu/7-b.jpg"; 
$url[8]="https://api.sevensixstudio.tk/hanfu/8-b.jpg"; 
$url[9]="https://api.sevensixstudio.tk/hanfu/9-b.jpg"; 
$url[10]="https://api.sevensixstudio.tk/hanfu/1-c.jpg"; 
$url[11]="https://api.sevensixstudio.tk/hanfu/2-c.jpg"; 
$url[12]="https://api.sevensixstudio.tk/hanfu/4-c.jpg"; 
$url[13]="https://api.sevensixstudio.tk/hanfu/5-c.jpg"; 
$url[14]="https://api.sevensixstudio.tk/hanfu/6-c.jpg"; 
$url[15]="https://api.sevensixstudio.tk/hanfu/7-c.jpg"; 
$url[16]="https://api.sevensixstudio.tk/hanfu/8-c.jpg"; 
$url[17]="https://api.sevensixstudio.tk/hanfu/9-c.jpg"; 
$url[18]="https://api.sevensixstudio.tk/hanfu/10-c.jpg"; 
$url[19]="https://api.sevensixstudio.tk/hanfu/11-c.jpg"; 
$url[20]="https://api.sevensixstudio.tk/hanfu/12-c.jpg"; 
$url[21]="https://api.sevensixstudio.tk/hanfu/13-c.jpg"; 

srand ((double)microtime()*1000000);
$randomnum = rand(0, count($url)-1);
header ("Location: $url[$randomnum]");
?>
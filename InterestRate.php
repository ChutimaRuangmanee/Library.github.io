<?php

$myObj->Bank = "Bangkok Bank","Krung Thai Bank","Kasikornbank","The Siam Commercial Bank","Bank of Ayudhya","TMB Bank","United Overseas Bank (Thai) Company Ltd.","CIMB THAI Bank","Thanachart Bank","TISCO Bank","Mega International Commercial Bank";
$myObj->SavingRate = "0.5-0.625","0.5","0.5","0.5","0.3","0.125","0.25","0.4","0.2-0.4","0.25-2.25","0.25";
$myObj->FixedRate6mths = "1.25","1.15-1.35","1.15-1.4","1.15-1.4","1.15-1.2","0.65","1.05","1.3-1.55","1.15","1.4","1.25-1.65";
$myObj->FixedRate12mths = "1.5","1.3","1.3-1.55","1.4-1.65","1.35","0.75","1.3","1.55-1.65","1.5","1.5","1.4-1.75";

$myJSON = json_encode($myObj);

echo $myJSON;

?>


<!--่json_demo_db_post.php

header("Content-Type: application/json; charset=UTF-8");
$myobj = json_decode($_POST["x"], false);
$x=$_POST["x"];
$y=$_POST["y"];

$myObj->Bank = "Bangkok Bank","Krung Thai Bank","Kasikornbank","The Siam Commercial Bank","Bank of Ayudhya","TMB Bank","United Overseas Bank (Thai) Company Ltd.","CIMB THAI Bank","Standard Chartered Bank (Thai)","Thanachart Bank","TISCO Bank","Mega International Commercial Bank";
$myObj->SavingRate = 0.5-0.625,0.5,0.5,0.5,0.3,0.125,0.25,0.4,0.2-0.4,0.25-2.25,0.25;
$myObj->FixedRate6mths = 1.25,1.15-1.35,1.15-1.4,1.15-1.4,1.15-1.2,0.65,1.05,1.3-1.55,-,1.15,1.4,1.25-1.65;
$myObj->FixedRate12mths = 1.5,1.3,1.3-1.55,1.4-1.65,1.35,0.75,1.3,1.55-1.65,-,1.5,1.5,1.4-1.75;

$myJSON = json_encode($myObj);

echo $myJSON;


-->
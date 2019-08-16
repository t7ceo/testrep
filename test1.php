<?

if(!$_GET['mode']) $lightInf = "off";

switch($_GET['mode']){
case "lon":
	$lightInf = "on";

break;
case "loff":
	$lightInf = "off";
break;
}

/*  602422291128      AIzaSyA_0Do9RnCuuHX_fH_3NqYMl4_RMbK8VuA */

?>

<!DOCTYPE html> 
<html>
<head>

	<meta charset="euc-kr">
	<meta http-equiv="Content-type" name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width">
        
	<title></title>

    <link rel="manifest" href="app/manifest.json">

</head>


<body  topmargin="0" leftmargin="0" style="width:1280px; height:720px; background:url(mainbgDark.png) no-repeat; overflow:hidden;">


<img src="./panda.png" style="position:absolute; height:300px; left:58%; top:226px; z-index:50;">

<img id = "airconImg" src="./aircon.png" style="position:absolute; height:300px; top:270px; left:250px; z-index:50;">

<? if($lightInf == "on"){ ?>
	<img id="lightSun" src="./mainbgLight.png" style="display:block; position:absolute; width:100%; left:0; top:0; z-index:100;">
	<img id = "lightImg" src="./lightOn.png" style="position:absolute; top:190px; left:385px; z-index:50;">
    <img id="lightSun" src="./mainbg.png" style="display:block; position:absolute; width:100%; left:0; top:0; z-index:1;">
<? }else{ ?>
	<img id="lightSun" src="./mainbgLight.png" style="display:none; position:absolute; width:100%; left:0; top:0; z-index:100;">
	<img id = "lightImg" src="./light.png" style="position:absolute; top:190px; left:385px; z-index:50;">
    <img id="lightSun" src="./mainbgDark.png" style="display:block; position:absolute; width:100%; left:0; top:0; z-index:1;">
    <img id="lightSun" src="./mainbg.png" style="display:none; position:absolute; width:100%; left:0; top:0; z-index:1;">
<? } ?>


<script src="js/main.js"></script>

</body>

</html>


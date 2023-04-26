<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>스포츠 뉴스</title>
       <style>
.intro_bg{
  width: 100%;
  height: 1000px;
  position: relative;
  background-size: cover;
  z-index: 1;
}
.intro_bg::after {
  width: 100%;
  height: 1000px;
  content: "";
  background-image: url("worldcup.jpg");
  background-size: cover;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  opacity: 0.88;
}
</style>
<link rel="stylesheet" type="text/css" href="./css/common2.css">
<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
	<header>
    	<?php include "header.php";?>
    </header>
	<div class = "intro_bg">
   </div>
</body>
</html>

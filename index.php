<html>
<head>
<style>
body{
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	background:url(bg2.jpg);
	background-cover:cover;
	background-repeat:no-repeat;
	overflow: hidden
}
#content{
	position:absolute;
	top:350px;
	left:0px;
	width:100%;
	height:100%;
	background:url(content.png);
	background-cover:cover;
	background-repeat;no-repeat;
}
#logo{
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	background:url(logo2.png);
	background-cover:cover;
	background-repeat;no-repeat;
}
video{
position:fixed;
top:0px;
left:0px;
width:100%;
height:auto;
z-index:-1;
}
iframe{
	position:relative;
	left:calc(50% - 25%);
	top:280px;
	width:50%;
	height:40%;
}
</style>

</head>
<body>
<video id="bgvideo" autoplay>
  <source src="vid.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
<script type='text/javascript'>
    document.getElementById('bgvideo').addEventListener('ended',myHandler,false);
    function myHandler(e) {
        document.getElementById('bgvideo').style.visibility = "hidden";
    }
</script>
<div id="logo"></div>
<table style="position:absolute;bottom:30px;left:50%;z-index:200;">
<tr>
<td><input type="image" src="play.png"></td><td><input type="image" src="download.png"></td><td><input type="image" src="register.png"></td><td><input type="image" src="notice.png"></td>
</tr>
</table>
<div id="content">
<iframe src="notice.php" allowtransparency="true" frameBorder="0">
</div>

</body>
</html>
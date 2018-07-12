
<html>
<head>
<link rel="stylesheet" href="loginform.css">
<title>User Login Form</title>

<script>
function preventBack(){
	window.history.forward();
}
setTimeout("preventBack()",0);
window.onunload = function() { null };

</script>

</head>
<body>
<div id="d1">
<form method="post" action="instruction.php">
		<b>Name</b> <input type="text" id="f1" name="uname" required style="overflow:hidden" /><br>
		<b>Address</b> <input type="text" id="l1"name="addr" required style="overflow:hidden"/><br>
		<b>Contact No.</b> <input type="text" id="mo1" name="cont" required style="overflow:hidden"/><br>
		<b>Email Id</b> <input type="text" id="fa1" name="email" required style="overflow:hidden"/><br>
		

		<input type="submit" value="Login" id="s1" name="login"/>
</div>
</form>








</body>
</html>
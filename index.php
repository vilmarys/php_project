<!DOCTYPE html>
<html>
<head> <title>Welcome to CCT Libary</title>
<script type="text/javascript">
	function showRegister(){
		document.getElementById("register-section").style.visibility = "visible";
		document.getElementById("login-section").style.visibility = "hidden";
		
	}
		function showLogin(){ 
			
		document.getElementById("login-section").style.visibility = "visible";
		document.getElementById("register-section").style.visibility = "hidden";
	}
	function initialize(){
		document.getElementById("register-section").style.visibility = "hidden";
		document.getElementById("login-section").style.visibility = "hidden";
	}
</script>

</head>
<body onload="initialize()">
 this is my library

<h1>My First Heading</h1>
<h1>Please select what option you want</h1>
<div style="border: 1px solid #ccc;">
	<input type="radio" name="option-login" onclick="showLogin()">Login</input>
	<input type="radio" name="option-login" onclick="showRegister()">Register</input>
</div>

<div id="register-section" style="border: 1px solid #ccc;">
	<input type="text" name="txt-id"></input>
	<input type="text" name="txt-username"></input>
	<input type="password" name="txt-password"></input>
	<input type="password" name="txt-repeat"></input> <!--para que ponga la clave otra vez -->
	<button type="button">Accept</button>

</div>
<div id="login-section" style="border: 1px solid #ccc; ">
	<input type="text" name="txt-id"></input>
	<input type="text" name="txt-username"></input>
	<input type="password" name="txt-password"></input>
	<button type="button">Log In </button>
</div>




<p>My first paragraph.</p>	

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <style>
    @import url('../styles/header.css');
    body{		background-image: url('../img/inBg.jpeg');
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;	}
    	table h2 a{
			text-decoration: none;
			color: green;
    	}
    	table { text-align: center; margin-top: 110px; display: flex; justify-content: center; 
			background-image: url('../img/inBg.jpeg');
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
    	}
		input,textarea{
			border: none;
				border-radius: 7px;
			background-color: transparent;
		}
		#submit{
			border: 2px solid black;
			padding: 10px 20px;

		}
		#name, #email, #pw{
			padding: 10px 0px;
			width: 100%;
			
		}
		fieldset{
			border-radius: 7px;
		}
    </style>
</head>
<body> 
    
     <!-- header of the body -->
     <header>         
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <h1> <a href="../index.php"> DNV </a></h1>
    <h2>    <a href="#">COURSES</a> </h2>
    <h2>    <a href="#">ADMISSION</a> </h2>
    <h2>    <a href="./files/careerForm.php">CAREER</a> </h2>
    <h2>   <a href="#">ABOUT US</a> </h2>
        <h2>   <input type="text" name="search" aria-label="SEARCH FOR COURSES" placeholder="SEARCH FOR COURSES">
            <input type="submit" id="submit" value="SEARCH">  </h2>
            <h2>   <a href="./signin.php">SIGN IN</a> </h2>
        </header>

<aside>
        <div id="mySideNav" class="sideNav">
             
                <a href="./signin.php">SIGN IN</a>
                <a href="#">COURSES</a>
                <a href="#">ADMISSION</a>
                <a href="./files/applyForm.php">APPLY NOW</a>
                <a href="./files/careerForm.php">CAREER</a>
                <a href="#">ABOUT US</a>
            </div>  
</aside>


<table onclick="closeNav()">
	<form action="./signin_validation.php" method="POST">

		<tr>
	
			<td>
				<fieldset>
					<legend><label for="email">EMAIL</label> </legend>
				<input type="email" id="email" name="email" placeholder="YOUR EMAIL" required>
				</fieldset>
			 </td>
		</tr>
		<tr>
			<td>
				<fieldset>		
					<legend><label for="pw">PASSWORD</label></legend>
				<input type="password" id="pw" name="pw" placeholder="YOUR PASSWORD" required> 
				</fieldset>
			</td>
		</tr>

		<tr>
			<td> <label for="submit">
				<input type="submit" value="SUBMIT" id="submit" name="submit">
			</label></td>
		</tr>
    </form>
		<tr>
			<td>
				<h3>I want to <a href="./signUp.php">SignUp</a></h3>
			</td>
		</tr>
	</table>
	
<script src="../app.js"></script>
</body>
</html>
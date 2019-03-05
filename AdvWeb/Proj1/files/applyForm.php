<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APPLY</title>
    <style type="text/css">
    	@import url('../styles/header.css');
    	body{		background-image: url('../img/inBg.jpeg');
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;	}
		table { text-align: center; margin-top: 100px; display: flex; justify-content: center;

    	}
		input,textarea{
			border: none;
			border-radius: 7px;
			background-color: transparent;
		}
		#submitf{
			border: 2px solid black;
			padding: 10px 20px;

		}
		#name, #email, #contact, #address{
			padding: 10px 0px;
			width: 100%;
			
		}
		fieldset{
			border-radius: 7px;
		}
		#now{
			background-color: white;
			color: #008ecffb;
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
        <h2>    <a href="./careerForm.php">CAREER</a> </h2>
        <h2>   <a href="#">ABOUT US</a> </h2>
            <h2>   <input type="text" name="search" aria-label="SEARCH FOR COURSES" placeholder="SEARCH FOR COURSES">
                <input type="submit" id="submit" value="SEARCH">  </h2>
                <h2>   <a href="#">SIGN IN</a> </h2>
            </header>
    
    <aside>
            <div id="mySideNav" class="sideNav">
                 
                    <a href="#">SIGN IN</a>
                    <a href="#">COURSES</a>
                    <a href="#">ADMISSION</a>
                    <a href="./applyForm.php" id="now">APPLY NOW</a>
                    <a href="./careerForm.php">CAREER</a>
                    <a href="#">ABOUT US</a>
                </div>  
    </aside>


 <!-- Simple table -->
<!-- 	<table>
	<form action="./regdb.php" method="POST">
		
		<tr>
			<td> <label for="name">NAME </label> </td>
			<td> 
				<input type="text" id="name" name="name" placeholder="FULL NAME"> 
			</td>
		</tr>

		<tr>
			<td> <label for="email">EMAIL</label> </td>
			<td><input type="email" id="email" name="email" placeholder="YOUR EMAIL"> </td>
		</tr>
		<tr>
			<td> <label for="contact">CONTACT NO</label>
			 </td>
			<td><input type="tel" id="contact" name="contact" placeholder="YOUR CONTACT NO"> </td>
		</tr>
		<tr>
			<td> <label for="dob">DATE OF BITH </label>
			 </td>
			<td> <input type="date" id="dob" name="dob"></td>
		</tr>
		<tr>
			<td> <label for="gender">GENDER</label>
			</td>
			<td><input type="radio" name="gender" id="gender" value="male" aria-label="male">MALE
			<input type="radio" name="gender" id="gender" female="female" aria-label="female">FEMALE  </td>
		</tr>
		<tr>
			<td> <label for="quali">QUALIFICATION</label>
			 </td>
			<td><input type="checkbox" id="quali" name="quali[]" value="primary"> PRIMARY 
			<input type="checkbox" id="quali" name="quali[]" value="secondary"> SECONDARY 
			<input type="checkbox" id="quali" name="quali[]" value="graduate"> GRADUATE </td>
		</tr>
		<tr>
			<td> <label for="address">ADDRESS</label>
			</td>
			<td><textarea name="address" id="address" cols="30" rows="3"></textarea>  </td>
		</tr>

		<tr>
			<td></td>
			<td> <label for="submit">
				<input type="submit" value="SUBMIT" id="submit" name="submit">
			</label> <label for="reset">
				<input type="reset" value="reset" id="reset" name="reset">
			</label> </td>
			
		</tr>
		
	</table>

	</form> -->

<!-- Added Small Design -->
		<table onclick="closeNav()">
	<form action="./applyDBStore.php" method="POST">
		
		<tr>
			<td> 
				<fieldset> 
				<legend><label for="name">NAME </label></legend>
				<input type="text" id="name" name="name" placeholder="FULL NAME" autofocus> 
				</fieldset>
			</td>
		</tr>

		<tr>
	
			<td>
				<fieldset>
					<legend><label for="email">EMAIL</label> </legend>
				<input type="email" id="email" name="email" placeholder="YOUR EMAIL">
				</fieldset>
			 </td>
		</tr>
		<tr>
			<td>
				<fieldset>		
					<legend><label for="contact">CONTACT NO</label></legend>
				<input type="tel" id="contact" name="contact" placeholder="YOUR CONTACT NO"> 
				</fieldset>
			</td>
		</tr>
		<tr>
			<td> 
				<fieldset>
					<legend><label for="dob">DATE OF BITH </label></legend>
				<input type="date" id="dob" name="dob">
				</fieldset>
			</td>
		</tr>
		<tr>
			<td>
				<fieldset>
					<legend><label for="gender">GENDER</label></legend>
				<input type="radio" name="gender" id="gender" value="male" aria-label="male">MALE
			<input type="radio" name="gender" id="gender" female="female" aria-label="female">FEMALE  
				</fieldset>
		</td>
		</tr>
		<tr>
			<td>
				<fieldset>
				<legend><label for="quali">QUALIFICATION</label></legend>
				<input type="checkbox" id="quali" name="quali[]" value="primary"> PRIMARY 
			<input type="checkbox" id="quali" name="quali[]" value="secondary"> SECONDARY 
			<input type="checkbox" id="quali" name="quali[]" value="graduate"> GRADUATE
				</fieldset>
			 </td>
		</tr>
		<tr>

			<td>
				<fieldset>
					<legend><label for="address">ADDRESS</label></legend>
				<textarea name="address" id="address" cols="30" rows="3"></textarea>  
				</fieldset> <br>
			</td>
		</tr>
				
				<tr>
					<td>
					<label for="submitf">
				<input type="submit" value="SUBMIT" id="submitf" name="submit">
					</label>
					</td>
				</tr>
				
	</form>

	</table>

<script src="../app.js"></script>
</body>
</html>
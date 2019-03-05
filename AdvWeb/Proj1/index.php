  
<!DOCTYPE html>
  <?php 
            session_start();
     ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>College</title>
    <style type="text/css">
            @import url("./styles/header.css");
    </style>
    <!-- <link rel="stylesheet" href="./styles/header.css"> -->
    <link rel="stylesheet" href="./style.css">
</head> 
<body>

    <!-- header of the body -->
    <header>         
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <h1> <a href="./index.php"> DNV </a></h1>
        <h2>    <a href="#">COURSES</a> </h2>
        <h2>    <a href="#">ADMISSION</a> </h2>
        <h2>    <a href="./files/careerForm.php">CAREER</a> </h2>
        <h2>   <a href="#">ABOUT US</a> </h2>
            <h2>   <input type="text" name="search" aria-label="SEARCH FOR COURSES" placeholder="SEARCH FOR COURSES">
                <input type="submit" id="submit" value="SEARCH">  </h2>

        <!-- <h2> <a href="./files/signIn.php">SIGN IN</a></h2> -->
            <h2><?php 
            $name = $_SESSION['name'];
            if (!$name) {
                echo "SIGN IN";
            }
            else{strtoupper($name);
                    echo "Hey, ".strtoupper($name);
                }
             ?></h2>
            
            </header>
    
    <aside>
            <div id="mySideNav" class="sideNav">
                 
                    <!-- <a href="./files/signIn.php">SIGN IN</a> -->
                <a href="./files/signIn.php">    <?php 
            $name = $_SESSION['name'];
            if ($name) {
                echo "Hey, ".strtoupper($name);
            } 
            else{
                echo "SIGN IN";
            } ?> </a>

                    <a href="#">COURSES</a>
                    <a href="#">ADMISSION</a>
                    <a href="./files/applyForm.php">APPLY NOW</a>
                    <a href="./files/careerForm.php">CAREER</a>
                    <a href="#">ABOUT US</a>
                </div>  
    </aside>
    
    <section onclick="closeNav()">
        <div id="bgimg"></div>
        <h2>Let`s Build the <br>
            Future with <br>
           DNV! <br> 
           <button> <a href="#card1"> COURSES</a></button> <br>
           <button><a href="./files/applyForm.php">APPLY NOW!</a></button>
        </h2>

    </section>

    <!-- main content of page -->
    <main onclick="closeNav()">

        <article id="prtSct">

            <div id="prt">
                <h1> <u> CO-CREATED WITH INDUSTRY LEADERS</u></h1>
                <img src="./prt/am.png" alt="amazon">
                <img src="./prt/facebook.png" alt="facebook">
                <img src="./prt/flipkart.png" alt="flipkart">
                <img src="./prt/apple.png" alt="apple">
                <img src="./prt/Google.png" alt="Google">
                <img src="./prt/Microsoft.png" alt="Microsoft">
            </div>

        </article>



        <fieldset id="card1fd">
                <legend> <u> PROGRAM`S </u></legend>
        <div id="card1">
         
        <div class="c1">
            <img src="./img/bca.png" alt=""> <hr>
            <h2>BCA</h2>
        </div>
    
        
        <div class="c1">
            <img src="./img/bba.png" alt=""><hr>
            <h2>BBA</h2>
        </div>
    
        
        <div class="c1">
            <img src="./img/msc.png" alt=""><hr>
            <h2>M.Sc in I.T</h2>
        </div>
    </div>
    </fieldset>
    </main>

   
    <footer onclick="closeNav()"> <br>

        <fieldset id="ftrfs">
    <legend>    <div id="fc">
            <div id="fc1">
                <img src="./img/fc.png" alt="">
                <h4> Prof. NIHAL SHETH </h4>
            </div>

        <div id="fc1">
                <img src="./img/fc.png" alt="">
                <h4> Prof. BHAVESH MAHESHWARI </h4>
            </div>

        <div id="fc1">
                <img src="./img/fc.png" alt="">
                <h4> Prof. SANDEEP LODARIYA  </h4>
            </div>
        </div> </legend>
            
        <h3>"Study is the things, humans always have in whole body until they Die." - MANISH VERMA <br> <br>
                <u>We take care of your goals.</u> <br> <br>
                <code>ProductionBy - <u> MVCoding Inc(Manish Verma). </u></code>
        </h3>


    </fieldset>
    </footer>

    <script src="./app.js"></script>
</body>
</html>
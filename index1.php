<?php 
include('db1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="color: #1f1ce0;">My Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
  
    


<body>
    

    <main style="width: 3000px;background-image:url('bgintrument.jpg');
    background-repeat: no-repeat;
            background-position: center;
            background-size: cover ;"
    >
      <!DOCTYPE html> 
<html lang="en"> 

<style>
    /* style.css*/
h1 { 
	color:white; 
} 

h3 { 
	color: blue; 
	font: 25px; 
	font-weight: 700; 
} 

.mybox1 { 
	display: none; 
} 

button { 
	padding: 10px; 
	font-size: 20px; 
	font-weight: 700; 
	color: rgb(5, 14, 5); 
	border: none; 
	border-radius: 30px; 
	background-color: rgb(182, 215, 182); 
	margin-top: 20px; 
} 

div, 
span { 
	font-size: 20px; 
}

</style><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="height=device-height, initial-scale=1.0">


    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico" />
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="mobile.css">
<link rel="stylesheet" media="screen and (min-width: 769px)" href="desktop.css">


    <title>home</title>

    <link rel="stylesheet" href="./styles/index.css" type="text/css" />
    <link rel="stylesheet" href="./styles/nav.css" type="text/css" />
    <link rel="stylesheet" href="./styles/top.css" type="text/css" />
    <link rel="stylesheet" href="./styles/app.css" type="text/css" />
    <link rel="stylesheet" href="./styles/main.css" type="text/css" />
    <link rel="stylesheet" href="./styles/explore.css" type="text/css" />
    <link rel="stylesheet" href="./styles/footer.css" type="text/css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body >
    <style>
      /* Mobile devices */
@media only screen and (max-width: 768px) {
  /* Styles for mobile devices */
}

/* Desktop devices */
@media only screen and (min-width: 769px) {
  /* Styles for desktop devices */
}

/* Tablet devices */
@media only screen and (min-width: 481px) and (max-width: 768px) {
  /* Styles for tablet devices */
}




.container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
}

.item {
  width: 50%;
  float: left;
}

/* Responsive images */
img {
  width: 100%;
  height: auto;
}

/* Responsive videos */
video {
  width: 100%;
  height: auto;
}

/* Common breakpoints */
@media (max-width: 320px) { /* Mobile portrait */ }
@media (max-width: 480px) { /* Mobile landscape */ }
@media (max-width: 768px) { /* Tablet portrait */ }
@media (max-width: 1024px) { /* Tablet landscape */ }
@media (min-width: 1200px) { /* Desktop */ }


    </style>
    <header>
        <!DOCTYPE html>
        <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
<body>
    <header>
        <style>
          .main.container5{
              width: 1200px;
          }
                    body {
          font-family: Arial, Helvetica, sans-serif;
        }
        
        .navbar {
          overflow: hidden;
          background-color: lightblue;
           width: 100%;
    height: 60px;      /* Consistent height */
    background-color: #333;
    color: white;
    display: flex;
    align-items: center;
    padding: 0 20px;
    box-sizing: border-box;
        }
        
        .navbar a {
          float: left;
          font-size: 16px;
          color: black;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
        
        .dropdown {
          float: left;
          overflow: hidden;
        }
        
        .dropdown .dropbtn {
          font-size: 16px;  
          border: none;
          outline: none;
          color: black;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }
        
        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }
        
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
        
        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }
        
        .dropdown-content a:hover {
          background-color: #ddd;
        }
        
        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
        </head>
        <!DOCTYPE html>
        <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {
          font-family: "Lato", sans-serif;
          transition: background-color .5s;
        }
        
        .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #111;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }
        
        .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }
        
        .sidenav a:hover {
          color: #f1f1f1;
        }
        
        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        
        #main {
          transition: margin-left .5s;
          padding: 16px;
        }
        
        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>
        </head>
        <body>
        
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="http://localhost/final%20project/logphp/phpfile/index2.php">Admin</a>
          <a href="http://localhost/final%20project/logphp/phpfile/login1.php">Student</a>
          <a href="http://localhost/final%20project/logphp/phpfile/login.php">Logout</a>

        </div>
        

        
        <script>
        
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

   
        </script>
           
        </body>
        </html> 
        
        </style>
        <nav>
      
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
  }
  
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  
  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }
  
  .sidenav a:hover {
    color: #f1f1f1;
  }
  
  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }
  
  #main {
    transition: margin-left .5s;
    padding: 16px;
  }
  
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  </style>
  </head>
  <body>
  
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>
  
  </div>
</body>
</html>
</nav>
</header>
<section style="padding: 40px 20px;
max-width: 1000px;
margin: 20px auto;
background-color: #fff;
box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
">
                                                                  


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SignUp</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Your existing styles here */
    
    body {
      font-family: Arial, Helvetica, sans-serif;
            background-repeat: no-repeat;
      background-size: cover;
      background-color: white;
    }
    
    .navbar {
      overflow: hidden;
      background-color: lightblue;
      width: 100%;
      height: 60px;
      display: flex;
      align-items: center;
      padding: 0 20px;
      box-sizing: border-box;
    }
    
    .navbar a {
      font-size: 16px;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: black;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
    /* Styles for embedded payment form2 */
    .payment-form2-container {
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-end; /* Push logout button to the bottom */
      height: 600px; /* Set a fixed height for the container */
    }
    
    iframe.payment-form2 {
      width: 100%;
      height: 500px; /* Adjust the height of the payment form2 */
      border: none;
    }

    /* Styles for logout button */
    .logout-btn {
      margin-top: 20px;
      background-color: #f44336; /* Red background */
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      text-align: center;
    }

    .logout-btn:hover {
      background-color: #d32f2f;
    }
  </style>
</head>
    <h1 style="color:#0a0a0a">Welcome</h1>
    
    <!-- Payment form2 container with logout button below -->
    <div class="payment-form2-container">
      <iframe src="https://form.jotform.com/242432509531047" class="payment-form2"></iframe>

      <!-- Logout button positioned below the payment form2 -->
      <a href="Homepage.html" class="logout-btn">Logout</a>
    </div>
  
</body>
</html>


                                                                  </section>
  
            <style>

main .bg-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 50%;
  min-height: 42rem;
  max-height: 57rem;
  z-index: -1;
  object-fit: cover;
}

main .center-content {
  position: absolute;
  bottom: calc(50% - 11.1rem);
  left: 50%;
  transform: translateX(-50%);
  flex-direction: column;
  justify-content: center;
  align-items: center;
  display: flex;
  font-size: 1.6rem;
  width: 100%;
}

</style>
</main>
<!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Footer Design</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body>
    
      <footer class="footer">
         <div class="container1">
        
           <div class="row">
             <div class="footer-col">
               <h4 style="margin-right:250px;">HoneyValley</h4>
               <ul>
                 <li><a href ="Homepage.html">Home</a></li>
                 <li><a href="ContactUsDb.html">Contact US</a></li>
                 <li><a href="About Us.html">About US</a></li>
    
               </ul>
             </div>
             <div class="footer-col">
               <h4 style="margin-right:250px;">QuickLink</h4>
               <ul>
                 <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdchX4vLqLSLT-S3l4EZA-DrxZVbEXGlX_efUrUTN2TooeejQ/viewform">Admission</a></li>
                 <li><a href="http://localhost/final%20project/logphp/phpfile/login1.php">Student</a></li>
                 <li><a href="Blog.html">Blog</a></li>
    
               </ul>
             </div>
             <div class="footer-col">
               <h4 style="margin-right:250px;">Other</h4>
               <ul>
                <li><a href="Achivements.html">Achievements</a></li>
             
                </ul>
             </div>
             <div class="footer-col">
               <h4 style="margin-right:250px;">followUs</h4>
               <div class="social-links">
                 <a href="https://www.facebook.com/profile.php?id=100065211922440&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                 <a href="https://youtube.com/@honeyvalleyactivityacademy?si=p-6gaUm6hdFAWiES"><i class="fab fa-youtube"></i></a>
                 <a href="https://www.instagram.com/info.honeyvalley?igsh=MXBsbmh1d2xxb2Nnbw=="><i class="fab fa-instagram"></i></a>
                 <a href="https://www.google.com/maps/place/Honey+Valley+Activity+Academy/@19.0259413,72.8411297,17z/data=!3m1!4b1!4m6!3m5!1s0x3be7cf77bdb62d47:0xc6a9c4d0af2a6585!8m2!3d19.0259362!4d72.8437046!16s%2Fg%2F11lp2ws720?hl=en-US&entry=ttu&g_ep=EgoyMDI0MTEwNS4wIKXMDSoASAFQAw%3D%3D"><i class="fa fa-map-marker"></i></a>
    
               </div>
             </div>
           </div>
         </div>
         <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    body{
    line-height: 1.5;
    font-family: 'Poppins', sans-serif;
    }
    *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    }
    .container2{
    max-width: 1170px;
    margin:auto;
    }
    .row{
    display: flex;
    flex-wrap: wrap;
    }
    ul{
    list-style: none;
    }
    .footer{
    background-color: #24262b;
    padding: 70px 0;
    }
    .footer-col{
    width: 25%;
    padding: 0 15px;
    }
    .footer-col h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
    }
    .footer-col h4::before{
    content: '';
    position: absolute;
    left:0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
    }
    .footer-col ul li:not(:last-child){
    margin-bottom: 10px;
    }
    .footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
    }
    .footer-col ul li a:hover{
    color: #ffffff;
    padding-left: 8px;
    }
    .footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    
    margin:0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
    }
    .footer-col .social-links a:hover{
    color: #24262b;
    background-color: #ffffff;
    }
    
    
    @media(max-width: 767px){
    .footer-col{
    width: 50%;
    margin-bottom: 30px;
    }
    }
    @media(max-width: 574px){
    .footer-col{
    width: 100%;
    }
    }
    
    
    
    
    </style>
      </footer>
    
    </body>
    </html>
</html>

    </style>
<style>        

        
        main {
            padding: 10px;
            max-width: 1200px;
            margin: 10px auto;
            background-color: transparent;
            background-image: url('bgintrument.jpg');
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        </style>
    


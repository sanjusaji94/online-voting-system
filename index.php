<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/navbar.css">
    
    <style>
      .slideUpBtn {
    padding: 12px 24px;
    background-color: transparent;
    border: 2px solid hsl(243, 80%, 62%);
    border-radius: 6px;
    position: relative;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(1,.15,.34,.92)
}

.slideUpBtn span {
    display: inline-block;
    transition: inherit;
    color: hsl(243, 80%, 62%);
}

.slideUpBtn:hover span {
    opacity: 0;
    transform: translateY(-100%)
}

.slideUpBtn::before {
    content: "";
    background-color: hsl(243, 80%, 62%);;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    transform: translateY(100%);
    transition: inherit;
    width: 100%;
    transition: transform 0.5s cubic-bezier(1,.15,.34,.92)
}

.slideUpBtn::after {
    content: 'Vote Now';
    align-items: center;
    display: flex;
    height: 100%;
    justify-content: center;
    left: 0;
    position: absolute;
    top: 0;
    transition: inherit;
    transform: translateY(100%);
    width: 100%;

}

.slideUpBtn:hover::before {
    transform: translateY(0) scale(3);
    transition-delay: .025s;
}

.slideUpBtn:hover::after {
    opacity: 1;
    color: hsl(222, 100%, 95%);
    transform: translateY(0);
}
    </style>
</head>
<body>

<nav style="font-family:poppins">
                <div class="logo">
                    <p>Online Voting</p>
</div>
<ul>
    <li><a style="text-decoration:none;" href="#">Home</a></li>
    <li><a style="text-decoration:none;" href="home.php">Login</a></li>
    <li><a style="text-decoration:none;" href="routes\register.php">Register</a></li>
    <li><a style="text-decoration:none;" href="routes\about.php">About</a></li>
</ul>
</nav>


<section id="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6 animate__animated animate__bounceInLeft" style="text-align: center;">
        <h1>ONLINE VOTING SYSTEM</h1>
        <p>Online voting systems are software platforms used to securely conduct votes and elections. As a digital platform, they eliminate the need to cast your votes using paper or having to gather in person.</p>
      <a href="home.php"><button class="magnifyBtn">VOTE NOW</button></a>
      </div>
      
      <div class="col-md-6"> 
             <img src="images/2.svg" alt="" srcset="" height="400vh " width="90%" class="animate__animated animate__bounceInRight " style="margin-left: 10px; margin-top: 20px;" >
                </div> 
            </div>  
         </div>
        </div>
      </div>
    </div>
</section>


<div class="container">
  <div class="row">
    <div class="col-md-12">     
      <h1>Online Voting System</h1>
    </div>
    <div class="col-md-12" style=" width: 100%; ">
      <img src="images/10.svg" alt="" srcset="">
    </div>


      <div class="col-md-12">
      <a href="home.php" ><span ><button style="margin-top: 20px;" class="slideUpBtn">Vote Now</button></span></a>
    </div>  
    </div>
  </div>
  </div>
</div>
<section>
  <div class="container-fluid" style="margin-top: 50px;">
    <div class="row" style="background: linear-gradient(to right, #7ba2b7,#6b96ae  );" width="100%">
      <div class="col-md-12" style="background-image: linear-gradient(to right, #7ba2b7,#6b96ae  ); color: white;">
        <h1 style="text-align: center; background-image: linear-gradient(to right, #7ba2b7,#6b96ae  ); color: black;"> Become Candidate</h1>
      </div>
      <div class="col-md-6" >
        <img src="images/11.svg" style="height: 400px;" >
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <h1 style="color: black; margin-top: 40px; margin-bottom: 40px;" class=" ">Apply</h1>
        <p style="color: black;" >
          If you want to become a candidate, then you click on the link below, then you will be redirected. In the second
           page, by filling that, you can request for a candidate.
           </p>
           <a href="routes/register.php"><button class="magnifyBtn" style="margin-bottom: 40px;">Apply</button></a>
      </div>
    </div>
    </div>
  </div>
</section>
 </body>
</html>
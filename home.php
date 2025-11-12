<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online voting system</title>
        <link rel="stylesheet" href="css\stylesheet.css">
        <link rel="stylesheet" href="css\navbar.css">
        <link rel="stylesheet" href="css\form.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <style>
        body {
                background-image: url(images/america1.jpg);
  background-repeat: no-repeat;
  background-size:cover;
  background-position: center;
            }
            </style>
    </head>
    <body>

            <nav style="font-family:poppins">
                <div class="logo">
                    <p>Online Voting</p>
</div>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="routes\register.php">Register</a></li>
    <li><a href="routes\about.php">About</a></li>
</ul>
</nav>
<section>
    
            <div class="containerin">
            <div id="loginSection">
                <h2>Login</h2>
 <form action="api/login.php" method="POST">
                    <div class="form-group">
                    <input type="tel" name="mob" placeholder="Enter mobile" required><br><br>
</div>
<div class="form-group">
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
</div>
<div class="form-group">
                    <select name="role" style="width: 50%; border: 2px solid black; font-size:17px">
                        <option value="1">Voter</option>
                        <option value="2">Candidate</option>
                    </select><br><br> </div>                 
                    <button type="submit" name="loginbtn">Login</button><br><br>
                    New user? <a href="routes/register.php">Register here</a>
                </form>
            </div>
</div>
</section>
    </body>
</html>
<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online voting system</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
        <link rel="stylesheet" href="../css/navbar.css">
        <link rel="stylesheet" href="../css/form.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <style>
            body {
                background-image: url(../images/america1.jpg);
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
    <li><a href="../index.php">Home</a></li>
    <li><a href="../home.php">Login</a></li>
    <li><a href="about.php">About</a></li>
</ul>
</nav>
        <section>
            <div class="containerreg">
            <h2>Registration</h2>
                <form onsubmit="return validation()" action="../api/register.php" name="regform" method="POST" enctype="multipart/form-data">
                    <div id="user">
                <div class="form-groupreg">
                    <input type="text" name="name" placeholder="Name" required><br>
                    <span id="name-error"></span>
</div>
                    <div class="form-groupreg1">
                    <input type="tel" name="mob" id="mob_id" placeholder="Mobile" required>
                    </div>
                    <div class="form-groupreg">
                    <input type="text" name="voterid" id="v_id" placeholder="Voter ID" onkeyup="vidvalidate()" oninput="checkvid()" required>
                    <span id="error"></span><br>
                    <span id="checkvoterid"></span>
                    </div>
                    <div class="form-groupreg1">
                    <input type="number" name="age" placeholder="Age" id="age1" onkeyup="agevalidate()" required>
                    <span id="errorage"></span>
                    </div>
                    <div class="form-groupreg">
                    <input type="password" name="pass" placeholder="Password" required>
                    </div>
                    <div class="form-groupreg1">
                    <input type="password" name="cpass" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-groupreg">
                    <input style="width:92.7%" type="text" name="add" placeholder="Address" required>
                    </div><br>
                    <div id="upload" style="width: 50%";>
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div class="form-groupreg">
                    <div id="upload" style="width: 50%">
                        Select your role:
                        <select name="role" style="font-size:17px">
                            <option value="1">Voter</option>
                            <option value="2">Candidate</option>
                        </select><br>                   
</div>
</div><br>
                    <button id="regbtn" type="submit" name="registerbtn">Register</button><br><br>
                    Already user? <a href="../home.php">Login here</a>
                </form>
</div></div>
</section>
<script type="text/javascript">
            
            var username=document.forms['regform']['name'];
            var letters=/^[a-zA-Z ]*$/;
            
            var v_id=document.getElementById("v_id");
            var error=document.getElementById("error");

            const regbtn=document.getElementById("regbtn");
            const input=document.getElementById("v_id");
            
            function agevalidate()
            {
                let x=document.getElementById("age1").value;
                let text;
                if(x<18)
                {
                    text="Invalid";
                }
                    else{
                        text="";
                    }
                
                document.getElementById("errorage").innerHTML=text;
                
                
            }
function validation()
        {
            if(!username.value.match(letters))
            {
                alert("Username must contain only alphabets");
                return false;
            }
            return true;
        }
    
        function vidvalidate()
        {
            if(!v_id.value.match(/([A-Z]{3,3})([0-9]){7}$/))
            {
                error.innerHTML="Invalid";
                document.getElementById("regbtn").disabled = true;
                return false;
            }

                error.innerHTML="";
                document.getElementById("regbtn").disabled = false;
                return true;
        }

        </script>
            <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="../jquery/jquery-3.6.3.js"></script>

    <script>

        function checkvid()
        {
            jQuery.ajax({
                url: "check_availability.php",
                data:'voterid='+$("#v_id").val(),
                type: "POST",
                success:function(data){
                    $("#checkvoterid").html(data);
                },
                error:function (){}
                
            });
        }

        </script>
    </body>
</html>
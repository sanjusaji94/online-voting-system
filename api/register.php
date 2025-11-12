<?php
    include("connection.php");

    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $voterid = $_POST['voterid'];
    $age = $_POST['age'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/register.php";
            </script>';
    }
    elseif ($age<18) {
        echo '<script>
                alert("Please enter a valid age");
                window.location = "../routes/register.php";
            </script>';
    }
    
    
    else{
        move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($connect, "insert into user (name, mobile, voterid, age, password, address, photo, status, votes, role) values('$name', '$mobile', '$voterid', '$age', '$pass', '$add', '$image', 0, 0, '$role') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../";
                </script>';
        }
        else
        {
            echo '<script>
                    alert("Some error occured!");
                    window.location = "../";
                </script>';

        }
    }
    
?>
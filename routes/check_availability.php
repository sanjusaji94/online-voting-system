<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="../jquery/jquery-3.6.3.js"></script>


<?php

$connect = mysqli_connect("localhost", "root", "", "online-voting-system");



if(!empty($_POST["voterid"])) 
{
  $query = "SELECT * FROM user WHERE voterid='" . $_POST["voterid"] . "'";
  $result = mysqli_query($connect,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {
    echo "<span style='color:red; font-size:14px; font-weight:800; font-family:verdana, sans-serif;'>Already exists!</span>";
    echo "<script>$('#regbtn').prop('disabled', true);</script>";
}
  else {
    echo "<span style='color:green; font-size:14px; font-weight:800; font-family:verdana, sans-serif;'>Available</span>";
    echo "<script>$('#regbtn').prop('disabled', false);</script>";
  }
} 
?>



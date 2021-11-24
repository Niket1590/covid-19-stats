<?php
include 'links.php';
if(isset($_POST['submit'])){
  $name = $_POST['name'];
   $phoneno = $_POST['phoneno'];
   $email = $_POST['emailid'];
   $symp = $_POST['symp'];
  $subject = $_POST['subject'];
  
  $insertquery = "insert into coronacase(Name,Phone_no,Email,Symptoms,Description) values('$name', '$phoneno','$email', '$symp','$subject')";
  $query = mysqli_query($con,$insertquery);
  if($query){
    ?>
    <script>
      alert("inserted");
    </script>
    <?php
  }
else{
  ?>
  <script>
    alert("Not inserted");
  </script>
  <?php
}
}

?>
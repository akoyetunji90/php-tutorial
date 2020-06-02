 <?php
   #step1 set all input as empty
   $email = $name = $matricnumber = $website = $password = $phonenumber = "";
$nameErr = $emailErr = $matricnumberErr = $passwordErr = $phonenumberErr =  "";

//checking if input is posted

   if($_SERVER["REQUEST_METHOD"]=="POST"){
         
         //create a function to check input
function check_input($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }

   #validating name
      if(empty($_POST["name"])){
$nameErr="required field is empty";
      }
      else{
            //check if name contain only letters and whitespace
if(!preg_match("/^[a-zA-Z]*$/",$name)){
$nameErr = "Only letters and white space allowed";

$name = check_input($_POST["name"]);
      
}
}
       
      if(empty($_POST["email"])){
$emailErr="required field is empty";
      }
     else{
$email = check_input($_POST["email"]);
// check if email is valid
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$emailErr = "Email is not valid";
}
   }
   
      if(empty($_POST["website"])){
$website="";
      }
      else {
$website = check_input($_POST["website"]);

//Validating website
if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]
*[-a-z0-9+&@#\/%=~_|]/i" ,$website)) {
  //  $websiteErr = "URL is not valid";
}
  }

  if(empty($_POST["phonenumber"])){
$phonenumberErr="required field is empty";
      }
      else{
$phonenumber = check_input($_POST["phonenumber"]);
if(!preg_match("/^[0-9]*$/",$phonenumber)){
      $phonenumberErr = "Only numeric value is allowed";
}
if(strlen($phonenumber)!=11){
      $phonenumberErr = "Phone number must contain 11 digits";
}
      }

  if(empty($_POST["matricnumber"])){
$matricnumberErr="required field is empty";
      }
      else{
$matricnumber = check_input($_POST["matricnumber"]);
      }
   
if(empty($_POST["password"])){
$passwordErr="required field is empty";
      }
      else{
$password = check_input($_POST["password"]);
      }
      
   }
     
?>


<?php
# echoing of results
      echo "<h3><b>You have succesfully registered</b></h3>";
    echo "<h3>Your Details are:</h3>";
     echo "<br>";
      echo "Name: ".$name;
      echo"<br>";
       echo "Email: ".$email;
      echo"<br>";
      echo "Website: ".$website;
      echo"<br>";
      echo "Phone Number: ".$phonenumber;
      echo"<br>";
      echo "Matric Number: ".$matricnumber;
      echo"<br>";
     ?>

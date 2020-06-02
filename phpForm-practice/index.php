<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
      
</head>

<style>
.error{
  color:red;
}
</style>
<body>
<div>
<?php include'validate.php'; ?>
<span class = "error">required field *</span><br><br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
   ?>" method="post">

   Name: 
   <input type="text" name="name" value ="<?php echo $name?>">
   <span class ="error">*<?php echo (isset($nameErr))?$nameErr:""; ?></span><br><br>

   Email:
   <input type="email" name="email" value ="<?php echo $email?>">
    <span class ="error">*<?php echo (isset($emailErr))?$emailErr:""; ?></span><br><br>

   Website: 
   <input type="text" name="website" value ="<?php echo $website?>">
 <span class ="error"> <?php echo (isset($websiteErr))?$websiteErr:""; ?></span><br><br>

 Phone Number:
   <input type="number" name="phonenumber" value ="<?php echo $phonenumber?>" >
    <span class ="error">*<?php echo (isset($phonenumberErr))?$phonenumberErr:""; ?></span><br><br>

   Matric Number:
   <input type="number" name="matricnumber" value ="<?php echo $matricnumber?>">
    <span class ="error">*<?php echo (isset($matricnumberErr))?$matricnumberErr:""; ?></span><br><br>

   Password:
   <input type="password" name="password">
 <span class ="error">*<?php echo (isset($passwordErr))?$passwordErr:""; ?></span><br><br>

   Submit:
   <input type="submit" value="Submit">
   </form> 
   </div>
   
</body>
</html>
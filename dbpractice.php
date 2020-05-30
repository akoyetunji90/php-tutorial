<?php
//Establishing database connection
$serverName="localhost";
$userName="root";
$password="";
$dbname="users";

//create connection
$conn=mysqli_connect($serverName,$userName,$password,$users);

//Checking if connected to database
if(!$conn){
    die("can not connect to db".mysqli_connect_error());
}
echo "Connection was successful";

//create database
$sql="CREATE DATABASE users";

if(mysqli_query($conn,$sql)){
echo "Database Created Successfully:";
}
else {
    echo "Error craeting database:" .mysqli_error($conn);
}
//sql to create table

$sql = "CREATE TABLE users_table
(id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
user_name VARCHAR(25) NOT NULL,
user_email VARCHAR(100) NOT NULL,
user_phonenumber VARCHAR(100),
 )";

//checking for error
if(mysqli_query($conn,$sql)){
echo "<br>";
echo "new record added successfully";
}
else{
    echo mysqli_error($conn);
}

//insert data into table

$sql="INSERT INTO user_table
(user_name,user_email,user_phonenumber) VALUES
('username','useremail','userphonenumber');
";//Multiple items to table
/*
$sql.="INSERT INTO user_table
(user_name,user_email,user_phonenumber) VALUES
('username1','useremail1','userphonenumber1');

$sql.="INSERT INTO user_table
(user_name,user_email,user_phonenumber) VALUES
('username2','useremail2','userphonenumber2');

";//Multiple items to table

*/
if(mysqli_query($conn,$sql)){
    $last_id=mysqli_insert_id($conn);
echo "Data added Successfully:";
echo "last inserted ID was:".$last_id;
}
else {
    echo "Error adding data to database:" .mysqli_error($conn);
}
//select all from table
$sql = "SELECT * FROM user_table";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
while($row=
mysqli_fetch_assoc($result)){

}
   }
   
   /* select specific
   $sql = "SELECT id, user_name, user_email FROM user_table";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
while($row=
mysqli_fetch_assoc($result)){
echo  "id: " .$row["id"]. " "
//.$row["user_name"]." " .$row["user_email"]." ";
  */
  
  else{
     echo " 0 results";
   }
   


mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Tutorial</title>
</head>
<body>

    <?php
/*
//php oop concept

class Fruit{
    public $name;
    public $color;

    //declaring setter and getter methods
    function set_name($name){
$this->name = $name;
    }
    function get_name(){
return $this->name;
    }

     function set_color($color){
$this->color = $color;
    }
    function get_color(){
return $this->color;
    }
}
// Declare an object of fruits
 $apple = new Fruit();
$banana = new Fruit ();
$applecolor = new Fruit();
$bananacolor = new Fruit();
//set values
$apple-> set_name('Apple');
$banana-> set_name('Banana');
$applecolor-> set_name('Red');
$bananacolor-> set_name('Green');
//print result
echo "Name of fruit1"." ".$apple-> get_name();  echo "<br>";
echo "Color of color1"." ".$applecolor-> get_name(); echo "<br>";
echo "Name of fruit2"." ".$banana-> get_name(); echo "<br>";
echo "Color of color2"." ".$bananacolor-> get_name();

//using constructor

class Vehicle{
  public  $name;
  public   $model;
   public $price;
    
    function __construct($name,$model,$price){
        $this->name = $name;
        $this->model = $model;
        $this->price = $price;
    }

      function get_name(){
return $this->name;
    }
 function get_model(){
return $this->model;
    }
    function get_price(){
return $this->price;
    }
   
}
//inheritance

class Car extends Vehicle{
    public $color;

function __construct($name,$model,$price,$color){
        $this-> name =  $name;
        $this-> model = $model;
        $this-> price = $price;
        $this-> color = $color;  
    }

    function get_color(){
        return $this->color;
    }
 }
$motor= new Car("Toyota","Camry",'#2500000',"Navy Blue");
echo "Car name is ".$motor-> get_name(); echo "<br>";
echo "Model of the car is ".$motor-> get_model(); echo "<br>";
echo "Price is ".$motor-> get_price();echo "<br>";
echo "Your favourite color is ".$motor-> get_color();

//method 2 of inheritance
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();

echo "<br>";

class Fruit1 {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class Strawberry1 extends Fruit1 {
  public $weight;
  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  public function intro() {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
  }
}

$strawberry1 = new Strawberry1("Strawberry", "red", 50);
$strawberry1->intro();
//note when a class is declared with the final keyword it can neither be inherited nor overridden eg final public Fruits{}

//PHP CONSTANT
class Goodbye
{
   const WELCOME_MESSAGE = "Thank you and welcome to our world of learning" ;
   const LEAVING_MESSAGE = "Thank you for chosing us";
}
echo Goodbye :: WELCOME_MESSAGE;
echo "<br>";
echo Goodbye :: LEAVING_MESSAGE;

//PHP TRAITS
traits are used to declare methods that can be used in multiple classes
exp1

echo "<br>";
trait message1
{
    public function msg1(){
        echo "Php oop is fun! ";
    }
}

trait message2{
public function msg2(){
        echo "Php oop reduces code duplication ";
    }
}

class Welcome
{
    use message1;
}

class Welcome1
{
    use message1,message2;
}


$msg=new Welcome();
$msg->msg1();
echo "<br>";

$msg1=new Welcome1();
$msg1->msg1();
echo "<br>";
$msg1->msg2();

//PHP TUTORIAL FOR BEGINERS:
//php variable scope
function  testing(){
    $str1 = 'this is a local variable';
    echo "$str1";// local variable are declared inside a function and can not be accessed out side the function
} 
testing();
Global variable are variable declared outside a function.
To access global varaibe inside a function we use the global keyword as shown below
when local and global variable have the same name then priority is given to local variable
ex1.
$name = "Abdulakeem";
function global_var(){
    global $name;
    echo "My name is $name Adekunle Oyetunji <br/>";
}
global_var();
echo "My name is $name Adekunle Oyetunji";
ex2.
$num1 = 15;
$num2 = 20;
function add(){
    $sum = $GLOBALS['num1']+$GLOBALS['num2'];
    echo "The sum is .$sum";
}
add();
ex3
$name = "tunji";
function str(){
$name = "dekunle";
echo "$name";
}
str();
PHP $var and $$var
the php $var stores any value like strings, integer, floats etc
while the $$var stores the value of the $var inside it.
eg1.  $var = 'abc';
$abc = 200;
echo $var;
echo $abc;
echo $$var;
ex2.
$dog = 'monkey';
$monkey = 'cat';
$cat = 'tiger';
echo ${${$dog}};
PHP MAGIC CONSTANT
echo "Am at line number"." ".__LINE__."<br><br>";
echo __FILE__."<br><br>";
echo __DIR__;
NESTED IF STATEMENT
$age = 4;
$country = "nigeria";
if ($country=="nigeria") {
    if ($age>=18) {
        echo "eligible to vote";
    }
    else {
    echo "not eligible to vote";
    }
}
//PHP SWITCH
$num = 20;
switch($num){
    case 10;
    echo " number is eqaul to 1o";
    break;
    case 20;
    echo " number is eqaul to 20";
    break;
    case 30;
    echo " number is eqaul to 30";
    default; 
}
$str = 'g';
switch ($str) {
    case 'a':
        echo "$str is a vowel";
        break;
    case 'e':
        echo "$str is a vowel";
        break;
    case 'i':
        echo "$str is a vowel";
        break;
    case 'o':
        echo "$str is a vowel";
        break;
    case 'u':
        echo "$str is a vowel";
        break;
    case 'A':
        echo "$str is a vowel";
        break;
    case 'E':
        echo "$str is a vowel";
        break;
    case 'I':
        echo "$str is a vowel";
        break;
    case 'O':
        echo "$str is a vowel";
        break;
    case 'U':
        echo "$str is a vowel";
        break;
    default:
        echo "$str is not a vowel but $str is a consonant";
        break;
}
//PHP NESTED SWITCH
$car = 'mercedez';
$model = '230';
switch ($car) {
    case 'toyota':
switch ($model)  {
case 'corolla':
    echo "the price of $model is #2 000 000 to #3 000 000";
    break;
  case 'camry':
    echo "the price of $model is #2 500 000 to #3 500 000";
    break;
  case 'venza':
    echo "the price of $model is #3 000 000 to #4 000 000";
    break;
}  
break;   
case 'mercedez':
    switch($model){
case 'mercedez 190':
    echo "the price of mercedez $model is #1 000 000 to #2 000 000";
    break;
  case '230':
    echo "the price of merecedez $model is #2 500 000 to #3 000 000";
    break;
  case '320':
    echo "the price of mercedez $model is #3 000 000 to #5 500 000";
    break;
    }
   break; 
   case 'honda':
    switch($model){
case 'accord':
    echo "the price of $model is #3 000 000 to #4 000 000";
    break;
  case 'passat':
    echo "the price of $model is #4 500 000 to #5 000 000";
    break;
  case 'nissan':
    echo "the price of $model is #5 000 000 to #5 500 000";
    break;
    }
    break;
}
//For each loop
$student = array(
"Name" => "Sola",
"Gender" => "Male",
"Age" =>19,
"Email" => "example@example.com",
);
foreach($student as $key=>$learner){
  echo $key.":".$learner;
echo "</br>";
  
}
//Php call by value
function adder($str2){
    $str2.= "call by value";
}
$str = "Hello";
adder($str);
echo $str;
//php call by reference
function adder(&$str2){
    $str2.= "call by reference";
}
$str = "Hello";
adder($str);
echo "<br>";
echo $str;
//php variable length argument function
function add(...$numbers){
$sum = 0;
foreach($numbers as $n){
$sum+=$n;
}
return $sum;
}
echo add(1,2,3,4,5,6,7,8,9,10);
// calling function within function is called recursive function
ex1
function counter($num){
    if($num<=10){
        echo "$num <br>";
        counter ($num+1);
    }
}
counter(1);
ex2
function factorial($fact){
if($fact<0)
    return -1;
if($fact==0)
return 1;
return($fact*factorial($fact-1));//recurssion
}
echo factorial(6);
//php Array
Indexed Array
$subject = array("maths","english","biologo","physics","chemistry");
echo "subject offered are <br>";
foreach ($subject as $subj) {
    echo "$subj<br> ";
}
Associative Array
$employee = array('sola' =>35000, "bukky"=>25000, "dende"=> 35000, "oke" =>30000, "kolade"=>40000);
echo "sola's salary is:" .$employee["sola"]."<br>";
echo "bukky's salary is:" .$employee["bukky"]."<br>";
echo "dende's salary is:" .$employee["dende"]."<br>";
echo "oke salary is:" .$employee["oke"]."<br>";
echo "kolade's salary is:" .$employee["kolade"];
Multidimensional Array
$emp = array(
    array(1,"dele","Male",40000),
    array(2,"yele","Male",50000),
    array(3,"fela","Male",60000),
    array(4,"Sade","Female",60000),
);
for ($row=0; $row <4 ; $row++) { 
    for ($col=0; $col <4 ; $col++) { 
    echo $emp[$row][$col]."     ";
    }
    echo "<br>";
}
//generating random number
$password = mt_rand(1000000,9999999);
 echo $password;
 echo "<br>";
 
 $cars=array('toyota','volvo','benz');
 var_dump($cars);
$var=false;
 var_dump($var);

//time and date 
date_default_timezone_get("Nigeria/Abuja");
echo "Todays date is: " .date('Y/m/d h:i:sa');
echo"<br>";
echo "The time is: " .date('h:i:sa');
echo"<br>";
echo "Today is:" .date('l');
echo"<br>";

$d=strtotime("+10 minutes");
echo $d;
echo "<br>";
?>
&copy 2016-<?php echo date("Y");

#SUPERGLOBALS
echo "<br>";
//PHP Superglobal variable
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
*/


?>

</body>
</html>
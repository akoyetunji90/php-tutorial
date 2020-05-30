<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   <?php
//swapping numbers
$a=10;
$b=15;
$temp=$a;
$a=$b;
echo  "a is now :"." ".$a;
echo "<br>";

$b=$a;
$b=$temp;
$temp=$b;
echo  "b is now :"." ".$b;
echo "<br>";

//factorial of number using function
$num=5;
function factorial($num){
    if($num<=1){
        return 1;
    }
    else {
return $num*factorial($num-1);
    }  
}
echo "Factorial of $num is:"." " .factorial($num);

// factorial using for loop
echo"<br>";
$num=-2;
$fact=1;
for ($i=1; $i<=$num ; $i++) { 
    $fact=$fact*$i;
}
echo "Factorial of $num is:"." " .$fact;

# permutation and combination
echo "<br>";
$n=5;
$r=3;
function fact($n){
    if ($n<=1) {
        return 1;
    }
    else {
$fact=$n*fact($n-1);
return $fact;
    }  
}
$nPr = fact($n)/fact($n-$r);
echo "Permutation is : ".$nPr;
echo"<br>";
$nCr = fact($n)/(fact($n-$r)*fact($r));
echo "Combination is :" .$nCr;
echo"<br>",
#program to print prime numbers
$num=200;
 echo "The prime numbers between 1 and $num is:";

for ($i=2; $i<=$num ; $i++) { 
    for ($j=2; $j<$i ; $j++) { 
        if ($i%$j==0) {
            break;
        }
       
    }
     if ($j==$i) {
                    echo " ".",". $i;
        }
}
echo "<br>";
//Matrices Addition
$mat1 = array(
array(1,2,3,4),
array(5,6,6,7),
array(8,9,10,11),
array(12,13,14,15)
);

$mat2 = array(
array(1,2,3,4),
array(5,6,6,7),
array(8,9,10,11),
array(12,13,14,15)
);

$row1=count($mat1);
$col1=count($mat1[0]);

$sum=array_fill(0,$col1,array_fill(0,$row1,0));

for ($i=0; $i <$row1 ; $i++) { 
    for ($j=0; $j < $col1; $j++) { 
        $sum[$i][$j]=$mat1[$i][$j]+$mat2[$i][$j];
    }
}
echo "Addtion of the two matrices is:";
echo "<br>";
for ($i=0; $i <$row1 ; $i++) { 
    for ($j=0; $j < $col1; $j++) { 
     print($sum[$i][$j]." ");
    }
    print ("<br>");
}

//Product of two matrices
$mat1 = array(
array(1,2,3,4),
array(5,6,6,7),
array(8,9,10,11),
array(12,13,14,15)
);

$mat2 = array(
array(1,2,3,4),
array(5,6,6,7),
array(8,9,10,11),
array(12,13,14,15)
);

$row1=count($mat1);
$col1=count($mat1[0]);

$row2=count($mat2);
$col2=count($mat2[0]);

if($col1!=$row2){
    print("Matrices cannot be multiplied");
}
else {
$prod=array_fill(0,$col2,array_fill(0,$row1,0));

for ($i=0; $i <$row1 ; $i++) { 
    for ($j=0; $j < $col2; $j++) { 
        for ($k=0; $k <$row2 ; $k++) { 
            $prod[$i][$j]=$prod[$i][$j]+$mat1[$i][$j]*$mat2[$k][$j];
        }
        
    }
}

print ("Product of the two matrices gives:");
echo "<br>";
for ($i=0; $i <$row1 ; $i++) { 
    for ($j=0; $j < $col2; $j++) { 
     echo ($prod[$i][$j]." ");
    }
    echo ("<br>");
}
}
//program to print an upper triangular matrix
echo "The upper triangular matrix is:";
echo "<br>";

$mat1 = array(
array(1,2,3,4),
array(5,6,6,7),
array(8,9,10,11),
array(12,13,14,15)
);

$row1=count($mat1);
$col1=count($mat1[0]);

if($row1!=$col1){
    print("Matrix must be a square matrix <br>");
}
else {
    for($i=0; $i <$row1 ; $i++) { 
        for($j=0; $j<$col1 ; $j++) { 
            if ($i>$j) {
                print("0");
            }
            else {
                print($mat1[$i][$j])." ";
            }
           
        }
         print("<br>");
    }
}

//program to print an lower triangular matrix
echo "The lower triangular matrix is:";
echo "<br>";

$mat1 = array(
array(1,2,3,4),
array(5,6,6,7),
array(8,9,10,11),
array(12,13,14,15)
);

$row1=count($mat1);
$col1=count($mat1[0]);

if($row1!=$col1){
    print("Matrix must be a square matrix <br>");
}
else {
    for($i=0; $i <$row1 ; $i++) { 
        for($j=0; $j<$col1 ; $j++) { 
            if ($i<$j) {
                print("0");
            }
            else {
                print($mat1[$i][$j])." ";
            }
           
        }
         print("<br>");
    }
}

//Diagonal matrix
echo "The Diagonal matrix is:";
echo "<br>";
$mat1 = array(
array(1,2,3,4),
array(5,6,6,7),
array(8,9,10,11),
array(12,13,14,15)
);

$row1=count($mat1);
$col1=count($mat1[0]);

if($row1!=$col1){
    print("Matrix must be a square matrix <br>");
}
else {
    for($i=0; $i <$row1 ; $i++) { 
        for($j=0; $j<$col1 ; $j++) { 
            if ($i!=$j) {
                print("0");
            }
            else {
                print($mat1[$i][$j])." ";
            }
           
        }
         print("<br>");
    }
}

//identity matrix
echo "The Identity matrix is:";
echo "<br>";
$mat1 = array(
array(1,2,3,4),
array(5,6,6,7),
array(8,9,10,11),
array(12,13,14,15)
);

$row1=count($mat1);
$col1=count($mat1[0]);

if($row1!=$col1){
    print("Matrix must be a square matrix <br>");
}
else {
    for($i=0; $i <$row1 ; $i++) { 
        for($j=0; $j<$col1 ; $j++) { 
            if ($i==$j) {
                print("1");
            }
            else {
                print("0")." ";
            }
           
        }
         print("<br>");
    }
}
//comparing two matrices
$mat1 = array(
array(1,2,3,4),
array(5,6,6,7),
array(8,9,10,11),
array(12,13,14,15)
);

$mat2 = array(
array(1,2,3,4),
array(5,6,6,7),
array(8,9,10,11),
array(12,13,14,15)
);
$flag=true;

$row1=count($mat1);
$col1=count($mat1[0]);

$row2=count($mat2);
$col2=count($mat2[0]);

if($row1!=$row2||$col1!=$col2){
    print("Matrices are not equal");
}
else {
for ($i=0; $i <$row1 ; $i++) { 
    for ($j=0; $j < $col2; $j++) { 
        if ($mat1[$i][$j]!=$mat2[$i][$j]) {
            $flag=false;
            break;
        }
        }  
    }
    if($flag)
    print("Matrices are equal<br>");
    else
    print("Matrices are not equal<br>");
}

echo "<br>";
$mat1 = array(
array(1,2,3,4),
array(5,6,6,7),
array(8,9,10,11),
array(12,13,14,15)
);

$countEven=0;
$countOdd=0;

$row1=count($mat1);
$col1=count($mat1[0]);

    for($i=0; $i <$row1 ; $i++) { 
        for($j=0; $j<$col1 ; $j++) { 
            if ($mat1[$i][$j]%2==0) {
                $countEven++;
            }
            else {
                $countOdd++;
            }
           
        }
            }
 print("Frequency of Even numbers is: ".$countEven);echo "<br>";
          print("Frequency of odd numbers is: ".$countOdd);
//transpose of a matrix

echo "<br>";
$mat1 = array(
array(1,2,3,4),
array(5,6,6,7),
array(8,9,10,11),
array(12,13,14,15)
);

$row1=count($mat1);
$col1=count($mat1[0]);

$mt=array_fill(0,$col1,array_fill(0,$row1,0));

    for($i=0; $i <$col1 ; $i++) { 
        for($j=0; $j<$row1 ; $j++) { 
            $mt[$i][$j] = $mat1[$j][$i];
            
        }
            }
for ($i=0; $i <$col1 ; $i++) { 
for ($j=0; $j < $row1; $j++) { 
    print($mt[$i][$j]." ");
}
print("<br>");
}

echo "<br>";
$mat1 = array(
array(1,2,3,4),
array(5,6,6,7),
array(8,9,10,11),
array(12,13,14,15)
);

$row1=count($mat1);
$col1=count($mat1[0]);

for ($i=0; $i <$row1 ; $i++) { 
    $sumRow=0;
    for ($j=0; $j <$col1; $j++) { 
        $sumRow=$sumRow+$mat1[$i][$j];
    }
    print ("Sum of ".($i+1)."row:".$sumRow);
    print("<br>");
}
print("<br>");
for ($i=0; $i <$col1 ; $i++) { 
    $sumCol=0;
    for ($j=0; $j <$row1; $j++) { 
        $sumCol=$sumCol+$mat1[$j][$i];
    }
    print ("Sum of ".($i+1)."column:".$sumCol);
    print("<br>");
}

echo "The Pascal Triangle is:";
echo "<br>";
$n=10;
$r=1;
function fat($n){
    if ($n<=1) {
        return 1;
    }
    else {
$fat=$n*fat($n-1);
return $fat;
    }  
}
function comb($n,$r){
return fat($n)/(fat($n-$r)*fat($r));
}

for ($i=0; $i <=$n ; $i++) { 
    for ($j=0; $j <=$i ; $j++) { 
        print ( " ".comb($i,$j));
    }
    print("<br>");
}

//Frequecy of data
$arr = array(40,45,60,35,80,56,35,45,78,80,67,56,65,79,80,89,98,89,60,64,67,66,56,78,40,35,79,65,80,40);

$frq = array_fill(0,count($arr),0);
$visited=-1;

for ($i=0; $i <count($arr) ; $i++) { 
    $count=1;
    for ($j=$i+1; $j <count($arr); $j++) { 
    if($arr[$i]==$arr[$j]) {
        $count++;

        $frq[$j]=$visited;
    }
    
}
if ($frq[$i]!=$visited) {
    $frq[$i]=$count;
}
}

print("----------------------<br>");
print("Scores|Frequency<br>");
print("----------------------<br>");

for($i=0; $i < count($frq); $i++) { 
    if($frq[$i]!=$visited){
        print(str_repeat('',6).$arr[$i]);
print(str_repeat('',7)."|".str_repeat('',7).$frq[$i]);
print("<br>");

    }
}

print("----------------------<br>");

?> 

</body>
</html>

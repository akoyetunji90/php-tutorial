<?php
//copying element of one array into another
$num1 =array(1,2,3,4,5,6,10,11,1,3,2,9,7,8,4,9,9,7,8,5,9,10,12,12);
$num2=array();
$len1=count($num1);
$len2=count($num1);

for ($i=0; $i <$len1 ; $i++) { 
    $num2[$i]=$num1[$i]; 
}

print ("Element of original array is:");
echo "<br>";
for ($i=0; $i <$len1 ; $i++) { 
    print($num1[$i]." ");
}

print("<br>");
print ("Element of new array is:");
echo "<br>";
for ($i=0; $i <$len1 ; $i++) { 
    print($num2[$i]." ");
}
// program to print duplicate element in an array
print("<br>");
print("Duplicate element in the given array is:");
echo "<br>";
for($i=0; $i < count($num1) ; $i++) { 
    for($j=$i+1; $j < count($num1); $j++) { 
        if($num1[$i]==$num1[$j])
 print($num1[$i]." ");
    
}
    }
    //program to print element present in odd and even position
echo "<br>";
echo "Element in the even position is:";
echo "<br>";
   for ($i=0; $i <count($num1) ;$i=$i+2) { 
       print($num1[$i]." ");
   } 

echo "<br>";
echo "Element in the odd position is:";
echo "<br>";
   for ($i=1; $i <count($num1) ;$i=$i+2) { 
       print($num1[$i]." ");
   } 

   //element of an array in reverse order
   echo "<br>";
echo "Element in the reverse position is:";
echo "<br>";
   for ($i=count($num1)-1; $i>=0 ;$i--) { 
       print($num1[$i]." ");
   } 
//program to find the minimum element in an array
echo "<br>";
echo "The minimum element in the array is:";
$min=$num1[0];
for ($i=0; $i <count($num1) ; $i++) { 
    if ($num1[$i]<$min) {
        $min=$num1[$i];
    }
}
    print($min);
    echo "<br>";

echo "The maximum element in the array is:";
$max=$num1[0];
for ($i=0; $i <count($num1) ; $i++) { 
    if ($num1[$i]>$max) {
        $max=$num1[$i];
    }
}
    print($max);

//print element of an array in descending order
echo "<br>";
echo "The array in descending order is:";
$temp=0;
for($i=0; $i < count($num1) ; $i++) { 
    for($j=$i+1; $j < count($num1); $j++) { 
if ($num1[$i]>$num1[$j]) {
    $temp=$num1[$i];
    $num1[$i]=$num1[$j];
    $num1[$j]=$temp;
}
    
}
    }
echo "<br>";
for ($i=count($num1)-1; $i>=0 ;$i--) { 
       print($num1[$i]." ");
   } 

   echo "<br>";
echo "The array in ascending order is:";
$temp=0;
for($i=0; $i < count($num1) ; $i++) { 
    for($j=$i+1; $j < count($num1); $j++) { 
if ($num1[$i]<$num1[$j]) {
    $temp=$num1[$i];
    $num1[$i]=$num1[$j];
    $num1[$j]=$temp;
}
    
}
    }
echo "<br>";
for ($i=count($num1)-1; $i>=0 ;$i--) { 
       print($num1[$i]." ");
   } 

   echo "<br>";
      echo "<br>";
$sum=0;
for ($i=0; $i <count($num1) ; $i++) { 
    $sum=$sum+$num1[$i];
}
echo ("Sum of all the element of the array is:".$sum);

//Strings
?>

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
/********************************************************** FIRST EXERCISE************************/
  echo "Twinkle, Twinkle little star.";
  echo "<br/>";

  $x = "twinkle";
  $y = "Star";

  echo $x;
  echo "<br/>";

  echo $y;
  echo "<br/>";

  $x = "LIFE IS BEAUTIFUL!!! :)";
  $y = "DO WHATEVER YOU LIKE ";

  echo $x;
  echo "<br/>";

  echo $y;
  echo "<br/>";
  echo "<br/>";
  echo "<br/>";

/******************************************SECOND EXERCISE***********************************/
$x = 10;
$y = 7;

$z = $x+$y;
echo $z;
echo "<br/>";

$z = $x-$y;
echo $z;
echo "<br/>";

$z = $x*$y;
echo $z;
echo "<br/>";

$z = $x/$y;
echo $z;
echo "<br/>";

$z = $x%$y;
echo $z;
echo "<br/>";
echo "<br/>";
echo "<br/>";

/**********************************************THIRD EXERCISE*****************************/

$x = 8;
echo "value is now $x";
echo "<br/>";

$x = $x+2;
echo "add 2. value is now $x";
echo "<br/>";

$x = $x-4;
echo "subtract 4. value is now $x";
echo "<br/>";

$x = $x*5;
echo "multiply 5. value is now $x";
echo "<br/>";

$x = $x/3;
echo "divide by 3. value is now $x";
echo "<br/>";

echo "increment 1. value is now  ",++$x;
echo "<br/>";

echo "decrement 1. value is now ",--$x;
echo "<br/>";
echo "<br/>";
echo "<br/>";


/******************************************FORTH EXERCISE *************************************/

$progo='Harry'; 
$rank_num=28;   
 
var_dump($progo); 
echo "<br/>";   
 
print_r($progo); 
echo "<br/>";   
 
var_dump($rank_num); 
echo "<br/>";  
 
$progo=null;
 
var_dump($progo);
echo "<br/>";
echo "<br/>";
echo "<br/>";



/************************************************FIFTH EXERCISE******************************/

$around="around";
echo "What goes $around, comes $around.";

$month=date('F', time());

if ($month == 'August')
  echo "<p>It's August, so it's really hot.</p>";
else{
  echo "<p>Not August, so at least not in the peak of the heat.</p>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";



/*********************************SIXTH EXERCISE************************************************** */

for ($i=1; $i <=12 ; $i++) { 
     $squres=$i*$i;
      echo "$i*$i = $squres";
      echo "<br/>";

}

echo "<br/>";echo "<br/>";echo "<br/>";

/********************************************SEVENTH EXERCISE**************************************/

echo "<table border=\"2\">";

for ($i=1; $i <=7 ; $i++) { 
    echo "<tr>\n";
    for ($j=1; $j <=7 ; $j++) { 
        $value = $i*$j;
        echo "<td>$value</td>\n";
        
    }
    echo "</tr>";
}
echo "</table>";

echo "<br/>";echo "<br/>";echo "<br/>";

?>


</body>
</html>
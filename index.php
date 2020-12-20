<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>PHP Basics</title>
</head>
<body>


<img src="php.svg" alt="">

<? ?>

<? $my_name = "Sasha";
$georgia = "\ndallas";
$favorite_food = "\n"."tur"."duck"."en"; // concatenating

$dog_name = "Tadpole";
$favorite_food = "salmon";
$color = "brown";
echo "I have a " . $color . " dog named " . $dog_name . " and her favorite food is " . $favorite_food . ".";

$animal = "dog";
echo "I am friends with many ${animal}s.";

$first_player_rank = "Beginner";
$second_player_rank = $first_player_rank; 

$full_name = "Aisle";
$full_name .= " Nevertell";  //
echo $full_name; // Prints: Aisle Nevertell

  $very_bad_unclear_name = "15 chicken wings";
  $order =& $very_bad_unclear_name; // all assignments are the same as before and after
  $order .= "16 wings";

//Reassignment
$savings = 800;
$bike_cost = 75;
$savings = $savings - $bike_cost;
echo $savings; // Prints: 725

//Short form of the reassignment
$savings = 800;
$bike_cost = 75;
$savings -= $bike_cost;
echo $savings; // Prints: 725


$age = 89; 
$age++;
echo $age; // Prints: 90
 
$days_til_vacation = 7; 
$days_til_vacation--;
echo $days_til_vacation; // Prints: 6


//Simple Function = don't type several times the same, use function
function praisePHP()
  {
echo "a2 like PHP";
echo "123";
  }
praisePHP();


//Variations with functions

function increaseEnthusiasm($str_param)
{
  return $str_param . "!";
}

function repeatThreeTimes($str_param)
{
  return $str_param . $str_param . $str_param;
}  

echo increaseEnthusiasm("oh");

echo repeatThreeTimes("wow");

echo increaseEnthusiasm(repeatThreeTimes("hai"));

//AREA and VOLUME calculations
function calculateArea($num1, $num2)
{
return $num1 * $num2;
}
echo calculateArea(2, 4);

function calculateVolume($height, $width, $depth)
{
return $height * $width * $depth;
}
echo calculateVolume(2, 4, 6);

//CUSTOM HELLO
function greetFriend($name = "old chum")
{
  echo "Hello, $name!";
};
 
greetFriend("Marvin"); // Prints: Hello, Marvin!
 
greetFriend(); // Prints: Hello, old chum!


//TIPS WITH PREDEFINED TIPS OF 20%
function calculateTip($total, $tips = 20)

{

$total = $total * (1 + ($tips/100));
return $total;

}

//CONVERT TO QUESTION
$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";

// Write your code below:

function convertToQuestion(&$string)
{
$string = "Do you think " . $string . "?" . "\n";

};
convertToQuestion($string_one);
convertToQuestion($string_two);
convertToQuestion($string_three);

echo $string_one . $string_two . $string_three;

//




?>




</body>
</html>

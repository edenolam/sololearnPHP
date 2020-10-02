<?php
//
//$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];
//
//$treasure = $treasure_hunt[3];
//
//echo $treasure;
//
//
//$giraffe_foods = ["dip"=>"guacamole", "chips"=>"corn", "entree"=>"grilled chicken"];
//
//$impala_foods = ["dessert"=>"cookies", "vegetable"=>"asparagus", "side"=>"mashed potatoes"];
//
//$rat_foods = ["dip"=>"mashed earth worms", "entree"=>"trash pizza", "dessert"=>"sugar cubes", "drink"=>"lemon water"];
//
//// Write your code below:
//
//
//$potluck = $giraffe_foods + $impala_foods + $rat_foods;
//
//foreach ($potluck as $p){
//echo "-" .$p. "<br>";
//}
//
//
////Assign by Value or by Reference
//$favorites = ["food"=>"pizza", "person"=>"myself", "dog"=>"Tadpole"];
//$copy = $favorites;
//$alias =& $favorites;
//$favorites["food"] = "NEW!";
//
//echo $favorites["food"]; // Prints: NEW!
//echo $copy["food"]; // Prints: pizza
//echo $alias["food"]; // Prints: NEW!
//
//
//
//function changeColor ($arr)
//{
//    $arr["color"] = "red";
//}
//$object = ["shape"=>"square", "size"=>"small", "color"=>"green"];
//changeColor ($object);
//echo $object["color"]; // Prints: green



//$i = 0;
//inc($i);
//
//echo $i;
//function inc(&$arg){
//    $arg++;
//}


//
//$doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];
//
//$bad_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "A very fat cat looks happy."];
//
//// Write your code below:
//
//function createMeme($meme)
//{
//    $meme = ["top_text", "bottom_text", "img", "description"];
//    $meme["top_text"] = "Much PHP";
//    $meme["bottom_text"] = "Very programming. Wow.";
//    return $meme;
//}
//
//$php_doge = createMeme($doge_meme);
//
//print_r($php_doge);
//
//function fixMeme(&$meme)
//{
//    $meme["top_text"] = "Mufhgfh";
//    $meme["bottom_text"] = "Veryghgfhgfhw.";
//}
//
//fixMeme($bad_meme);


$doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];

$doge_meme["new value"] = "Woah I'm new";

echo "\n" . $doge_meme["new value"];

array_push($doge_meme, "just an example");

echo "\n" . $doge_meme[0] . "\n";

unset($doge_meme[0]);
unset($doge_meme["new value"]);

$doge_meme["description"] = "A wonderful dog picture with a brand new description.";

function createMeme($meme)
{
    $meme["top_text"] = "Much PHP";
    $meme["bottom_text"] = "Very programming. Wow.";
    return $meme;
}

$php_doge = createMeme($doge_meme);

print_r($doge_meme);

print_r($php_doge);

function fixMeme(&$meme)
{
    $meme["top_text"] = "I can haz";
    $meme["bottom_text"] = "PHP, plz?";
}

$lame_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "An very fat cat looks happy."];

print_r($lame_meme);

fixMeme($lame_meme);

print_r($lame_meme);


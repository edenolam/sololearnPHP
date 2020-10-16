<?php

//$learner_one = ["is_correct" => FALSE, "box" => ["shape" => "none", "color" => "none"]];
//
//$learner_two = ["is_correct" => TRUE, "box" => ["shape" => "none", "color" => "none"]];
//
//function markAnswer($is_answer_correct, &$box)
//{
//    if ($is_answer_correct) {
//        $box["shape"] = "checkmark";
//        $box["color"] = "green";
//    } else {
//        $box["shape"] = "x";
//        $box["color"] = "red";
//    }
//
//}
//
//markAnswer($learner_one['is_correct'], $learner_one['box']);
//markAnswer($learner_two['is_correct'], $learner_two['box']);
//
//print_r($learner_one["box"]);
//print_r($learner_two["box"]);
//
//echo strtolower(date("F"));

function whatRelation($grade){
    if ($grade == 100) {
        echo "identical twins";
    }
    elseif ($grade > 35 && $grade < 99) {
        echo "parent and child or full siblings";
    }
    elseif ($grade > 14 && $grade < 34) {
        echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
    }
    elseif ($grade > 6 && $grade < 13) {
        echo "first cousins";
    }
    elseif ($grade > 3 && $grade < 5) {
        echo "second cousins";
    }
    elseif ($grade > 1 && $grade < 2) {
        echo "third cousins";
    }else{
        echo "not genetically related";
    }
}

whatRelation(100);




//php statement.php
echo "Hello, there. What's your first name?\n";

$name = readline(">> ");
$nameLength = strlen($name);
if($nameLength > 8){
    echo "Hi, {$name}. That's a long name.";
}
elseif($nameLength <= 8 && $nameLength >= 4){
    echo "Hi, {$name}.";
}
elseif($nameLength < 3){
    echo "Hi, {$name}. That's a short name.";
}



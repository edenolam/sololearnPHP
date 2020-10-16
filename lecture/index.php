<?php
////
////
////$myfile = fopen("names.txt", "w");
////
////$txt = "John\n";
////fwrite($myfile, $txt);
////$txt = "David\n";
////fwrite($myfile, $txt);
////
////$txt = "julien\n";
////fwrite($myfile, $txt);
////$fh = fopen($myfile, 'a');
////fwrite($fh, "Some text");
////fclose($fh);
////
/////* File contains:
////John
////David
////*/
//
//
//if (isset($_POST['text'])) {
//    $name = $_POST['text'];
//    $handle = fopen('names.txt', 'a');
//    fwrite($handle, $name . "\n");
//    fclose($handle);
//}
//?>
<!--<form method="post">-->
<!--    Name: <label>-->
<!--        <input type="text" name="text"/>-->
<!--    </label>-->
<!--    <input type="submit" name="submit"/>-->
<!--</form>-->

<?php
//$myfile = fopen("names.txt", "w");
//
//$txt = "John\n";
//fwrite($myfile, $txt);
//$txt = "David\n";
//fwrite($myfile, $txt);
//
//fclose($myfile);
//
//$read = file('names.txt');
//foreach ($read as $line) {
//    echo $line ."est ecrit dans le fichier {$myfile} names.txt <br>";
//}





//
//$myfile = fopen("names.txt", "w");
//
//$txt = "John\n";
//fwrite($myfile, $txt);
//$txt = "David\n";
//fwrite($myfile, $txt);
//
//fclose($myfile);
//
//$readElements = file('names.txt'); // tableau de 2 elements
//$count = count($readElements); // total 2
//
//$i = 1;
//foreach ($readElements as $line) {
//    echo $line;
//    if($i < $count) {
//        echo ', ';
//    }else{
//        echo "fin d'elements";
//    }
//    $i++;
//}





$h = fopen('file.txt', 'a');
for($i=1;$i<=10; $i++) {
    fwrite($h, $i);
    echo $i.', ';
}
fclose($h);
?>



<?
$str1 = "book restaurant         ";
$str2 = "book rest        ";
$str3 = "bok restaurant";

function checkValidString($str){
  return (strpos($str,"book") !== false && strpos($str,"restaurant") === false) || (strpos($str,"book") === false && strpos($str,"restaurant") !== false) ? true : false;
}
$check1 = checkValidString($str1) ? "true" : "false";
$check2 = checkValidString($str2) ? "true" : "false";
$check3 = checkValidString($str3) ? "true" : "false";
echo $check3 . ' ' . $check2 . ' ' . $check1, PHP_EOL;

$file1 = fopen("file1.txt",'r');
$size1 = filesize("file1.txt");
$file1data = fread($file1, $size1);

$file2 = fopen("file2.txt", 'r');
$size2 = filesize("file2.txt");
$file2data = fread($file2, $size2);

$checkFile1 = checkValidString($file1data) ? "true" : "false";
$checkFile2 = checkValidString($file2data) ? "true" : "false";

echo $checkFile1 . ' ' . $checkFile2;
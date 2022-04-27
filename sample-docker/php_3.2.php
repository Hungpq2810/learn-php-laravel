<?
class ExerciseString {
  private $Check1;
  private $Check2;

  public function getCheck1(){
    return $this->Check1;
  }
  public function setCheck1($value){
    $this->Check1 = $value;
  }
  public function getCheck2() {
    return $this->Check2;
  }
  public function setCheck2($value){
    $this->Check2 = $value;
  }

  public function readFile($fileName){
    $file = @fopen($fileName, 'r');
    $fileSize = filesize($fileName);
    $data = fread($file,$fileSize);
    fclose($file);

    return $data;
  }
  
  public function checkValidString($str){
    return (strpos(" ".$str,"book") xor (strpos(" ".$str,"restaurant")));
  }

  public function writeFile($str){
    $file = @fopen('results.txt', 'w');
    fwrite($file, $str);
    fclose($file);
  }

  function countSentences($str){
      $sentences = explode(".",$str);
      $sentences = array_filter(array_map('trim', $sentences));
  }
}

// Main 
$object1 = new ExerciseString();
$data1 = $object1->readFile('file1.txt');
$object1->setCheck1($object1->checkValidString($data1));
if ($object1->getCheck1()) {
  $string1 = "- check1 là chuỗi hợp lệ. ";
} else {
  $string1 = "- check1 là chuỗi không hợp lệ. ";
}


$data2 = $object1->readFile('file2.txt');
$object1->setCheck2($object1->checkValidString($data2));
if ($object1->getCheck2()) {
  //$string2 = "- check2 là chuỗi hợp lệ . Chuỗi có " . countSentences($data2) . " câu.";
} else {
  $string2 = "- check2 là chuỗi không hợp lệ. ";
}

$object1->writeFile($string1 . "\n" . $string2);

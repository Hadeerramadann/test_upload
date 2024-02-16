<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="post">
      <input type="text" name="name">
      <button type="submit">save</button>
      <!-- <a href="index.php?subject=PHP&web=W3schools.com">Test $GET</a> -->
</form>
    <?php 
function bubbleSort(&$arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        // Last $i elements are already in place
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Swap if the element found is greater
            // than the next element
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

// Example usage:
$numArray = [64, 34, 25, 12, 22, 11, 90];
echo "Original Array: " . implode(", ", $numArray) . "\n";

bubbleSort($numArray);

echo "Sorted Array: " . implode(", ", $numArray);
echo '____________<br>';

function SortArray(&$array){

    $len=count($array);

    for($i=0 ;$i<$len -1 ;$i++){

       for($j=0 ;$j <$len - $i -1 ; $j++){

             if ($array[$j] > $array[$j+1]) {
                
                $swap=$array[$j];
                $array[$j]=$array[$j + 1];
                $array[$j + 1]=$swap;
             }

       }
    }

}

$originalArray=[20,2,3,10,1];
$num=20;
if(in_array($num,$originalArray)){
    echo "founded";
}
rsort($originalArray);

echo "original array is". implode(',',$originalArray)."<br>";
SortArray($originalArray);
echo "sorted array is". implode(',',$originalArray)."<br>";




echo '______________<br>';
       if($_SERVER["REQUEST_METHOD"]== "POST"){
                $name=$_POST["name"];
                echo $name;
       }


    //    echo $_GET['subject'] . " at " . $_GET['web'];
    $servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=osta_app", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

            echo"ggg";
            $x=123;
            var_dump($x);
        $t= array("yy","oop");
        var_dump( $t);
        print_r ($t);
        echo '<br>';
        $tt= array(1,2,10);
        echo max( $tt);
        echo '<br>';
        echo min( $tt);
        echo '<br>';
        echo $tt[0];
        echo '<br>';
        $numbers = ['1'=>4, '2'=>2, '3'=>8, '4'=>6, '5'=>3];
arsort($numbers); 
foreach($numbers as $k=>$num){
    echo $k.':'.$num.',';
}
echo '<br>';
print_r($numbers);
echo '<br>';
$numArray = [1, 1, 2, 3, 3, 1, 2, 4, 5, 4, 6, 5, 7, 7];
 echo implode(',',$numArray);
print_r($numArray);
echo '<br>';
// Count occurrences of each number
$itemCountArray = array_count_values($numArray);
print_r($itemCountArray);
echo '<br>';
// Sort by occurrence in ascending order
asort($itemCountArray);
$sortedKeys = array_keys($itemCountArray);

print_r($sortedKeys);
echo '<br>';
// $cars = array("Volvo", "BMW", "Toyota");
$cars=[1,20,5,9];
sort($cars);

print_r($cars);
echo '<br>';
rsort($cars);
print_r($cars);
echo '<br>';
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
function my_callback($item) {
    return strlen($item);
  }
  
  $strings = ["apple", "orange", "banana", "coconut"];
  $lengths = array_map("my_callback", $strings);
  print_r($lengths);
echo "<br>";

         class car{
                public $x;
                public $y;

                public function __construct($x,$y){
                $this->x= $x;
                $this->y=$y;


                }
            public function message(){
                return $this->x ;
            }
        }
        $add= new car(4,5);
       echo $add->message();
       $string="echo ss";
      echo strtoupper($string);
    ?>
</body>
</html>
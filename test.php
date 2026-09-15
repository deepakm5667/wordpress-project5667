<?php
// $a = array(2,5,1,3,9,7,6,11);
// $len = count($a);
// $d=0;
// for($i=0;$i<$len;$i++){
//   $d +=$a[$i];
// }
// echo $d;

// for($i=0;$i<$len;$i++){
//   for($j=$i+1;$j<$len;$j++){
//     if($a[$i] > $a[$j]){
//       $temp = $a[$i];
//       $a[$i] = $a[$j];
//       $a[$j] = $temp;
//     }
//   }
// }
// echo"<pre>";
// print_r($a);
// // $c=[];
// foreach($a as $key=>$value){
//   if(isset($c[$value])){
//     $c[$value]++;
//   }else{
//     $c[$value] = 1;
//   }
// }
// echo"<pre>";
// print_r($c);

// $secl = $firl =PHP_INT_MIN;
// $secm = $firm =PHP_INT_MAX;
// $len = count($a);

// foreach($a as $value){

//   if($value > $firl){
//     $secl = $firl;
//     $firl = $value;
//   }elseif($value > $secl){
//      $secl = $value;
//   }

// }
// echo $secl;

// foreach($a as $value){
//   if($value < $firm){
//     $secm = $firm;
//     $firm = $value;
//   }elseif($value < $secm){
//     $secm = $value;
//   }
// }
// echo $secm;
function test($a){

if($a < 50){
  echo $a.'<br>';

  test($a+1);
}

}
test(1);
echo"testeddd";
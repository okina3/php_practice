<?php
//課題1-------------------------------------------------------------------

function times($number)
{
   return $number * 2;
}

echo times(1);


echo '<br>';
//課題2-------------------------------------------------------------------

function total($a, $b)
{
   return $a + $b;
}

echo total(4, 5);


echo '<br>';
//課題3--------------------------------------------------------------------

$array = [1, 3, 5, 7, 9];

function total_2($arr)
{
   $b = 1;
   foreach ($arr as $a) {
      $b = $a * $b;
   }
   return  $b;
}

echo total_2($array);


echo '<br>';
//課題4---------------------------------------------------------------------

$aa = [1, 3, 5, 7, 9];
// $bb = [10, 3, 53, 7, 39];

function max_array($arr)
{
   $max_number = $arr[0];

   foreach ($arr as $a) {
      if ($max_number < $a) {
         $max_number = $a;
      }
   }

   return $max_number;
}

echo max_array($aa);
// echo max_array($bb);


echo '<br>';
echo '<br>';
//課題5-----------------------------------------------------------------

//strip_tags--------------------------------------------
// （HTMLなどのタグの機能を潰す？）
$aaa = "<h1>タイトル</h1>";

function tab_crush($a)
{
   return strip_tags($a);
}

echo tab_crush($aaa);


echo '<br>';
echo '<br>';
// array_push--------------------------------------------

$ccc = ["One", "Two", "Three", "Four"];

array_push($ccc, "Five");

foreach ($ccc as $c) {
   echo $c;
   echo '<br>';
}


//使いにくい？------------------
// $ccc = ["One","Two","Three","Four"];

// function value_add($aa, $b)
// {
//    array_push($aa, $b);
//    foreach ($aa as $a) {
//       echo $a;
//       echo '<br>';
//    }
// }

// value_add($ccc, "Five");


echo '<br>';
echo '<br>';
// array_merge----------------------------------------------

$ddd = [1, 2, 3];
$eee = [4, 5, 6];
$fff = [7, 8, 9];

$result = array_merge($ddd, $eee, $fff);

foreach ($result as $a) {
   echo $a;
   echo "<br>";
}

//使いにくい?----------------------
// $ddd = [1, 2, 3];
// $eee = [4, 5, 6];
// $fff = [7, 8, 9];

// function value_result($a, $b, $c)
// {
//    $result = array_merge($a, $b, $c);
//    foreach ($result as $re) {
//       echo $re;
//       echo '<br>';
//    }
// }

// value_result($ddd, $eee, $fff);


echo '<br>';
echo '<br>';
// time, mktime----------------------------------------------
//リアルタイム--------------------
echo time();
echo '<br>';

//12月21日-------------------------
$timestamp = mktime(21, 0, 0, 12, 21, 2022);
echo $timestamp;



echo '<br>';
echo '<br>';
// date-----------------------------------------------------
//リアルタイム--------------------
echo date('Y/m/d',time());
echo '<br>';

//12月21日-------------------------
echo date('Y/m/d',$timestamp);


// ---------------------------------------------------------------------

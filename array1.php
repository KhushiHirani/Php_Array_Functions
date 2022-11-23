
<!-- count()--!>
<?php
$arr =array('php','c','c++','java','Android');
echo count($arr);
?>
<br/>

<!-- count values() -->

<?php
$arr=array("C","php","c","android","php","java");
$newarr = array_count_values($arr);

foreach ($arr as $key => $value) {
    echo "<br/>4key -<strong>$value</strong>";
} 
?>
<br/>
<!-- sum()-->
<?php
$myarray = array(1,2,3,4,5);
echo array_sum($myarray);
?>

<br/> 
<!-- product() -->
<?php
$myarray = array(1,2,3,4,5);
echo array_product($myarray);
?>

<br/>
<!--reverse  -->
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$revarr = array_reverse($arr);
print_r($revarr);
?>

<br/>
<!--in_array ( ) -->
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$temp = in_array('php',$arr);
echo $temp;
?>  
<br/>
<!--array_rand ( ) -->
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr);//Returns Random Array Index 
echo $arr[$indexofarray]; //print Value using Index
?>
<br/>
<!--Select multiple keys at random -->
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr,2);//Returns Array Index 
foreach ($indexofarray as $key => $value) 
{
echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
}
?>
<br/>
<!--array_unique ( ) -->
<?php
$arr = array('c', 'c++','android', 'java', 'android', 'php');
print_r(array_unique($arr));
?>
<br/>
<!--array_merge ( ) -->
<?php
$arr1 = array('c','c++','android','java','php');
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2);
print_r($NewArr);
?>
<br/>
<!--array_search ( ) -->
<?php
$myarr = array('c', 'c++','android', 'java', 'php');
$check = array_search('android', $myarr);
echo $check; // Return Index
?>
<br/>
<!--range ( )-->
<?php
$arr = range("11", "20");
foreach($arr as $key => $value)
{
echo "<br /> $key - $value ";
} 
?>
<br/>
<!-- sort ( )-->
<?php
$arr = array(80,60,50,40,8,74);
sort($arr);
print_r($arr);
?>

<br/>
<!-- rsort ( ) -->
<?php
$arr = array(80,60,50,40,8,74);
rsort($arr);
print_r($arr);
?>

<br/>
<!--asort ( )  -->
<?php
$arr = array(80,60,50,40,8,74);
asort($arr);
print_r($arr);
?>

<br/>
<!--ksort ( ) (Key Sort)  -->
<?php
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
ksort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
?>
<br/>
<!--krsort ( ) Key Reverse Sort  -->
<?php
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
krsort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
?>

<br/>
<!--shuffle ( ) -->
<?php
$myArray = array("Football", "Baseball", "Hockey", "Tennis", 
"Boxing");
shuffle($myArray); // Shuffle the array
foreach ($myArray as $key => $value) {
echo "<br /> $value ";
}
?>

<br/>
<!--array_key_exists ( )  -->
<?php
$arr = array("a" => "apple", "b" => "banana");
echo array_key_exists('a',$arr); // Return True or False
?>

<br/>
<!--array_change_key_case()  -->
<?php
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
$uppercase = array_change_key_case($arr,CASE_UPPER);
print_r($uppercase);
?>

<br/>
<!--array_combine()  -->
<?php
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red", "Green");
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);
?>
<br/>
<!--end ()  -->
<?php
$myarr = array('c', 'c++','android', 'java', 'php');
echo end($myarr);
?>


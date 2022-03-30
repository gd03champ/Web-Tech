<?php
// Array with names
$a[] = "Ariyalur";
$a[] = "Chengalpattu";
$a[] = "Chennai";
$a[] = "Coimbatore";
$a[] = "Cuddalore";
$a[] = "Dharmapuri";
$a[] = "Dhindugal";
$a[] = "Erode";
$a[] = "Kallakurichu";
$a[] = "Kanchipuram";
$a[] = "Kanyakumari";
$a[] = "Karur";
$a[] = "Krishnagiri";
$a[] = "Madurai";
$a[] = "Nagapattinam";
$a[] = "Namakkal";
$a[] = "Nilgiris";
$a[] = "Perambalur";
$a[] = "Pudukottai";
$a[] = "Ramanadhapuram";
$a[] = "Ranipet";
$a[] = "Salem";
$a[] = "Sibangangai";
$a[] = "Tenkasi";
$a[] = "Thanjavur";
$a[] = "Theni";
$a[] = "Thoothukudi";
$a[] = "Thiruchirapalli";
$a[] = "Thirunelveli";
$a[] = "Thirupathur";
$a[] = "Tiruppur";
$a[] = "Tiruvallur";
$a[] = "Tiruvarur";
$a[] = "Vellore";
$a[] = "Viluppuram";
$a[] = "Virudhunagar";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
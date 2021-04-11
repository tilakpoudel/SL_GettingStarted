<?php
// Array with names
$a[] = "Anna";
$a[] = "Akrur";
$a[] = "Brittany";
$a[] = "Bramaha";
$a[] = "Cinderella";
$a[] = "Chandul";
$a[] = "Diana";
$a[] = "Divya";
$a[] = "Eva";
$a[] = "Eric";
$a[] = "Fiona";
$a[] = "Fanta";
$a[] = "Gunda";
$a[] = "Garuda";
$a[] = "Gopala";
$a[] = "Hege";
$a[] = "Holika";
$a[] = "Inga";
$a[] = "Indra";
$a[] = "Johanna";
$a[] = "Jagganath";
$a[] = "Kripa";
$a[] = "Krishna";
$a[] = "Kanaihaya";
$a[] = "Linda";
$a[] = "Laxmi";
$a[] = "Nina";
$a[] = "Nanda Maharaj";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Partha";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Radhika";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

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
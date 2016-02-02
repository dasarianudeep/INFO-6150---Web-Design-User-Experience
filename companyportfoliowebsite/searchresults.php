<?php
// Fill up array with names
$a[]="Anudeep";
$a[]="Bharath";
$a[]="Challa";
$a[]="Diana";
$a[]="Eva";
$a[]="Fakir";
$a[]="Ganga";
$a[]="Hegde";
$a[]="Inzamam";
$a[]="Johnny";
$a[]="Kavya";
$a[]="LaLita";
$a[]="Nandini";
$a[]="Ophra";
$a[]="Peter";
$a[]="Anoop";
$a[]="Rakesh";
$a[]="Chitra";
$a[]="David";
$a[]="Sumitha";
$a[]="Emaa";
$a[]="Sunny";
$a[]="Tony";
$a[]="Unni Krishnan";
$a[]="Krishnan";
$a[]="Lalith";
$a[]="Elizabeth";
$a[]="Ella";
$a[]="Wayand";
$a[]="Vikas";

$q=$_GET["nam"]; $hint="";
//echo $q;


if ($q !== "")
  { $q=strtolower($q); $len=strlen($q);
    foreach($a as $name)
    { if (stristr($q, substr($name,0,$len)))
      { if ($hint==="")
        { $hint=$name; }
        else
        { $hint .= "<br/>$name"; }
      }
    }
  }


echo $hint==="" ? "no suggestion" : $hint;
?>
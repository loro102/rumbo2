<?php
function ramdomid ($input)
{
//set the random id length 
$random_id_length = $input; 
//generate a random id encrypt it and store it in $rnd_id 
$rnd_id = md5(uniqid(rand())); 
//to remove any slashes that might have come 
$rnd_id = strip_tags(stripslashes($rnd_id)); 
//Removing any . or / and reversing the string 
$rnd_id = str_replace(".","",$rnd_id); 
$rnd_id = strrev(str_replace("/","",$rnd_id)); 
//finally I take the first 10 characters from the $rnd_id 
$rnd_id = substr($rnd_id,0,$random_id_length); 
$input=$rnd_id;
return $input;
}


function ramdomid1($input)
{
//creates a unique id with the 'about' prefix
$a = uniqid(about);
$input=$a;
return $input;
}

function ramdomid2($input)
{
//creates a longer unique id with the 'about' prefix
$b = uniqid (about, true);
$input=$b;
return $input;
}

function ramdomid3($input)
{
//creates a unique ID with a random number as a prefix - more secure than a static prefix 
$c = uniqid (rand(), true);
$input=$c;
return $input;
}

function ramdomid4($input)
{
//this md5 encrypts the username from above, so its ready to be stored in your database
$md5c = md5($c);
$input=$md5c;
return $input;
}

function ramdomid5($input)
{
//You can also use $stamp = strtotime ("now"); But I think date("Ymdhis") is easier to understand.
$stamp = date("Ymdhis");
$ip = $_SERVER['REMOTE_ADDR'];
$orderid = "$stamp-$ip";
$orderid = str_replace(".", "", "$orderid");
$input=$orderid;
return $input;
}

// Generate Guid 
function NewGuid() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) . '-' . 
        substr($s,8,4) . '-' . 
        substr($s,12,4). '-' . 
        substr($s,16,4). '-' . 
        substr($s,20); 
    return $guidText;
}
// End Generate Guid 




?>

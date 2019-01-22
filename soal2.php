<?php

$username="solo_abc";
$lowercase  = preg_match('@[a-z]@', $username);
$special    = preg_match('@[., _]@', $username);

if(!$lowercase && !$special && strlen($username)==8){
    echo "Username harus terdiri dari 8 karakter, mengandung huruf kecil dan karakter spesial";
}else{
    echo "Username memenuhi kriteria";
}
?>
<?php

$password="wsxe99##";
$lowercase = preg_match('@[a-z]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$special   = preg_match('@[., _]@', $password);

if(!$lowercase && !$uppercase && !$number && strlen($password)==8){
    echo "Password harus 8 karakter, mengandung huruf kecil dan karakter spesial";
}else{
    echo "Password memenuhi kriteria";
}

?>

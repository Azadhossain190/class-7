<?php
$name =trim(strlen($_REQUEST['name']));
$email =trim(strlen(strtolower($_REQUEST['email'])));
$phone =trim(strlen(is_numeric($_REQUEST['phone'])));
$password =strlen($_REQUEST['password']);


if ($name >10) {
    echo "Invalid name";
}else{
    echo $_REQUEST['name'];
}
echo "<br>";
 
if ($email >20) {
    echo "Invalid Email";
}else{
    echo $_REQUEST['email'];
}

echo "<br>";

if ($phone <= 11) {
    echo $_REQUEST['phone'] ;
}else{
   echo " Invalid Phone";
}
 echo '<br>';

 if($password == 8 ){
    echo $_REQUEST['password'];
 }else{
    echo " password at least 8 char";
 }
    
 echo '<br>';
 
 
 
//  echo $_REQUEST['name'];
//  echo '<br>';
//  echo $_REQUEST['email'];

// echo'<pre>' ;
// print_r($_REQUEST);
// echo'</pre>';

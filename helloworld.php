<?php
$output_helloworld = file_get_contents('helloworld.txt');
$bot_input = $_GET['botinput'];

if(empty($bot_input)) echo $output_helloworld;
elseif($bot_input == "helloworld") echo $output_helloworld;
else echo $bot_input;
?>

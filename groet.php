<?php
echo "Hoi gebgruiker!";
echo "<br> <br>";

//prompt function
function prompt($prompt_msg){
    echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    return($answer);
}

//program
$prompt_msg = "Zeg hoi terug.";
$reply = prompt($prompt_msg);

$output_msg = "De gebruiker zegt: ". $reply. "!";
echo($output_msg);
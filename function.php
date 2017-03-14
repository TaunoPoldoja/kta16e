<?php

function aeg(){
    date_default_timezone_set("Europe/Tallinn");
    $time = date("H:i:s") ;
    echo $time;
    if($time > 17){
        echo "<br> Kell on ".$time." Aeg on koju minna  !!!";
    } else {
        echo "<br> Kell on ".$time." Peab veel kannatama.<br><br>";
    }
}

function home(){
    echo '<li><a href="index.php">Tagasi koju</a></li>' ;
}

function GetVisitorIP(){
    $ip = $_SERVER['REMOTE_ADDR'];
    $time = date("H:i:s");
    $visitor = $ip." : ". $time."\n";
    $file = fopen('visitor.txt',"a") or 
        die("Ei saanud avada");
    fwrite($file, $visitor);
        echo "Külastate seda saiti aadressilt : ".$ip;
    fclose($file);
    
}

?>
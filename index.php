
<meta charset="utf-8">
<script type="text/javascript">
    window.onload = function () {
        (function (){
            var date = new Date();
            // paneme aja õigel kujul kokku
            var time = date.getHours() + ':' +
                date.getMinutes()+ ':' 
            +date.getSeconds();
            // otsime lehelt esimest div tag'i
            document.getElementsByTagName('div')
            [0].innerHTML ="Aeg JS'is: "+time;
            window.setTimeout(arguments.callee, 1000);
        })() ;
         
         }
    


</script>
<?php
echo "<div></div><br>";

require 'components.php';
require 'function.php';
$name = "Tauno";

// monnentaar, üherealine

/*
see on 
mitmerealine 
kommentaar
*/
// tagasi algusesse
home();
menu($menu_begin,$menu_arr,$menu_end);
// näitame praegust aega ja tegevuse soovitusi
aeg();

// näited teksti kuvamise kohta
echo "$name esimene PHP's kirjutatud lause!<br>" ;
echo "<b>$name esimene PHPs kirjutatud lause!</b><br>" ;
echo "Nüüd vaatame täpitähti <br>" ;
GetVisitorIP();
Counter();

?>

<?php 

function createNavbar() {
    $links = func_get_args();
    $a = null;                  // variável usada para definir qual link está ativo

    echo "<nav><span>Navigate below</span><ul>";

    for($x = 0; $x < count($links); $x++){
        if(strpos($links[$x],'(active)') !== false){

            $a = explode('(',$links[$x]); 

            echo "<li class='active'><a href='$a[0].php'>$a[0]</a></li>";
            echo "\n";
        }else{
            echo "<li><a href='$links[$x].php'>$links[$x]</a></li>";
            echo "\n";
        }
    }

    echo "</ul></nav>";
}


?>

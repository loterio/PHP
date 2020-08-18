<?php 

function createNavbar() {
    $links = func_get_args();
    $a = null;                  // variável usada para definir qual link está ativo

    echo "<nav><span>Navigate below</span><ul>";

    for($x = 0; $x < count($links); $x++){
        if(strpos($links[$x],'[') !== false){
            $a = explode('[',$links[$x]);
                echo "<li><a href='$a[0].php'>$a[0]</a></li>";
            $a = explode(']',$a[1]); 
            $dw = explode(',',$a[0]);

            for($i = 0; $i < count($dw); $i++){
                echo "<p>> $dw[$i]</p><br>";
                echo "\n";
            }  
        }else{
            if(strpos($links[$x],'(active)') !== false or strpos($links[$x],'(act)') !== false){
                $a = explode('(',$links[$x]); 
                echo "<li class='active'><a href='$a[0].php'>$a[0]</a></li>";
                echo "\n";
            }else{
                echo "<li><a href='$links[$x].php'>$links[$x]</a></li>";
                echo "\n";
            }
        }
    }
    // for($x = 0; $x < count($links); $x++){
    //     if(strpos($links[$x],'(active)') !== false){
    //         $a = explode('(',$links[$x]); 

    //         echo "<li class='active'><a href='$a[0].php'>$a[0]</a></li>";
    //         echo "\n";
    //     }else if(strpos($links[$x],'[') !== false) {
    //         $a = explode('[',$links[$x]); 
    //         var_dump($a);
    //         echo "<li class='active'><a href='$a[0].php'>$a[0] deeeu</a></li>";
    //         echo "\n";
    //     }else{
    //         echo "<li><a href='$links[$x].php'>$links[$x]</a></li>";
    //         echo "\n";
    //     }
    // }

    echo "</ul></nav>";
}


?>

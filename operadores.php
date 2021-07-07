<?php


$a= 3;
$b= 4;

$c= $a + $b; 

echo $c;

if ($a<$b){

echo '</br>es verdad';

}else{
    echo '</br>es mentira';
}

$a= "4";
$b= 4;

if ($a===$b){

    echo '</br>es verdad';
    
    }else{
        echo '</br>es mentira';
    }



    
if ($a==$b){

    echo '</br>es verdad';
    
    }else{
        echo '</br>es mentira';
    }



    $a= 4;
    $b= 4;
    
    if ($a>=$b){

        echo '</br>es verdad';
        
        }else{
            echo '</br>es mentira';
        }


        $a= 3;
        $b= 4;
        $z= 5;
        
        if ($z>$b && $z>$a){

            echo '</br>es verdad';
            
            }else{
                echo '</br>es mentira';
            }
    

            if ($z>$b || $z>$a){

                echo '</br>es verdad';
                
                }else{
                    echo '</br>es mentira';
                }
        
               $a++;
               $a--;
                echo '</br>';
                echo $a;

?>
<!DOCTYPE html>
<html>
<head></head>
    <body>
    <h3>Number Triangle</h3>
        <?php
            $res=1;
            for($i=1;$i<=5;$i++){
                for($j=1;$j<=$i;$j++){
                    echo $res." ";
                    $res++;
                }
                echo "<br>";
            }
        ?>
    </body>
</html> 
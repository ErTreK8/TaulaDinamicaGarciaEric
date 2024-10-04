<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exemple require</title>
</head>
<body>
    
<?php
    $head=false;
    $body=false;
    $cont=0;
    $arr1 = [
        '0' => 'Nom',
        '1' => 'Primer Cognom',
        '2' => 'Segon Cognom',
        '3' => 'Data Naix.',
        '4' => 'DNI',
        '5' => 'Eric',
        '6' => 'Garcia',
        '7' => 'Gispert',
        '8' => '13-12-2005',
        '9' => '12345678c',
        '10' => 'Eric2',
        '11' => 'Garcia2',
        '12' => 'Gispert2',
        '13' => '13-12-2007',
        '14' => '12345678A'
    ];


    
    foreach($arr1 as $valor)
        {
            if($head==false && $cont==0)
            {
                echo "<table>";
                echo "<thead>";
            }
            if($head==true && $body==false)
            {
                echo "<tbody>";
                $body=true;
            }
            
            
            if ($cont==0) 
            {   
                echo "<tr>";
            }

            if($head==false)
            {
                echo "<th>" . $valor . "</th>";
                $cont++;
            }
            else
            {
                echo "<td>" . $valor . "</td>";
                $cont++;
            }
            
            if ($cont==5 && $head==false)
            {
                $head=true;
                echo "</thead>";
                $cont=0;

            }
            else if($cont==5)
            {
                $cont=0;
                echo "</tr>";
            }
        }
        echo "</tbody> </table>";        
    
    ?>

    

</body>
</html>

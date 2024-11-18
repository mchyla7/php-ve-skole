<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $data = array(2,3,5,0,-66,12,34,-8);
        // Print_r($data);
        $data2=$data;
        print_r($data2); // Zobrazení pole i s indexy a datovými typy
        
        $prumer = array_sum($data)/ count($data);
        echo ("<br>Průměr je $prumer</br>");
        $maxH = max($data);
        echo ("<br>Maximální hodnota je $maxH"."</br>");
        
        sort($data);
        foreach ($data as $h)
            {echo $h."; ";}
        echo "<br>";
        
        // sestupně
        
        rsort($data);
        foreach ($data as $h)
            {echo $h."; ";}
        echo "<br>";
        
        $cisla = array(1,11,1,3,1,3);
        $cislaunikatni = array_unique($cislo);
        foreach ($cislaunikatni as $h)
            { echo $h."; ";}
        echo"<br>";
        
        // explode funkce rozdělí řetězec podle oddělovače na několik podřetězců
        
        $s = 'jedna,dva,tři,čtři,pět,šest,sedm';
        $pole = explode(',', $s);
        foreach ($pole as $h)
            {echo $h.Nl;}
        echo(NL);
        
        // Implode vrátí textový řetězec obsahující hodnoty pole
        
        $pole = array('jedna','dva','tři','čtyři','pět','šest','sedm','osm');
        $s = implode(',', $pole);
        echo($s);
        ?>
    </body>
</html>

<?php
/*
    $chessboard = array(
        array('w','s','g','h','k','g','s','w'),
        array('p','p','p','p','p','p','p','p'),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array('P','P','P','P','P','P','P','P'),
        array('W','S','G','H','K','G','S','W'),
    );
    $chessboard[1][2] = ' '; $chessboard[2][2] = 'p';
    echo "<pre>";
    foreach($chessboard as $row)
    {
        foreach($row as $piece)
            echo "$piece ";
        echo "<br>";
    }
    echo "</pre>";
*/






 $products = array(
                'paper' => array(
                    'copier' => "Do kserokopiarek i uniwersalny",
                    'inkjet' => "Do drukarek atramentowych",
                    'laser' => "Do drukarek laserowych",
                    'photo' => "Papier fotograficzny"),
                'pens' => array(
                    'ball' => "Długopisy",
                    'hilite' => "Markery przezroczyste",
                    'marker' => "Markery zwykłe"),
                'misc' => array(
                    'tape' => "Taśmy klejące",
                    'glue' => "Kleje",
                    'clips' => "Spinacze")
                );
            echo "<pre>";
        
            foreach($products as $section => $items)
                foreach($items as $key => $value)
                    if($key == 'copier'||$key == 'ball'||$key == 'tape')
                    echo "$section: \t  $key  ($value)<br>";



            echo "</pre><br>".$products['paper']['copier']."<br>".$products['pens']['ball']."<br>".$products['misc']['tape'];
?>
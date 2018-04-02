<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1251">
        <title>PHP_Lesson_3</title>
    </head>
    <body>
        <h1>Animals</h1>
        <?php
            $continents = [];
            $animals = array(
                "Africa" => array("Crocodylus Niloticus", "Pan Troglodytes", "Hippopotamus Amphibius", "Giraffa Camelopardalis"),
                "Australia" => array("Phascolarctos Cinereus", "Ornithorhynchus Anatinus", "Sarcophilus Harrisii"),
                "Antarctica" => array("Pygoscelis adeliae", "Hydrurga Leptonyx"),
                "America" => array("Dasypus Novemcinctus", "Lama Guanicoe", "Eunectes Murinus"),
                "Asia" => array("Phodopus Sungorus", "Panthera Tigris Altaica", "Vulpes Lagopus")
            );
            foreach ($animal as $animals => $value) {
                
            }

            do {
                if ($y1 > $x) {
                    $message = 'is not in Fibonacci Sequence';
                } elseif ($y1 == $x) {
                    $message = 'is in Fibonacci Sequence';
                } else {
                    $y3 = $y1;
                    $y1 += $y2;
                    $y2 = $y3;
                }
            } while ($message == '');
            $message = 'x='.$x.' '.$message;
        ?>
        <p><?php echo $message ?></p>
    </body>
</html>

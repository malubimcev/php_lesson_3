<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1251">
        <title>PHP_Lesson_3</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
      <h1>PHP Lesson 3. Animals</h1>
      <div class="main-container">
        <div class="inner-container-1">
        <?php
            $continents = [
                "Africa" => ["Crocodylus Niloticus", "Pan Troglodytes", "Hippopotamus Amphibius", "Giraffa Camelopardalis"],
                "Australia" => ["Phascolarctos Cinereus", "Ornithorhynchus Anatinus", "Sarcophilus Harrisii"],
                "Antarctica" => ["Pygoscelis Adeliae", "Hydrurga Leptonyx"],
                "America" => ["Dasypus Novemcinctus", "Lama Guanicoe", "Eunectes Murinus"],
                "Asia" => ["Phodopus Sungorus", "Panthera Tigris Altaica", "Vulpes Lagopus"]
            ];
            $animalNames = [];
            $firstWords = [];
            $secondWords = [];
            echo "<h2>Real Animals</h2>";
            foreach ($continents as $continent => $animals) {
                echo "<ul><h3>$continent</h3>";
                foreach ($animals as $key => $animal) {
                    echo "<li>$animal</li>";
                    if (sizeof(explode(' ', $animal)) == 2) {
                        $animalNames[][] = array($animal => $continent);
                        $firstWords[][] = array($continent => explode(' ', $animal)[0]);
                        $secondWords[] = array(explode(' ', $animal)[1]);
                    }
                }
                echo "</ul>";
            }
        ?>
        </div>
        <div class="inner-container-2">

        <?php
            $b = shuffle($secondWords);
            var_dump($animalNames);echo "<br>";
            foreach ($firstWords as $continent => $firstWord) {
                echo "<ul><h2>$continent</h2>";
                echo $firstWord[0][0];
                //for ($i = 0; $i<sizeof($secondWords); $i++) {
                    //echo "<li>$firstWord</li>";//$secondWord[$i]
                //}
                echo "</ul>";
            }
            echo "</div>";
        ?>
      </div>
    </body>
</html>

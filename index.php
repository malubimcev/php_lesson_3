<?php
    //Составляем исходный массив реальных животных
    $continents = [
        "Africa" => ["Crocodylus Niloticus", "Pan Troglodytes", "Hippopotamus Amphibius", "Giraffa Camelopardalis"],
        "Australia" => ["Phascolarctos Cinereus", "Ornithorhynchus Anatinus", "Sarcophilus Harrisii"],
        "Antarctica" => ["Pygoscelis Adeliae", "Hydrurga Leptonyx"],
        "America" => ["Dasypus Novemcinctus", "Lama Guanicoe", "Eunectes Murinus"],
        "Asia" => ["Phodopus Sungorus", "Panthera Tigris Altaica", "Vulpes Lagopus"]
    ];
    $animalNames = [];
    $secondWords = [];
    $currentName = [];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1251">
        <title>PHP_Lesson_3</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
      <div class="main-container">
        <!--<div class="inner-container-1">-->
        <?php
            //echo "<h1>Real Animals</h1>";
            foreach ($continents as $continent => $animals) {
                //echo "<ul><h2>$continent</h2>";
                foreach ($animals as $key => $animal) {
                    //echo "<li>$animal</li>";
                    $currentName = explode(' ', $animal);
                    if (sizeof($currentName) == 2) {
                        //составляем новый массив животных с названиями из 2-х слов
                        $animalNames[] = array('first_word' => $currentName[0], 'second_word' => $currentName[1], 'cont' => $continent);
                        //вторые части названий заносим в еще один массив для дальнейшей работы
                        $secondWords[] = array('new_name' => $currentName[1]);
                    }
                }
                echo "</ul>";
            }
            echo "<br>";
        ?>
        <!--</div>-->
        <div class="inner-container-2">
        <?php
            //перемешиваем вторые слова названий в массиве
            shuffle($secondWords);
            //вывод на экран
            echo "<h1>Fantastic Animals</h1>";
            $continent = "";
            $newName = "";//строка с новыми названиями животных
            for ($i = 0; $i < sizeof($animalNames); $i++) {
                if ($animalNames[$i]["cont"] === $continent) {
                    //формирование строки с вымышленными названиями
                    $newName = $newName.", ".$animalNames[$i]["first_word"]." ".$secondWords[$i]["new_name"];
                } else {
                    if ($i > 0) {
                        echo $newName."<br>";
                    }
                    $continent = $animalNames[$i]["cont"];
                    echo "<h2>$continent</h2><br>";
                    $newName = $animalNames[$i]["first_word"]." ".$secondWords[$i]["new_name"];
                }
            }
            echo $newName."<br>";
            echo "<br>";
        ?>
        </div>
      </div>
    </body>
</html>

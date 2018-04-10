<?php
    //Составляем исходный массив реальных животных
    $animalsByContinent = [
        "Africa" => [
            "Crocodylus Niloticus",
            "Pan Troglodytes",
            "Hippopotamus Amphibius",
            "Giraffa Camelopardalis"
        ],
        "Australia" => [
            "Phascolarctos Cinereus",
            "Ornithorhynchus Anatinus",
            "Sarcophilus Harrisii"
        ],
        "Antarctica" => [
            "Pygoscelis Adeliae",
            "Hydrurga Leptonyx"
        ],
        "America" => [
            "Dasypus Novemcinctus",
            "Lama Guanicoe",
            "Eunectes Murinus"
        ],
        "Asia" => [
            "Phodopus Sungorus",
            "Panthera Tigris Altaica",
            "Vulpes Lagopus"
        ]
    ];
    $animalNames = [];
    $secondWords = [];
    $currentName = [];
    $newNames = [];
    foreach ($animalsByContinent as $continent => $animals) {
        foreach ($animals as $key => $animal) {
            $currentName = explode(' ', $animal);
            if (count($currentName) == 2) {
                //составляем новый массив животных с названиями из 2-х слов
                $animalNames[] = array(
                    'first_word' => $currentName[0],
                    'second_word' => $currentName[1],
                    'cont' => $continent
                );
            }
        }
    }
    unset($currentName);
    $secondWords = array_column($animalNames, 'second_word');//создаем отдельный массив для вторых слов названий
    shuffle($secondWords);//перемешиваем вторые слова названий в массиве
    $listOfAnimals = [];
    $i = 0;
    while ($i < count($animalNames)) {
        $continent = $animalNames[$i]['cont'];
        while ($animalNames[$i]['cont'] === $continent) {
            $newNames[] = implode(" ", array($animalNames[$i]["first_word"], $secondWords[$i]));
            $i++;
        }
        $listOfAnimals[] = "<h2>".$continent."</h2><br>".implode(", ", $newNames);
        unset($newNames);
    }
    $finalListOfAnimals = implode("", $listOfAnimals);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1251">
        <title>PHP_Lesson_3</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <div class="inner-container">
        <?php
            //вывод на экран
            echo "<h1>Fantastic Animals</h1><br>";
            echo $finalListOfAnimals;
        ?>
        </div>
    </body>
</html>

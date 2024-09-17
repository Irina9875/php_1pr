<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <h1>№ 1</h1>
    <?

    $array = ['Хожимуратова', 'Сидоров', 'Рахматтулин', 'Булатова', 'Сафроновн', 'Шабаева', 'Низамова'];
    foreach ($array as $student) {
        echo "<div class='qwe'>- $student\n</div>";
    }
    $expelled = array_pop($array);

    echo "<br>удаленная фамилия: $expelled";
    ?><br>
    <?
    $count = count($array);
    echo "<p>количество студентов: $count</p>";
    ?>
    <?
    if (in_array('Сидоров', $array)) {
        echo "в списке есть 'Сидоров'";
    } else {
        echo 'no';
    }
        ?>

    <h1>№ 2</h1>

    <?

    $clubs = [
        "Спортивный" => "Сидоров",
        "Художественный" => "Емелина",
        "Музыкальный" => "Иванова",
        "Литературный" => "Петров",
        "Биологический" => "Антонова"
    ];

    asort($clubs);

    echo "<ol>";
    foreach ($clubs as $club => $surname) {
        echo "<li>$club - $surname</li>";
    }


    echo "</ol>";
    ?>

    <h1>№ 3</h1>

    <?

    $student = [
        'name' => 'Ирина',
        'surname' => 'Хожимуратова',
        'class' => '425',
        'hobby' => ['Спорт'],
        'social' => ['Telegram' => '@cheerful_5']
    ];
    ?>
    <h2>Мои данные</h2>
        <p><span>мое имя:</span> <?php echo $student['name']?></p>
        <p><span>моя фамилия:</span> <?php echo $student['surname']?></p>
        <p><span>моя группа:</span> <?php echo $student['class']?></p>
        <p><span>мои хобби:</span> <?php echo $student['hobby'][0] ?></p>
        <p><span>мои соцсети:</span> <?php echo $student['socials']['Telegram'] .'<br>', $student['socials']['Telegram'] ?></p>
</body>

</html>
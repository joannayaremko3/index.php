<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Інформація про троянду</title>
    <link rel="stylesheet" href="index.css"> <!-- Підключення зовнішнього CSS-файлу -->
</head>
<body>

    <h1>Троянда</h1>

    <?php
        $description = "Троянда - це квіткова рослина родини трояндових (Rosaceae), відома своєю красою та ароматом.";
        $behavior = "Троянди мають різноманітні форми, кольори та розміри квітів. Вони можуть бути кущовими або ліанами, залежно від виду.";
        $social_interaction = "Троянди використовуються як декоративні рослини в садах та парках. Вони також часто використовуються у флористиці для створення букетів та композицій.";
        $threats = "Незважаючи на свою красу, троянди стикаються з різними загрозами, такими як хвороби, шкідники та невлаштовані умови для росту.";
    ?>

    <p><?php echo $description; ?></p>

    <h2>Опис</h2>
    <p><?php echo $behavior; ?></p>

    <h2>Використання</h2>
    <p><?php echo $social_interaction; ?></p>

    <h2>Загрози</h2>
    <p><?php echo $threats; ?></p>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Інформація про троянду</p>
    </footer>
</body>
</html>

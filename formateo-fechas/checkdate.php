<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="checkdate-p2.php" method="post">
        <p>Seleccione la fecha (dd/mm/yyyy): </p>
        <select name="day">
            <?php for ($i = 1; $i <= 31; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php } ?>
        </select>
        <select name="month">
            <?php for ($i = 1; $i <= 12; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php } ?>
        </select>
        <select name="year">
            <?php for ($i = 2010; $i <= 2025; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php } ?>
        </select>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>
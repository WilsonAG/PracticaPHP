<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <form action="date-bd-p2.php" method="post">
        <label>
            Ingrese su nombre:
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Ingrese su correo:
            <input type="text" name="mail">
        </label>
        <br>
        <label>
            seleccione su curso:
            <select name="course">
                <!-- <option value="s">sasd</option> -->
                <?php
                ($connection = mysqli_connect(
                	"remotemysql.com",
                	"DhtgyEX80h",
                	"SwtCcW3FT3",
                	"DhtgyEX80h"
                )) or die("Problemas con la conexión");
                $regs = mysqli_query($connection, "select * from cursos");
                while ($r = mysqli_fetch_array($regs)) { ?>
                    <option value="<?=$r['codigo']?>"><?=$r['nombrecurso']?></option>
                <?php } 
                mysqli_close($connection);
                ?>
            </select>
        </label>
        <p>Seleccione su fecha de nacimiento(dd/mm/yyyy): </p>
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
            <?php for ($i = 1900; $i <= 2020; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php } ?>
        </select>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>
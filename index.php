<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack01</title>
</head>
<body>
    


    <?php
        $name = $_GET('name');
        $mail = $_GET('mail');
        $age = $_GET('age');

        $info = [
            'name' => $name;
            'mail' => $mail;
            'age' => $age;
        ]


        // ciclo verifica
        if (strlen($name) < 3 ) {
            echo 'Inserisci un nome più lungo di 3 caratteri';
        } elseif ( strpos($mail, '@') === false || (strpos($mail, '.') === false )  {
            echo 'Inserisci una mail corretta';
        } elseif (is_numeric($age) === false) {
            echo 'Inserisci un\'età numerica';
        }
    ?>
</body>
</html>
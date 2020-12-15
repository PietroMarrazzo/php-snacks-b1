
<?php
        // ini_set('display_errors','On');
        // error_reporting(E_ALL);

        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = intval($_GET['age']);

        // $info = [
        //     'name' => $name;
        //     'mail' => $mail;
        //     'age' => $age;
        // ]
    
        var_dump($age);
        // ciclo verifica
        if (strlen($name) < 3 ) {
            echo 'Inserisci un nome più lungo di 3 caratteri';
        } elseif ( strpos($mail, '@') === false || (strpos($mail, '.') === false ) )  {
            echo 'Inserisci una mail corretta';
        } elseif (is_numeric($age) === false) {
            echo 'Inserisci un\'età numerica';
        } 
?>
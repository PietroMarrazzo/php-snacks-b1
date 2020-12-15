
<?php
        // ini_set('display_errors','On');
        // error_reporting(E_ALL);

        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = intval($_GET['age']);


        if(($name == undefined) || ($mail == undefined) || ($age == undefined)) {
            echo 'Inserire un valore valido';
        }

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
        } elseif ($age === 0) {
            echo 'Inserisci un\'età numerica';
        } 
?>
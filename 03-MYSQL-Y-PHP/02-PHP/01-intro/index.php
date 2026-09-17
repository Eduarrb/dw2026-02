<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>Bienvenido al curso de PHP</h1>

    <?php 

        $nombre = "Juan";

        $num = 10;

        $bool = false;

        // echo $nombre; 

        
        ?>
    <pre>
        <?php
            $array = ['Poll', '123456789', true, 3.1416, ['mario', 'joshi']];
            var_dump($array);

            $arrayAssoc = [
                // key - value pair
                "nombre" => "Pedro",
                'edad' => 35,
                'skill' => 'comer',
                'hobbies' => ['Jugar play', 'cantar', 'cocinar'],
                'esHumano' => true,
                'nivelPoder' => 9000
            ];
            
            var_dump($arrayAssoc);

        ?>
    </pre>
    <?php
        echo $arrayAssoc['nombre'];

        function saludar(){
            echo 'Hola a todos';
        }
        echo "<br>";
        saludar();
        echo "<br>";
        var_dump($nombre);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            $paragraph = "Ciao come stai bicicletta come stfff, dddddd mercoledì come stai macchina come. Ciao va come vai a casa? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque officiis harum impedit vitae come. Autem magnam excepturi cumque, enim come voluptatibus, nemo, reiciendis minima come optio sequi? Suscipit, esse cum.";
            $length = strlen($paragraph);
            echo '<pre>' . $paragraph . "\r\n" . $length . '</pre>';

            $word = $_GET["word"];

            $new_paragraph = str_replace($word, "***", $paragraph);
            $new_length = strlen($new_paragraph);
            echo '<pre>' . $new_paragraph . "\r\n" . $new_length . '</pre>'; 
        ?>
    </p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seconda Pagina</title>
    </head>
    <body>
        <?php 
            $badword = $_POST['badword'];
            $badword = trim(strtolower($badword));
            $parag = 'PhpPHP (acronimo ricorsivo di "PHP: Hypertext Preprocessor", preprocessore di ipertesti; originariamente acronimo di "Personal Home Page") è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche.';
            $parag = strtolower($parag);
            $newParag = str_replace($badword, '***', $parag);
            $newParag = ucfirst($newParag);
        ?>
        <p>
            <h2> La lunghezza del paragrafo è: <?php echo strlen($newParag)?></h2>
            <?php echo  $newParag;?>
        </p>
    </body>
</html>
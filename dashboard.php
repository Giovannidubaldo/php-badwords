<?php 
    $testo = $_GET['paragrafo'];
    $parola = $_GET['word'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="container">
        <div class="row my-4">
            <div>
                <h2>Paragrafo senza censura</h2>
                <p><?php echo $testo ?></p>
                <p>Lunghezza del paragrafo: <?php echo strlen($testo) ?></p>
            </div>
            <div class="mt-2">
                <h2>Paragrafo con censura</h2>
                <p></p>
            </div>
        </div>
    </div>
</body>
</html>
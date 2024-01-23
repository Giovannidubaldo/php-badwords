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
        <h1 class="text-center my-4">PHP-BADWORDS: Completa i seguenti campi</h1>
        <div class="container">
            <div class="row">
                <form action="dashboard.php" method="GET">
                    <div class="row">
                        <div class="col-6">
                            <label for="control-label">Paragrafo</label>
                            <input type="text" id="paragraph" name="paragrafo" placeholder="Scrivi un paragrafo" class="form-control" required>
                        </div>
                        <div class="col-6">
                            <label for="control-label">Badwords</label>
                            <input type="text" id="badwords" name="word" placeholder="Scegli una parola da censurare" class="form-control" required>
                        </div>
                        <div class="col-12 mt-5">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-danger">Invia</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bad-Words</title>
</head>

<body>
    <form action="censor.php" method="get">
        <div class="container">
            <h3>Censura:</h3>
            <div class="form-floating mb-3">
                <input name="word" type="text" class="form-control" id="floatingInput" placeholder="parola da censurare">
                <label for="floatingInput">Scrivi la parola che vuoi censurare</label>
            </div>
            <h3>Testo da censurare:</h3>
            <div class="form-floating">
                <textarea name="text" type="text" class="form-control" placeholder="Scrivi qua il testo da censurare" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Scrivi qua il testo da censurare</label>
            </div>
            <hr>
            <div class="d-grid gap-2 col-4 mx-auto">
                <button type="submit" class="btn btn-secondary btn-lg p-auto">CENSURA!!!</button>
            </div>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
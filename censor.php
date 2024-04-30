<?php
    $word = $_GET['word'];
    $text = $_GET['text'];
    $wordLower = strtolower($word);
    $textLower = strtolower($text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Without Bad-Words</title>
</head>
<body>
    <div class="container">
        <h2>Without Bad-Words</h2>
        <div>
            <h3 class="border-bottom border-secondary-subtle">
                Hai inserito un paragrafo di <strong><?php echo strlen($text) ?></strong> caratteri.
            </h3>
            <h3 class="border-bottom border-secondary-subtle">
                Questo è lo stesso paragrafo senza la parola <?php echo $word ?> e che misura <strong><?php echo strlen(str_replace($wordLower, '***', $textLower)) ?></strong> caratteri.
            </h3>
            <p class="border border-secondary p-2 rounded">
                <?php echo str_replace($wordLower, '***', $textLower) ?>
            </p>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
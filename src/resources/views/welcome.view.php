<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/welcome.view.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans|Abril+Fatface' rel='stylesheet' type='text/css'>
    <title>Welcome to Stoic Framework</title>
</head>
<body>
    <blockquote>
        <header>
            <h1>Stoic Framework</h1>
        </header>
        <p>
            <?=$quoteData->body ?>
        </p>
        <footer>
            <cite><?=$quoteData->author ?></cite>
        </footer>
    </blockquote>
</body>
</html>
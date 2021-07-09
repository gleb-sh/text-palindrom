<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Палиндромы</title>
    <link rel="stylesheet" href="/css/style.min.css">
</head>
<body>
    <div class="header">
        <a href="/" class="header_logo">
            M
        </a>
    </div>
    <div class="wrapper">
        <div class="homeblock">
            <h1 class="homeblock_title">Приложение</h1>
            <div class="homeblock_subtitle">Веб-приложение, которое находит палиндромы</div>
            <form class="homeblock-form" data-method="palindrom">
                <input type="text" name="string" placeholder="палиндром">
                <button type="submit">Найти</button>
            </form>
            <div class="result">
                <div class="result-title hidden"></div>
                <div class="result-body">
                    <ol class="result-body_list"></ol>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/app.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= htmlspecialchars($title ?? 'Pogoda') ?> — pogoda.marcin00.pl</title>
        <link rel="stylesheet" href="main.css">
    </head>
<body>
    <header class="site-header">
        <a class="logo-link" href="index.php" aria-label="Strona główna">
            <img src="logo.svg" class="logo" alt="Logo pogoda.marcin00.pl">
        </a>
        <nav class="site-nav" aria-label="Główna nawigacja">
            <a class="cloud_link" href="index.php">
                <img class="cloud_image" src="chmurka.svg" alt="">
                <span class="text-overlay">Wstęp</span>
            </a>
            <a class="cloud_link" href="baric.php">
                <img class="cloud_image" src="chmurka.svg" alt="">
                <span class="text-overlay">Mapa baryczna</span>
            </a>
            <a class="cloud_link" href="nao.php">
                <img class="cloud_image" src="chmurka.svg" alt="">
                <span class="text-overlay">NAO</span>
            </a>
            <a class="cloud_link" href="ao.php">
                <img class="cloud_image" src="chmurka.svg" alt="">
                <span class="text-overlay">AO</span>
            </a>
        </nav>
    </header>
    <main class="content">

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motors - Catálogo de Motos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav>
            <h1>Motors</h1>
            <ul>
                <li><a href="index.php">Tudo</a></li>
                <?php
                $cats = pegaCategoria($produtos);
                foreach ($cats as $cat) {
                    $catUrl = urlencode($cat);
                    echo "<li><a href='index.php?c={$catUrl}'>{$cat}</a></li>";
                }
                ?>
            </ul>
        </nav>
    </header>
    <main>

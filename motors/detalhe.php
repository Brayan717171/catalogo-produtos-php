<?php
include 'includes/produtos.php';
include 'includes/functions.php';
include 'includes/header.php';

$itens = count($produtos);

if (isset($_GET['prod'])) {
    $prod = (int) $_GET['prod'];
    if ($prod >= 0 && $prod < $itens) {
        $produto = $produtos[$prod];
    } else {
        echo "<p>O produto não existe!</p>";
        include 'includes/footer.php';
        exit;
    }
} else {
    echo "<p>Não foi possível encontrar o produto desejado.</p>";
    include 'includes/footer.php';
    exit;
}

$parcela = $produto['preco'] / 10;
?>

<nav class="breadcrumb">
    <a href="index.php">Produtos</a>
    <p><?= htmlspecialchars($produto['nome']); ?></p>
</nav>

<section>
    <div class="det-foto">
        <img src="assets/<?= htmlspecialchars($produto['foto']); ?>" alt="<?= htmlspecialchars($produto['nome']); ?>">
    </div>
    <div class="det-desc">
        <h2><?= htmlspecialchars($produto['nome']); ?></h2>
        <p class="lead"><?= htmlspecialchars($produto['desc']); ?></p>
        <div class="preco">
            <h1><?= moeda($produto['preco']); ?></h1>
            <p class="parcela">Ou 10x de <?= moeda($parcela); ?></p>
        </div>
        <button>Comprar</button>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

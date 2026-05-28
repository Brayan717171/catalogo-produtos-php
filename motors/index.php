<?php
include 'includes/produtos.php';
include 'includes/functions.php';
include 'includes/header.php';

$c = isset($_GET['c']) ? urldecode($_GET['c']) : '';

foreach ($produtos as $id => $produto) {
    if ($c == '' || $produto['cat'] == $c) {
?>
        <a href="detalhe.php?prod=<?= $id; ?>">
            <div class="card">
                <h2><?= htmlspecialchars($produto['nome']); ?></h2>
                <div class="foto">
                    <img src="assets/<?= htmlspecialchars($produto['foto']); ?>" alt="<?= htmlspecialchars($produto['nome']); ?>">
                </div>
                <p><?= htmlspecialchars($produto['desc']); ?></p>
                <p class="preco"><?= moeda($produto['preco']); ?></p>
            </div>
        </a>
<?php
    }
}

include 'includes/footer.php';
?>

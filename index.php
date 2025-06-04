<?php
include 'includes/produtos.php';
include 'includes/functions.php';
include 'includes/header.php';
$c = isset($_GET['c']) ? $_GET['c'] : '';
foreach($produtos as $id => $produto){
    if($c == '' || $produto['cat'] == $c){
?>
    <a href="detalhe.php?prod=<?=$id;?>">
  <div class="card">
            <h2><?=$produto['nome'];?> </h2>
            <div class="foto">
                <img src="assets/<?=$produto['foto'];?>" alt="">
            </div>
            <p><?=$produto['desc'];?></p>
            <p class="preco"><?=moeda($produto['preco']);?></p>
        </div>

        <?php
        }
    }
        include 'includes/footer.php';
        ?>

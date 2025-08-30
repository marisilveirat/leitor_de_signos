<?php include('layouts/header.php'); ?>

<div class="container">
    <?php
    $data_nascimento = $_POST['data_nascimento']; 
    $signos = simplexml_load_file("signos.xml");  
    $data_formatada = date("d/m", strtotime($data_nascimento));
    $signo_encontrado = null;

    foreach ($signos->signo as $signo) { 
        $inicio = DateTime::createFromFormat('d/m', $signo->dataInicio);
        $fim = DateTime::createFromFormat('d/m', $signo->dataFim);
        $data = DateTime::createFromFormat('d/m', $data_formatada);

        if (($data >= $inicio && $data <= $fim) || ($inicio > $fim && ($data >= $inicio || $data <= $fim))) {
            $signo_encontrado = $signo;
            break;
        }
    }
    ?>

    <div class="signo-result">
        <?php if($signo_encontrado): ?>
            <h2><?= (string)$signo_encontrado->signoNome ?></h2>
            <p><?= (string)$signo_encontrado->descricao ?></p>
        <?php else: ?>
            <p class="text-danger">Signo não encontrado!</p>
        <?php endif; ?>
        <a href="index.php" class="btn-secondary">Voltar</a>
    </div>
</div>

</body>
</html>



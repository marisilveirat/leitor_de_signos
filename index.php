<?php include('layouts/header.php'); ?>

<div class="container">
    <h1>Leia Seu Signo ✨</h1>
    <form method="POST" action="show_zodiac_sign.php">
        <div class="mb-3">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" class="form-control" required>
        </div>
        <button type="submit">Consultar Signo</button>
    </form>
</div>

</body>
</html>


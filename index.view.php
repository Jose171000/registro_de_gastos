<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/OIP.jpeg">
    <title>Registros de gastos</title>
    <link rel="stylesheet/less" type="text/css" href="style.less">
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.13.1/less.min.js"></script>

    <h1 class="titulo">Registro de gastos</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" class="formulario">
        <label for="name">
            <span>Nombre completo:</span>
            <input type="text" name="name" id="name" placeholder="Juan Lopez">
        </label>
        <label for="entrada">
            <span>¿Cuánto ganas?: s/</span>
            <input type="number" id="entrada" name="entrada">
        </label>
        <label for="titulo">
            <span>¿Qué gasto es este?</span>
            <input type="text" name="titulo" id="titulo" placeholder="Nombra a tu gasto">
        </label>
        <label for="description">
            <span>Describe este gasto</span>
            <textarea name="description" id="description" placeholder="Cuéntamos sobre tu gasto"></textarea>
        </label>
        <label for="cantidad">
            <span>¿Cuánto gastaste?</span>
            <input type="number" name="cantidad" id="cantidad">
        </label>
        <input type="submit">
    </form>

    <section>
        <p>
            <?= $allData?>
        </p>
    </section>
</body>

</html>
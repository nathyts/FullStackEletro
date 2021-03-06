﻿<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nossas lojas - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <!-- main menu -->
    <?php
        include_once('menu.html');
    ?>
    <!-- end menu-->
    <header>
        <h2>Nossas lojas</h2>
    </header>
    <hr>
    <table border="0" width="100%" cellpadding="20" class="lojas">
        <tr>
            <td>
                <h3>Rio de Janeiro</h3>
                <p>Avenida Presidente Vargas, 5000</p>
                <p>10º andar</p>
                <p>Centro</p>
                <p>(21) 11111-1111</p>
            </td>
            <td>
                <h3>São Paulo</h3>
                <p>Avenida Paulista, 985</p>
                <p>3º andar</p>
                <p>Jardins</p>
                <p>(11) 22222-2222</p>
            </td>
            <td>
                <h3>Santa Catarina</h3>
                <p>Rua Major Ávila, 370</p>
                <p>Vila Mariana</p>
                <p>(47) 55555-5555</p>
            </td>
        </tr>
    </table>
    <footer class="footer">
        <p class="formas-pag">Formas de pagamento</p>
        <img src="./imagens/forma-pagamentos.jpg" alt="Formas de pagamento" width="15%">
        <p>&copy; Recode Pro</p>
    </footer>
</body>
</html>
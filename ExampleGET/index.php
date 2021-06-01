<html>

<body>
    <form action="dados.php" method="GET">
        Nome: <input type="name" name="nome"><br>
        Email: <input type="email" name="email"><br>
        <button type="submit">Enviar</button><br>
    </form>

    <!-- Dados que enviados pelo próprio script, sem interação com o úsuário -->
    <form action="dados2.php" method="GET">
        <a href="dados2.php?idade=25&sobrenome=Sales">Enviar dados</a>
    </form>
</body>

</html>
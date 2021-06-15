<html>

<body>

    <?php
    // Verificar se o usuário clicou no botão enviar
    if (isset($_POST['enviar-formulario'])) :
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

        if (in_array($extensao, $formatosPermitidos)) :
            $pasta = "files/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novoNome = uniqid() . ".$extensao";

            //Verifica se houve o upload
            if (move_uploaded_file($temporario, $pasta . $novoNome)) :
                $mensagem = "Upload feito com sucesso";
            else :
                $mensagem = "Não foi possível fazer o upload";
            endif;
        else :
            $mensagem = "Formato inválido";
        endif;

        echo $mensagem;

    endif;

    ?>


    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

        <input type="file" name="arquivo"><br>
        <input type="submit" name="enviar-formulario">

    </form>
</body>

</html>
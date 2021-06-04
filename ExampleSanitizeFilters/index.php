<html>

<body>

    <?php
        // Se existe o índice enviar-formulario na superglobal post (se existir é pq o botão foi clicado)
        if(isset($_POST['enviar-formulario'])):
            // Array de erros
            $erros = array();
            
            // Sanitize
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);//Não incorporar os códigos html inseridos
            // echo $_POST['nome'] . "<br>";

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            if(!filter_var($idade, FILTER_VALIDATE_INT)):
                $erros[] = "Idade precisa ser um inteiro";
            endif;

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
                $erros[] = "Email inválido!";
            endif;

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            if(!filter_var($url, FILTER_VALIDATE_URL)):
                $erros[] = "URL inválida!";
            endif;

            // Exibindo mensagens
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo "<li> $erro </li>";
                endforeach;    
            else:
                echo "Parabéns, seus dados estão corretos";
            endif;

        endif;
    ?>
    
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Email: <input type="text" name="email"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button><br>
    </form>

</body>

</html>
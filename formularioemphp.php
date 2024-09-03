<!DOCTYPE html>
<html>
    <header>
        <meta charset="UTF-8">
    </header>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="name">Nome:</label>
            <input id="name" ytpe="text" required>
            <br><br>
            <label for="email">E-mail:</label>
            <input id="email" type="email" required>
            <br><br>
            <label for="senha">Senha:</label>
            <input id="senha" type="password" required>
            <br><br>
            <label for="estado">Estado:</label>
                <select id="estado" name="estado" size="3">
                    <option value="Acre">AC</option>
                    <option value="Alagoas">AL</option>
                    <option value="Amapa">AP</option>
                    <option value="Amazonas">AM</option>
                    <option value="Bahia">BA</option>
                    <option value="Ceara">CE</option>
                    <option value="Distrito_federal">DF</option>
                    <option value="Espirito_santo">ES</option>
                    <option value="Goias">GO</option>
                    <option value="Maranhao">MA</option>
                    <option value="Mato_grosso">MT</option>
                    <option value="Mato_grossoDOsul">MS</option>
                    <option value="Minas_gerais">MG</option>
                    <option value="Para">PA</option>
                    <option value="Paraiba">PB</option>
                    <option value="Parana">PR</option>
                    <option value="Pernambuco">PE</option>
                    <option value="Piaui">PI</option>
                    <option value="RioDEjaneiro">RJ</option>
                    <option value="RioGrandeDOsul">RS</option>
                </select>
            <br>
            Comentario:<br>
            <TEXTAREA name="COMENTARIO" cols="30" rows="10" wrap="physical"></TEXTAREA><br>
            <br>
            Marque o(s) laboratório(s) que você deseja receber informacões:<br><br> 
            <INPUT type="checkbox" name="fds" value="FDS">Laboratório de Ferramentas para Desenvolvimento de Sistemas - LAFES<br>
            <INPUT type="checkbox" name="lgr" value="LGR">Laboratório de Gestão de Redes - LGR<br>
            <INPUT type="checkbox" name="fds" value="FDS">Laboratório de Integracao de Sistemas - LIS<br>
            <INPUT type="checkbox" name="lgr" value="LGR">Laboratório de Qualidade de Software - LQS<br>
            <br>
            Você aceita receber outras informacões sobre cursos de extensão de Unisinos?<br>
            <INPUT type="radio" name="sim" value="sim"> Sim<br>
            <INPUT type="radio" name="nao" value="nao"> Não<br>
            <br>
            <INPUT TYPE="submit" value="Enviar os dados acima">      
            <INPUT TYPE="reset" value="Limpar"><br>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    // Coletar valores dos campos de entrada
                    $name = $_POST['fname'];
                    $senha = $_POST['senha'];
                    $select = $_POST['select'];
                    $comentario = $_POST['COMENTARIO'];
                    $fds = isset($_POST['fds']) ? $_POST['fds'] : 'Não selecionado';
                    $lgr = isset($_POST['lgr']) ? $_POST['lgr'] : 'Não selecionado';
                    $sim = isset($_POST['sim']) ? $_POST['sim'] : 'Não selecionado';
                    $nao = isset($_POST['nao']) ? $_POST['nao'] : 'Não selecionado';
                
                    if (empty($name) || empty($senha)){
                        echo "Nome ou senha está vazio";
                    } else {
                        echo "Nome: " . $name . "<br>";
                        echo "Senha: " . $senha . "<br>";
                        echo "Selecionado: " . $select . "<br>";
                        echo "Comentário: " . $comentario . "<br>";
                        echo "FDS: " . $fds . "<br>";
                        echo "LGR: " . $lgr . "<br>";
                        echo "sim: " . $sim . "<br>";
                        echo "nao: " . $nao . "<br>";
                    }
                }
            ?>
        </form>
    </body>
</html>

<!DOCTYPE html>
<html>
    <header>
        <meta charset="UTF-8">
    </header>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            
            Nome:<input name="fname" type="text" required>
            <br><br>
            E-mail:<input name="email" type="email" required>
            <br><br>
            Senha:<input name="senha" type="password" required>
            <br><br>
            Estado:
                <select name="estado">
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
            <INPUT type="checkbox" name="LAFES" value="LAFES">Laboratório de Ferramentas para Desenvolvimento de Sistemas - LAFES<br>
            <INPUT type="checkbox" name="LGR" value="LGR">Laboratório de Gestão de Redes - LGR<br>
            <INPUT type="checkbox" name="LIS" value="LIS">Laboratório de Integracao de Sistemas - LIS<br>
            <INPUT type="checkbox" name="LQS" value="LQS">Laboratório de Qualidade de Software - LQS<br>
            <br>
            Você aceita receber outras informacões sobre cursos de extensão de Unisinos?<br>
            <INPUT type="radio" name="sim" value="sim"> Sim<br>
            <INPUT type="radio" name="nao" value="nao"> Não<br>
            <br>
            <INPUT TYPE="submit" value="Enviar os dados acima">      
            <INPUT TYPE="reset" value="Limpar"><br><br>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    // Coletar valores dos campos de entrada
                    $name = $_POST['fname'];
                    $senha = $_POST['senha'];
                    $estado = $_POST['estado'];
                    $COMENTARIO = $_POST['COMENTARIO'];
                    $LAFES = isset($_POST['LAFES']) ? $_POST['LAFES'] : 'Não selecionado';
                    $LGR = isset($_POST['LGR']) ? $_POST['LGR'] : 'Não selecionado';
                    $LIS = isset($_POST['LIS']) ? $_POST['LIS'] : 'Não selecionado';
                    $LQS = isset($_POST['LQS']) ? $_POST['LQS'] : 'Não selecionado';
                    $sim = isset($_POST['sim']) ? $_POST['sim'] : 'Não selecionado';
                    $nao = isset($_POST['nao']) ? $_POST['nao'] : 'Não selecionado';
                
                    if (empty($name) || empty($senha)){
                        echo "Nome ou senha está vazio";
                    } else {
                        echo "Nome: " . $name . "<br>";
                        echo "Senha: " . $senha . "<br>";
                        echo "Selecionado: " . $estado . "<br>";
                        echo "Comentário: " . $COMENTARIO . "<br>";
                        echo "LAFES: " . $LAFES . "<br>";
                        echo "LGR: " . $LGR . "<br>";
                        echo "LIS: " . $LIS . "<br>";
                        echo "LQS: " . $LQS . "<br>";

                        echo "sim: " . $sim . "<br>";
                        echo "nao: " . $nao . "<br>";
                    }
                }
            ?>
        </form>
    </body>
</html>

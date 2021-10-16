<section class="criar-template">
    <div class="criar-template">
        <div class="container">
            <h3>Criar Template</h3>
            <?php
                if(isset($_POST['acao'])){
                    $nomeArquivo = $_POST['nome_arquivo'];
                    $nomePagina = $_POST['nome_pagina'];
                    $conteudoPagina = '';

                    foreach($_POST as $key => $value){
                        if($key != 'acao' && $key != 'nome_arquivo' && $key != 'nome_pagina'){
                            $conteudoPagina .= $value;
                            $conteudoPagina .= "--!--";
                        }
                    }

                    $pdo = MySql::conectar()->prepare("INSERT INTO `paginas` VALUES (null, ?, ?, ?)");
                    $pdo->execute(array($nomePagina,$nomeArquivo,$conteudoPagina));
                    echo '<script> alert("Salvo com sucesso"); </script>';
                }
            ?>
            <?php
                if(!isset($_POST['etapa_2'])){
            ?>
            <form method="post">
                <select name="arquivo">
                    <?php
                        //glob() vai listar todos os arquivos do diretório e do tipo que eu quero
                        $files = glob("templates/*.html");
                        foreach($files as $key => $value){
                        $files = explode('/',$value);
                        $fileName = $files[count($files)-1];
                    ?>
                    <option value="<?php echo $fileName; ?>"><?php echo $fileName; ?></option>
                    <?php } ?>
                </select>
                <input type="text" name="nome_pagina" placeholder="Nome da sua página"/>
                <input type="submit" name="etapa_2" value="Próximo" />
            </form>
            <?php }else{
                $nomeArquivo = $_POST['arquivo'];
                $nomePagina = $_POST['nome_pagina'];

                //Pegamos os dados do arquivo e calculamos quantos campos tem para serem substítuidos
                $getContent = file_get_contents('templates/'.$nomeArquivo);
                $fields = TemplateLeitor::pegaCampos($getContent,'\{\{!(.*?)\}\}');
            ?>

            <form method="post">
                <?php
                    for($i = 0; $i < count($fields['chave']); $i++){ ?>
                    <input type="text" name="<?php echo $fields['campo'][$i] ?>" value="<?php echo $fields['campo'][$i] ?>" />
                <?php   }   ?>

                <input type="hidden" name="nome_pagina" value="<?php echo $nomePagina; ?>" />
                <input type="hidden" name="nome_arquivo" value="<?php echo $nomeArquivo; ?>" />
                <input type="submit" name="acao" value="Salvar" />
            </form>

            <?php } ?>


        </div><!--container-->
    </div><!--criar-template-->
</section>
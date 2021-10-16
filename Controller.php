<?php
    class Controller{
        public static function index(){
            $url = (isset($_GET['url']) ? $_GET['url'] : 'home');
            $slug = explode('/',$url)[0];

            if(file_exists('views/'.$slug.'.php')){
                include('views/'.$slug.'.php');
            }else if(file_exists('templates/'.$slug.'.html')){
                $url = $_GET['url'];
                $pagina = \MySql::conectar()->prepare("SELECT * FROM `paginas` WHERE slug = ?");
                $pagina->execute(array($url));
                if($pagina->rowCount() >= 1){
                    $conteudo = $pagina->fetch();
                    $contentPagina = file_get_contents('templates/'.$conteudo['template']);
                    $fields = TemplateLeitor::pegaCampos($contentPagina, '\{\{!(.*?)\}\}');

                    $conteudoFinal = explode('--!--',$conteudo['valores']);
                    $contentPagina = str_replace($fields['chave'], $conteudoFinal, $contentPagina);
                    echo '<div class="container"><h6>'.$contentPagina.'</h6></div>';
                }else{
                    die("<script>alert('Essa página não existe');</script>");
                }
            }
        }
    }
?>
<?php 

Class Rotas
{
    public static $pag;
    private static $pasta_controller = 'controller/'; 
    private static $pasta_view = 'view/';

    static function get_SiteHOME(){
        return Config::SITE_URL . '/' .Config::SITE_PASTA;
    }

    static function get_SiteRAIZ(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
    }

    static function get_SiteTEMA(){
        return  self::get_SiteHOME() . '/' .self::$pasta_view; //também pode ser feito assim: "".$this->pasta_view;""
    }

    static function pag_Produtos(){
        return  self::get_SiteHOME() . '/produtos';
    }

    static function pag_Contato(){
        return  self::get_SiteHOME() . '/contato';
    }

    static function pag_MinhaConta(){
        return  self::get_SiteHOME() . '/minhaconta';
    }

    static function get_ImagePasta(){
        return 'media/images/';
    }

    static function get_ImageURL(){
        return self::get_SiteHOME() . '/' . get_ImagePasta();
    }

    static function get_ImageLink($img, $largura, $altura){
        $image = self::get_ImageURL() . "thumb.php?src={$img}$w={$largura}&h={$altura}&zc=1";
    }

    static function get_Pagina(){
        if(isset($_GET['pag'])){

            $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina); 

            // o professor colocou para testar e encontrar o erro, no fim da aula ele apagou, mas eu vou deixar como aprendizado.

            // para debug
            // echo '<pre>';
            // var_dump(self::$pag);
            // echo '</pre>';

            $pagina = 'controller/' .self::$pag[0] . '.php';
            
            //echo $pagina;
            if(file_exists($pagina)){
                include $pagina;
            }else{
                include 'erro.php';
            }
        }
    }
} 

?>
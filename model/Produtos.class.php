<?php

Class Produtos extends Conexao{

    function __construct(){
        parent::__construct();
    }

    function GetProdutos(){
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

        //$query .= "ORDER BY prod_id DESC";

        $this->ExecuteSQL($query);

        $this->GetLista();
    }

    private function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'pro_id' => $lista['pro_id'],
                'pro_nome' => $lista['pro_nome'],
                'pro_categoria' => $lista['pro_categoria'],
                //'type' => $lista['type'],
                'pro_img' => $lista['pro_img'],
                'pro_desc' => $lista['pro_desc'],
                'pro_ref' => $lista['pro_ref'],
                'pro_ativo' => $lista['pro_ativo']
            );

            $i++;
        endwhile;
    }
}

?>
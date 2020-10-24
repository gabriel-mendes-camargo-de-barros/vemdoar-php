<?php 
Class Produtos extends Conexao{

	 private $pro_nome, $pro_categoria, $pro_ativo, $pro_cli,
            $pro_valor, $pro_img, $pro_desc;

	function __construct(){
		parent::__construct();
	}

    function GetProdutos(){
        //query para buscar os produtos de uma categoria especifica.
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        
        $query .= " ORDER BY pro_id DESC";
        
        $query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos");
	
		$this->ExecuteSQL($query);
        
        $this->GetLista();	
        
    }

	function GetProdutosID($id){
		//query para buscar os produtos de uma categoria especifica.
		$query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

		$query .= " AND pro_id = :id";

		$params = array(':id'=>(int)$id);

		$this->ExecuteSQL($query, $params);

		$this->GetLista();
		
	}


	function GetProdutosCateID($id){
		//query para buscar os produtos de uma categoria especifica.

		$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

		$query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

		$query .= " AND pro_categoria = :id";

		$query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos WHERE pro_categoria=".(int)$id);

		$params = array(':id'=>(int)$id);

		$this->ExecuteSQL($query, $params);

		$this->GetLista();
		
	}

    function GetProdutosNome($nome){
        
          // monto a SQL
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";       
        $query .= " WHERE pro_nome LIKE '%$nome%'";
        $query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos WHERE pro_nome LIKE '%$nome%'");

        // passando parametros
        $params = array(':nome'=>$nome);
       // executando a SQL                      
        $this->ExecuteSQL($query,$params);
        // trazendo a listagem 
        $this->GetLista();
    }  

    function ProTrue($id){
        // pega os produtos de um cliente especifico
        
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}usuarios u ON p.pro_cli = u.cli_id";
        $query .= " INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .=" WHERE pro_cli = $id"; 
    
        $query .= " ORDER BY pro_id DESC";

        $query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos");
        
        $this->ExecuteSQL($query);

        $this->GetLista();
            
    }

	private function GetLista(){
		$i = 1;
		while($lista = $this->ListarDados()):
		$this->itens[$i] = array(
			 'pro_id' => $lista['pro_id'],
			 'pro_nome'  => $lista['pro_nome'] ,  
	         'pro_desc'  => $lista['pro_desc'] ,    
             'pro_valor'   => $lista['pro_valor']  ,  
             'pro_cli' => $lista['pro_cli'],
	         'pro_img'     => Rotas::ImageLink($lista['pro_img'], 180, 180) ,  
	         'pro_img_g'     => Rotas::ImageLink($lista['pro_img'], 300, 300) , 
	         'pro_img_p'     => Rotas::ImageLink($lista['pro_img'], 70, 70) , 
	         'cate_nome' => $lista['cate_nome'] , 
	         'cate_id'   => $lista['cate_id'] ,
             'pro_ativo'   => $lista['pro_ativo'] , 
             'pro_img_arquivo'   => Rotas::get_SiteRAIZ() .'/'. Rotas::get_ImagePasta().$lista['pro_img'], 
             'pro_img_atual'     => $lista['pro_img'] ,   
 
			);

		$i++;
		endwhile;
	}

	function Preparar($pro_nome, $pro_categoria, $pro_ativo, $pro_cli, 
        $pro_valor, $pro_img, $pro_desc){
    
        $this->setPro_nome($pro_nome);
        $this->setPro_categoria($pro_categoria);
        $this->setPro_ativo($pro_ativo);
        $this->setPro_cli($_SESSION['CLI']['cli_id']);
        $this->setPro_valor($pro_valor);
        $this->setPro_img($pro_img);
        $this->setPro_desc($pro_desc);
    }

    function Inserir(){
          
        $query = "INSERT INTO {$this->prefix}produtos (pro_nome, pro_categoria, pro_ativo, pro_cli," ;
        $query.= " pro_valor, pro_img, pro_desc)"; 
        $query.= " VALUES ";
        $query.= " ( :pro_nome, :pro_categoria, :pro_ativo, :pro_cli, :pro_valor,"; 
        $query.= " :pro_img, :pro_desc)"; 
        
        $params = array(

        ':pro_nome'=> $this->getPro_nome(),   
        ':pro_categoria'=> $this->getPro_categoria(),   
        ':pro_ativo'=> $this->getPro_ativo(),    
        ':pro_cli'=> $this->getPro_cli(),   
        ':pro_valor'=> $this->getPro_valor(),  
        ':pro_img'=> $this->getPro_img(),   
        ':pro_desc'=> $this->getPro_desc(),     
                     
        );


          if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        
        
           
           
    }




    function Alterar($id){
          
        $query = " UPDATE {$this->prefix}produtos SET pro_nome=:pro_nome, pro_categoria=:pro_categoria," ;
        $query.= " pro_ativo=:pro_ativo, pro_cli=:pro_cli,";
        $query.= " pro_valor=:pro_valor,";
        $query.= " pro_img=:pro_img, pro_desc=:pro_desc "; 
        $query.= " WHERE pro_id = :pro_id";
       
        
        $params = array(
        ':pro_nome'=> $this->getPro_nome(),   
        ':pro_categoria'=> $this->getPro_categoria(),   
        ':pro_ativo'=> $this->getPro_ativo(),  
        ':pro_cli'=> $this->getPro_cli(),   
        ':pro_valor'=> $this->getPro_valor(),     
        ':pro_img'=> $this->getPro_img(),   
        ':pro_desc'=> $this->getPro_desc(),     
        ':pro_id'=> (int)$id   
                     
        );
        
        // executo a SQL
        if($this->ExecuteSQL($query, $params)):
            
                return TRUE;
            
            else:
                
                return FALSE; 
            
        endif;
           
    }

    function Apagar($id){
        $query = "DELETE FROM {$this->prefix}produtos WHERE pro_id = :id";
        $params = array(
            ':id' => (int)$id
            );

        if($this->ExecuteSQL($query, $params)):
            
                return TRUE;
            
            else:
                
                return FALSE; 
            
        endif;
    }

	//MÉTODOS GET

	function getPro_nome() {
        return $this->pro_nome;
    }

    function getPro_categoria() {
        return $this->pro_categoria;
    }

    function getPro_ativo() {
        return $this->pro_ativo;
    }

    function getPro_cli() {
        return $this->pro_cli;
    }

    function getPro_valor() {
        return $this->pro_valor;
    }

    function getPro_img() {
        return $this->pro_img;
    }

    function getPro_desc() {
        return $this->pro_desc;
    }

    //MÉTODOS SET

    function setPro_nome($pro_nome) {
        $this->pro_nome = $pro_nome;
    }

    function setPro_categoria($pro_categoria) {
        $this->pro_categoria = $pro_categoria;
    }

    function setPro_ativo($pro_ativo) {
        $this->pro_ativo = $pro_ativo;
    }

    function setPro_cli($pro_cli) {
        $this->pro_cli = $pro_cli;
    }

    function setPro_valor($pro_valor) {
        $this->pro_valor = $pro_valor ;
    }

    function setPro_img($pro_img) {
        $this->pro_img = $pro_img;
    }

    function setPro_desc($pro_desc) {
        $this->pro_desc = $pro_desc;
    }
}

?>

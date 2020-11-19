<?php 

class Clientes extends Conexao{
     private  
        $cli_id,
        $cli_nome ,
        $cli_sobrenome ,
        $cli_celular ,
        $cli_cidade ,
        $cli_uf ,
        $cli_email ,
        $cli_data_cad,
        $cli_hora_cad,
        $cli_senha;

	function __construct(){
		parent::__construct();
	}

    function Preparar($cli_nome, $cli_sobrenome , $cli_celular , $cli_cidade ,$cli_uf ,
    $cli_email , $cli_data_cad, $cli_hora_cad, $cli_senha){
        
        $this->setCli_nome($cli_nome);
        $this->setCli_sobrenome($cli_sobrenome);
        $this->setCli_celular($cli_celular);
        $this->setCli_cidade($cli_cidade);
        $this->setCli_uf($cli_uf);
        $this->setCli_email($cli_email);
        $this->setCli_data_cad($cli_data_cad);
        $this->setCli_hora_cad($cli_hora_cad);
        $this->setCli_senha($cli_senha);
       
    }

    function GetClientes(){
        
        $query = " SELECT * FROM {$this->prefix}usuarios ";
        
        $this->ExecuteSQL($query);
        
        $this->GetLista();
            
    }
   /**
    * 
    * @param INT $id id do cliente 
    */
    function GetClientesID($id){
        
        // monto a SQL
        $query  = " SELECT * FROM {$this->prefix}usuarios ";
        $query .= " WHERE cli_id = :id ";
        // passo parametros
        $params = array(':id'=>(int)$id);
        //executo a SQL
        $this->ExecuteSQL($query, $params);
        // chamo a listagem 
        $this->GetLista();
        
        
    }
/**
 * fazendo a listagem dos dados retornados 
 */
 private function GetLista(){
        
        $i = 1;
        while ($lista = $this->ListarDados()):
            
            $this->itens[$i] = array(
            
                'cli_id'        =>  $lista['cli_id'],
                'cli_nome'      =>  $lista['cli_nome'],
                'cli_sobrenome' =>  $lista['cli_sobrenome'],
                'cli_cidade'    =>  $lista['cli_cidade'],
                'cli_uf'        =>  $lista['cli_uf'],
                'cli_email'     =>  $lista['cli_email'],
                'cli_celular'   =>  $lista['cli_celular'],
                'cli_pass'      =>  $lista['cli_pass'],
                'cli_hora_cad'  => $lista['cli_hora_cad'],
                'cli_data_cad'  =>  Sistema::Fdata($lista['cli_data_cad']),
            
            );

            $i++;
        
        endwhile;
    }

    function Inserir(){

    	if($this->GetClienteEmail($this->getCli_email()) > 0){
    		echo '<div class="alert alert-danger " id="erro_mostrar"> Este Email já existe';
    		Sistema::VoltarPagina();
    		echo '</div>';
    		exit();
    	}

    	//INSERIR OS DADOS

    	//query para inserir clientes

            $query = " INSERT INTO {$this->prefix}usuarios (cli_nome, cli_sobrenome,";
            $query .=" cli_celular ,";
            $query .=" cli_cidade ,cli_uf ,cli_email ,cli_data_cad, cli_hora_cad, cli_pass)";  
            $query .=" VALUES ";
            $query .=" (:cli_nome, :cli_sobrenome,";
            $query .=" :cli_celular ,"; 
            $query .=" :cli_cidade ,:cli_uf ,:cli_email ,:cli_data_cad, :cli_hora_cad, :cli_senha)";  
   
            $params = array(
                ':cli_nome'     => $this->getCli_nome() ,    
                ':cli_sobrenome'=> $this->getCli_sobrenome() ,   
                ':cli_celular'  => $this->getCli_celular() ,   
                ':cli_cidade'   => $this->getCli_cidade() ,   
                ':cli_uf'       => $this->getCli_uf() ,     
                ':cli_email'    => $this->getCli_email() ,   
                ':cli_data_cad' => $this->getCli_data_cad() ,   
                ':cli_hora_cad' => $this->getCli_hora_cad() ,   
                ':cli_senha'    => $this->getCli_senha()       
            );
        
            $this->ExecuteSQL($query, $params);
    }

    //MÉTODO EDITAR
    function Editar($id){
        
          // verifica se o email já esta cadastrado 
          if($this->GetClienteEmail($this->getCli_email()) > 0 && $this->getCli_email() != $_SESSION['CLI']['cli_email']):
                echo '<div class="alert alert-danger " id="erro_mostrar"> Este Email já esta cadastrado ';
                Sistema::VoltarPagina();
                echo '</div>';
                exit();
        endif;
        
        
        // caso passou na verificação grava no banco
        
        $query = " UPDATE {$this->prefix}usuarios SET cli_nome=:cli_nome, cli_sobrenome=:cli_sobrenome,";
        $query .=" cli_celular=:cli_celular ,cli_cidade=:cli_cidade ,cli_uf=:cli_uf ,cli_email=:cli_email ,"; 
        $query .=" cli_data_cad=:cli_data_cad, cli_hora_cad=:cli_hora_cad, cli_pass=:cli_senha ";
        $query .=" WHERE  cli_id = :cli_id"; 
   
        $params = array(
        ':cli_nome'     => $this->getCli_nome() ,    
        ':cli_sobrenome'=> $this->getCli_sobrenome() ,    
        ':cli_celular'  => $this->getCli_celular() ,    
        ':cli_cidade'   => $this->getCli_cidade() ,   
        ':cli_uf'       => $this->getCli_uf() ,     
        ':cli_email'    => $this->getCli_email() ,   
        ':cli_data_cad' => $this->getCli_data_cad() ,   
        ':cli_hora_cad' => $this->getCli_hora_cad() ,   
        ':cli_senha'    => $this->getCli_senha(),   
        ':cli_id'       => (int)$id   
            
        );
        
      //  echo $query;
        
                   
            if($this->ExecuteSQL($query, $params)):
                
                    return true;
                
            else:
                
                    return false;
            endif;

        
    }





    function EditarADM($id){
          // verifica se o email já esta cadstrado 
          if($this->GetClienteEmail($this->getCli_email()) > 0 && $this->getCli_email() !=  $_REQUEST['cli_email']):
                echo '<div class="alert alert-danger " id="erro_mostrar"> Este Email já esta cadastrado ';
                Sistema::VoltarPagina();
                echo '</div>';
                exit();
        endif;
        
        
        // caso passou na verificação grava no banco
        
        $query = " UPDATE {$this->prefix}usuarios SET cli_nome=:cli_nome, cli_sobrenome=:cli_sobrenome,";
        $query .=" cli_celular=:cli_celular ,";
        $query .=" cli_cidade=:cli_cidade ,cli_uf=:cli_uf ,cli_email=:cli_email  ";
        $query .=" WHERE  cli_id = :cli_id";
   
        $params = array(
        ':cli_nome'     => $this->getCli_nome() ,    
        ':cli_sobrenome'=> $this->getCli_sobrenome() ,     
        ':cli_celular'  => $this->getCli_celular() ,     
        ':cli_cidade'   => $this->getCli_cidade() ,   
        ':cli_uf'       => $this->getCli_uf() ,      
        ':cli_email'    => $this->getCli_email() ,  
        ':cli_id'       => (int)$id   
            
        );
        
      //  echo $query;
        
                   
            if($this->ExecuteSQL($query, $params)):
                
                    return true;
                
            else:
                
                    return false;
            endif;

        
    }

    function GetClienteEmail($email){
    	$query = "SELECT * FROM {$this->prefix}usuarios ";
    	$query .= " WHERE cli_email = :email ";
    	$params = array(':email'=> $email);
    	$this->ExecuteSQL($query, $params);
    	return $this->TotalDados();
    }

    function SenhaUpdate($senha, $email){
    	$query = "UPDATE {$this->prefix}usuarios SET cli_pass = :senha";
    	$query .= " WHERE cli_email = :email ";
    	$this->setCli_senha($senha);
    	$this->setCli_email($email);
    	$params = array(':senha'=> $this->getCli_senha(), ':email'=> $this->getCli_email());
    	$this->ExecuteSQL($query, $params);
    }

    // GETTERS retornando os dados do cliente 
        function getCli_nome() {
        return $this->cli_nome;
    }

    function getCli_sobrenome() {
        return $this->cli_sobrenome;
    }

    function getCli_celular() {
        return $this->cli_celular;
    }

    function getCli_cidade() {
        return $this->cli_cidade;
    }

    function getCli_uf() {
        return $this->cli_uf;
    }

    function getCli_email() {
        return $this->cli_email;
    }

    function getCli_data_cad() {
        return $this->cli_data_cad;
    }

    function getCli_hora_cad() {
        return $this->cli_hora_cad;
    }

    function getCli_senha() {
        return $this->cli_senha;
    }

    //  SETTERS do cliente 
    
    function setCli_nome($cli_nome) {
       
        if(strlen($cli_nome) < 3):
            echo '<div class="alert alert-danger " id="erro_mostrar"> Digite seu nome ';
            Sistema::VoltarPagina();
            echo '</div>';
        else:
            $this->cli_nome = $cli_nome;   
        endif;
         
    }

    function setCli_sobrenome($cli_sobrenome) {
        
        if(strlen($cli_sobrenome) < 3):
            echo '<div class="alert alert-danger " id="erro_mostrar"> Digite seu sobrenome ';
            Sistema::VoltarPagina();
            echo '</div>';
        else:
            $this->cli_sobrenome = $cli_sobrenome;
        endif;

    }

    function setCli_celular($cli_celular) {
        $this->cli_celular = $cli_celular;
    }

    function setCli_cidade($cli_cidade) {
        $this->cli_cidade = $cli_cidade;
    }

    function setCli_uf($cli_uf) {
        
         $uf = filter_var($cli_uf, FILTER_SANITIZE_STRING);
        
       if(strlen($uf) != 2): // 11111
            echo '<div class="alert alert-danger " id="erro_mostrar"> UF incorreto ';
            Sistema::VoltarPagina();
            echo '</div>';
        
        else:
            $this->cli_uf = $cli_uf; 
       endif;
            
    }

    function setCli_email($cli_email) {
        
        if(!filter_var($cli_email, FILTER_VALIDATE_EMAIL)):
            
            echo '<div class="alert alert-danger " id="erro_mostrar"> Email incorreto ';
            Sistema::VoltarPagina();
            echo '</div>';
        
            exit();
            
        else:
            $this->cli_email = $cli_email;
        endif;
       
    }

    function setCli_data_cad($cli_data_cad) {
        $this->cli_data_cad = $cli_data_cad;
    }

    function setCli_hora_cad($cli_hora_cad) {
        $this->cli_hora_cad = $cli_hora_cad;
    }

    function setCli_senha($cli_senha) {
       
        $this->cli_senha = md5($cli_senha);
        // 123 => md5 = 18513ba35987a447b98f075bd226a1fc
    }

}
 ?>
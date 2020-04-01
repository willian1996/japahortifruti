<?php 
  
class Clientes extends Conexao{

    private $cli_nome;
    private $cli_cpf;
    private $cli_fone;
    private $cli_celular;
    private $cli_endereco;
    private $cli_numero;
    private $cli_ponto_referencia;
    private $cli_bairro;
    private $cli_cidade;
    private $cli_cep;
    private $cli_data_cad;
    private $cli_senha;

    public function __construct(){
        parent::__construct();
    }


    public function Preparar($cli_nome,
            $cli_cpf  , $cli_fone , $cli_celular , $cli_endereco , $cli_numero, $cli_ponto_referencia,
            $cli_bairro , $cli_cidade , $cli_cep , $cli_data_cad,
             $cli_senha){
        
        $this->setCli_nome($cli_nome);
        $this->setCli_cpf($cli_cpf);
        $this->setCli_fone($cli_fone);
        $this->setCli_celular($cli_celular);
        $this->setCli_endereco($cli_endereco);
        $this->setCli_numero($cli_numero);
        $this->setCli_ponto_referencia($cli_ponto_referencia);
        $this->setCli_bairro($cli_bairro);
        $this->setCli_cidade($cli_cidade);
        $this->setCli_cep($cli_cep);
        $this->setCli_data_cad($cli_data_cad);
        $this->setCli_senha($cli_senha);

    }


    public function Inserir(){
        if($this->GetClienteCPF($this->getCli_cpf()) > 0){
            echo '<div class="alert alert-danger" id="erro_mostrar">Este CPF já está cadastrado! ';
            Sistema::VoltarPagina();
            echo "</div>";
            return false;
        }

        if($this->GetClienteCelular($this->getCli_celular()) > 0){
            echo '<div class="alert alert-danger" id="erro_mostrar">Este Whatsapp já está cadastrado! ';
            Sistema::VoltarPagina();
            echo "</div>";
            return false;
        }

        //Inserir os dados da função
        $query = " INSERT INTO {$this->prefix}clientes (cli_nome,";
        $query .=" cli_cpf, cli_fone,cli_celular ,cli_endereco ,cli_numero, cli_ponto_referencia, cli_bairro ,";
        $query .=" cli_cidade ,cli_cep ,cli_data_cad, cli_pass)";
        $query .=" VALUES ";
        $query .=" (:cli_nome,";
        $query .=" :cli_cpf, :cli_fone,:cli_celular ,:cli_endereco ,:cli_numero, :cli_ponto_referencia, :cli_bairro ,";
        $query .=" :cli_cidade ,:cli_cep ,:cli_data_cad, :cli_senha)";

        $params = array(
        ':cli_nome'     => $this->getCli_nome() ,
        ':cli_cpf'      => $this->getCli_cpf() ,
        ':cli_fone'     => $this->getCli_fone() ,
        ':cli_celular'  => $this->getCli_celular() ,
        ':cli_endereco' => $this->getCli_endereco() ,
        ':cli_numero'   => $this->getCli_numero() ,
        ':cli_ponto_referencia'   => $this->getCli_ponto_referencia(),
        ':cli_bairro'   => $this->getCli_bairro() ,
        ':cli_cidade'   => $this->getCli_cidade() ,
        ':cli_cep'      => $this->getCli_cep() ,
        ':cli_data_cad' => $this->getCli_data_cad() ,
        ':cli_senha'    => $this->getCli_senha()

        );
        
        $this->ExecuteSQL($query, $params);
        return true;
    } 

//metodo editar
    public function Editar($id){

        // verifico se ja tem este CPF no banco
        if($this->GetClienteCPF($this->getCli_cpf()) > 0 && $this->getCli_cpf() != $_SESSION['CLI']['cli_cpf']):
                echo '<div class="alert alert-danger " id="erro_mostrar"> Este CPF já esta cadastrado ';
                Sistema::VoltarPagina();
                echo '</div>';
                exit();
        endif;
          // verifica se o whatsapp já esta cadastrado
          if($this->GetClienteCelular($this->getCli_celular()) > 0 && $this->getCli_celular() != $_SESSION['CLI']['cli_celular']):
                echo '<div class="alert alert-danger " id="erro_mostrar"> Este Whatsapp já esta cadastrado ';
                Sistema::VoltarPagina();
                echo '</div>';
                exit();
        endif;


        // caso passou na verificação grava no banco

        $query = " UPDATE {$this->prefix}clientes SET cli_nome=:cli_nome, ";
        $query .=" cli_cpf=:cli_cpf, cli_fone=:cli_fone,cli_celular=:cli_celular ,cli_endereco=:cli_endereco ,cli_numero=:cli_numero, cli_ponto_referencia=:cli_ponto_referencia , cli_bairro=:cli_bairro ,";
        $query .=" cli_cidade=:cli_cidade ,cli_cep=:cli_cep ,cli_data_cad=:cli_data_cad,  cli_pass=:cli_senha ";
        $query .=" WHERE  cli_id = :cli_id";
     

        $params = array(
            ':cli_nome'     => $this->getCli_nome() ,
            ':cli_cpf'      => $this->getCli_cpf() ,
            ':cli_fone'     => $this->getCli_fone() ,
            ':cli_celular'  => $this->getCli_celular() ,
            ':cli_endereco' => $this->getCli_endereco() ,
            ':cli_numero'   => $this->getCli_numero() ,
            ':cli_ponto_referencia' => $this->getCli_ponto_referencia(),
            ':cli_bairro'   => $this->getCli_bairro() ,
            ':cli_cidade'   => $this->getCli_cidade() ,
            ':cli_cep'      => $this->getCli_cep() ,
            ':cli_data_cad' => $this->getCli_data_cad() ,
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
    
//FUNCAO EDITAR CLIENTES ADM

    function EditarADM($id){
        
              
          // verifico se ja tem este CPF no banco
        if($this->GetClienteCPF($this->getCli_cpf()) > 0 && $this->getCli_cpf() != $_REQUEST['cli_cpf']):
                echo '<div class="alert alert-danger " id="erro_mostrar"> Este CPF já esta cadastrado ';
                Sistema::VoltarPagina();
                echo '</div>';
                exit();
        endif;
    
        // verifica se o whatsapp já esta cadastrado
          if($this->GetClienteCelular($this->getCli_celular()) > 0 && $this->getCli_celular() != $_REQUEST['cli_celular']):
                echo '<div class="alert alert-danger " id="erro_mostrar"> Este Whatsapp já esta cadastrado ';
                Sistema::VoltarPagina();
                echo '</div>';
                exit();
        endif;
        
        
        // caso passou na verificação grava no banco
        
        $query = " UPDATE {$this->prefix}clientes SET cli_nome=:cli_nome, ";
        $query .=" cli_cpf=:cli_cpf, cli_fone=:cli_fone,cli_celular=:cli_celular ,cli_endereco=:cli_endereco ,cli_numero=:cli_numero, cli_ponto_referencia=:cli_ponto_referencia, cli_bairro=:cli_bairro ,";
        $query .=" cli_cidade=:cli_cidade ,cli_cep=:cli_cep, cli_pass=:cli_senha ";   
        $query .=" WHERE  cli_id = :cli_id";
      
    
        $params = array(
        ':cli_nome'     => $this->getCli_nome() ,    
        ':cli_cpf'      => $this->getCli_cpf() ,   
        ':cli_fone'     => $this->getCli_fone() ,   
        ':cli_celular'  => $this->getCli_celular() , 
        ':cli_endereco' => $this->getCli_endereco() ,   
        ':cli_numero'   => $this->getCli_numero() ,
        ':cli_ponto_referencia' => $this->getCli_ponto_referencia() ,
        ':cli_bairro'   => $this->getCli_bairro() ,   
        ':cli_cidade'   => $this->getCli_cidade() ,   
        ':cli_cep'      => $this->getCli_cep() , 
        ':cli_senha'      => $this->getCli_senha() ,          
        ':cli_id'       => (int)$id   
            
        );
        
      //  echo $query;
        
                   
            if($this->ExecuteSQL($query, $params)):
                
                    return true;
                
            else:
                
                    return false;
            endif;

        
    }





//Verificando se o CPF do cliente ja existe
    public function GetClienteCPF($cpf){
        $query = "SELECT * FROM {$this->prefix}clientes ";
        $query .= "WHERE cli_cpf = :cpf ";

        $params = array(':cpf' => $cpf);
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();

    }
    
    



//Verificando se o Celular do cliente ja existe
    public function GetClienteCelular($celular){
        $query = "SELECT * FROM {$this->prefix}clientes ";
        $query .= "WHERE cli_celular = :celular ";

        $params = array(':celular'=> $celular);
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();
    }

    public function SenhaUpdate($senha, $whatsapp){
        $query = "UPDATE {$this->prefix}clientes SET cli_pass = :senha ";
        
        $query .="WHERE cli_celular = :celular ";
        $this->setCli_senha($senha);
        $this->setCli_celular($whatsapp);
    
        $params = array(':senha'=> $this->getCli_senha(),
                        ':celular'=> $this->getCli_celular());
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();
    }

    
    
    
    
//CLASSE DE CLIENTS - FUNÇÕES PARA BUSCAR
 
  
    public function GetClientes(){
        
        $query = " SELECT * FROM {$this->prefix}clientes order by cli_data_cad desc";
        
        $query .= $this->PaginacaoLinks("cli_id", $this->prefix."clientes");
        $this->ExecuteSQL($query);
        
        $this->GetLista();
        
        
    }
   /**
    * 
    * @param INT $id id do cliente 
    */
    public function GetClientesID($id){
        
        // monto a SQL
        $query  = " SELECT * FROM {$this->prefix}clientes ";
        $query .= " WHERE cli_id = :id ";
        // passo parametros
        $params = array(':id'=>(int)$id);
        //executo a SQL
        $this->ExecuteSQL($query, $params);
        // chamo a listagem 
        $this->GetLista();
        
        
    }
    
    public function GetClientesByNomeOrCell($campo){
        $campo = $this->filtraEntrada($campo);
        
        // monto a SQL
        $query  = " SELECT * FROM {$this->prefix}clientes ";
        $query .= " WHERE cli_nome LIKE '%$campo%' or cli_celular LIKE '%$campo%'";
        
        $query .= $this->PaginacaoLinks("cli_id", $this->prefix."clientes");
        //executo a SQL
        $this->ExecuteSQL($query);
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
             'cli_endereco'  =>  $lista['cli_endereco'],
             'cli_numero'    =>  $lista['cli_numero'],
             'cli_ponto_referencia' =>  $lista['cli_ponto_referencia'],
             'cli_bairro'    =>  $lista['cli_bairro'],
             'cli_cidade'    =>  $lista['cli_cidade'],
             'cli_cpf'       =>  $lista['cli_cpf'],
             'cli_cep'       =>  $lista['cli_cep'],
             'cli_fone'      =>  $lista['cli_fone'],
             'cli_celular'   =>  $lista['cli_celular'],
             'cli_pass'      =>  $lista['cli_pass'],
             'cli_data_cad'  =>  Sistema::Fdata($lista['cli_data_cad']),
           
            
        );
        
        
            $i++;
        
        endwhile;
        
        
    }



// GETTERS retornando os dados do cliente

    public function getCli_nome() {
        return $this->cli_nome;
    }

    function getCli_cpf() {

        return $this->cli_cpf;
    }

    function getCli_fone() {
        return $this->cli_fone;
    }

    function getCli_celular() {
        return $this->cli_celular;
    }

    function getCli_endereco() {
        return $this->cli_endereco;
    }

    function getCli_numero(){

        return $this->cli_numero;

    }

    function getCli_ponto_referencia(){
        return $this->cli_ponto_referencia;
    }

    function getCli_bairro() {
        return $this->cli_bairro;
    }

    function getCli_cidade() {
        return $this->cli_cidade;
    }

    function getCli_cep() {
        return $this->cli_cep;
    }

    function getCli_data_cad() {
        return $this->cli_data_cad;
    }

    function getCli_senha() {
        return $this->cli_senha;
    }

//  SETTERS do cliente

    public function setCli_nome($cli_nome) {

        if(strlen($cli_nome) < 3):


              echo '<div class="alert alert-danger " id="erro_mostrar"> Digite seu nome ';
                Sistema::VoltarPagina();
                echo '</div>';


            else:

            $this->cli_nome = $cli_nome;
        endif;




    }



    function setCli_cpf($cli_cpf) {
        
        if(!Sistema::ValidarCPF($cli_cpf)){
            echo '<div class="alert alert-danger " id="erro_mostrar"> CPF incorreto ';
            Sistema::VoltarPagina();
            echo '</div>';

        }else{
            $this->cli_cpf = $cli_cpf;
        }    

    }

    function setCli_fone($cli_fone) {
        $this->cli_fone = $cli_fone;
    }

    function setCli_celular($cli_celular) {
        $this->cli_celular = $cli_celular;
    }

    function setCli_endereco($cli_endereco) {
        $this->cli_endereco = $cli_endereco;
    }

    function setCli_numero($cli_numero){

        $this->cli_numero = $cli_numero;
    }

    function setCli_ponto_referencia($cli_ponto_referencia){


        $this->cli_ponto_referencia = $cli_ponto_referencia;


    }

    function setCli_bairro($cli_bairro) {
        $this->cli_bairro = $cli_bairro;
    }

    function setCli_cidade($cli_cidade) {
        $this->cli_cidade = $cli_cidade;
    }

    function setCli_cep($cli_cep) {

       $cep = filter_var($cli_cep, FILTER_SANITIZE_NUMBER_INT);

       if(strlen($cep) != 8):
                echo '<div class="alert alert-danger " id="erro_mostrar"> CEP incorreto ';
                Sistema::VoltarPagina();
                echo '</div>';

           else:
           $this->cli_cep = $cli_cep;

       endif;



    }



    function setCli_data_cad($cli_data_cad) {
        $this->cli_data_cad = $cli_data_cad;
    }


    function setCli_senha($cli_senha) {

        $this->cli_senha = md5($cli_senha);
        // 123 => md5 = 18513ba35987a447b98f075bd226a1fc
    }







}/*FIM CLASSE CLIENTES*/

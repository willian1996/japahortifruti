<?php

class Conexao extends Config{
    private $host;
    private $user;
    private $senha;
    private $banco;
    protected $obj, $itens = array(), $prefix;
    public $paginao_links;
    public $totalpags;
    public $limite;
    public $inicio;



    function __construct(){
        $this->host = BD_HOST;
        $this->user = BD_USER;
        $this->senha = BD_SENHA;
        $this->banco = BD_BANCO;
        $this->prefix = BD_PREFIX;

        try{
            if($this->Conectar() == null){
                $this->Conectar();
            }

        }catch(Exception $e){
            exit($e->getMessage().'<h2>Erro ao conectar com o banco de dados!</h2>');
        }

    }

    private function Conectar(){
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        );
        $link = new PDO("mysql:host={$this->host};dbname={$this->banco}",
                        $this->user,
                        $this->senha,
                        $options);
        return $link;
    }

    public function ExecuteSQL($query, array $params = null){
        $this->obj = $this->Conectar()->prepare($query);
        if($params){
            if(count($params) > 0){
                foreach($params as $key => $value){
                    $this->obj->bindValue($key, $value);

                }
            }
        }

        return $this->obj->execute();
    }

    public function ListarDados(){
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    public function TotalDados(){
        return $this->obj->rowCount();
    }


    public function GetItens(){
        return $this->itens;
    }

    public function PaginacaoLinks($campo, $tabela){
        $pag = new Paginacao();
        $pag->GetPaginacao($campo, $tabela);
        $this->paginao_links = $pag->link;

        $this->totalpags = $pag->totalpags;
        $this->limite = $pag->limite;
        $this->inicio = $pag->inicio;

        $inicio = $pag->inicio;
        $limite = $pag->limite;

        if($this->totalpags > 0){
            return " limit {$inicio}, {$limite}";
        }else{
            return " ";
        }


    }

    protected function Paginacao($paginas = array()){
        $pag = '<ul class="pagination">';
            $pag .= '<li><a href="?p=1"> << Inicio</a></li>';

            foreach($paginas as $p):
                if(!isset($_GET['p'])){
                    $q = 1;
                }else{
                    $q = $this->filtraEntrada($_GET['p']);
                }
                $pag .= "<li class=".($q==$p ?'active':'')."><a href='?p=".$p."'>".$p."</a></li>";
            endforeach;
            $pag .= '<li><a href="?p='.$this->totalpags.'"> ...'.$this->totalpags.' >></a></li>';

        $pag .= '</ul>';

        if($this->totalpags > 1){
            return $pag;
        }

    }

    public function ShowPaginacao(){
        return $this->Paginacao($this->paginao_links);
    }

    /*
    * MÉTODO PARA PROTEJER O BANCO DE DADOS DE SQL INJECTION
    * @param DADO A FILTRAR
    * @return DADO FILTRADO
    * @author WILLIAN <williansalesgabriel@hotmail.com>
    */
    protected function filtraEntrada($campo){
        // remove espaços no início e no final
        $campo = trim($campo);
        // remove tags html
        $campo = strip_tags($campo);
        // adiciona caractere de escape nas aspas e apostófros
        $campo = addslashes($campo);
        return $campo;
    }
















}

<?php  
class Produtos extends Conexao{
    private $pro_nome;
    private $pro_categoria;
    private $pro_ativo;
    private $pro_ref;
    private $pro_valor;
    private $pro_peso;
    private $pro_tamanho;
    private $pro_img;
    private $pro_desc;
    private $pro_slug;
    
    public function __construct(){
        parent:: __construct();
    }
    
    public function GetProdutos(){
        //query para buscar pordutos de uma categoria especifica 
        $query = "SELECT * FROM {$this->prefix}produtos p 
        INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        
        $query .= " ORDER BY pro_id DESC";
        
        $query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos");



        $this->ExecuteSQL($query);
        
        $this->GetLista();
        
    }
    

    public function GetProdutosID($id){
        //query para buscar pordutos de uma categoria especifica
        $query = "SELECT * FROM {$this->prefix}produtos p
        INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

        $query .= " AND pro_id = :id";

        $params = array(':id' => (int)$id);

        $this->ExecuteSQL($query, $params);

        $this->GetLista();

    }
    

    public function GetProdutosNome($nome){
        $nome = $this->filtraEntrada($nome);
        
          // monto a SQL
        $query = "SELECT * FROM {$this->prefix}produtos p 
        INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";        
        $query .= " WHERE pro_nome LIKE '%$nome%' ";
        $query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos WHERE pro_nome LIKE '%$nome%' ");
        
        // passando parametros
        $params = array(':nome'=>$nome);
       // executando a SQL                      
        $this->ExecuteSQL($query,$params);
        // trazendo a listagem 
        $this->GetLista();
    }

    public function GetProdutosCateID($id){
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        //query para buscar pordutos de uma categoria especifica
        $query = "SELECT * FROM {$this->prefix}produtos p
        INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

        $query .= " AND pro_categoria = :id";

        $query .= " ORDER BY pro_id DESC";

        $query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos WHERE pro_categoria =".(int)$id);

        $params = array(':id' => (int)$id);

        $this->ExecuteSQL($query, $params);

        $this->GetLista();

    }

 
    private function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'pro_id' => $lista['pro_id'],
            'pro_nome' => $lista['pro_nome'],
            'pro_desc' => $lista['pro_desc'],
            'pro_peso' => $lista['pro_peso'],
            'pro_valor' => Sistema::MoedaBR($lista['pro_valor']),
            'pro_valor_us' => $lista['pro_valor'],
            'pro_tamanho' => $lista['pro_tamanho'],
            'pro_img' => Rotas::ImageLink($lista['pro_img'], 250,250),
            'pro_img_g' => Rotas::ImageLink($lista['pro_img'], 350,350),
            'pro_img_p' => Rotas::ImageLink($lista['pro_img'], 70,70),
            'pro_slug' => $lista['pro_slug'],
            'pro_ref' => $lista['pro_ref'],
            'cate_nome' => $lista['cate_nome'],
            'cate_id' => $lista['cate_id'],
            'pro_ativo'   => $lista['pro_ativo'] ,
            'pro_img_arquivo'   => Rotas::get_SiteRAIZ() .'/'. Rotas::get_ImagePasta().$lista['pro_img'],
            'pro_img_atual'     => $lista['pro_img']
        );
        
        $i++;
        endwhile;
    }
    
    
    public function Preparar($pro_nome, $pro_categoria, $pro_ativo, $pro_ref,
        $pro_valor, $pro_peso , $pro_tamanho, 
        $pro_img, $pro_desc, $pro_slug=null){

        $this->setPro_nome($pro_nome);
        $this->setPro_categoria($pro_categoria);
        $this->setPro_ativo($pro_ativo);
        $this->setPro_ref($pro_ref);
        $this->setPro_valor($pro_valor);
        $this->setPro_peso($pro_peso);
        $this->setPro_tamanho($pro_tamanho);
        $this->setPro_img($pro_img);
        $this->setPro_desc($pro_desc);
        $this->setPro_slug($pro_nome);
    }


   public function Inserir(){

        $query = "INSERT INTO {$this->prefix}produtos (pro_nome, pro_categoria, pro_ativo, pro_ref," ;
        $query.= " pro_valor, pro_peso , pro_tamanho, pro_img, pro_desc, pro_slug)";
        $query.= " VALUES ";
        $query.= " ( :pro_nome, :pro_categoria, :pro_ativo, :pro_ref, :pro_valor, :pro_peso ,";
        $query.= " :pro_tamanho, :pro_img, :pro_desc, :pro_slug)";

        $params = array(
        ':pro_nome'=> $this->getPro_nome(),
        ':pro_categoria'=> $this->getPro_categoria(),
        ':pro_ativo'=> $this->getPro_ativo(),
        ':pro_ref'=> $this->getPro_ref(),
        ':pro_valor'=> $this->getPro_valor(),
        ':pro_peso'=> $this->getPro_peso(),
        ':pro_tamanho'=> $this->getPro_tamanho() ,
        ':pro_img'=> $this->getPro_img(),
        ':pro_desc'=> $this->getPro_desc(),
        ':pro_slug'=> $this->getPro_slug(),

        );


          if($this->ExecuteSQL($query, $params)):

                   return TRUE;

               else:

                   return FALSE;

           endif;




    }

    public function Alterar($id){

        $query = " UPDATE {$this->prefix}produtos SET pro_nome=:pro_nome, pro_categoria=:pro_categoria," ;
        $query.= " pro_ativo=:pro_ativo, pro_ref=:pro_ref,";
        $query.= " pro_valor=:pro_valor, pro_peso=:pro_peso , ";
        $query.= " pro_tamanho=:pro_tamanho, ";
        $query.= " pro_img=:pro_img, pro_desc=:pro_desc, pro_slug=:pro_slug";
        $query.= " WHERE pro_id = :pro_id";

        $params = array(
        ':pro_nome'=> $this->getPro_nome(),
        ':pro_categoria'=> $this->getPro_categoria(),
        ':pro_ativo'=> $this->getPro_ativo(),
        ':pro_ref'=> $this->getPro_ref(),
        ':pro_valor'=> $this->getPro_valor(),
        ':pro_peso'=> $this->getPro_peso(),
        ':pro_tamanho'=> $this->getPro_tamanho() ,
        ':pro_img'=> $this->getPro_img(),
        ':pro_desc'=> $this->getPro_desc(),
        ':pro_slug'=> $this->getPro_slug(),
        ':pro_id'=> (int)$id,

        );



       // executo a SQL
       if($this->ExecuteSQL($query, $params)):

               return TRUE;

           else:

               return FALSE;

       endif;




    }

    public function Apagar($id){
        $query = "DELETE FROM {$this->prefix}produtos ";
        $query .= "WHERE pro_id = :pro_id";

        $params = array(
            ":pro_id" => (int)$id
        );

        if($this->ExecuteSQL($query, $params)){
            return TRUE;
        }else{
            return FALSE;
        }

    }




    //METODOS GET

    function getPro_nome() {
        return $this->pro_nome;
    }

    function getPro_categoria() {
        return $this->pro_categoria;
    }

    function getPro_ativo() {
        return $this->pro_ativo;
    }

    function getPro_ref() {
        return $this->pro_ref;
    }

    function getPro_valor() {
        return $this->pro_valor;
    }

    function getPro_peso() {
        return $this->pro_peso;
    }

    function getPro_tamanho() {
        return $this->pro_tamanho;
    }

    function getPro_img() {
        return $this->pro_img;
    }

    function getPro_desc() {
        return $this->pro_desc;
    }

    function getPro_slug() {
        return $this->pro_slug;
    }



    //METODOS SET

    function setPro_nome($pro_nome) {
        $this->pro_nome = $pro_nome;
    }

    function setPro_categoria($pro_categoria) {
        $this->pro_categoria = $pro_categoria;
    }

    function setPro_ativo($pro_ativo) {
        $this->pro_ativo = $pro_ativo;
    }

    function setPro_ref($pro_ref) {
        $this->pro_ref = $pro_ref;
    }

    function setPro_valor($pro_valor) {
        //1.335,99 => 1.33599

        // procura a virgula e troca por ponto
      $pro_valor = str_replace('.', '', $pro_valor);
      $pro_valor = str_replace(',', '.', $pro_valor);

        $this->pro_valor = $pro_valor ;
       // echo $this->pro_valor;

    }

    function setPro_peso($pro_peso) {

       ///  1,600  => 1.600
        $this->pro_peso = str_replace(',', '.', $pro_peso);

    }

    function setPro_tamanho($pro_tamanho) {

        $this->pro_tamanho = $pro_tamanho;
    }


    function setPro_img($pro_img) {
        $this->pro_img = $pro_img;
    }

    function setPro_desc($pro_desc) {
        $this->pro_desc = $pro_desc;
    }

    function setPro_slug($pro_slug) {


        $this->pro_slug = Sistema::GetSlug($pro_slug);
    }




    
    

    
    
    
    
    
    
    
    
}/*FIM CLASSE PRODUTOS*/

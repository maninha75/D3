<?php
class SuperHeroi {
    private $id;
    private $nome;
    private $poderEspecial;
    private $energia;
    private $forca;
    private $origem;

    public function getId() {
      return $this->id;
    }
    public function getNome() {
      return $this->nome;
    }
    public function getPoderEspecial() {
      return $this->poderEspecial;
    }
    public function getEnergia() {
      return $this->energia;
    }
    public function getForca() {
      return $this->forca;
    }
    public function getOrigem() {
      return $this->Origem;
    }
    public function setId($id) {
      $this->id = $id;
    }
    public function setNome($nome) {
      $this->nome = $nome;
    }
    public function setPoderEspecial($poderEspecial) {
      $this->poderEspecial = $poderEspecial;
    }
    public function setEnergia($energia) {
      $this->energia = $energia;
    }
    public function setForca($forca) {
      $this->forca = $forca;
    }
    public function setorigem($origem) {
      $this->origem = $origem;
    }
    public function __construct($id, $nome, $poderEspecial, $energia, $forca, $origem){
      $this->id = $id;  
      $this->nome = $nome;
      $this->poderEspecial = $poderEspecial;
      $this->energia = $energia;
      $this->forca = $forca;
      $this->origem = $origem;
    
     }
    }
    class Calculo extends SuperHeroi { 
        private $aumentarEnergia;
        private $calcularPoderMedio;
        
        public function __construct($id, $nome, $poderEspecial, $energia, $forca, $origem, $aumentarEnergia, $calcularPoderMedio){
            Calculo::setId($id);  
            Calculo::setNome($nome);
            Calculo::setPoderEspecial($poderEspecial);
            Calculo::setEnergia($energia);
            Calculo::setForca($forca);
            Calculo::setOrigem($origem);
            $this->aumentarEnergia = $aumentarEnergia;
            $this->calcularPoderMedio = $calcularPoderMedio;
       
        }
    public function aumentarEnergia(){   
        return $this->energia*120118830; 

    }
  }
  public function calcularPoderMedio(){
    return $this ->energia +$this->forca;
    return $this ->calcularPoderMedio/2;

}
$SuperHeroi = new SuperHeroi('01','Harry Potter', 'magia', 1000, 10000, 'Marte');
$SuperHeroi = new SuperHeroi('02','Goku', 'resucita', 2000, 20000, 'Jupiter' );
$SuperHeroi = new SuperHeroi('03','Jaspion', 'Super força', 3000, 30000, 'Terra' );
$SuperHeroi = new SuperHeroi('04','Homen Aranha', 'Força sobre humana', 4000, 40000, 'Venus');
echo $calculo->aumentarEnergia();
echo $calculo->calcularPoderMedio();
?>
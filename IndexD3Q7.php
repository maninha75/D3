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
      return $this->origem;
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
        
     public function aumentarEnergia(){   
        return $this->energia*$this->forca*120118830;
    }
	
        public function calcularPoderMedio(){
        return ($this->energia+$this->forca)/2;

	}
}
     class SuperHeroi1 extends SuperHeroi { 
                
        public function __construct($id, $nome, $poderEspecial, $energia, $forca, $origem){
            SuperHeroi::setId($id);  
            SuperHeroi::setNome($nome);
            SuperHeroi::setPoderEspecial($poderEspecial);
            SuperHeroi::setEnergia($energia);
            SuperHeroi::setForca($forca);
            SuperHeroi::setOrigem($origem);
        }
    }
       
       
  $SuperHeroi = new SuperHeroi('01','Harry Potter', 'magia', 1000, 10000, 'Marte');
  var_dump($SuperHeroi);
  $SuperHeroi1 = new SuperHeroi('02','Goku', 'resucita', 2000, 20000, 'Jupiter' );
  var_dump($SuperHeroi1);
  $SuperHeroi2 = new SuperHeroi('03','Jaspion', 'Super força', 3000, 30000, 'Terra' );
  var_dump($SuperHeroi2);
  $SuperHeroi3 = new SuperHeroi('04','Homen Aranha', 'Força sobre humana', 4000, 40000, 'Venus');
  var_dump($SuperHeroi3);

  echo $SuperHeroi->aumentarEnergia();
  echo "<br><br><br>";
  echo $SuperHeroi->calcularPoderMedio();

?>

<?php 

class Carro{
    private $marca;
    private $modelo;
    private $cor;
    private $anoFabricacao;
    
    function __construct($marca, $modelo, $cor, $anoFabricacao) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->anoFabricacao = $anoFabricacao;
    }
   
    function acelerar() {
        // Lógica para acelerar o carro
      }
    
      function frear() {
        // Lógica para frear o carro
      }
    
      function virar() {
        // Lógica para virar o carro para a direita ou esquerda
      }
    
      function calcularIdade() {
        $anoAtual = date("Y");
        return $anoAtual - $this->anoFabricacao;
      }
}
      $meuCarro  = new Carro("Chevrolet", "Onix", "Branco", 2022);

      $meuCarro->acelerar();
      $meuCarro->frear();
      echo "A marca do meu carro é: Chevrolet Onix de cor branco <br>";
      echo "Meu carro pode virar tanto pra esquerda, quanto pra ".$meuCarro->virar()."direita <br>";
      echo "A idade do carro é : " . $meuCarro->calcularIdade() . " ano";
      




    
    
        
    

?>
<?php 
include __DIR__.'/styles.php';
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
        echo '<h1>Simbora vrum vrum<h1>';
      }
    
      function frear() {
        echo 'Pé no freio irrrrrrrr';
      }
    
      function virar() {
        echo 'Virando, virando prum lado, virando virando pro outro...';
      }
    
      function calcularIdade() {
        $anoAtual = date('Y');
        return $anoAtual - $this->anoFabricacao;
      }
}
      $meuCarro  = new Carro('Chevrolet', 'Camaro', 'amarelo', 2022);

      $meuCarro->acelerar();
      
      $meuCarro->frear();
      echo '<h2>A marca do meu carro é Chevrolet modelo Camaro e a cor dele é amarelo <br></h2>';
      echo 'Meu carro pode virar tanto pra esquerda, quanto pra '.$meuCarro->virar().'direita <br';
      echo 'A idade do carro é : ' . $meuCarro->calcularIdade() .' ano';
      




    
    
        
    

?>
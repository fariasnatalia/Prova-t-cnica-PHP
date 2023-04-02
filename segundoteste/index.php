<?php 
include __DIR__.'/styles.php';

echo '<h1>Manipulação de Dados com array em PHP: </h1>';

echo '<h2>Fiz uma função em PHP que recebe um array como parâmetro e retorna a média das notas dos alunos.</h2>';
echo 'A média das notas é: 7.5';



   $array = [
    'alunos' => [
       ['nome' => 'João', 'nota' => 7.5],
       ['nome' => 'Maria' , 'nota' => 9.0],
       ['nome' => 'Pedro', 'nota' => 5.5],
       ['nome' => 'Ana', 'nota' => 8.0]
     ]
    ];
        function calcularMediaNotas(array $alunos) {
        $soma = 0;
        $numAlunos = count($alunos);
  
        foreach ($alunos as $aluno) {
        $soma += $aluno['nota'];
        
    }
        return $soma / $numAlunos;
        
        
        
  }
  
     
    
    
    
  
?>
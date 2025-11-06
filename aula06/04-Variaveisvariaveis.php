<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Variáveis de variáveis</title>
</head>
<body>
    <div>
    <?php
         /* 
         Variáveis de variáveis 
         
         $site = "teste";
         $$site = "codigo"; variaveis variantes com mais um $ antes 
         (cria uma variável dentro da memoria do código, considerando o conteúdo da variável $site)
         ou seja, é como se criasse uma variável $teste que recebe "codigo"
         dessa forma:
            $site = "teste";
            $$site = "codigo"; ou $teste = "codigo";
         */
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável X é $x";
        echo "<br/>A variável ABC criada recebeu o valor: $abc";
    ?>
    
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
         $usuario = [
             'Rio de Janeiro' => [
            'Nome' => 'RJ',
            'Populacao' => 17463349 ,
            'Cidades' => ['Itaguaí','Tanguá','São Gonçalo'],
            'Cidade-Itaguaí'=>['Bairro: Animal (Rua: Golfinho, Zona: Norte )','Bairro: Fungi (Rua: Cogumelo, Zona: Norte )'],
            'Cidade-Tanguá' =>['Bairro: Vegetal (Rua: Caule, Zona: Sul)','Bairro: Protista (Rua: Amoeba, Zona: Sul )'],
            'Cidade-São Gonçalo' =>['Bairro: Monera (Rua: Bacteria ,Zona: Leste  )','Bairro: Terra (Rua: Tarta, Zona: Leste )'],
            'Bairro-Animal' => ['Rua: Golfinho, nº casas: 30','Rua: Baleia, nº casas: 25'],
            'Bairro-Fungi' => ['Rua: Cogumelo  ,nº casas: 37', 'Rua: Levedos, nº casas: 40'],
            'Bairro-Vegetal' => ['Rua: Caule, nº casas: 21', 'Rua: Flor, nº casas: 24 '],
            'Bairro-Protista' =>['(Rua: Amoeba, nº casas: 23','Rua: Alga, nº casas: 19 '],
            'Bairro-Monera' =>['Rua: Bacteria, nº casas: 16','Rua: cianobac, nº casas: 25  '],
            'Bairro-Terra ' =>['Rua: Tarta, nº casas: 18','Rua: Girrafa, nº casas: 31 '],
        ],

            'Pernambuco' => [
            'Nome' => 'PE',
            'População' => 9674793,
            'Cidades' => ['Recife','Olinda','Caruaru'],
            'Cidade-Recife' =>['Bairro: Tronco (Rua: Cabeça, Zona: Norte)', 'Bairro: Torax (Rua: Coração, Zona: Norte)'],
            'Cidade-Olinda' =>['Bairro: Pulso (Rua: Braço, Zona: Leste)', 'Bairro: Mão (Rua: 15 de março, Zona: Leste)'],
            'Cidade-Caruaru' =>['Bairro: Crânio (Rua: Boca, Zona: Sul)', 'Bairro: Nariz (Rua: Orelha, Zona: Sul)'],
            'Bairro-Tronco' => ['Rua: Cabeça, nº casas: 41', 'Rua: Laringe, nº casas: 42'],
            'Bairro-Torax' =>['Rua: Coração, nº casas: 32', 'Rua: Pulmão, nº casas: 35'],
            'Bairro-Pulso' => ['Rua: Braço, nº casas: 28', 'Rua: Dedos, nº casas: 37'],
            'Bairro-Mão' =>['Rua: 15 de março, nº casas: 21','Rua: Falange, nº casas: 22'],
            'Bairro-Crânio' => ['Rua: Boca, nº casas: 15','Rua: Lingua , nº casas: 23'],
            'Bairro-Nariz' => ['Rua: Orelha, nº casas: 25', 'Rua: Bigorna, nº casas: 24'],

        ],

        'Minas Gerais' => [
        'Nome' => 'MG',
        'População'=> 21292666,
        'Cidades' => ['Belo Horizonte','Uberlândia','Contagem'],
        'Cidade-Belo Horizonte' =>['Bairro: Liberdade (Rua: São José, Zona: Oeste)','Bairro: Ibirapuera (Rua: Santo Antônio, Zona: Oeste)'],
        'Cidade-Uberlândia' =>['Bairro: Capão Redondo (Rua: São Pedro, Zona: Leste)','Bairro: Aclimação (Rua: São Francisco, Zona: Leste)'],
        'Cidade-Contagem' =>['Bairro: Riviera Paulista (Rua: Sete de Setembro, Zona: Norte)','Bairro: Vila Formosa (Rua: Avenida Brasil, Zona: Norte)'],
        'Bairro-Liberdade' =>['Rua: São José, nº casas: 12','Rua: Seis, nº casas: 14' ],
        'Bairro-Ibirapuera' =>['Rua: Santo Antônio, nº casas: 20', 'Rua: Tiradentes,  nº casas: 21'],
        'Bairro-Capão Redondo' => ['Rua: São Pedro, nº casas: 32', 'Rua: Quinze de Novembro, nº casas: 33 '],
        'Bairro: Aclimação' =>['(Rua: São Francisco, nº casas: 18','Rua: Dois, nº casas: 19'],
        'Bairro: Riviera Paulista' =>['(Rua: Sete de Setembro, nº casas: 23','Rua: Tres, nº casas: 24'],
        'Bairro: Vila Formosa'=> ['Rua: Avenida Brasil, nº casas: 43','Rua: Quatro, nº casas: 42 '],

        ],

        ];

         var_dump($usuario);


    ?>
</body>
</html>

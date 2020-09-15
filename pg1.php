<!DOCTYPE html>
<html>
<head>
<title>
		Santa Ajuda
</title>
<link rel=stylesheet type="text/css" href="css/core1.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header>
<IMG SRC="imagens/logo.jpg">
</header>
<body>
<div id="interface">

<?php
echo "<meta http-equiv=Content-Type content=text/html; charset=utf-8>";
echo '<form action="pg1_res.php" method="POST" name="prova" >';
echo '<div id="perguntas">';
echo '<hr color=blue>';//linha divisoria

echo '<t1>Questão 1</t1><br>';
echo '(Enem-2015) Um artesão fabrica vários tipos de potes cilíndricos. Mostrou a um cliente um pote de raio de base a e altura b. Esse cliente, por sua vez, quer comprar um pote com o
dobro do volume do pote apresentado. O artesão diz que possui potes com as seguintes dimensões:
. Pote I: raio a e altura 2b
. Pote II: raio 2a e altura b
. Pote III: raio 2a e altura 2b
. Pote IV: raio 4a e altura b
. Pote V: raio 4a e altura 2b
<br>
O pote que satisfaz a condição imposta pelo cliente é o:';
echo '<br>';
echo '<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />I.<br>';
echo '<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />II.<br>';
echo '<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />III.<br>';
echo '<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />IV.<br>';
echo '<br>';
echo '<hr color=blue>';//linha divisoria

echo '<t1>Questão 2</t1><br>';
echo '(Enem-2015) Uma fábrica que trabalha com matéria-prima de fibra de vidro possui diversos modelos e tamanhos de caixa-d’água. Um desses modelos é um prisma reto
com base quadrada. Com o objetivo de modificar a capacidade de armazenamento de água, está sendo construído um novo modelo, com as medidas das
arestas da base duplicadas, sem a alteração da altura, mantendo a mesma forma.
<br>
Em relação ao antigo modelo, o volume do novo modelo é:';
echo '<br>';
echo '<input type="radio" name="question-2-answers" id="question-1-answers-A" value="A" />oito vezes maior.<br>';
echo '<input type="radio" name="question-2-answers" id="question-1-answers-B" value="B" />quatro vezes maior.<br>';
echo '<input type="radio" name="question-2-answers" id="question-1-answers-C" value="C" />duas vezes maior.<br>';
echo '<input type="radio" name="question-2answers" id="question-1-answers-D" value="D" />a metade..<br>';
echo '<input type="radio" name="question-2-answers" id="question-1-answers-E" value="E" />a quarta parte.<br>';
echo '<br>';
echo '<hr color=blue>';//linha divisoria

echo '<t1>Questão 3</t1><br>';
echo '(Enem-2015) O sindicato de trabalhadores de uma empresa sugere que o piso salarial da classe seja de R$ 1 800,00, propondo um aumento percentual fixo por cada ano
dedicado ao trabalho. A expressão que corresponde à proposta salarial (s), em função do tempo de serviço (t), em anos, é s(t) = 1 800 * (1,03)t.
<br>
De acordo com a proposta do sindicato, o salário de um profissional dessa empressa com 2 anos de tempo de serviço será, em reais,:';
echo '<br>';
echo '<input type="radio" name="question-3-answers" id="question-1-answers-A" value="A" />7 416,00.<br>';
echo '<input type="radio" name="question-3-answers" id="question-1-answers-B" value="B" />3 819,24.<br>';
echo '<input type="radio" name="question-3-answers" id="question-1-answers-C" value="C" />3 709,62.<br>';
echo '<input type="radio" name="question-3answers" id="question-1-answers-D" value="D" />3 708,00.<br>';
echo '<input type="radio" name="question-3-answers" id="question-1-answers-E" value="E" />1 909,62.<br>';
echo '<br>';
echo '<hr color=blue>';//linha divisoria

echo '<t1>Questão 4</t1><br>';
echo '(Enem-2015) Num campeonato de futebol de 2012, um time sagrou-se campeão com um total de 77 pontos (P) em 38 jogos, tendo 22 vitórias (V), 11 empates (E) e 5 derrotas (D).
No critério adotado para esse ano, somente as vitórias e empates têm pontuações positivas e inteiras. As derrotas têm valor zero e o valor de cada vitória é maior que o valor
de cada empate. Um torcedor, considerando a fórmula da soma de pontos injusta, propôs aos organizadores do campeonato
que, para o ano de 2013, o time derrotado em cada partida perca 2 pontos, privilegiando os times que perdem menos ao longo do campeonato. Cada vitória e cada empate
continuariam com a mesma pontuação de 2012.
<br>
Qual a expressão que fornece a quantidade de pontos (P), em função do número de vitórias (V), do número de empates (E) e do número de derrotas (D), no sistema de
pontuação proposto pelo torcedor para o ano de 2013?:';
echo '<br>';
echo '<input type="radio" name="question-4-answers" id="question-1-answers-A" value="A" />P = 3V + E<br>';
echo '<input type="radio" name="question-4-answers" id="question-1-answers-B" value="B" />P = 3V + 2D<br>';
echo '<input type="radio" name="question-4-answers" id="question-1-answers-C" value="C" />P = 3V + E + D<br>';
echo '<input type="radio" name="question-4answers" id="question-1-answers-D" value="D" />P = 3V + E + 2D<br>';
echo '<input type="radio" name="question-4-answers" id="question-1-answers-E" value="E" />P = 3V + E + 2D<br>';
echo '<br>';
echo '<hr color=blue>';//linha divisoria

echo '<t1>Questão 5</t1><br>';
echo '(Enem-2015) Um paciente precisa ser submetido a um tratamento, sob orientação médica, com determinado medicamento. Há cinco possibilidades de medicação,
variando a dosagem e o intervalo de ingestão do medicamento. As opções apresentadas são:
A: um comprimido de 400 mg, de 3 em 3 horas, durante 1 semana;
B: um comprimido de 400 mg, de 4 em 4 horas, durante 10 dias;
C: um comprimido de 400 mg, de 6 em 6 horas, durante 2 semanas;
D: um comprimido de 500 mg, de 8 em 8 horas, durante 10 dias;
E: um comprimido de 500 mg, de 12 em 12 horas, durante 2 semanas.
Para evitar efeitos colaterais e intoxicação, a recomendação é que a quantidade total de massa da medicação ingerida, em miligramas, seja a menor possível.
<br>
Seguindo a recomendação, deve ser escolhida a opção:';
echo '<br>';
echo '<input type="radio" name="question-5-answers" id="question-1-answers-A" value="A" />A.<br>';
echo '<input type="radio" name="question-5-answers" id="question-1-answers-B" value="B" />B.<br>';
echo '<input type="radio" name="question-5-answers" id="question-1-answers-C" value="C" />C.<br>';
echo '<input type="radio" name="question-5answers" id="question-1-answers-D" value="D" />D.<br>';
echo '<input type="radio" name="question-5-answers" id="question-1-answers-E" value="E" />E.<br>';
echo '<br>';
echo '<hr color=blue>';//linha divisoria

echo '<t1>Questão 6</t1><br>';
echo '(Enem-2015) Um fornecedor vendia caixas de leite a um supermercado por R$ 1,50 a unidade. O supermercado costumava comprar 3 000 caixas de leite por mês desse
fornecedor. Uma forte seca, ocorrida na região onde o leite é produzido, forçou o fornecedor a encarecer o preço de venda em 40%. O supermercado decidiu então cortar
em 20% a compra mensal dessas caixas de leite. Após essas mudanças, o fornecedor veríficou que sua receita nas vendas ao supermercado tinha aumentado.
<br>
O aumento da receita nas vendas do fornecedor, em reais, foi de:';
echo '<br>';
echo '<input type="radio" name="question-6-answers" id="question-1-answers-A" value="A" />540.<br>';
echo '<input type="radio" name="question-6-answers" id="question-1-answers-B" value="B" />600.<br>';
echo '<input type="radio" name="question-6-answers" id="question-1-answers-C" value="C" />900.<br>';
echo '<input type="radio" name="question-6-answers" id="question-1-answers-D" value="D" />1 260.<br>';
echo '<input type="radio" name="question-6-answers" id="question-1-answers-E" value="E" />1 500.<br>';
echo '<br>';
echo '<hr color=blue>';//linha divisoria

echo '<t1>Questão 7</t1><br>';
echo '(Enem-2015) A Organização Mundial da Saúde (OMS) recomenda que o consumo diário de sal de cozinha não exceda 5 g. Sabe-se que o sal de cozinha é composto por 40% de
sódio e 60% de cloro.
<br>
Qual é a quantidade máxima de sódio proveniente do sal de cozinha, recomendada pela OMS, que uma pessoa pode ingerir por dia?:';
echo '<br>';
echo '<input type="radio" name="question-7-answers" id="question-1-answers-A" value="A" />1 250 mg<br>';
echo '<input type="radio" name="question-7-answers" id="question-1-answers-B" value="B" />2 000 mg<br>';
echo '<input type="radio" name="question-7-answers" id="question-1-answers-C" value="C" />3 000 mg<br>';
echo '<input type="radio" name="question-7-answers" id="question-1-answers-D" value="D" />5 000 mg<br>';
echo '<input type="radio" name="question-7-answers" id="question-1-answers-E" value="E" />12 500 mg<br>';
echo '<br>';
echo '<hr color=blue>';//linha divisoria

echo '<t1>Questão 8</t1><br>';
echo '(Enem-2015) Um meio de transporte coletivo que vem ganhando espaço no Brasil é a van, pois realiza, com relativo conforto e preço acessível, quase todos os tipos de transportes:
escolar e urbano, intermunicipal e excursões em geral. O dono de uma van, cuja capacidade máxima é de 15 passageiros, cobra para uma excursão até a capital de
seu estado R$ 60,00 de cada passageiro. Se não atingir a capacidade máxima da van, cada passageiro pagará mais R$ 2,00 por lugar vago.
<br>
Sendo x o número de lugares vagos, a expressão que representa o valor arrecadado V(x), em reais, pelo dono da van, para uma viagem até a capital é:';
echo '<br>';
echo '<input type="radio" name="question-8-answers" id="question-1-answers-A" value="A" />V(x) = 902x<br>';
echo '<input type="radio" name="question-8-answers" id="question-1-answers-B" value="B" />V(x) = 930x<br>';
echo '<input type="radio" name="question-8-answers" id="question-1-answers-C" value="C" />V(x) = 900 + 30x<br>';
echo '<input type="radio" name="question-8-answers" id="question-1-answers-D" value="D" />V(x) = 60x + 2x²<br>';
echo '<input type="radio" name="question-8-answers" id="question-1-answers-E" value="E" />V(x) = 900 + 30x + 2x².<br>';
echo '<br>';
echo '<hr color=blue>';//linha divisoria

echo '<t1>Questão 9</t1><br>';
echo '(Enem-2015) Uma confecção possuía 36 funcionários, alcançando uma produtividade de 5 400 camisetas por dia, com uma jornada de trabalho diária dos funcionários de 6 horas.
Entretanto, com o lançamento da nova coleção e de uma nova campanha de marketing, o número de encomendas cresceu de forma acentuada, aumentando a demanda
diária para 21 600 camisetas. Buscando atender essa nova demanda, a empresa aumentou o quadro de funcionários para 96. Ainda assim, a carga horária de
trabalho necessita ser ajustada.
<br>
Qual deve ser a nova jornada de trabalho diária dos funcionários para que a empresa consiga atender a demanda?:';
echo '<br>';
echo '<input type="radio" name="question-9-answers" id="question-1-answers-A" value="A" />1 hora e 30 minutos.<br>';
echo '<input type="radio" name="question-9-answers" id="question-1-answers-B" value="B" />2 horas e 15 minutos.<br>';
echo '<input type="radio" name="question-9-answers" id="question-1-answers-C" value="C" />9 horas.<br>';
echo '<input type="radio" name="question-9-answers" id="question-1-answers-D" value="D" />16 horas.<br>';
echo '<input type="radio" name="question-9-answers" id="question-1-answers-E" value="E" />24 horas.<br>';
echo '<br>';
echo '<hr color=blue>';//linha divisoria

echo '<t1>Questão 10</t1><br>';
echo '(Enem-2015) O prefeito de uma cidade deseja promover uma festa popular no parque municipal para comemorar o aniversário de fundação do município. Sabe-se que esse parque
possui formato retangular, com 120 m de comprimento por 150 m de largura. Além disso, para segurança das pessoas presentes no local, a polícia recomenda que a densidade média, num evento dessa natureza, não
supere quatro pessoas por metro quadrado.
<br>
Seguindo as recomendações de segurança estabelecidas pela polícia, qual é o número máximo de pessoas que poderão estar presentes na festa?:';
echo '<br>';
echo '<input type="radio" name="question-10-answers" id="question-1-answers-A" value="A" />1 000<br>';
echo '<input type="radio" name="question-10-answers" id="question-1-answers-B" value="B" />4 500<br>';
echo '<input type="radio" name="question-10-answers" id="question-1-answers-C" value="C" />18 000<br>';
echo '<input type="radio" name="question-10-answers" id="question-1-answers-D" value="D" />72 000<br>';
echo '<br>';
echo '<hr color=blue>';//linha divisoria
echo '<input type=submit value="Coreção" /></form>';
				echo '</div>';

			?>
		</div>
	</body>
</html>

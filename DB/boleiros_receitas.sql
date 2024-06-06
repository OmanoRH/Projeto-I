-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/06/2024 às 16:34
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `boleiros_receitas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `bolo`
--

CREATE TABLE `bolo` (
  `id_bolo` int(11) NOT NULL,
  `img_bolo` longblob NOT NULL,
  `nome_bolo` varchar(100) NOT NULL,
  `nome_criador` varchar(300) DEFAULT NULL,
  `data_criacao` date NOT NULL,
  `tipo_bolo` varchar(50) NOT NULL,
  `ref_ingredientes` int(11) DEFAULT NULL,
  `ref_preparo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `bolo`
--

INSERT INTO `bolo` (`id_bolo`, `img_bolo`, `nome_bolo`, `nome_criador`, `data_criacao`, `tipo_bolo`, `ref_ingredientes`, `ref_preparo`) VALUES
(1, '', 'Bolo de cenoura com cobertura de chocolate', 'Ivoneide', '2024-06-06', 'caseiro', NULL, NULL),
(2, '', 'Bolo de fubá', 'Dianete', '2024-06-06', 'caseiro', NULL, NULL),
(3, '', 'Bolo de milho', 'Maria', '2024-06-06', 'caseiro', NULL, NULL),
(4, '', 'Bolo de mandioca', 'Cláudia', '2024-06-06', 'caseiro', NULL, NULL),
(5, '', 'Bolo vulcão de brigadeiro', 'Mauricío', '2024-06-06', 'vulcão', NULL, NULL),
(6, '', 'Bolo vulcão prestígio', 'Irani', '2024-06-07', 'vulcão', NULL, NULL),
(7, '', 'Bolo vulcão leite ninho', 'Joaquim', '2024-06-04', 'vulcão', NULL, NULL),
(8, '', 'Bolo Gourmet de kitkat', 'Márcia', '2024-06-22', 'gourmet', NULL, NULL),
(9, '', 'Bolo Gourmet paçoquita', 'Lucas', '2024-06-19', 'gourmet', NULL, NULL),
(10, '', 'Bolo merengue de morango', 'Laura', '2024-06-26', 'gourmet', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id_ingredientes` int(11) NOT NULL,
  `ingredientes_massa` longtext NOT NULL,
  `ingredientes_calda` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ingredientes`
--

INSERT INTO `ingredientes` (`id_ingredientes`, `ingredientes_massa`, `ingredientes_calda`) VALUES
(1, '3 cenouras médias (cerca de 360 gramas) descascadas e cortadas em rodelas\r\n4 ovos\r\n1 xícara de chá de óleo de milho (240 ml)\r\n1 e 1/2 de chá de açúcar\r\n2 xícara de chá de farinha de trigo (280 gramas)\r\n1 colher de sopa de fermenro químico em pó (fermento para bolo) (14 gramas)\r\n1 pitada de sal (1/4 de colher de chá)\r\nManteiga e farinha de trigo para untar', '1 caixa de leite condensado (395 gramas)\r\n1 colher de sopa de manteiga sem sal (14 gramas)\r\n4 colheres de sopa de chocolate em pó (ou 7 colheres de sopa de achocolatado)\r\n1/2 caixinha de creme de leite (100 gramas)'),
(2, 'Suas ideias-chave incluíam a dicotomia apolíneo/dionisíaca, o perspectivismo, a vontade de poder, a morte de Deus, o Übermensch e o eterno retorno. Sua filosofia central é a afirmação da vida, que envolve o questionamento de qualquer doutrina que drene energias expansivas, não importando o quão histórica e socialmente predominantes sejam essas ideias.', 'O corpus literário de Lovecraft está enraizado no cosmicismo, que foi simultaneamente sua filosofia pessoal e o tema principal de sua ficção. O cosmismo postula que a humanidade é uma parte insignificante do cosmos e pode ser destruída a qualquer momento. Ele incorporou elementos de fantasia e ficção científica em suas histórias, representando a fragilidade percebida do antropocentrismo. Isso estava ligado às suas visões ambivalentes sobre o conhecimento.'),
(3, 'Suas obras foram em grande parte ambientadas em uma versão ficcional da Nova Inglaterra. O declínio civilizacional também desempenha um papel importante nas suas obras, pois ele acreditava que o Ocidente estava em declínio durante a sua vida. As primeiras visões políticas de Lovecraft eram conservadoras e tradicionalistas; além disso, ele manteve uma série de opiniões racistas durante grande parte de sua vida adulta. Após a Grande Depressão, as opiniões políticas de Lovecraft tornaram-se mais socialistas, embora permanecessem elitistas e aristocráticas.', 'Ao longo de sua vida adulta, Lovecraft nunca foi capaz de se sustentar com seus ganhos como autor e editor. Ele era praticamente desconhecido durante sua vida e foi publicado quase exclusivamente em revistas populares antes de sua morte. Um renascimento acadêmico do trabalho de Lovecraft começou na década de 1970, e ele é agora considerado um dos mais importantes autores de ficção de terror sobrenatural do século XX.'),
(4, 'Lovecraft nasceu na casa de sua família em 20 de agosto de 1890, em Providence, Rhode Island. Ele era o único filho de Winfield Scott Lovecraft e Sarah Susan (“Susie”; nascida Phillips) Lovecraft, ambos descendentes de ingleses. [1] A família de Susie tinha recursos substanciais na época do casamento, já que seu pai, Whipple Van Buren Phillips, estava envolvido em empreendimentos comerciais.', 'Após a institucionalização de seu pai, Lovecraft residiu na casa da família com sua mãe, suas tias maternas Lillian e Annie e seus avós maternos Whipple e Robie. [7] Segundo amigos da família, Susie adorava excessivamente o jovem Lovecraft, mimando-o e nunca o perdendo de vista. [8] Lovecraft mais tarde lembrou que sua mãe estava permanentemente angustiada após a doença de seu pai. Whipple se tornou uma figura paterna para Lovecraft nesta época.'),
(5, 'Embora não haja nenhuma indicação de que Lovecraft fosse particularmente próximo de sua avó, Robie, a morte dela em 1896 teve um efeito profundo sobre ele. Segundo ele, isso deixou sua família “numa tristeza da qual nunca se recuperou totalmente”. Sua mãe e tias usavam vestidos pretos de luto que o “aterrorizavam”. Foi também nessa época que Lovecraft, com aproximadamente cinco anos e meio, começou a ter pesadelos que mais tarde influenciaram seus escritos de ficção.', 'Em 1900, os vários negócios de Whipple estavam sofrendo uma recessão, o que resultou na lenta erosão da riqueza de sua família. Ele foi forçado a dispensar os empregados contratados de sua família, deixando Lovecraft, Whipple e Susie, sendo a única irmã solteira, sozinha na casa da família. [19] Na primavera de 1904, o maior empreendimento comercial de Whipple sofreu um fracasso catastrófico. Em poucos meses, ele morreu aos 70 anos devido a um derrame. Após a morte de Whipple, Susie não conseguiu sustentar financeiramente a manutenção da extensa casa da família no que restava da propriedade dos Phillips. Mais tarde naquele ano, ela foi forçada a se mudar para um pequeno duplex com o filho.'),
(6, 'Alan Mathison Turing (Londres, 23 de junho de 1912 — Wilmslow, Cheshire, 7 de junho de 1954) foi um matemático,[1] cientista da computação, lógico, criptoanalista, filósofo e biólogo teórico britânico. Turing foi altamente influente no desenvolvimento da moderna ciência da computação teórica, proporcionando uma formalização dos conceitos de algoritmo e computação com a máquina de Turing, que pode ser considerada um modelo de um computador de uso geral.', 'Ele é amplamente considerado o pai da ciência da computação teórica e da inteligência artificial.[5] Apesar dessas realizações ele nunca foi totalmente reconhecido em seu país de origem durante sua vida por ser homossexual e porque grande parte de seu trabalho foi coberto pela Lei de Segredos Oficiais.'),
(7, 'Durante a Segunda Guerra Mundial, Turing trabalhou para a Escola de Código e Cifras do Governo (GC&CS) em Bletchley Park, o centro britânico de criptoanálise que produzia ultra inteligência. Por um tempo ele liderou a Hut 8, a seção responsável pela análise criptográfica naval alemã. Lá ele desenvolveu várias técnicas para acelerar a quebra das cifras alemãs, incluindo melhorias no método de bombardeio polonês antes da guerra, bem como uma máquina eletromecânica que poderia encontrar configurações para a máquina Enigma.', 'Turing desempenhou um papel crucial na quebra de mensagens codificadas interceptadas que permitiram aos Aliados derrotar os nazistas em muitos compromissos cruciais, incluindo a Batalha do Atlântico, e ao fazê-lo os ajudou a vencer a guerra. Devido aos problemas da história contrafactual, é difícil estimar o efeito preciso que a inteligência ultra teve na guerra[6] mas foi estimado que este trabalho encurtou a guerra na Europa em mais de dois anos e salvou mais de 14 milhões de vidas.'),
(8, 'Após a guerra Turing trabalhou no Laboratório Nacional de Física, onde projetou o Mecanismo de Computação Automática, um dos primeiros projetos para um computador de programa armazenado. Em 1948 Turing ingressou no Laboratório de Máquinas de Computação de Max Newman, na Victoria University de Manchester, onde ajudou a desenvolver os computadores de Manchester[8] e se interessou por biologia matemática.', 'Turing foi processado judicialmente em 1952 por atos homossexuais: a Emenda Labouchere de 1885 determinara que indecência grosseira era uma ofensa criminal no Reino Unido. Ele aceitou o tratamento de castração química, com dietilestilbestrol, como alternativa à prisão. Turing morreu em 1954, 16 dias antes de seu 42º aniversário, por envenenamento por cianeto. Um inquérito determinou sua morte como suicídio, mas se observou que a evidência conhecida também é consistente com envenenamento acidental.'),
(9, ' A mãe de Turing, esposa de Julius, era Ethel Sara Turing (1881–1976), filha de Edward Waller Stoney, engenheiro chefe das Ferrovias Madras. Os Stoneys eram uma família de nobres protestantes anglo-irlandeses do condado Tipperary e do condado Longford, enquanto Ethel passara grande parte de sua infância no condado Clare.', NULL),
(10, 'Em 2009, após uma campanha na Internet, o primeiro-ministro britânico Gordon Brown fez um pedido de desculpas público e oficial a Turing em nome do governo britânico pela maneira terrível como foi tratado. A rainha Elizabeth II concedeu a Turing um perdão póstumo em 2013. A lei Alan Turing é agora um termo informal para uma lei britânica de 2017 que retroativamente perdoou homens advertidos ou condenados sob a legislação histórica que proibia atos homossexuais.', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `preparo`
--

CREATE TABLE `preparo` (
  `id_preparo` int(11) NOT NULL,
  `preparo_massa` longtext NOT NULL,
  `preparo_calda` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `preparo`
--

INSERT INTO `preparo` (`id_preparo`, `preparo_massa`, `preparo_calda`) VALUES
(1, 'Reúna todos os ingredientes da massa do seu bolo de cenoura de liquidificador.\r\nEm um recipiente, peneire a farinha (para deixar seu bolo mais leve, sem grumihos) e misture com o sal e fermento. Reserve;\r\nNo liquidificador, coloque as cenouras, o óleo, os ovos e o açúcar. Bata por cerca de 5 minutos e despeje a mistura em um recipiente grande\r\nGradualmente, vá adicionando a mistura de ingredientes secos e, com o auxílio de um fouet, vá misturando até tudo incorporar.\r\nAssim que ficar homogêneo, transfira para uma forma, untada e enfarinha, e leve ao forno preaquecido a 180ºC por cerca de 45 a 50 minutos.', 'Reúna todos os ingredientes da cobertura.\r\nEm uma panela, coloque todos os ingredientes (menos o creme de leite) e misture bem.\r\nLeve ao fogo médio e mexa sem parar até atingir o ponto de brigadeiro (quando começa a desgrudar do fundo da panela). Depois, é só desligar o fogo, juntar o creme de leite e misturar até incorporar.\r\nAssim que o bolo mornar, desenforme e despeje a cobertura por cima;\r\nAgora é só decorar (se quiser) e servir. Bom apetite!'),
(2, 'Jean-Paul Charles Aymard Sartre (Paris, 21 de junho de 1905 – Paris, 15 de abril de 1980) foi um filósofo, escritor e crítico francês, conhecido como representante do existencialismo. Acreditava que os intelectuais têm de desempenhar um papel ativo na sociedade. Era um artista militante, e apoiou causas políticas de esquerda com a sua vida e a sua obra.', 'ean-Paul Sartre era filho de Jean-Baptiste Marie Eymard Sartre, oficial da marinha francesa[4] e de Anne-Marie Sartre (Nascida Anne Marie Schweitzer). Quando seu filho nasceu, Jean-Baptiste tinha uma doença crônica adquirida em uma missão na Cochinchina. Após o nascimento de Jean-Paul, ele sofreu uma recaída e retirou-se com a família para Thiviers, sua terra natal, onde morreu em 21 de setembro de 1906.[5] Jean-Paul, órfão de pai, e então com 15 meses, muda-se para Meudon com sua mãe, onde passam a viver na casa de seus avós maternos.'),
(3, 'Johann Sebastian Bach (Eisenach, 31 de março de 1685[a] – Leipzig, 28 de julho de 1750) foi um compositor, cravista, mestre de capela, regente, organista, professor, violinista e violista oriundo do Sacro Império Romano-Germânico, atual Alemanha.', 'Nascido numa família de longa tradição musical, cedo mostrou possuir talento e logo tornou-se um músico completo. Estudante incansável, adquiriu um vasto conhecimento da música europeia de sua época e das gerações anteriores.'),
(4, 'Marshall Bruce Mathers III, mais conhecido pelo seu nome artístico Eminem (St. Joseph, 17 de outubro de 1972), é um rapper, compositor, produtor musical e ator estadunidense.', 'The Marshall Mathers LP e o seu terceiro disco, The Eminem Show, também conquistaram o Grammy Awards, tornando ele o primeiro artista a conquistar o prêmio de Melhor Álbum de Rap do ano por três vezes consecutivas.'),
(5, 'Rodrigo Cerqueira de Souza Machado Vieira (Niterói, 22 de setembro de 1981), mais conhecido pelo nome artístico MC Marechal é um rapper, compositor, produtor, apresentador e ativista brasileiro.[1] Iniciou sua carreira como MC no ano de 1998, tendo participado do extinto Quinto Andar e atualmente segue carreira solo.[2]', 'Iniciou sua carreira em batalhas de MCs e nas rodas de freestyle da Zoeira Hip Hop como mc residente da festa organizada por Elza Cohen na Lapa no ano de 1998, nas quais se destacava. Após, integrou o extinto grupo de rap Quinto Andar em 1999, junto com artistas como De Leve e Shawlin'),
(6, 'Crazy Frog (originally known as The Annoying Thing) is a Swedish CGI-animated character and Eurodance musician created in 2003 by actor and playwright Erik Wernquist. Marketed by the ringtone provider Jamba!, the character was originally created to accompany a sound effect produced by Daniel Malmedahl while attempting to imitate the sound of a two-stroke engine.', 'In 1997, 17-year-old Gothenburg student Daniel Malmedahl recorded himself imitating the noises produced by a two-stroke engine. He posted this on a website and caught the attention of a Swedish television researcher, who convinced Daniel to perform the sound live on air.'),
(7, 'Son Goku (孫悟空 Son Gokū?, mais conhecido apenas como Goku), cujo nome de nascimento é Kakarotto (カカロット Kakarotto?), é o protagonista da franquia Dragon Ball, criada por Akira Toriyama. Sua primeira aparição ocorreu no primeiro capítulo do mangá Dragon Ball, intitulado Bulma e Son Goku (japonês: ブルマと孫悟空 Hepburn: Buruma to Son Gokū?), publicado na revista Weekly Shōnen Jump em 3 de dezembro de 1984.', 'Como protagonista central da franquia, Son Goku aparece em todos os mangás, animes, filmes, OVAs e jogos eletrônicos da série. '),
(8, 'jogável de The Last of Us, e um personagem coadjuvante em The Last of Us: Left Behind e The Last of Us Part II, no qual ele é brevemente jogável.', 'Joel era um sobrevivente na América pós-apocalíptica que havia sido devastada pela infecção cerebral por Cordyceps .  Depois de perder sua única filha Sarah nos estágios iniciais do surto,  Joel tornou-se um contrabandista implacável e cínico eventualmente encarregado de contrabandear e proteger Ellie Williams, uma jovem que era a chave para a sobrevivência da humanidade. Joel eventualmente formou um forte vínculo com ela.'),
(9, 'Reúna todos os ingredientes da massa do seu bolo de cenoura de liquidificador.\r\nEm um recipiente, peneire a farinha (para deixar seu bolo mais leve, sem grumihos) e misture com o sal e fermento. Reserve;\r\nNo liquidificador, coloque as cenouras, o óleo, os ovos e o açúcar. Bata por cerca de 5 minutos e despeje a mistura em um recipiente grande\r\nGradualmente, vá adicionando a mistura de ingredientes secos e, com o auxílio de um fouet, vá misturando até tudo incorporar.\r\nAssim que ficar homogêneo, transfira para uma forma, untada e enfarinha, e leve ao forno preaquecido a 180ºC por cerca de 45 a 50 minutos.', 'Reúna todos os ingredientes da cobertura.\r\nEm uma panela, coloque todos os ingredientes (menos o creme de leite) e misture bem.\r\nLeve ao fogo médio e mexa sem parar até atingir o ponto de brigadeiro (quando começa a desgrudar do fundo da panela). Depois, é só desligar o fogo, juntar o creme de leite e misturar até incorporar.\r\nAssim que o bolo mornar, desenforme e despeje a cobertura por cima;\r\nAgora é só decorar (se quiser) e servir. Bom apetite!'),
(10, 'Jean-Paul Charles Aymard Sartre (Paris, 21 de junho de 1905 – Paris, 15 de abril de 1980) foi um filósofo, escritor e crítico francês, conhecido como representante do existencialismo. Acreditava que os intelectuais têm de desempenhar um papel ativo na sociedade. Era um artista militante, e apoiou causas políticas de esquerda com a sua vida e a sua obra.', 'ean-Paul Sartre era filho de Jean-Baptiste Marie Eymard Sartre, oficial da marinha francesa[4] e de Anne-Marie Sartre (Nascida Anne Marie Schweitzer). Quando seu filho nasceu, Jean-Baptiste tinha uma doença crônica adquirida em uma missão na Cochinchina. Após o nascimento de Jean-Paul, ele sofreu uma recaída e retirou-se com a família para Thiviers, sua terra natal, onde morreu em 21 de setembro de 1906.[5] Jean-Paul, órfão de pai, e então com 15 meses, muda-se para Meudon com sua mãe, onde passam a viver na casa de seus avós maternos.'),
(11, 'Johann Sebastian Bach (Eisenach, 31 de março de 1685[a] – Leipzig, 28 de julho de 1750) foi um compositor, cravista, mestre de capela, regente, organista, professor, violinista e violista oriundo do Sacro Império Romano-Germânico, atual Alemanha.', 'Nascido numa família de longa tradição musical, cedo mostrou possuir talento e logo tornou-se um músico completo. Estudante incansável, adquiriu um vasto conhecimento da música europeia de sua época e das gerações anteriores.'),
(12, 'Marshall Bruce Mathers III, mais conhecido pelo seu nome artístico Eminem (St. Joseph, 17 de outubro de 1972), é um rapper, compositor, produtor musical e ator estadunidense.', 'The Marshall Mathers LP e o seu terceiro disco, The Eminem Show, também conquistaram o Grammy Awards, tornando ele o primeiro artista a conquistar o prêmio de Melhor Álbum de Rap do ano por três vezes consecutivas.'),
(13, 'Rodrigo Cerqueira de Souza Machado Vieira (Niterói, 22 de setembro de 1981), mais conhecido pelo nome artístico MC Marechal é um rapper, compositor, produtor, apresentador e ativista brasileiro.[1] Iniciou sua carreira como MC no ano de 1998, tendo participado do extinto Quinto Andar e atualmente segue carreira solo.[2]', 'Iniciou sua carreira em batalhas de MCs e nas rodas de freestyle da Zoeira Hip Hop como mc residente da festa organizada por Elza Cohen na Lapa no ano de 1998, nas quais se destacava. Após, integrou o extinto grupo de rap Quinto Andar em 1999, junto com artistas como De Leve e Shawlin'),
(14, 'Crazy Frog (originally known as The Annoying Thing) is a Swedish CGI-animated character and Eurodance musician created in 2003 by actor and playwright Erik Wernquist. Marketed by the ringtone provider Jamba!, the character was originally created to accompany a sound effect produced by Daniel Malmedahl while attempting to imitate the sound of a two-stroke engine.', 'In 1997, 17-year-old Gothenburg student Daniel Malmedahl recorded himself imitating the noises produced by a two-stroke engine. He posted this on a website and caught the attention of a Swedish television researcher, who convinced Daniel to perform the sound live on air.'),
(15, 'Son Goku (孫悟空 Son Gokū?, mais conhecido apenas como Goku), cujo nome de nascimento é Kakarotto (カカロット Kakarotto?), é o protagonista da franquia Dragon Ball, criada por Akira Toriyama. Sua primeira aparição ocorreu no primeiro capítulo do mangá Dragon Ball, intitulado Bulma e Son Goku (japonês: ブルマと孫悟空 Hepburn: Buruma to Son Gokū?), publicado na revista Weekly Shōnen Jump em 3 de dezembro de 1984.', 'Como protagonista central da franquia, Son Goku aparece em todos os mangás, animes, filmes, OVAs e jogos eletrônicos da série. '),
(16, 'jogável de The Last of Us, e um personagem coadjuvante em The Last of Us: Left Behind e The Last of Us Part II, no qual ele é brevemente jogável.', 'Joel era um sobrevivente na América pós-apocalíptica que havia sido devastada pela infecção cerebral por Cordyceps .  Depois de perder sua única filha Sarah nos estágios iniciais do surto,  Joel tornou-se um contrabandista implacável e cínico eventualmente encarregado de contrabandear e proteger Ellie Williams, uma jovem que era a chave para a sobrevivência da humanidade. Joel eventualmente formou um forte vínculo com ela.'),
(17, 'The exact time of Resonator Encore\'s Awakening remains uncertain. According to Encore\'s reports and resonance inspection, the sheep-like entities that accompany her are considered to be manifestations of her imagination and psychological state. They are believed to represent her Forte abilities.', NULL),
(18, 'Encore bears a Tacet Mark on her upper back, and Post-Awakening examinations have revealed minor physical mutations, including wool-like hair tips. In times of heightened emotional states, she may also manifest sheep-like horns, requiring caution from testing personnel.', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `bolo`
--
ALTER TABLE `bolo`
  ADD PRIMARY KEY (`id_bolo`),
  ADD KEY `ref_ingredientes` (`ref_ingredientes`),
  ADD KEY `ref_preparo` (`ref_preparo`);

--
-- Índices de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id_ingredientes`);

--
-- Índices de tabela `preparo`
--
ALTER TABLE `preparo`
  ADD PRIMARY KEY (`id_preparo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bolo`
--
ALTER TABLE `bolo`
  MODIFY `id_bolo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id_ingredientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `preparo`
--
ALTER TABLE `preparo`
  MODIFY `id_preparo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `bolo`
--
ALTER TABLE `bolo`
  ADD CONSTRAINT `bolo_ibfk_1` FOREIGN KEY (`ref_ingredientes`) REFERENCES `ingredientes` (`id_ingredientes`),
  ADD CONSTRAINT `bolo_ibfk_2` FOREIGN KEY (`ref_preparo`) REFERENCES `preparo` (`id_preparo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

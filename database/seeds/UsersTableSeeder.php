<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {

        User::create([
            'name' => 'Bob Marley',
            'email' => 'bob@gmail.com',
            'password' => '$2y$10$74OPjIwSdjl.uS7crJw.9eh48vQklcgHHxVVDNFVDmrsh09kT.E/W',
            'occupation' => 'Morto - King of Reggae',
            'biography' => 'Robert Nesta Marley, mais conhecido como Bob Marley, foi um cantor, guitarrista e compositor jamaicano, o mais conhecido músico de reggae de todos os tempos, famoso por popularizar o género. Marley já vendeu mais de 75 milhões de discos.',
            'website1' => 'https://pt.wikipedia.org/wiki/Bob_Marley',
            'areas' => 'SAÚDE, EDUCAÇÃO, SOCIAL, FOME, DESIGUALDADE',
            'district' => 'Brasilândia',
            'city' => 'São Paulo',
            'uf' => 'SP',
            'avatar' => 'images/bob.jpg',
            'remember_token' => 'teste'
        ]);

        User::create([
            'name' => 'Bill Gates',
            'email' => 'bill@gmail.com',
            'password' => '$2y$10$74OPjIwSdjl.uS7crJw.9eh48vQklcgHHxVVDNFVDmrsh09kT.E/W',
            'occupation' => 'Empresário',
            'biography' => 'William Henry Gates III mais conhecido como Bill Gates, é um magnata, empresário, diretor executivo, investidor, filantropo e autor americano, que ficou conhecido por fundar junto com Paul Allen a Microsoft, a maior e mais conhecida empresa de software do mundo em termos de valor de mercado.',
            'website1' => 'https://pt.wikipedia.org/wiki/Bill_Gates',
            'areas' => 'SAÚDE, EDUCAÇÃO, SOCIAL, TECNOLOGIA',
            'district' => 'Medina',
            'city' => 'São Paulo',
            'uf' => 'SP',
            'avatar' => 'images/bill.jpg',
            'remember_token' => 'teste'
        ]);

        User::create([
            'name' => 'Heisenberg',
            'email' => 'heisenberg@gmail.com',
            'password' => '$2y$10$74OPjIwSdjl.uS7crJw.9eh48vQklcgHHxVVDNFVDmrsh09kT.E/W',
            'occupation' => 'Quimico',
            'biography' => 'Heisenberg (7 de Setembro de 1958 - 7 de Setembro de 2010), foi um personagem fictício da série de televisão dramática norte-americana Breaking Bad. Foi criado por Vince Gilligan e é interpretado por Bryan Cranston.',
            'website1' => 'https://pt.wikipedia.org/wiki/Breaking_Bad',
            'areas' => 'Saúde, Meio Hambiente, Dependentes Químicos, Medicamentos, Geração de Renda',
            'district' => 'vila Albuquerque',
            'city' => 'São Paulo',
            'uf' => 'SP',
            'avatar' => 'images/Heisenberg.jpg',
            'remember_token' => 'teste'
        ]);

        User::create([
            'name' => 'Frida Kahlo',
            'email' => 'frida@gmail.com',
            'password' => '$2y$10$74OPjIwSdjl.uS7crJw.9eh48vQklcgHHxVVDNFVDmrsh09kT.E/W',
            'occupation' => 'Pintora',
            'biography' => 'Magdalena Carmen Frida Kahlo y Calderón (Coyoacán, 6 de julho de 1907 — Coyoacán, 13 de julho de 1954) foi uma pintora mexicana que criou muitos retratos, auto-retratos e obras inspiradas na natureza e nos artefatos do México. Inspirada na cultura popular do país, ela empregou um estilo de arte popular ingênua para explorar questões de identidade, pós-colonialismo, gênero, classe e raça na sociedade mexicana.',
            'website1' => 'https://pt.wikipedia.org/wiki/Frida_Kahlo',
            'areas' => 'Arte, Cultura, Doação de Orgãos',
            'district' => 'vila Albuquerque',
            'city' => 'São Paulo',
            'uf' => 'SP',
            'avatar' => 'images/frida.jpg',
            'remember_token' => 'teste'
        ]);

        User::create([
            'name' =>  'Ferréz',
            'email' => 'ferrez@gmail.com',
            'password' => '$2y$10$74OPjIwSdjl.uS7crJw.9eh48vQklcgHHxVVDNFVDmrsh09kT.E/W',
            'occupation' => 'Escritor e Empreendedor',
            'biography' => 'Ferréz, nome artístico de Reginaldo Ferreira da Silva (São Paulo, 1975) romancista, contista, poeta e empreendedor. Sempre á considerada literatura marginal por ser desenvolvida na periferia das grandes cidades e tratar de temas relacionados a este universo. Dotado de linguagem influenciada pela variante linguística usada na periferia de São Paulo, Ferréz já publicou diversos livros, entre eles Fortaleza da Desilusão (1997), Capão Pecado (2001), Amanhecer Esmeralda (2005) e Ninguém É Inocente em São Paulo (2006).',
            'website1' => 'https://pt.wikipedia.org/wiki/Ferr%C3%A9z',
            'areas' => 'Educação, Arte, Cultura, Direitos Humanos, Moradia',
            'district' => 'Capão Redondo',
            'city' => 'São Paulo',
            'uf' => 'SP',
            'avatar' => 'images/ferrez.jpg',
            'remember_token' => 'teste'
        ]);

        User::create([
            'name' => 'Marielle Franco',
            'email' =>  'marielle@gmail.com',
            'password' => '$2y$10$74OPjIwSdjl.uS7crJw.9eh48vQklcgHHxVVDNFVDmrsh09kT.E/W',
            'occupation' =>  'Ativista Política',
            'biography' => 'Marielle Francisco da Silva, conhecida como Marielle Franco (Rio de Janeiro, 27 de julho de 1979 – Rio de Janeiro, 14 de março de 2018), foi uma socióloga, política, feminista e defensora dos direitos humanos brasileira. Filiada ao Partido Socialismo e Liberdade (PSOL), elegeu-se vereadora do Rio de Janeiro para a Legislatura 2017-2020, durante a eleição municipal de 2016, com a quinta maior votação.',
            'website1' => 'https://pt.wikipedia.org/wiki/Marielle_Franco',
            'areas' => 'Direitos Humanos, Apoio a Mulheres, Saúde, Moradia, Educação',
            'district' => 'Jardim Paraíso',
            'city' => 'São Paulo',
            'uf' => 'SP',
            'avatar' => 'images/marielle.jpg',
            'remember_token' =>  'teste'
        ]);

        User::create([
            'name' => 'Martin Luther King Jr',
            'email' => 'martin@gmail.com',
            'password' => '$2y$10$74OPjIwSdjl.uS7crJw.9eh48vQklcgHHxVVDNFVDmrsh09kT.E/W',
            'occupation' => 'Ativista Política',
            'biography' => 'Martin Luther King Jr. (Atlanta, 15 de janeiro de 1929 — Memphis, 4 de abril de 1968) foi um pastor protestante e ativista político estadunidense. Tornou-se um dos mais importantes líderes do movimento dos direitos civis dos negros nos Estados Unidos, e no mundo, com uma campanha de não violência e de amor ao próximo.',
            'website1' => 'https://pt.wikipedia.org/wiki/Martin_Luther_King_Jr.',
            'areas' => 'Direitos Humanos,Moradia, Situações de Emergência, Educação',
            'district' => 'Jardim dos Guerreiros',
            'city' => 'São Paulo',
            'uf' => 'SP',
            'avatar' => 'images/martin.jpg',
            'remember_token' => 'teste'
        ]);

        User::create([
            'name' => 'Malala Yousafzai',
            'email' => 'malala@gmail.com',
            'password' => '$2y$10$74OPjIwSdjl.uS7crJw.9eh48vQklcgHHxVVDNFVDmrsh09kT.E/W',
            'occupation' => 'Ativista Política',
            'biography' => 'Malala Yousafzai, Swat, 12 de julho de 1997) é uma ativista paquistanesa. Foi a pessoa mais nova a ser laureada com um prémio Nobel. É conhecida principalmente pela defesa dos direitos humanos das mulheres e do acesso à educação na sua região natal do vale do Swat na província de Khyber Pakhtunkhwa, no nordeste do Paquistão, onde os talibãs locais impedem as jovens de frequentar a escola. Desde então, o ativismo de Malala tornou-se um movimento internacional.',
            'website1' => 'https://pt.wikipedia.org/wiki/Malala_Yousafzai',
            'areas' => 'Direitos Humanos, Apoio a Mulheres, Educação',
            'district' => 'Parque da esperança',
            'city' => 'São Paulo',
            'uf' => 'SP',
            'avatar' => 'images/malala.jpg',
            'remember_token' => 'teste'
        ]);

        User::create([
            'name' => 'Dagmar - Tia Dag',
            'email' => 'dag@gmail.com',
            'password' => '$2y$10$74OPjIwSdjl.uS7crJw.9eh48vQklcgHHxVVDNFVDmrsh09kT.E/W',
            'occupation' => 'Ativista Política e Educadora',
            'biography' => 'Garota criada com conforto em São Paulo, pedagoga por formação, discípula de Paulo Freire e já àquela altura com larga experiência esse atender crianças e jovens esse situações extremas, Dagmar, com o apoio do marido, o artista plástico Saulo Garroux, transformou sua ideia em uma das mais bem-sucedidas experiências de educação e amor da sua vida.',
            'website1' => 'http://www.casadozezinho.org.br/quem-somos-tia-dag.php',
            'areas' => 'Direitos Humanos, Educação, Apoio a Mulheres',
            'district' => 'Capão redondo',
            'city' => 'São Paulo',
            'uf' => 'SP',
            'avatar' => 'images/dag.jpg',
            'remember_token' => 'teste'
        ]);

    }

}

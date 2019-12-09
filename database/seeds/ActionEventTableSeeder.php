<?php

use Illuminate\Database\Seeder;
use App\ActionEvent;

class ActionEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {

        // AÇÕES DA ONG CÃO SEM DONO
        ActionEvent::create([
            'id_ong' => 2,
            'title' => 'Apadrinhamento de Animais',
            'description' => 'O apadrinhamento de um cão é uma forma de conseguirmos recursos fixos para ajudar na tarefa diária de cuidar de nossos animais, além de ter mais tranquilidade e poder planejar melhor nossas ações. Sendo assim você estará contribuindo diretamente para o seu bem estar e para que possamos fornecer o máximo de condições de saúde e oportunidade ao animal durante sua estadia em nosso Lar Transitório.',
            'address' => 'Rua Da adoção, numero 1000',
            'district' => 'Vila Adoção',
            'city' => 'São Paulo',
            'uf' => 'SP',

            'image' => 'images/apadrinhamento.jpg'
        ]);

        ActionEvent::create([
            'id_ong' => 1,
            'title' => 'Palestra Fortificando mulheres',
            'description' => 'Abrindo novos horizontes para o crescimento feminino na vida pessoal, profissional social e política. Unidas podemos transformar o mundo em um lugar muito melhor para se viver!!!',
            'address' => 'Rua Do Evento, numero 560',
            'district' => 'Jardim empoderamento',
            'city' => 'São Paulo',
            'uf' => 'SP',

            'image' => 'images/palestra.jpg'
        ]);

        ActionEvent::create([
            'id_ong' => 3,
            'title' => 'Aprender brincando',
            'description' => 'Contempla a atuação de crianças e adolescentes no cotidiano de atividades socioeducacionais. Parceiro: Serviço de Convivência e Fortalecimento de Vínculos (SCFV) e Centro para Criança e Adolescente (CCA)',
            'address' => 'Av. Da Educação, 1000',
            'district' => 'Vila Ensino',
            'city' => 'São Paulo',
            'uf' => 'SP',

            'image' => 'images/aprender.jpg'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Segment;
 
class SegmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $segments = array('Animais','Apoio a Mulheres','Arte','Crianças','Cultura','Dependentes Químicos',
        'Direitos Humanos','Doação de Órgãos','Educação','Educação Ambiental','Finanças',
        'Geração de Renda','Idosos','Medicamentos','Meio Ambiente','Moradia','Reciclagem',
        'Saúde','Situações de Emergência','Tecnologia','Trabalho','de Voluntariado','Outras');

            foreach($segments as $value):
                Segment::create([
                    'name' => $value
            ]);
            endforeach;
    }
}

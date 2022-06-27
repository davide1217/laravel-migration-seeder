<?php
use App\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) {

            $new_train = new Train();

            $new_train->Azienda = $faker->text(25);
            $new_train->Stazione_di_partenza = $faker->text(25);
            $new_train->Stazione_di_arrivo = $faker->text(25);
            $new_train->Orario_di_partenza = $faker->time();
            $new_train->Orario_di_arrivo = $faker->time();
            $new_train->Codice_Treno = $faker->numberBetween(1000, 9999);
            $new_train->Numero_Carrozze = $faker->numberBetween(5, 15);
            $new_train->In_orario = $faker->text(25);
            $new_train->Cancellato = $faker->numberBetween(0, 1);

            $new_train->save();
        }
    }
}

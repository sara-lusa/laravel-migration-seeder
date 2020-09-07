<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Villain;

class VillainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i<7 ; $i++) {
        $new_villain = new Villain();
        $new_villain->name = $faker->name;
        $new_villain->nickname = $faker->lastName;
        $new_villain->evilpower = $faker->randomElement([
          'Controllo Elettricità',
          'Super Forza',
          'Controllo della Menta',
          'Occhi Laser',
          'Dominio del fuoco'
        ]);
        $new_villain->age = $faker->numberBetween(10, 100);
        $new_villain->Imprigionato = $faker->boolean();
        $new_villain->save();
      }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Hero;

class HeroesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<7 ; $i++) {
          $new_hero = new Hero();
          $new_hero->name = $faker->name;
          $new_hero->nickname = $faker->lastName;
          $new_hero->superpower = $faker->randomElement([
            'Volare',
            'Essere Invisibile',
            'Leggere la Mente',
            'Super Forza',
            'Super Velocità',
            'Telecinesi',
            'Controllo degli Elementi'
          ]);
          $new_hero->age = $faker->numberBetween(10, 100);
          $new_hero->save();
        }
    }
}

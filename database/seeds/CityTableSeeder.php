<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = __DIR__.'/current.city.list.min.json';
        $cities = json_decode(file_get_contents($path), true);
        foreach ($cities as $city) {
            \App\City::create($city);
        }
    }
}

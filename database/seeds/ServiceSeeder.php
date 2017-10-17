<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$service = new Service([
            'title' => 'Кератиновое выпрямление и востановление',
            'description'=>'Кератиновое выпрямление и востановление описание',
            'image' => 'keratin.jpg',
            'alias' => 'keratinovoe_vipryamlenie'
        ]);
        $service->save();

        $service = new Service([
            'title' => 'Полировка волос',
            'description'=>'Полировка волос описание',
            'image' => 'polir.jpg',
            'alias' => 'polirovka_volos'
        ]);
        $service->save();

        $service = new Service([
            'title' => 'Ботокс волос',
            'description'=>'Ботокс волос описание',
            'image' => 'botox.jpg',
            'alias' => 'botoks_volos'
        ]);
        $service->save();

        $service = new Service([
            'title' => 'Флисинг',
            'description'=>'Флисинг волос описание',
            'image' => 'flising.jpg',
            'alias' => 'flising'
        ]);
        $service->save();
    }
}
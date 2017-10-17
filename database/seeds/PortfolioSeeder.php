<?php

use Illuminate\Database\Seeder;
use App\Portfolio;
class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolio = new Portfolio([
            'title' => 'Кератиновое выпрямление и востановление',
            'image' => 'keratin.jpg',
        ]);

        $portfolio->save();

        $portfolio = new Portfolio([
            'title' => 'Полировка волос',
            'image' => 'polir.jpg',
        ]);
        $portfolio->save();

        $portfolio = new Portfolio([
            'title' => 'Ботокс волос',
            'image' => 'botox.jpg',
        ]);
        $portfolio->save();

        $portfolio = new Portfolio([
            'title' => 'Флисинг',
            'image' => 'flising.jpg',
        ]);
        $portfolio->save();
    }
}

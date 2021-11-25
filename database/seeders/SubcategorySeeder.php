<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $subcategories = [

            /* Celulares y tablets */
            [
                'category_id' => 1,
                'name' => 'dental',
                'slug' => Str::slug('dental'),
                'color' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesorios para celulares'),
            ],

            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
            ],

            /* TV, audio y video */

            [
                'category_id' => 2,
                'name' => 'dentales',
                'slug' => Str::slug('dentales'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),
            ],

            [
                'category_id' => 2,
                'name' => 'Audio para autos',
                'slug' => Str::slug('Audio para autos'),
            ],
         

        ];

        foreach ($subcategories as $subcategory) {
            # code...
            Subcategory::create($subcategory);
        }
    }
}

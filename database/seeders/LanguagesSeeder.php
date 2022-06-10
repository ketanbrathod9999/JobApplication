<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Languages;
class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        $LanguagesArr = array(
            array('id'=>1,'name'=> 'Hindi','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>2,'name'=> 'English','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>3,'name'=> 'Gujarati','created_at'=> $datetime,'updated_at'=> $datetime),
        );

        Languages::insert($LanguagesArr);
    }
}

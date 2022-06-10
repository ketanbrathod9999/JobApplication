<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Technologies;
class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        $TechnologiesArr = array(
            array('id'=>1,'name'=> 'PHP','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>2,'name'=> 'MySQL','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>3,'name'=> 'Laravel','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>4,'name'=> 'Oracle','created_at'=> $datetime,'updated_at'=> $datetime),
        );

        Technologies::insert($TechnologiesArr);
    }
}

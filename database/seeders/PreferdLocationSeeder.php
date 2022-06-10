<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PreferdLocation;
class PreferdLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        $PreferdLocationArr = array(
            array('id'=>1,'name'=> 'Rajkot','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>2,'name'=> 'Ahmedabad','created_at'=> $datetime,'updated_at'=> $datetime),
        );

        PreferdLocation::insert($PreferdLocationArr);
    }
}

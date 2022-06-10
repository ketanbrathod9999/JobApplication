<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RelationShipStatus;
class RelationShipStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        $RelationShipStatusArr = array(
            array('id'=>1,'name'=> 'Single','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>2,'name'=> 'Married','created_at'=> $datetime,'updated_at'=> $datetime),
        );

        RelationShipStatus::insert($RelationShipStatusArr);
    }
}

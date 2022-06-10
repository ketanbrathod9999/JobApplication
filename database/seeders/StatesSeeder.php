<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\States;
class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        $StateArr = array(
            array('id'=>1,'name'=> 'ANDAMAN AND NICOBAR ISLANDS','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>2,'name'=> 'ANDHRA PRADESH','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>3,'name'=> 'ARUNACHAL PRADESH','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>4,'name'=> 'ASSAM','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>5,'name'=> 'BIHAR','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>6,'name'=> 'CHATTISGARH','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>7,'name'=> 'CHANDIGARH','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>8,'name'=> 'DAMAN AND DIU','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>9,'name'=> 'DELHI','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>10,'name'=> 'DADRA AND NAGAR HAVELI','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>11,'name'=> 'GOA','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>12,'name'=> 'GUJARAT','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>13,'name'=> 'HIMACHAL PRADESH','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>14,'name'=> 'HARYANA','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>15,'name'=> 'JAMMU AND KASHMIR','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>16,'name'=> 'JHARKHAND','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>17,'name'=> 'KERALA','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>18,'name'=> 'KARNATAKA','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>19,'name'=> 'LAKSHADWEEP','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>20,'name'=> 'MEGHALAYA','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>21,'name'=> 'MAHARASHTRA','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>22,'name'=> 'MANIPUR','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>23,'name'=> 'MADHYA PRADESH','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>24,'name'=> 'MIZORAM','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>25,'name'=> 'NAGALAND','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>26,'name'=> 'ORISSA','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>27,'name'=> 'PUNJAB','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>28,'name'=> 'PONDICHERRY','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>29,'name'=> 'RAJASTHAN','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>30,'name'=> 'SIKKIM','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>31,'name'=> 'TAMIL NADU','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>32,'name'=> 'TRIPURA','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>33,'name'=> 'UTTARAKHAND','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>34,'name'=> 'UTTAR PRADESH','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>35,'name'=> 'WEST BENGAL','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>36,'name'=> 'TELANGANA','created_at'=> $datetime,'updated_at'=> $datetime)
        );

        States::insert($StateArr);
    }
}

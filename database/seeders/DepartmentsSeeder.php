<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departments;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        $DepartmentsArr = array(
            array('id'=>1,'name'=> 'Design','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>2,'name'=> 'Marketing','created_at'=> $datetime,'updated_at'=> $datetime),
            array('id'=>3,'name'=> 'Development','created_at'=> $datetime,'updated_at'=> $datetime),
        );

        Departments::insert($DepartmentsArr);
    }
}

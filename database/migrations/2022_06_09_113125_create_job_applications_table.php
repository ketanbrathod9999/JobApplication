<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number',15)->nullable();
            $table->enum('gender', ['Male', 'Female'])->default('Male');
            $table->string('city')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('zip_code',8)->nullable();
            $table->unsignedBigInteger('relationship_status_id')->nullable();
            $table->date('date_of_birth')->nullable();
            
            $table->string('ssc_board_name')->nullable();
            $table->string('ssc_passing_year')->nullable();
            $table->decimal('ssc_percentage',8,2)->nullable();

            $table->string('hsc_board_name')->nullable();
            $table->string('hsc_passing_year')->nullable();
            $table->decimal('hsc_percentage',8,2)->nullable();

            $table->string('bachelor_course_name')->nullable();
            $table->string('bachelor_university')->nullable();
            $table->string('bachelor_passing_year')->nullable();
            $table->decimal('bachelor_percentage',8,2)->nullable();

            $table->string('master_course_name')->nullable();
            $table->string('master_university')->nullable();
            $table->string('master_passing_year')->nullable();
            $table->decimal('master_percentage',8,2)->nullable();

            $table->unsignedBigInteger('prefered_location_id')->nullable();
            $table->string('notice_period')->nullable();
            $table->decimal('expacted_ctc',8,2)->nullable();
            $table->decimal('current_ctc',8,2)->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            
            $table->timestamps();

            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->foreign('relationship_status_id')->references('id')->on('relationship_status')->onDelete('cascade');
            $table->foreign('prefered_location_id')->references('id')->on('preferd_location')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoterRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voter_role', function (Blueprint $table) {
            $table->id();
            $table->string('student');
            $table->string('candidate');
            $table->string(' staff');
            $table->string('teacher');
            $table->string('academic_staff');
            $table->string('alumnie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voter_role');
    }
}

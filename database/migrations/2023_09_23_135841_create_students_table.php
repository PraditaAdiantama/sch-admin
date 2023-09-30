<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer("nis");
            $table->string("name");
            $table->enum("gender", [
                "Laki-laki",
                "perempuan"
            ]);
            $table->string("address");
            $table->date("birth_date");
            $table->string("birth_place");
            $table->foreignId("major_id")->references("id")->on("majors");
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
        Schema::dropIfExists('students');
    }
};

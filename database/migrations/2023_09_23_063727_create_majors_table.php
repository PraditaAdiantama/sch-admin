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
        Schema::create('majors', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("school_year");
            $table->enum("grade", [
                "X", "XI", "XII"
            ]);
            $table->enum("major", [
                "Broadcast TV & Film",
                "Desain Komunikasi Visual",
                "Kimia Analisis",
                "Teknik Instalasi Tenaga Listrik",
                "Teknik Otomasi Industri",
                "Teknik Jaringan Komputer dan Telekomunikasi",
                "Teknik Otomotif",
                "Teknik Las",
                "Teknik Mesin",
            ]);
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
        Schema::dropIfExists('majors');
    }
};

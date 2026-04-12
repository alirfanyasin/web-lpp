<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('visitings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->string('phone');
            $table->string('email');
            $table->text('address');
            $table->string('wbp_name');
            $table->string('wbp_registration_number');
            $table->string('relationship');
            $table->tinyInteger('number_of_visitor')->unsigned();
            $table->date('visit_date');
            $table->string('visit_session');
            $table->string('ktp_file');
            $table->string('is_agree');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitings');
    }
};

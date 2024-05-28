<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_penipus_table.php

    public function up()
    {
    Schema::create('penipus', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('alamat');
        $table->string('telepon');
        $table->string('email')->unique();
        $table->text('keterangan');
        $table->timestamps();
    });
}

public function down()
    {
    Schema::dropIfExists('penipus');
    }

};

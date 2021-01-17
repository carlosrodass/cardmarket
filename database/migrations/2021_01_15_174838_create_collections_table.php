<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('collections', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

        DB::statement("
        CREATE TABLE collections(
            id   int (255) auto_increment not null,
            name  varchar(255),
            symbol  varchar(255),
            edit_date  DATE,
            PRIMARY KEY(id)
        );");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collections');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('cards', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

        DB::statement("
            CREATE TABLE cards(
                id_user int not null,
                id   int (255) auto_increment not null,
                name  varchar(255),
                description  varchar(255),
                collection  varchar(255),
                PRIMARY KEY(id),
                INDEX(id_user),
                    FOREIGN KEY (id_user)
                    REFERENCES users(id)
                    ON DELETE CASCADE
                    ON UPDATE NO ACTION
            );");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}

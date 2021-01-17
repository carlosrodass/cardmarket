<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('card_collections', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

        DB::statement("
        CREATE TABLE card__collections(
            id_card int not null,
            id_collection int not null,
            id   int (255) auto_increment not null,
            PRIMARY KEY(id),

            INDEX(id_card),
                FOREIGN KEY (id_card)
                REFERENCES cards(id)
                ON DELETE CASCADE
                ON UPDATE NO ACTION,


            INDEX(id_collection),
                FOREIGN KEY (id_collection)
                REFERENCES collections(id)
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
        Schema::dropIfExists('card_collections');
    }
}

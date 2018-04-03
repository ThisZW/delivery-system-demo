<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_options', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
<<<<<<< HEAD
            $table->enum('option_type', ["size","topping","option"]);
=======
            $table->integer('option_type');
            $table->enum('option_type, ["size","topping","option"]');
>>>>>>> 8d36a80... menu page done
            $table->integer('add_on_price');//this is a add-on price
            $table->char('option_name',100);
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
        Schema::dropIfExists('product_options');
    }
}
        
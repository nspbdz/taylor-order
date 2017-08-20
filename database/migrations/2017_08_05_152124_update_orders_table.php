<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('phone', 20)->nullable()->change();
            $table->string('image_1')->nullable()->change();
            $table->string('image_2')->nullable()->change();
            $table->string('image_3')->nullable()->change();
            $table->string('image_4')->nullable()->change();
            $table->float('estimate_price')->nullable()->change();
            $table->float('down_payment')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

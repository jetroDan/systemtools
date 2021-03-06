<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('quantity');
            $table->string('description');
            $table->string('partnumber');
            $table->string('serialnumber');
            $table->decimal('sparepartsprice');
            $table->decimal('subtotal');
            $table->decimal('iva');
            $table->decimal('total');
            $table->integer('users_id');
            $table->integer('spareparts_id');
            $table->integer('company_id');
            $table->integer('machines_id');
            $table->integer('statusorders_id');
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
        Schema::dropIfExists('orders');
    }
}

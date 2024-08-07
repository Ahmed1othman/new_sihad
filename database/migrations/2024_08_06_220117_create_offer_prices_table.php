<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_prices', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Name of the person submitting the form');
            $table->string('phone_number')->comment('Phone number of the person submitting the form');
            $table->text('required_service')->comment('Details of the product or service');
            $table->decimal('offer_price', 10, 2)->nullable()->comment('Offer price submitted');
            $table->decimal('required_meters', 10, 2)->comment('required_meters');
            $table->date('required_date')->comment('required date');
            $table->enum('offer_price_status',['pending','processed','ignored'])->default('pending');
            $table->text('details')->nullable()->comment('details');
            $table->text('offer_price_follow_comments')->nullable()->comment('Additional comments or details');
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
        Schema::dropIfExists('offer_prices');
    }
}

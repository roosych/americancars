<?php

use App\Models\Available;
use App\Models\Brand;
use App\Models\Carmodel;
use App\Models\Drive;
use App\Models\Fuel;
use App\Models\Transmission;
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
        Schema::create('cars', function (Blueprint $table) {
            $table->id()->from(100);

            $table->foreignIdFor(Brand::class)
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignIdFor(Carmodel::class)
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignIdFor(Drive::class)
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignIdFor(Available::class)
                ->constrained();
//                ->cascadeOnDelete()
//                ->cascadeOnUpdate();

            $table->foreignIdFor(Transmission::class)
                ->constrained();
//                ->cascadeOnDelete()
//                ->cascadeOnUpdate();

            $table->foreignIdFor(Fuel::class)
                ->constrained();
//                ->cascadeOnDelete()
//                ->cascadeOnUpdate();


            $table->mediumText('description')->nullable();
            $table->integer('price')->nullable();
            $table->integer('currency')->default(1);

            $table->integer('mileage')->default(1);
            $table->string('mileage_total')->nullable();
            $table->integer('engine')->nullable();
            $table->integer('year')->nullable();
            $table->string('vin')->nullable();

            $table->boolean('active')->default(true);

            $table->string('metatitle')->nullable();
            $table->string('metadescription')->nullable();
            $table->string('keywords')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};

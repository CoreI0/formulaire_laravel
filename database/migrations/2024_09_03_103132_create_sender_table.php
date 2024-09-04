<?php

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
        Schema::create('sender', function (Blueprint $table) {
            $table->id();
            $table->string('Code_postal')->default("");
			$table->string('Ville')->default("");
			$table->string('Rue')->default("");
			$table->string('Numero')->default("");
			$table->string('Société')->default("");
			$table->string('Adresse')->default("");
			$table->string('Code_Postal_Société')->default("");
			$table->string('Ville_Société')->default("");
			$table->string('type_de_Connexion')->default(""); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sender');
    }
};

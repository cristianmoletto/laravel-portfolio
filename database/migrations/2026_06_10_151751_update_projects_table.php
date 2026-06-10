<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table){
            
            // aggiungiamo la colonna category_id e la costrain
            $table->foreignId('category_id')->nullable()->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table){
            
            // togliamo la costrain
            $table->dropForeign('projects_category_id_foreign');
            
            // togliamo la colonna category_id
            $table->dropColumn("category_id");

        });
    }
};

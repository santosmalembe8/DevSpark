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
           Schema::table('responses', function (Blueprint $table) {
            // Primeiro remove a foreign key antiga (se existir)
            $table->dropForeign(['intention_id']);

            // Renomeia a coluna
            $table->renameColumn('intention_id', 'intent_id');
        });

        Schema::table('responses', function (Blueprint $table) {
            // Recria a foreign key com o novo nome
            $table->foreign('intent_id')->references('id')->on('intents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('responses', function (Blueprint $table) {
            $table->dropForeign(['intent_id']);
            $table->renameColumn('intent_id', 'intention_id');
            $table->foreign('intention_id')->references('id')->on('intents')->onDelete('cascade');
        });
    }
};

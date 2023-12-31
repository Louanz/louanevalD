<?php

use App\Models\Reseau;
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
        Schema::create('ordinateurs', function (Blueprint $table) {
            $table->id();
            $table->integer('num_serie');
            $table->string('modele', 20);
            $table->string('marque',30);
            $table->date('date_service')->nullable();
            $table->foreignIdFor(Reseau::class, 'reseau')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordinateurs');
    }
};

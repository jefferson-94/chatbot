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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conversation_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete(); // se foi atendente
            $table->enum('sender_type', ['client', 'user', 'ai']);
            $table->text('content')->nullable(); // texto da mensagem
            $table->json('media')->nullable(); // arquivos (imagem, áudio, etc.)
            $table->timestamp('sent_at')->nullable();
            $table->timestamps(); // cria created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};

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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('ticket_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('token_number');
            $table->string('telephone');
            $table->unsignedBigInteger('services_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->dateTime('used_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('services_id','token_services')
                ->references('id')
                ->on('services')
                ->onDelete('restrict');

            $table->foreign('status_id','token_status')
                ->references('id')
                ->on('statuses')
                ->onDelete('restrict');

            $table->foreign('user_id','token_user')
                ->references('id')
                ->on('users')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ticket_tokens', function (Blueprint $table) {
            $table->dropForeign('token_services');
            $table->dropForeign('token_status');
            $table->dropForeign('token_user');
        });
       Schema::dropIfExists('statuses');
       Schema::dropIfExists('services');
       Schema::dropIfExists('ticket_tokens');
    }
};

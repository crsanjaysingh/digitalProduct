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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('category_id'); 
            $table->string('category_name');
            $table->string('category_slug')->unique();
            $table->text('category_description')->nullable();
            $table->integer('category_status')->unsigned()->default(0)->comment('0=>pending,1=>Active');
            $table->integer('category_is_deleted')->unsigned()->default(0);
            $table->integer('category_added_by')->unsigned()->nullable();
            $table->integer('category_updated_by')->unsigned()->nullable();
            $table->integer('category_deleted_by')->unsigned()->nullable();
            $table->timestamp('category_created_at')->useCurrent();
            $table->timestamp('category_updated_at')->nullable()->useCurrentOnUpdate();
            $table->timestamp('category_deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

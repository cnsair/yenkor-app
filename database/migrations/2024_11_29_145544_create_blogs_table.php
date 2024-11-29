<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Ensure this class name matches the filename convention
class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Create the 'blogs' table
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('title'); // Title of the blog
            $table->text('content'); // Blog content
            $table->string('image_url')->nullable(); // Optional image URL
            $table->timestamps(); // Automatically managed 'created_at' and 'updated_at'
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
        });
    }


    public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['firstname', 'lastname']);
        // Drop the 'blogs' table
        Schema::dropIfExists('blogs');
    });
}
}

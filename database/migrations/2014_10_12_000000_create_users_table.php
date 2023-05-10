<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->default('');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default('');
            $table->rememberToken();
            $table->timestamps();
            $table->string('user_type', 10)->nullable();
            $table->string('username')->nullable();
            $table->string('full_name')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('contactnumber')->nullable();
            $table->text('bio')->nullable();
            $table->string('companyname')->nullable();
            $table->string('owner')->nullable();
            $table->text('companydescription')->nullable();
            $table->string('services')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('logo')->nullable();
            $table->string('name')->nullable();
        });

        // Copy the `companyname` and `username` values to `name` column
        DB::table('users')->update(['name' => DB::raw('IFNULL(companyname, CONCAT(username, " ", companyname))')]);
    }

    /*
     *
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }

    
};
    
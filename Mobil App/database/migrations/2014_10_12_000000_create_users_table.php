<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('FirstName')->nullable($value=true)->collation='utf8mb4_general_ci';
            $table->string('LastName')->nullable($value=true)->collation='utf8mb4_general_ci';
            $table->string('username')->unique()->nullable($value=true)->collation='utf8mb4_general_ci';
            $table->string('Email')->unique()->nullable($value=true)->collation='utf8mb4_general_ci';
            $table->integer('NumberPhone')->unique()->nullable(($value=true));
            $table->text('password')->nullable($value=true)->collation='utf8mb4_general_ci';
            $table->integer('NbPoints')->nullable()->default('0');
            $table->text('address')->nullable($value=true)->collation='utf8mb4_general_ci';
            $table->string('typePack')->nullable($value=true)->collation='utf8mb4_general_ci';
            $table->date('packStart')->nullable($value=true);
            $table->date('packEnd')->nullable($value=true);
            $table->string('cardNumber')->unique()->nullable($value=true)->collation='utf8mb4_general_ci';
            $table->date('cardEnd')->nullable($value=true);
            $table->string('cvc')->nullable($value=true)->collation='utf8mb4_general_ci';
            $table->string('stateAccount')->nullable()->default('authorized')->collation='utf8mb4_general_ci';
            $table->tinyInteger('isConnected')->nullable($value=true);
            $table->binary('avatar')->nullable($value=true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

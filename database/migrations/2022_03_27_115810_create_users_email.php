<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersEmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_email', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('account_id')->nullable();
            $table->integer('job_id');
            $table->string('job_number')->nullable();
            $table->integer('email_type')->comment('1 = sent, 2 = reply');

            $table->integer('folder_type')->comment('1 = inbox, 2 = draft, 3=sent mail, 4=trash');

            $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_email');
    }
}

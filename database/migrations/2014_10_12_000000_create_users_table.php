<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('account_number');
            $table->string('type')->default('investor');
            $table->double('user_funds',9,2)->default(0.00);
            $table->double('balance',9,2)->default(0.00);
            $table->string('countrycode',3)->default(44);
            $table->string('mobile',10)->nullable();
            $table->tinyInteger('verified')->default(0);
            $table->string('email_token',19)->nullable();
            $table->text('google2fa_secret')->nullable();
            $table->string('address',50)->nullable();
            $table->string('city',50)->nullable();
            $table->string('state',50)->nullable();
            $table->integer('zipcode')->default(0);
            $table->string('security_tye',10)->comment('phone or email')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

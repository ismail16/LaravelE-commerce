<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admin_name');
            $table->string('admin_email')->unique();
            $table->string('admin_password');
            ///$table->string('admin_password');
            $table->tinyInteger('admin_lavel');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tbl_admin');
    }

}

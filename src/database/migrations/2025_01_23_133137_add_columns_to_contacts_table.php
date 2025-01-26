<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            if (!Schema::hasColumn('contacts', 'first_name')) {
            $table->string('first_name')->after('id');
        }
        if (!Schema::hasColumn('contacts', 'last_name')) {
            $table->string('last_name')->after('first_name');
        }
        if (!Schema::hasColumn('contacts', 'gender')) {
            $table->string('gender')->after('email');
        }
        if (!Schema::hasColumn('contacts', 'tel1')) {
            $table->string('tel1')->after('gender');
        }
        if (!Schema::hasColumn('contacts', 'tel2')) {
            $table->string('tel2')->after('tel1');
        }
        if (!Schema::hasColumn('contacts', 'tel3')) {
            $table->string('tel3')->after('tel2');
        }
        if (!Schema::hasColumn('contacts', 'address')) {
            $table->string('address')->after('tel3');
        }
        if (!Schema::hasColumn('contacts', 'building')) {
            $table->string('building')->nullable()->after('address');
        }
        if (!Schema::hasColumn('contacts', 'select_box')) {
            $table->string('select_box')->after('building');
        }
        if (!Schema::hasColumn('contacts', 'content')) {
            $table->text('content')->after('select_box');
        }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
        if (Schema::hasColumn('contacts', 'first_name')) {
            $table->dropColumn('first_name');
        }
        if (Schema::hasColumn('contacts', 'last_name')) {
            $table->dropColumn('last_name');
        }
        if (Schema::hasColumn('contacts', 'email')) {
            $table->dropColumn('email');
        }
        if (Schema::hasColumn('contacts', 'gender')) {
            $table->dropColumn('gender');
        }
        if (Schema::hasColumn('contacts', 'tel1')) {
            $table->dropColumn('tel1');
        }
        if (Schema::hasColumn('contacts', 'tel2')) {
            $table->dropColumn('tel2');
        }
        if (Schema::hasColumn('contacts', 'tel3')) {
            $table->dropColumn('tel3');
        }
        if (Schema::hasColumn('contacts', 'address')) {
            $table->dropColumn('address');
        }
        if (Schema::hasColumn('contacts', 'building')) {
            $table->dropColumn('building');
        }
        if (Schema::hasColumn('contacts', 'select_box')) {
            $table->dropColumn('select_box');
        }
        if (Schema::hasColumn('contacts', 'content')) {
            $table->dropColumn('content');
        }
    });
    }
}

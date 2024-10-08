<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserAgentToSessionsTable extends Migration
{
    public function up()
    {
        Schema::table('sessions', function (Blueprint $table) {
            if (!Schema::hasColumn('sessions', 'user_agent')) {
                $table->text('user_agent')->nullable()->after('ip_address');
            }
        });
    }

    public function down()
    {
        Schema::table('sessions', function (Blueprint $table) {
            if (Schema::hasColumn('sessions', 'user_agent')) {
                $table->dropColumn('user_agent');
            }
        });
    }
}

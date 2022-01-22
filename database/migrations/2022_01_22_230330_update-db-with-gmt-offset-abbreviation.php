<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UpdateDbWithGmtOffsetAbbreviation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("update timezone set gmt_offset_abrv = CONCAT('+',FLOOR(gmt_offset / 3600)) where CAST(gmt_offset AS SIGNED ) > -1");
        DB::statement("update timezone set gmt_offset_abrv = CONCAT('-', FLOOR(gmt_offset / 3600)) where CAST(gmt_offset AS SIGNED ) < 0");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

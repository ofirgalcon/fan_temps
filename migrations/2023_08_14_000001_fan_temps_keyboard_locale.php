<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class FanTempsKeyboardLocale extends Migration
{
    private $tableName = 'fan_temps';

    public function up()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->string('keyboard_language')->nullable();
        });
    }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->dropColumn('keyboard_language');
        });
    }
}

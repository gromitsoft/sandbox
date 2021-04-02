<?php namespace Sandbox\Landing\Updates;

use October\Rain\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('sandbox_landing_pages', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');

            /**  Заголовок лендинга */
            $table->string('title');

            /**  Содержимое лендинга */
            $table->longText('content')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sandbox_landing_pages');
    }
}

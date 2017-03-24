<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        Schema::create('reports', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->increments('rid');
            $table->text('rdescrip');
            $table->text('zip');
            $table->text('city');
            $table->text('state');
            $table->integer('peid')->unsigned();
            $table->foreign('peid')->references('peid')->on('people')->onDelete('cascade');
            $table->timestamps('td');
            $table->varchar('status');
           

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');

        $table->dropForeign('reports_peid_foreign');
       /* $table->dropIndex('reports_peid_index');
        $table->dropColumn('peid');
*/
    }
}

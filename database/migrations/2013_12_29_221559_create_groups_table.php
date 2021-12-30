<?php

use App\Models\Group;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $grupos = [
            'Administrador do Sistema',
            'Responsável dos Supervisor',
            'Supervisor de Laboratório',
            'Professor ou Investigador'
        ];

        collect($grupos)->each(fn($grupo) => Group::create(['name'=>$grupo]));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}

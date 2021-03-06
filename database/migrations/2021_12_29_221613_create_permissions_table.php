<?php

use App\Models\Permission;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $permissions = [
            'Gerir Administradores',
            'Gerir Privilégios',
            'Gerir Responsáveis',
            'Gerir Supervisores',
            'Gerir Professores',
            'Gerir Laboratórios',
            'Gerir Disciplinas',
            'Gerir Horários',
        ];

        collect($permissions)->each(fn ($permission) => Permission::create(['name' => $permission]));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}

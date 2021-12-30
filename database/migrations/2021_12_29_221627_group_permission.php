<?php

use App\Models\Group;
use App\Models\Permission;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GroupPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_permission', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained();
            $table->foreignId('permission_id')->constrained();
            $table->timestamps();
        });

        $permissions = [
            'Gerir Usuários',
            'Gerir Supervisores',
            'Gerir Privilégios',
            'Gerir Laboratórios',
            'Gerir Disciplinas',
            'Gerir Professores',
            'Gerir Horários'
        ];

        collect($permissions)->each(fn($permission) => Permission::create(['name' => $permission]));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_permission');
    }
}

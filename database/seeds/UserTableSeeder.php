<?php

use App\Models\Catalogo;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Catalogo::Table('ROLES')->where('codigo','root')->first();
        factory(App\User::class)->create([
            'dni' => '41887192',
            'password' => '321654987',
            'idrole' =>$role->id,
            'menu' => 'menu.sider-admin',
            ]);
    }
}

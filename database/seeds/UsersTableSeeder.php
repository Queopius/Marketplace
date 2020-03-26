<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $verificado = User::USUARIO_VERIFICADO;
        $user = factory(User::class)->create([
            'name' => 'Test',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'verified' => $verificado,
            'verification_token' => $verificado == User::USUARIO_VERIFICADO ? null : User::generarVerificationToken(),
            'admin' => User::USUARIO_ADMINISTRADOR,
        ]);
    }
}

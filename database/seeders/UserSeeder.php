<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Ambil role dari database
        $adminRole = Role::where('name', 'admin')->first();
        $editorRole = Role::where('name', 'editor')->first();
        $wartawanRole = Role::where('name', 'wartawan')->first();

        // Buat beberapa pengguna dengan peran yang sesuai
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'phone_number' => '1234567890',
            'address' => 'Admin Address',
            'profile_photo' => 'images/pic-admin.png',
            'role_id' => $adminRole->id,
        ]);

        User::create([
            'name' => 'Anggi Marito',
            'email' => 'editor@mail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0987654321',
            'address' => 'Editor Address',
            'profile_photo' => 'images/pic-editor.png',
            'role_id' => $editorRole->id,
        ]);

        User::create([
            'name' => 'Netfilx',
            'email' => 'n@mail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0987654321',
            'address' => 'Netflix Address',
            'profile_photo' => 'https://images.ctfassets.net/y2ske730sjqp/5QQ9SVIdc1tmkqrtFnG9U1/de758bba0f65dcc1c6bc1f31f161003d/BrandAssets_Logos_02-NSymbol.jpg?w=940',
            'role_id' => $wartawanRole->id,
        ]);

        User::create([
            'name' => 'CNN',
            'email' => 'cnn@mail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0987654321',
            'address' => 'CNN Address',
            'profile_photo' => 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Cnn_logo_red_background.png',
            'role_id' => $wartawanRole->id,
        ]);

        User::create([
            'name' => 'Formula 1',
            'email' => 'f1@mail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0987654321',
            'address' => 'Formula 1 Address',
            'profile_photo' => 'https://miro.medium.com/v2/resize:fit:1200/1*rwpOxkNX0UN5A3BE28HLTQ.png',
            'role_id' => $wartawanRole->id,
        ]);

        User::create([
            'name' => 'BBC',
            'email' => 'bbc@mail.com',
            'password' => Hash::make('password'),
            'phone_number' => '0987654321',
            'address' => 'BBC Address',
            'profile_photo' => 'https://logos-world.net/wp-content/uploads/2022/01/BBC-Logo.png',
            'role_id' => $wartawanRole->id,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo tài khoản admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Tạo tài khoản giáo viên
        
        User::create([
            'name' => "Nghiêm Việt Cường",
            'email' => "cuong.nghiemviet@phenikaa-uni.edu.vn",
            'password' => Hash::make('password'),
            'role' => 'teacher',
        ]);
        
        // Tạo tài khoản sinh viên

        User::create([
            'name' => "Nguyễn Văn Hiếu",
            'email' => "22010103@st.phenikaa-uni.edu.vn.com",
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);
        
    }
}

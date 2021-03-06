<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                'role_id' => 4,
                'reliability' => 0.1,
                'avatar' => '/images/default-avatar.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Student',
                'email' => 'student@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                'role_id' => 1,
                'reliability' => 0.1,
                'avatar' => '/images/default-avatar.jpg',
            ],
            [
                'id' => 3,
                'name' => 'Teacher',
                'email' => 'teacher@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                'role_id' => 3,
                'reliability' => 0.5,
                'avatar' => '/images/default-avatar.jpg',
            ],
            [
                'id' => 4,
                'name' => 'Expert',
                'email' => 'expert@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                'role_id' => 2,
                'reliability' => 1,
                'avatar' => '/images/default-avatar.jpg',
            ],
            [
                'id' => 5,
                'name' => 'Student1',
                'email' => 'student1@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                'role_id' => 1,
                'reliability' => 0.1,
                'avatar' => '/images/default-avatar.jpg',
            ],
            [
                'id' => 6,
                'name' => 'Student2',
                'email' => 'student2@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                'role_id' => 1,
                'reliability' => 0.1,
                'avatar' => '/images/default-avatar.jpg',
            ],
            [
                'id' => 7,
                'name' => 'Student3',
                'email' => 'student3@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                'role_id' => 1,
                'reliability' => 0.1,
                'avatar' => '/images/default-avatar.jpg',
            ],
            [
                'id' => 8,
                'name' => 'Student4',
                'email' => 'student4@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                'role_id' => 1,
                'reliability' => 0.1,
                'avatar' => '/images/default-avatar.jpg',
            ],
            [
                'id' => 9,
                'name' => 'Student5',
                'email' => 'student5@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                'role_id' => 1,
                'reliability' => 0.1,
                'avatar' => '/images/default-avatar.jpg',
            ],
            [
                'id' => 10,
                'name' => 'Student6',
                'email' => 'student6@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                'role_id' => 1,
                'reliability' => 0.1,
                'avatar' => '/images/default-avatar.jpg',
            ],
            [
                'id' => 11,
                'name' => 'Teacher1',
                'email' => 'teacher1@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                'role_id' => 3,
                'reliability' => 0.5,
                'avatar' => '/images/default-avatar.jpg',
            ],
            [
                'id' => 12,
                'name' => 'Nguyễn Thị Hương Giang',
                'email' => 'nguyenthihuonggiang@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                'role_id' => 3,
                'reliability' => 0.5,
                'avatar' => '/images/default-avatar.jpg',
            ],
        ]);
    }
}

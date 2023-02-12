<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Employee;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        Employee::create([
            'name' => 'Tony Stark',
            'age' => 58,
            'address' => '10880 Malibu Point, 90265',
            'phone_number' => '08147838233',
            'image' => 'images\02Y3fkIznKTSxkpXyFQqbt1gfnMSwY1ekhPwnDx7.jpg'
        ]);

        Employee::create([
            'name' => 'Diana Prince',
            'age' => 800,
            'address' => 'Paradise Island',
            'phone_number' => '08147838233',
            'image' => 'images\5SGzAs6IRxIK6n6HeYhkSO9kbZqtNoJD1VhoLwHr.webp'
        ]);

        Employee::create([
            'name' => 'Thor Odinson',
            'age' => 1500,
            'address' => 'Asgard',
            'phone_number' => '08147838233',
            'image' => 'images\eHMhq2Wm6bjaX2Op7YK98pxP4PO6IcKKF1qj72S8.webp'
        ]);

        Employee::factory(25)->create();
    }
}
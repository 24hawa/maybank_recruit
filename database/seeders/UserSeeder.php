<?php
        namespace Database\Seeders;

        use Illuminate\Database\Seeder;
        use Illuminate\Support\Facades\Hash;
        use App\Models\User;
        
        class UserSeeder extends Seeder
        {
            public function run()
            {
                // Create 10 fake users
                \App\Models\User::factory(10)->create();
        
                // Or, you can create a single user manually
                // User::create([
                //     'name' => 'John Doe',
                //     'email' => 'johndoe@example.com',
                //     'password' => Hash::make('password'), // Use a hashed password
                // ]);
            }
        }
        
    


<?php
use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       
        
        $user = ['name' => 'Nour Romdhane', 'email' => 'Romdhane_nour@outlook.fr', 'password' => Hash::make('nourromdhane369')];
        $user = User::create($user);
       
    }
}
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Admin Test', 'User Test'];
        $emails=['Admin@test.com', 'user@test.com'];
        $commonPassword='password';

        $count=count($names);

        // boucles sur les noms et les emails pour les inserer dans la base de données

        for ($i=0; $i < $count; $i++) { 

            // Verifier si l'email existe deja dans la base de donnée

            $existingUser= User::where('email',$emails[$i])->first();
            
            // si l'utilisateur n'exister pas creer une nouvelle entrée
            
            if(!$existingUser){
                $user = new User();
                $user->name = $names[$i];
                $user->email = $emails[$i];
                $user->password = Hash::make($commonPassword);
                $user->save();
            }
        }
    }
}

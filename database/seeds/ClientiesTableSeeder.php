<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Model\Client;

class ClientiesTableSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $clients = [
            [
                'name' => $faker->userName(),
                'email'=> 'provagmail.com',
                'image'=> $faker->imageUrl(1000, 400),
            ],
            [
                'name' => $faker->userName(),
                'email'=> 'prova1gmail.com',
                'image'=> $faker->imageUrl(1000, 400),
            ],
            [
                'name' => $faker->userName(),
                'email'=> 'prova2gmail.com',
                'image'=> '',
            ],
        ];

        

        foreach($clients as $client){
            
                $newClient = new Client();

                $newClient->name = $client['name'];
                $newClient->email = $client['email'];
                $newClient->image = $client['image'];

                $newClient->save();
            
        };
        
    }
}

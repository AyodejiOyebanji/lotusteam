<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(10)->create();
        $user= User::factory()->create([
            "name"=>'John Doe',
            'email'=>'john@example.com'

        ]);
         Listing::factory(6)->create([
            'user_id'=>$user->id
         ]);
        //  Listing::create( [
        //     'title'=>"Laravel senior Developer ",
        //     'tags' =>"Laravel , javascript",
        //     'company'=>"Acme Corp",
        //     'location'=> 'Boston , Ma',
        //     'email'=>'email@acme.com',
        //     'website'=> 'http://www.acme.com',
        //     'description'=> "Developer is a developer   interested  in developing   applications    and services    "
        //          ]);
        //          Listing::create( [
        //             'title'=>"Full stack senior Developer ",
        //             'tags' =>"Node , javascript",
        //             'company'=>"Acme Corp",
        //             'location'=> 'Boston , Ma',
        //             'email'=>'email@acme.com',
        //             'website'=> 'http://www.acme.com',
        //             'description'=> "Developer is a developer   interested  in developing   applications    and services    "
        //                  ]);
    }

}

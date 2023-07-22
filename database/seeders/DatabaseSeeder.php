<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {  
        
        video::factory(20)->create();



        /*
            $video = new video();
            $video->title = "Titulo de Ejemplo ";
            $video->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat asperiores eius beatae error repellendus quidem magnam, cupiditate fugit mollitia distinctio officia cumque quibusdam unde voluptatum! Nam omnis natus facilis aliquid.";
            $video->category = "AMATEUR";
            $video->tags = "AMATEUR,PUSSY";
            $video->embed = "iframe";
            $video->img = "https://source.unsplash.com/200x200/?love";
            $video->save(); */
        
        

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

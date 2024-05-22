<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $post = [
            'Programmierung' => 'Programmieren macht spaß.',
            'Tanzen' => 'Tanzen tue ich sehr gerne',
            'Laufen' => 'Frische Luft tut immer gut',
            'Laravel' => 'Laravel ist mächtig und einfach',
            'PHP' => 'PHP ist sehr einfach',
        ];
    
        foreach($post AS $key=>$value) {
            $post = new Post(
             [
                'titel' => $key,
                'comment' => $value
                ]
            );
            $post->save();
        }#ende foreach

        /*
        DB::table('posts')->insert([
            [
                'titel' => 'Laufen',
                'comment' => 'Frische Luft tut gut',
           ],
           [
                'titel' => 'Laravel',
                'comment' => 'Laravel ist sehr einfach und mächtig',
            ],
            [
                'titel' => 'Tanzen',
                'comment' => 'Auch in Ketten kann man tanzen',
            ],
            [
                'titel' => 'Strand',
                'comment' => 'Strand und Sonne tun immer gut',
            ],
            [
                'titel' => 'Sport',
                'comment' => 'Sport ist mord aber ohne gehts auch nicht',
            ],
        ]);#ende insert

        */
    }
}

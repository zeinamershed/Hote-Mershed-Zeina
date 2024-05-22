<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag = [
            'Sport' => 'danger',
            'Entspannung' => 'secondary',
            'Natur' => 'success',
            'Programmierung' => 'primary',
            'Musik' => 'warning',
            'Medien' => 'dark',
            'Reisen' => 'info',
           ];
    
           foreach($tag AS $key => $value) {
            $tag = new Tag(
                    [
                        'name' => $key,
                        'style' => $value
                    ]
                );
                $tag->save();
           }#ende foreach

    }#ende run
}

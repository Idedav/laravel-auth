<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tecnology;
use Illuminate\Support\Str;

class TecnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['HTML', 'CSS', 'Javascript', 'PHP', 'Java', 'Python', 'C++'];

        foreach ($data as $tecnology) {
            $new_tecnology = new Tecnology();
            $new_tecnology->name = $tecnology;
            $new_tecnology->slug = Str::slug($tecnology, '-');
            $new_tecnology->save();
        }
    }
}

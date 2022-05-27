<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'nama' => 'Project 1',
                'gambar' => 'https://cdn.pixabay.com/photo/2017/05/09/03/46/alberta-2297204__340.jpg',    
            ],
            [
                'nama' => 'Project 2',
                'gambar' => 'https://cdn.pixabay.com/photo/2014/09/10/00/59/mountains-440520__340.jpg',    
            ],
            [
                'nama' => 'Project 3',
                'gambar' => 'https://cdn.pixabay.com/photo/2015/03/28/16/40/lake-696098__340.jpg',    
            ],
            [
                'nama' => 'Project 4',
                'gambar' => 'https://cdn.pixabay.com/photo/2017/08/04/17/56/dolomites-2580866__340.jpg',    
            ],
            [
                'nama' => 'Project 5',
                'gambar' => 'https://cdn.pixabay.com/photo/2016/10/14/19/21/canyon-1740973__340.jpg',    
            ],
            [
                'nama' => 'Project 6',
                'gambar' => 'https://cdn.pixabay.com/photo/2013/10/09/02/27/lake-192990__340.jpg',    
            ],
        ];

        foreach ($data as $data){
            Project::create($data);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Komentar;

class KomentarSeeder extends Seeder
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
                'nama' => 'Hafizh',
                'komentar' => 'Keren Projectnya',
                'project_id' => '1'  
            ],
        ];

        foreach ($data as $data){
            Komentar::create($data);
        }
    }
}

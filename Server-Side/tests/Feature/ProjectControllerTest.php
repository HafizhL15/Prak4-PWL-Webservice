<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Project;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use App\Models\Komentar;
class ProjectControllerTest extends TestCase
{
    use LazilyRefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_all_projects()
    {
        $projects = [
            [
                'nama' => 'Project 1',
                'gambar' => 'gambar',
            ],
            [
                'nama' => 'Project 2',
                'gambar' => 'gambar',
            ],
            [
                'nama' => 'Project 3',
                'gambar' => 'gambar',
            ],
        ];
        
        foreach ($projects as $project){
            Project::create($project);
        }

        $response = $this->getJson('api/projects');

        $response->assertOk()
            ->assertJsonCount(3, 'data');
    }

    public function test_show_one_projects()
    {
        $project = Project::create([
            'nama' => 'Project 1',
            'gambar' => 'gambar',
        ]);

        $response = $this->getJson("api/projects/{$project->id}");

        $response->assertOk()
            ->assertJsonPath('data.nama', 'Project1');
    }

    public function test_get_comment_in_a_project()
    {
        $project = Project::create([
            'nama' => 'Project 1',
            'gambar' => 'gambar',
        ]);

        $comment = Komentar::create([
            'nama' => 'hafizh',
            'komentar' => 'Projectnya Keren',
            'project_id' => $project->id
        ]);
        $response = $this->getJson("api/list-komen/{$project->id}");

        $response->assertOk()
            ->assertJsonCount(1, 'data');
    }
    public function test_create_comment()
    {
        $project = Project::create([
            'nama' => 'Project 1',
            'gambar' => 'gambar',
        ]);

        $comment = Komentar::create([
            'nama' => 'hafizh',
            'komentar' => 'Projectnya Keren',
            'project_id' => $project->id
        ]);
        $response = $this->getJson("api/komen");

        $response->assertSuccessful()
            ->assertJsonPath('data.nama', 'hafizh');
    }
}

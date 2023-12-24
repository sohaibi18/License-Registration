<?php

namespace Database\Seeders;

use App\Models\AssistantDirector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use PhpParser\Node\Expr\Array_;

class AssistantDirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ADFS=$this->ADFS();

    }
    private function ADFS()
    {
        $ADAsad = AssistantDirector::factory()->create([
            'ADFS_Name' => 'Asad Khan',
            'ADFS_Code' => '1',
            'Status' => 'Active',
        ]);

    }
}

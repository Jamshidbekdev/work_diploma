<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EducationCenterAndSubject;

class EducationCenterAndSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return EducationCenterAndSubject::factory()->count(30)->create();
    }
}

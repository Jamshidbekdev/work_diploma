<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EducationCenterAndSubject;
use App\Models\EducationCenter;
use App\Models\Subject;

class EducationCenterAndSubjectFactory extends Factory
{
    protected $model = EducationCenterAndSubject::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'edu_id' => rand(1,EducationCenter::count()),
            'subject_id' =>rand(1,Subject::count())
        ];
    }
}

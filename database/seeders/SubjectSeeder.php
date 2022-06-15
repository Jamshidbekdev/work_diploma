<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    protected static $list = [
        [
            'name' => 'Fizika',
        ],
        [
            'name' => 'Matematika',
        ],
        [
            'name' => 'Biologiya',
        ],
        [
            'name' => 'Kimyo',
        ],
        [
            'name' => 'IELTS',
        ],
        [
            'name' => 'Ingliz tili',
        ],
        [
            'name' => 'Informtika',
        ],
        [
            'name' => 'Kores tili',
        ],
        [
            'name' => 'Nemis tili',
        ],
        [
            'name' => 'Fransuz tili',
        ],
        [
            'name' => 'Tarix',
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$list as $value) {
            $model = new Subject($value);
            $model->save();
        }
    }
}

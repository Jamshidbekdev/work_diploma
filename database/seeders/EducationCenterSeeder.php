<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EducationCenter;

class EducationCenterSeeder extends Seeder
{
    protected static $list = [
        [
            'name' => 'Data Learning Center',
            'img' => '',
            'address' => 'Urganch shahar',
            'phone' => 123456789,
            'desc' => 'Learning Programming at this center',
            'all' => 50,
            'grand' => 14,
            'contract' => 19,
        ],
        [
            'name' => 'Everest Center',
            'img' => '',
            'address' => 'Toshkent shahar',
            'phone' => 346792348,
            'desc' => 'Learning English and other subjects at this center',
            'all' => 67,
            'grand' => 13,
            'contract' => 24,
        ],
        [
            'name' => 'IT info Center',
            'img' => '',
            'address' => 'Urganch shahar',
            'phone' => 967482385,
            'desc' => 'Learning English and other subjects at this center',
            'all' => 45,
            'grand' => 8,
            'contract' => 13,
        ],
        [
            'name' => 'Oxford Education Center',
            'img' => '',
            'address' => 'Urganch shahar',
            'phone' => 482759392,
            'desc' => 'Learning English and other subjects at this center',
            'all' => 78,
            'grand' => 17,
            'contract' => 34,
        ],
        [
            'name' => 'Garvard Education Center',
            'img' => '',
            'address' => 'Urganch shahar',
            'phone' => 683821895,
            'desc' => 'Learning English and other subjects at this center',
            'all' => 87,
            'grand' => 21,
            'contract' => 34,
        ],
        [
            'name' => 'Uzinfo Education Center',
            'img' => '',
            'address' => 'Toshkent shahar',
            'phone' => 238595031,
            'desc' => 'Learning programming and IELTS at this center',
            'all' => 34,
            'grand' => 3,
            'contract' => 9,
        ],
        [
            'name' => 'Everbest Education Center',
            'img' => '',
            'address' => 'Hazorasp tumani',
            'phone' => 867394828,
            'desc' => 'Learning English and IELTS at this center',
            'all' => 67,
            'grand' => 9,
            'contract' => 37,
        ],
        [
            'name' => ' Education Center',
            'img' => '',
            'address' => 'Hazorasp tumani',
            'phone' => 867394828,
            'desc' => 'Learning English and IELTS at this center',
            'all' => 23,
            'grand' => 5,
            'contract' => 9,
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
            $model = new EducationCenter($value);
            $model->save();
        }
    }
}

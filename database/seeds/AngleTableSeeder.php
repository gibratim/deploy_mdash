<?php

use App\Models\Angle;
use Illuminate\Database\Seeder;

class AngleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $angles = [
            [
                'name' => 0,
            ],
            [
                'name' => 14.4,
            ],
            [
                'name' => 30.6,
            ],
            [
                'name' => 45,
            ],
            [
                'name' => 59.4,
            ],
            [
                'name' => 75.6,
            ],
            [
                'name' => 90,
            ],
            [
                'name' => 104.4,
            ],
            [
                'name' => 120.6,
            ],
            [
                'name' => 135,
            ],
            [
                'name' => 149.4,
            ],
            [
                'name' => 165.6,
            ],
            [
                'name' => 180,
            ],
            [
                'name' => 194.4,
            ],
            [
                'name' => 210.6,
            ],
            [
                'name' => 225,
            ],
            [
                'name' => 239.4,
            ],
            [
                'name' => 255.6,
            ],
            [
                'name' => 270,
            ],
            [
                'name' => 284.4,
            ],
            [
                'name' => 300.6,
            ],
            [
                'name' => 315,
            ],
            [
                'name' => 329.4,
            ],
            [
                'name' => 345.6,
            ],

        ];

        foreach ($angles as $angle) {
            $newAngle = Angle::where('name', '=', $angle['name'])->first();
            if ($newAngle === null) {
                $newAngle = Angle::create([
                    'name'          => $angle['name'],
                ]);
            }
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20 ; $i++) {
            $new_student = new Student();
            $new_student->name = $faker->firstName;
            $new_student->surname = $faker->lastName;
            $new_student->code = $faker->numberBetween($min = 1000, $max = 3000);
            $new_student->email = $faker->email;
            $new_student->save();
        }
    }
}

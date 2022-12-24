<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Course;
use App\Models\Platform;
use App\Models\Series;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // if (env('APP_ENV' == 'local')) {


            //platforms seed

            $platforms = ['Laracasts', 'Youtube', 'Laravel Daily', 'Codecourse', 'Spatie'];
            foreach ($platforms as $platform) {
                Platform::create([
                    'name' => $platform,
                ]);
            }
            //Author seed

            $authors = ['Sajedul', 'Author Name', 'Laraveljobs'];
            foreach ($authors as $item) {
                Author::create([
                    'name' => $item,
                ]);
            }


            // Series Table

            $series = [
                [
                    'name' => 'PHP',
                    'image' => 'https://cdn.cdnlogo.com/logos/p/79/php.svg',
                ],
                [
                    'name' => 'JavaScript',
                    'image' => 'https://cdn.cdnlogo.com/logos/j/33/javascript.svg',
                ],
                [
                    'name' => 'WordPress',
                    'image' => 'https://cdn.cdnlogo.com/logos/w/65/wordpress.svg',
                ],
                [
                    'name' => 'Laravel',
                    'image' => 'https://cdn.cdnlogo.com/logos/l/56/laravel-wordmark.svg',
                ]
            ];

            foreach ($series as $item) {
                Series::create([
                    'name' => $item['name'],
                    'image' => $item['image']
                ]);
            }

            // Topic table

            $topics = ['Eloquent', 'Validation', 'Refactoring', 'Testing', 'Authentication'];
            foreach ($topics as $topic) {
                Topic::create([
                    'name' => $topic
                ]);
            }

            // user
            User::factory(50)->create();
            // courses
            Course::factory(100)->create();;

            //Relation multiple data topic and author

            $courses = Course::all();

            foreach ($courses as $course) {

                // course-topic
                $topics = Topic::all()->random(rand(1, 5))->pluck('id')->toArray();
                $course->topics()->attach($topics);

                // course-author

                $authors = Author::all()->random(rand(1, 3))->pluck('id')->toArray();
                $course->authors()->attach($authors);

                // course-series

                $series = Series::all()->random(rand(1, 4))->pluck('id')->toArray();
                $course->series()->attach($series);


            }






        // }
    }
}

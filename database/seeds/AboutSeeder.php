<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('abouts')->insert([
            [
                'name' => 'Md. Shamim Miah',
                'age' => '26',
                'image' => '',
                'qualification' => 'Diploma in Computer',
                'post' => 'Web Developer',
                'lang' => 'Bangla/English',
                'experience' => '2',
                'project' => '10+',
                'cv_link' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);
    }
}

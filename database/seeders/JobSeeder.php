<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag = Tag::factory(3)->create();
        Job::factory(20)->hasAttached($tag)->create(new Sequence([
            'featured' => False,
            'schedule' => 'Full Time'
        ], [
            'featured' => True,
            'schedule' => 'Part Time'
        ]));
    }
}

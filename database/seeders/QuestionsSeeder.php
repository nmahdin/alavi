<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 40) as $number) {
            DB::table('questions')->insert([
                'number' => "$number",
                'text' => "سوال شماره $number",
                'g1' => "گزینه اول سوال$number ",
                'g2' => "گزینه دوم سوال$number ",
                'g3' => "گزینه سوم سوال$number ",
                'g4' => "گزینه چهارم سوال$number ",
                'true' => '3',
                'created_at' => now(),
                'updated_at' => now(),

            ]);
        }
    }
}

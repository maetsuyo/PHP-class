<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GamesSeed extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('games')->insert([
      'name' => 'Adventure Quest',
      'description' => 'An exciting journey through a fantasy world.',
      'price' => 19.99,
      'developer' => 'Fantasy Studios',
      'rating' => 4.7,
      'download' => 50000,
      'release_date' => Carbon::parse('2024-03-15'),
      'created_at' => now(),
      'updated_at' => now(),
  ]);
  }
}

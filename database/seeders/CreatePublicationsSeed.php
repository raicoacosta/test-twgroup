<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreatePublicationsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\App\Models\Publication::factory(20)->create();
    }
}

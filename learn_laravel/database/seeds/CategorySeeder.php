<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            array(
                [
                    'name' => 'category 1',
                    'description' => 'description category 1'
                ],
                [
                    'name' => 'category 2',
                    'description' => 'description category 2'
                ],
            )
        );
    }
}

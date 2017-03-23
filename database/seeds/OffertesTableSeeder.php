<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class OffertesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('offertes')->insert([
    			'name' => str_random(10),
    			'email' => str_random(10).'@gmail.com',
    			'telephone' => rand(1111111111,9999999999),
    			'kind' => 'letterlijk',
    			'subject' => rand(1,20),
    			'minutes' => rand(1, 180),
    			'comments' => str_random(10).' '.str_random(20).' '.str_random(32),
    			'status' => rand(0, 2),
    			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]);
    }
}

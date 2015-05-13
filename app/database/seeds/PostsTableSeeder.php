<?php

class PostsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Eloquent::unguard();

		// $this->call('UserTableSeeder');
		  $posts = [
            [
                'title' => 'The first post',
                'content' => 'I will not let this tea go cold',
                'created_at' => '2013-05-24 00:00:00',
                'updated_at' => '2013-05-24 00:00:00'
            ],
            [
                'title' => 'Second Post',
                'content' => 'It did not go cold! What a total result!',
                'created_at' => '2013-05-25 00:00:00',
                'updated_at' => '2013-05-25 00:00:00'
            ]
        ];
 
        DB::table('posts')->insert($posts);
	}

}

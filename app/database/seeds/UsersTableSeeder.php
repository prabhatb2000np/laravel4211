<?php
 
class UsersTableSeeder extends Seeder {
 
    public function run()
    {
        // our array of user objects to create - just one in this case
      $users = array(
          array(
              'username' => 'prabhat',
              'email' => 'prabhat@prabhat.com',
              'password' => Hash::make('password')
          )
      );
 
      DB::table('users')->insert($users);
 
      // OR - alternative method since there's just one user
 
      /*User::create(
          array(
              'username' => 'admin',
              'email' => 'admin@raffworks.com',
              'password' => Hash::make('password')
          )
      );*/
    }
 
}

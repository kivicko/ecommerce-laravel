<?php

class UsersTableSeeder extends Seeder {

	public function run(){
		$user = new User;
		$user->firstname = 'Jon';
		$user->lastname = 'Doe';
		$user->email = 'root@root.com';
		$user->password = Hash::make('asd123dsa');
		$user->telephone = '5557771234';
		$user->admin = 1;
		$user->save();
	}
}
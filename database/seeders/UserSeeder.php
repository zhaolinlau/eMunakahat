<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$users = [
			[
				'ic' => '123456789012',
				'name' => 'admin',
				'gender' => 'male',
				'staff_id' => 'stf000',
				'email' => 'admin@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'contact' => '0987654321',
				'role' => 2,
				'password' => bcrypt('12345678'),
			],
			[
				'ic' => '111111111111',
				'name' => 'staff1',
				'gender' => 'male',
				'staff_id' => 'stf001',
				'email' => 'staff1@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'contact' => '3673459567',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'ic' => '222222222222',
				'name' => 'staff2',
				'gender' => 'female',
				'staff_id' => 'stf002',
				'email' => 'staff2@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'contact' => '1029856478',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'ic' => '333333333333',
				'name' => 'staff3',
				'gender' => 'male',
				'staff_id' => 'stf003',
				'email' => 'staff3@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'contact' => '2039589376',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'ic' => '444444444444',
				'name' => 'staff4',
				'gender' => 'female',
				'staff_id' => 'stf004',
				'email' => 'staff4@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'contact' => '3095892756',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'ic' => '555555555555',
				'name' => 'staff5',
				'gender' => 'male',
				'staff_id' => 'stf005',
				'email' => 'staff5@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'contact' => '2930485728',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'ic' => '666666666666',
				'name' => 'staff6',
				'gender' => 'female',
				'staff_id' => 'stf006',
				'email' => 'staff6@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'contact' => '3027694036',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'ic' => '777777777777',
				'name' => 'staff7',
				'gender' => 'male',
				'staff_id' => 'stf007',
				'email' => 'staff7@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'contact' => '4086746591',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'ic' => '888888888888',
				'name' => 'staff8',
				'gender' => 'female',
				'staff_id' => 'stf008',
				'email' => 'staff8@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'contact' => '39403867564',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'ic' => '999999999999',
				'name' => 'staff9',
				'gender' => 'male',
				'staff_id' => 'stf009',
				'email' => 'staff9@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'contact' => '2030584764',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'ic' => '101010101010',
				'name' => 'staff10',
				'gender' => 'female',
				'staff_id' => 'stf010',
				'email' => 'staff10@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'contact' => '4869385763',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'ic' => '012345678901',
				'name' => 'user123',
				'gender' => 'female',
				'email' => 'user123@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'contact' => '4869385763',
				'role' => 0,
				'password' => bcrypt('12345678'),
			],
		];

		foreach ($users as $key => $user) {
			User::create($user);
		}
	}
}

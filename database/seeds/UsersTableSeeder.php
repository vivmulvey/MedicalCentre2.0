<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = Role::where('name', 'admin')->first();
      $role_user = Role::where('name', 'user')->first();
      $role_doctor = Role::where('name', 'doctor')->first();
      $role_patient = Role::where('name', 'patient')->first();

      //User Model - Admin
      $admin = new User();
      $admin->name = 'Viv';
      $admin->email = 'viv@medicalcentre.ie';
      $admin->password = bcrypt('secret');
      $admin->save();
      $admin->roles()->attach($role_admin);

      //User Model - User
      $user = new User();
      $user->name = 'John jones';
      $user->email = 'johnj@medicalcentre.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Andy Ryan';
      $user->email = 'andyR@medicalcentre.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Mary Smith';
      $user->email = 'marysmith@medicalcentre.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      //User Model - Doctor
      $doctor = new User();
      $doctor->name = 'Sam Kenny';
      $doctor->email = 'skenny@medicalcentre.ie';
      $doctor->password = bcrypt('secret');
      $doctor->save();
      $doctor->roles()->attach($role_doctor);

      //User Model - Patient
      $patient = new User();
      $patient->name = 'Laura Glynn';
      $patient->email = 'lglynn@medicalcentre.ie';
      $patient->password = bcrypt('secret');
      $patient->save();
      $patient->roles()->attach($role_patient);




    }
}

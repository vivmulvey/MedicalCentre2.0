<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Patient;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_user = Role::where('name' , 'patient')->first();

      foreach ($role_user->users as $user) {
        $patient = new Patient();

        $patient->insurance_company_id = "1";
        $patient->policy_number = $this->random_str(12, '0123456789') . $this->random_str(1,'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        $patient->user_id = $user->id;

        $patient->save();
      }
    }

    private function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'){

      $pieces = [];

      $max = mb_strlen($keyspace, '8bit') - 1; for ($i = 0; $i < $length; ++$i) {

      $pieces []= $keyspace[random_int(0, $max)];
    }

      return implode('', $pieces);
     }
}

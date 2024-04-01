<?php

namespace Database\Seeders;

use App\Models\User;
use App\Modules\Users\Model\UsersType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class usersTypeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $types = [
      'Administrador',
      'Fornecedor'
    ];

    foreach($types as $type){
      UsersType::create([
        "type" => $type,
      ]);
    }
    $userType = UsersType::where('type', '=', 'Administrador')->first();
    User::create([
      "type_id" => $userType->id,
      "name" => "admin",
      "email" => "adm@adm.com.br",
      "password" => Hash::make("admin@123"),
    ]);
  }
}

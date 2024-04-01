<?php

namespace App\Modules\Users\Services;

use App\Models\User;


class DeleteUser
{  
  public function delete($id)
  {
    try {
      $user = User::find($id);
      if(!$user){
        return response('Usuário não encontrado.', 404);
      }
      return response($user->delete(), 204);
    } catch (\Throwable $th) {
      throw $th;
    }
    
  }
}

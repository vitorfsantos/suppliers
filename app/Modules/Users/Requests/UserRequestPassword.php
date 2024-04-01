<?php

namespace App\Modules\Users\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class UserRequestPassword extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'password'              => ['string', 'required', 'min:4', 'confirmed'],
      'password_confirmation' => ['string', 'required', 'min:4'],
      'old_password'          => ['string', 'required'],
    ];
  }

  public function messages()
  {
    return [
      'password.required'              => 'A senha é obrigatória',
      'password.confirmed'             => 'As senhas não são iguais',
      'password_confirmation.required' => 'A confirmação de senha é obrigatória',
      'old_password.required'          => 'A senha antiga é obrigatória',
    ];
  }

  protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
  {
    $response = new Response([
      'error'      => 'Invalid params',
      'code'       => 422,
      'validation' => $validator->errors()
    ], 422);

    throw new ValidationException($validator, $response);
  }
}

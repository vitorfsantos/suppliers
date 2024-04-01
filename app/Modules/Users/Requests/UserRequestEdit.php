<?php

namespace App\Modules\Users\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class UserRequestEdit extends FormRequest
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
      'type_id'          => ['string', 'required', 'max:36'],
      'name'                  => ['string', 'required', 'max:255'],
      'email'                 => ['string', 'required', 'email:rfc,filter', 'min:4', 'max:255'],
    ];
  }

  public function messages()
  {
    return [
      'type_id.required'          => 'Tipo de Usuário é obrigatório',
      'name.required'                  => 'Nome é obrigatório',
      'email.required'                 => 'Email é obrigatório',
      'email.email'                    => 'Formato do e-mail inválido',
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

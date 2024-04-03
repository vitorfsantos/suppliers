<?php

namespace App\Modules\Suppliers\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class SuppliersRequest extends FormRequest
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
      'name'                  => ['string', 'required', 'max:255'],
      'description'                  => ['string', 'max:255'],
    ];
  }

  public function messages()
  {
    return [
      'name.required'                  => 'Nome é obrigatório',
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

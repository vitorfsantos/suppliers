<?php

namespace App\Modules\Address\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class AddressRequest extends FormRequest
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
      'supplier_id'                  => ['string', 'required_without:store_id', 'max:36'],
      'store_id'                  => ['string', 'required_without:supplier_id', 'max:36'],
      'CEP' => ['string', 'required'],
      'city' => ['string', 'required'],
      'state' => ['string', 'required'],
      'street' => ['string', 'required'],
      'number' => ['integer', 'required'],
    ];
  }

  public function messages()
  {
    return [
      'supplier_id.required_without'                  => 'Fornecedor ou loja é obrigatório',
      'store_id.required_without'                  => 'Fornecedor ou loja é obrigatório',
      'CEP.required'                  => 'CEP é obrigatório',
      'city.required'                  => 'Cidade é obrigatória',
      'state.required'                  => 'Estado é obrigatório',
      'street.required'                  => 'Rua é obrigatória',
      'number.required'                  => 'Número é obrigatório',
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

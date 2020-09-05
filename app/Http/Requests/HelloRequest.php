<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    if ($this->path() == 'hello') {
      return true;
    } else {
      return false;
    }
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'name' => 'required',
      'mail' => 'email',
      'age' => 'numeric|hello',
    ];
  }

  public function messages() 
  {
    return [
      'name.required' => '名前を必ず入力してね',
      'mail.email' => 'メールアドレスが必要だって',
      'age.numeric' => '年齢を整数で入れてね',
      'age.hello' => '入力は偶数のみの受付！',
    ];
  }
}

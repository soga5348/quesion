<?php

namespace App\Http\Requests;
use App\Http\Requests\TodoRequest;
use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest

/**FormRequestは、Controller内のメソッドごとにバリデーションルールを設けることはできない
 * 異なるバリデーションルールを作成したい場合は、別ファイルに異なるFormRequestを作成しましょう。
 * リクエストを作成した場合は、コントローラーへの反映も必要である
 */
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
            'content' => 'required| max:20',
            
            //
        ];
    }

    public function messages()
    {
        return[
            'content.required' => '・タスクを入力してください',
            'content.max' => '・タスクは20文字以内で入力してください。',
        ];
        }
}

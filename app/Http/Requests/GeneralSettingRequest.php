<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'blog_title' => 'required',
            'comment' => 'required|integer|max:1',
            'comment_check' => 'required|integer|max:1',
            'blog_seo_key' => 'required',
            'blog_seo_des' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(){
        return [
            'blog_title.required' => '博客标题是必须的',
            'comment.required' => '评论开关是必须的',
            'comment_check.required' => '评论审核开关是必须的',
            'blog_seo_key.required' => '博客 seo 关键字是必须的',
            'blog_seo_des.required' => '博客 seo 描述是必须的'
        ];
    }
}

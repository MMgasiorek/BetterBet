<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationClass extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->route()->getName()) {
            case 'type_update':
                return [
                    'new_type'=> 'required',
                ];
                break;
            case 'odd_update':
                return [
                    'new_odd' => 'required',
                ];
                break;
            case 'max_bet_set':
                return [
                    'max_bet' => 'required',
                ];
            case 'ticket_game':
                return [
                    'game_id' => 'required',
                    'your_odd' => 'required',
                    'your_type' => 'required',
                ];
                break;
            default:
                return [];
    }
    }
}

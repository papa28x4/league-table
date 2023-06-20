<?php

namespace App\Rules;

use App\Models\Result;
use Illuminate\Contracts\Validation\Rule;

class ResultHasBeenEntered implements Rule
{
    private $data;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $two_legs = isset($this->data['two_legs']) ?  $this->data['two_legs'] : null;

        $arr = [ $this->data['team1'], $this->data['team2'] ];
        
        $result = Result::select('*');
        
        if($two_legs){
            $result =  $result->where('team1', $this->data['team1'])
                       ->where('team2', $this->data['team2']);
        }else{
            $result =  $result->whereIn('team1', $arr)
                      ->whereIn('team2', $arr);
        }
        
        $result = $result->count();

        return !((bool) $result);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Result for this match has already been entered';
    }
}

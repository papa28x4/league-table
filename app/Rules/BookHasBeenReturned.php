<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Transaction;

class BookHasBeenReturned implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    private $attr;
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $user = Transaction::returned(False)
        ->where($attribute, $value)
        ->get();

        $result = count($user) ? False : True;

        $this->attr = $attribute;

        return $result;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        if ($this->attr == 'book_id'){
            return 'Book is unavailable';
        }elseif ($this->attr == 'student_number'){
            return 'User cannot make a new request as he/she is yet to return book borrowed.';
        }
        
    }
}

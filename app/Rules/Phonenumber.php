<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class Phonenumber implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        if (! preg_match('/^[0-9]{7,15}$/', str_replace(' ', '', $value))) {
            $fail('Phone is optional, but must be a valid telephone number');
        }
    }
}

<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'role' => ['required', 'integer'],
            'firstname' => ['required', 'string', 'max:20'],
            'lastname' => ['required', 'string', 'max:20'],
            'phone' => ['string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:40', 'unique:users'],
            // 'is_admin' => ['integer'],
            // 'is_driver' => ['integer'],
            // 'is_rider' => ['integer'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        //if($input->terms == 'accepted') {

            return User::create([
                'role' => $input['role'],
                'firstname' => $input['firstname'],
                'lastname' => $input['lastname'],
                'phone' => $input['phone'],
                'email' => $input['email'],
                // 'is_admin' => $input['is_admin'],
                // 'is_driver' => $input['is_driver'],
                // 'is_rider' => $input['is_rider'],
                'password' => Hash::make($input['password']),
                //'terms' => $input['terms'],
            ]);
        //}
    }
}

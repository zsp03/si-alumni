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
            'name' => ['required', 'string', 'max:255'],
            'nim' => ['required', 'string', 'max:255', 'exists:alumnis', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ], [
            'nim.exists' => 'NIM anda belum terdaftar di Databse, hubungi admin di dirhapda@unhas.ac.id atau 081253584528',
            'nim.users' => 'NIM anda telah terdaftar sebagai User. Jika anda belum pernah mendaftar, hubungi admin di dirhapda@unhas.ac.id atau 081253584528',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'nim' => $input['nim'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}

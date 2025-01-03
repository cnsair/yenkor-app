<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('edit-profile', ['user' => $user]);
    }
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, mixed>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'firstname' => ['required', 'string', 'regex:/^\S*$/u', 'max:255'],
            'lastname' => ['required', 'string', 'regex:/^\S*$/u', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'phone' => ['required', 'string', 'max:20', Rule::unique('users')->ignore($user->id)],
            'gender' => ['nullable', 'string', 'max:20'],
            'biography' => ['nullable', 'string', 'max:1000'],
            'd_o_b' => ['nullable', 'string', 'max:20'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:5120'],
            'admin_role' => ['nullable', 'string', 'max:40'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'firstname' => $input['firstname'],
                'lastname' => $input['lastname'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'gender' => $input['gender'] ?? 'N/A',
                'biography' => $input['biography'] ?? 'N/A',
                'd_o_b' => $input['d_o_b'] ?? 'N/A',
                'admin_role' => $input['admin_role'] ?? 'N/A',
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}

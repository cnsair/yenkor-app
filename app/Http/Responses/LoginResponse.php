<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        // $role = \Illuminate\Support\Facades\Auth::user()->role;

        // if ($request->wantsJson()) {
        //     return response()->json(['two_factor' => false]);
        // }

        // switch ($role) {

        //     case 0:
        //         return redirect()->route('rider.rider');
        //     case 1:
        //         return redirect()->route('driver.driver');
        //     case 2:
        //         return redirect()->route('admin.admin');
        //     default:
        //         return redirect('home');

            // case 'admin':
            //     return redirect()->intended(config('fortify.home'));
            //return redirect()->intended('/driver/driver-dashboard');

            // return $request->wantsJson()
            //     ? response()->json(['two_factor' => false])
            //     : redirect()->intended(
            //         auth()->user()->is_admin ? route('admin.dashboard') : route('dashboard')
            //     );

        //}
    }
}

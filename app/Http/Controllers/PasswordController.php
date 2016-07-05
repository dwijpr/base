<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator, Hash;

class PasswordController extends Controller
{
    public function edit() {
        return view('password.change');
    }

    public function update(Request $request) {
        Validator::extend('old_password', function (
            $attribute, $value, $parameters, $validator
        ) {
            return Hash::check($value, current($parameters));
        });
        $messages = [
            'old_password' => 'The :attribute field is wrong.',
        ];
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|old_password:'
                .$request->user()->password,
            'password' => 'required|min:6|confirmed',
        ], $messages);
        if ($validator->fails()) {
            return redirect('/password/change')
                        ->withErrors($validator)
                        ->withInput();
        }
        $user = $request->user();
        $user->update([
            'password' => bcrypt($request->password),
        ]);
        return redirect('/');
    }
}

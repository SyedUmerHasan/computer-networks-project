<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;


class ChatController extends Controller
{
    public function chatsystem()
    {
        return view('homepage',array(
            'user' => Auth::user(),
            'allusers' => User::all()
        ) );
    }
    public function updateUser(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('post')) {
            $user = Auth::user();
            $user->name = $request->UserName;
            $user->save();
            return redirect()->route('chat');
        }
        else{
            return redirect('https://www.google.com');
        }
    }
    public function uploadAvatar( Request $request)
    {
        $method = $request->method();
        if ($request->isMethod('post')) {
            if($request->hasfile('UserAvatar'))
            {
                $avatar = $request->file( 'UserAvatar');
                $filename = time() . "." . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300,300)->save( public_path( '/userimage/'.$filename));                
                $user = Auth::user();
                $user->avatar = $filename;
                $user->save();
            }
            return redirect()->route('chat');
        } else {
            return redirect('https://www.google.com');
        }
    }
}

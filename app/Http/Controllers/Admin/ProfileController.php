<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SkinnyDope\Interfaces\UserInterface;

class ProfileController extends Controller
{
    protected $user;

    public function __construct(UserInterface $user){
    	$this->user = $user;
    }

    public function show(){
    	// return 'Hello';
    	$user = $this->user->getRecord(\Auth::user()->id);
    	if($user) return view('admin.profile.show', compact('user'));
    	return redirect()->route('dashboard')->with('error', 'User does not exist.');
    }

    public function update(Request $request, $id){
    	$user = $this->user->updateRecord($request, \Auth::user()->id);
    	if($user[0]) return redirect()->back()->with('message', 'Your information was successfully updated.');
    	return redirect()->route('dashboard')->with('error', 'Unable to update User.');
    }

    public function logout(){
    	\Auth::logout();
    	return redirect()->route('front.home');
    }
}

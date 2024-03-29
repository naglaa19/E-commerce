<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::select()->paginate(PAGINATION_COUNTER);
        return view('admin.User.index',compact('user'));
    }

    public function destroy($id)
    {
        $user=User::find($id)->delete();
        return redirect()->route('User/index')->with('success', __('messages.Deleted'));
    }
}

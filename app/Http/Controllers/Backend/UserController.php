<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;

class UserController extends Controller
{
    public function UserView() {
        $data['allData'] = User::all();
        return view('backend.user.view_user', $data);
    }

    public function UserAdd() {
        return view('backend.user.add_user');
    }

    public function UserStore(Request $request) {
        // Validation Area
        $validateData = $request->validate([
            // Unique email in users table, check for repeated
            'email' => 'required|unique:users',
            'name'=> 'required',
            'usertype' => 'required',
            'password' => 'required',
        ]);
        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        $notification = array(
            'message' => 'Utilizador Inserido com Sucesso',
            'alert-type' => 'success'
        );
        return redirect()->route('user.view')->with($notification);  
    }

    public function UserEdit($id) {
        $editData = User::find($id);
        return view('backend.user.edit_user', compact('editData'));
    }

    public function UserUpdate(Request $request, $id) {
        $data = User::find($id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        $notification = array(
            'message' => 'Utilizador Actualizado com Sucesso',
            'alert-type' => 'info'
        );
        return redirect()->route('user.view')->with($notification);
    }

    public function UserDelete($id) {
        $user = User::find($id);
        $user->delete();
        $notification = array(
            'message' => 'Utilizador Removido com Sucesso',
            'alert-type' => 'info'
        );
        return redirect()->route('user.view')->with($notification);
    }
}

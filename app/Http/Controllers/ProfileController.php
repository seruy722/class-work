<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class ProfileController extends Controller {

    public function index() {
        $users = (new Users)->getUsers();

        return view('form.index', ['users' => $users]);
    }

    public function create() {

        return view('form.create');
    }

    public function insert(Request $request) {

        $all = $request->all();
        unset($all['_token']);
        $ins = (new Users)->insert([$all]);
        return redirect()->route('form.index');
    }

    public function add(Request $request, $id) {
        $user = $request->all();
        unset($user['_token']);
        $ins = (new Users)->update($id, $user);
        return redirect()->route('form.index');
    }

    public function update($id) {
        $user = (new Users)->getUser($id);

        return view('form.update', ['user' => $user]);
    }

    public function delete($id) {
        $user = (new Users)->delete($id);

        return redirect()->route('form.index');
    }

}

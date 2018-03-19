<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class ProfileController extends Controller {

    public function index() {
        return view('form.index', ['users' => (new Users)->paging(15)]);
    }

    public function create() {

        return view('form.create');
    }

    public function insert(Request $request) {

        $data = $request->except('_token');
        (new Users)->insert([$data]);
        return redirect()->route('form.index');
    }

    public function add(Request $request, $id) {
        $data = $request->expect('_token');
        (new Users)->update($id, $data);
        return redirect()->route('form.index');
    }

    public function update($id) {
        return view('form.update', ['user' => (new Users)->getUser($id)]);
    }

    public function delete($id) {
        (new Users)->delete($id);
        return redirect()->route('form.index');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subject;


class ProfileController extends Controller {

    public function index() {
        $sub = (new Subject);
        return view('form.index', ['users' => Subject::paginate(15),'sub'=>$sub]);
    }

    public function create() {

        return view('form.create');
    }

    public function insert(Request $request) {

        $data = $request->except('_token');
        Subject::create($data);
        return redirect()->route('form.index');
    }

    public function add(Request $request, $id) {
        $data = $request->except('_token');
        Subject::where('id', $id)->update($data);
        return redirect()->route('form.index');
    }

    public function update($id) {
        return view('form.update', ['user' => Subject::findOrFail($id)]);
    }

    public function delete($id) {
        Subject::where('id', $id)->delete();
        return redirect()->route('form.index');
    }

}

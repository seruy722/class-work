<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    public function index() {
        return view('form.index', ['users' => Subjects::pagingate(15)]);
    }
}

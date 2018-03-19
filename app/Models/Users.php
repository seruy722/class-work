<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Users {

    private $tableName = 'users';

    public function getUsers() {
        return DB::table($this->tableName)->get();
    }

    public function getUser($id) {
        return DB::table($this->tableName)->where('id', $id)->first();
    }

    public function insert($arr) {
        return DB::table($this->tableName)->insert($arr);
    }

    public function update($id, $arr) {
        return DB::table($this->tableName)->where('id', $id)->update($arr);
    }

    public function delete($id) {
        return DB::table($this->tableName)->where('id', $id)->delete();
    }

}

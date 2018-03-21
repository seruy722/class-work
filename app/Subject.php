<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

    protected $table = 'subjects';
    protected $fillable = ['name','teacher_fio'];
//    protected $primaryKey = 'id';
//    protected $incrementing = false;
//    public $timestamps = false;
//    const CREATED_AT = 'creation_at';
//    const UPDATED_AT = 'updetion_at';
    public function getFio() {
        return $this->name . ' ' . $this->teacher_fio;
    }
        

}

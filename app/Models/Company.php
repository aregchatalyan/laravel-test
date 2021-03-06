<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = ['name','email','logo','website'];
    protected $dates = ['created_at','updated_at'];

    public function employees()
    {
        return $this->hasMany('employees');
    }
}

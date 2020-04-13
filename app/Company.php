<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public function employees()
    {
        return $this->hasMany('employees', 'company_id');
    }
}

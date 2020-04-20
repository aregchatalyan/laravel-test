<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['first_name','last_name','email','phone', 'company_id'];
    protected $dates = ['created_at','updated_at'];

    public function company()
    {
        return $this->belongsTo('companies');
    }
}

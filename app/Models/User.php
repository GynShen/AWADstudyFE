<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name', 'email', 'password'];

    public function getOneCompany(){
        return $this->hasOne(Company::class);
    }

    public function getManyCompany(){
        return $this->hasMany(Company::class);
    }
}

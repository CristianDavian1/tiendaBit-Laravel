<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class users extends Model implements AuthenticatableContract {

    use Authenticatable;
    use HasRoles;

    protected $fillable =[

        'nombre',	
        'email',
        'password',		
        'userCompra',
        'userPhoto'
    ];
public $timestamps= false;
}
<?php

namespace App\Models;
// use App\Addcategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class signup extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;
    protected $table= 'signups';
    public $timestamps = false;

    protected $fillable = ['fullname', 'email'];
}

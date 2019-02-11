<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\newmodel as Authenticatable;

//use Illuminate\Contracts\Auth\Authenticatable;
class newmodel extends Model
{
    //use AuthenticableTrait;
        use Notifiable;
    protected $table='information';
   
    public $timestamps=true;
    protected $connection='mysql';
}

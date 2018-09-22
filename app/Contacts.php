<?php
// modal

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    //use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'number', 'company', 'job', 'created_at', 'api_token', 'updated_at'];
    protected $hidden = ['api_token'];

}

?>
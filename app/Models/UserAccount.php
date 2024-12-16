<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
   
    protected $table = 'users_account';
    protected $primaryKey = 'id';
     protected $fillable = [
          'name',
          'address',
          'phone',
          'email',
          'password',
          'AccountType',
  
      ];
  
   
  
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilisateur extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    public function getEmailAttribute() {
        return $this->matricule;
    }
  
    public function setEmailAttribute($value)
    {
      $this->attributes['matricule'] = strtolower($value);
    }
}

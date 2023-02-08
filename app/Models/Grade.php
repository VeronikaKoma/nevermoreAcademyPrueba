<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\GradeFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Grade as Authenticatable;

class Grade extends Model
{
    use Grade;
}

    namespace App\Http\Models;

        use HasApiTokens, HasFactory, Notifiable;
/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    /* protected $fillable = [
        'name',
        'email',
        'password',
        'surname',
        'currentTerm',
        'img',
        'isTeacher',
    ];
        /**
        * The attributes that should be hidden for serialization.
        *
        * @var array<int, string>
        */
    /* protected $hidden = [
        'password',
        'remember_token',
    ];
    
    /*
        * The attributes that should be cast.
        *
        * @var array<string, string>
        */
    /*protected $casts = [
        'email_verified_at' => 'datetime',
    ];
   */


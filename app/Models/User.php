<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $with = ['roles'];

    public function getAuthIdentifierName()
    {
        return 'email';
    }

    public function roles()
    {
        return $this->hasMany(Role::class, 'user_id', 'id');
    }

    public function isCustomer()
    {
        return $this->roles->contains(fn($role) => $role->role === 'customer');
    }

    public function isOwner()
    {
        return $this->roles->contains(fn($role) => $role->role === 'owner');
    }

    public function isStaff()
    {
        return $this->roles->contains(fn($role) => $role->role === 'staff');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'idcustomers');
    }
}

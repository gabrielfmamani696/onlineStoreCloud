<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * USER ATTRIBUTES
     * $this->attributes['id'] - int - contains the user primary key (id)
     * $this->attributes['name'] - string - contains the user name
     * $this->attributes['email'] - string - contains the user email
     * $this->attributes['email_verified_at'] - timestamp - contains the user email verification date
     * $this->attributes['password'] - string - contains the user password
     * $this->attributes['remember_token'] - string - contains the user password
     * $this->attributes['role'] - string - contains the user role (client or admin)
     * $this->attributes['balance'] - int - contains the user balance
     * $this->attributes['created_at'] - timestamp - contains the user creation date
     * $this->attributes['updated_at'] - timestamp - contains the user update date
     * $this->orders - Order[] - contains the associated orders
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'balance',
    ];
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getName()
    {
        return $this->attributes['name'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function getEmail()
    {
        return $this->attributes['email'];
    }
    public function setEmail($email)
    {
        $this->attributes['email'] = $email;
    }
    public function getPassword()
    {
        return $this->attributes['password'];
    }
    public function setPassword($password)
    {
        $this->attributes['password'] = $password;
    }
    public function getRole()
    {
        return $this->attributes['role'];
    }
    public function setRole($role)
    {
        $this->attributes['role'] = $role;
    }
    public function getBalance()
    {
        return $this->attributes['balance'];
    }
    public function setBalance($balance)
    {
        $this->attributes['balance'] = $balance;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function getOrders()
    {
        return $this->orders;
    }
    public function setOrders($orders)
    {
        $this->orders = $orders;
    }
}

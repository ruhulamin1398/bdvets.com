<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isActive()
    {

        $status = 'N/A';

        if ($this->status)
            $status = $this->status;

        if ($status == 1)
            return true;
        else
            return false;
    }

    public function isDeActive()
    {

        $status = 'N/A';

        if ($this->status)
            $status = $this->status;

        if ($status == 1)
            return true;
        else
            return false;
    }











    public function isAdmin()
    {

        $role = 'N/A';

        if ($this->role)
            $role = $this->role->role;

        if ($role == 'admin')
            return true;
        else
            return false;
    }
    public function isAdminDoctor()
    {

        $role = 'N/A';

        if ($this->role)
            $role = $this->role->role;


        if ($role == 'admin' or $role == 'doctor')
            return true;
        else
            return false;
    }


    public function isAdminDoctorPharmacy()
    {

        $role = 'N/A';

        if ($this->role)
            $role = $this->role->role;


        if ($role == 'admin' or $role == 'doctor' or $role == 'pharmacy')
            return true;
        else
            return false;
    }

    public function isAdminPharmacy()
    {

        $role = 'N/A';

        if ($this->role)
            $role = $this->role->role;


        if ($role == 'admin'  or $role == 'pharmacy')
            return true;
        else
            return false;
    }



    public function isDoctor()
    {

        $role = 'N/A';

        if ($this->role)
            $role = $this->role->role;

        if ($role == 'doctor')
            return true;
        else
            return false;
    }

    public function isPharmacy()
    {

        $role = 'N/A';

        if ($this->role)
            $role = $this->role->role;

        if ($role == 'pharmacy')
            return true;
        else
            return false;
    }


    public function isUser()
    {

        $role = 'N/A';

        if ($this->role)
            $role = $this->role->id;

        if ($role == 'user')
            return true;
        else
            return false;
    }



    ///////////////////////////////////////////////////////

    public function role()
    {
        return $this->belongsTo('App\role');
    }

    public function doctors()
    {
        return $this->belongsToMany("App\role");
    }
}

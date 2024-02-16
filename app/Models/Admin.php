<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = 'admin';

    protected $fillable = [
        "prenom",
        "nom",
        "telephone",
        "adresse",
        "email",
        "password",
        "avatar",
        "couverture"
    ];

    public function getImage()
    {
        $admin = Auth::guard('admin')->user();
        $imagePath = $admin->avatar ?? 'avatars/default1.png';
        return "/storage" . $imagePath;
    }
}

<?php

namespace App\Models\mdg;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPatient extends Model
{
    protected $table = 'mdg_patient';
    protected $fillable = ['user_id', 'first_name', 'last_name'];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    use HasFactory;
}

<?php

namespace App\Models\unis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unis extends Model
{
    protected $table = 'unis';

    protected $fillable = ['name', 'email', 'nationality', 'age'];

    public $timestamps = false;

    use HasFactory;

}

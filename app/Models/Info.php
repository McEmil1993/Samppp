<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $fillable = [ 'user_id', 'prefix', 'firstname', 'middlename', 'lastname', 'suffix', 'contact', 'address'];
}

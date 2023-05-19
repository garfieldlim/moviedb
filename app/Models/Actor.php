<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    // use HasFactory;
    protected $table = 'actor';
    public $timestamps = false;

    protected $primaryKey = 'act_id';
    protected $guarded = ['act_id'];
    protected $fillable = ['act_fname', 'act_lname', 'act_gender'];
}

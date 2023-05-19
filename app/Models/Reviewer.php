<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    // use HasFactory;
    protected $table = 'reviewer';
    public $timestamps = false;

    protected $primaryKey = 'rev_id';
    protected $guarded = ['rev_id'];
    protected $fillable = ['rev_name'];
}

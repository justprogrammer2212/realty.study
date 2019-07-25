<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'articles';
    protected $guarded = [];
    public function articles() {
        return $this->hasOne(User::class);
    }
 }

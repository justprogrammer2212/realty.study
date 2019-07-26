<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    const USD = 'USD';
    const UA = 'UA';
    public static $offer_currency = [self::USD, self::UA];
    protected $table = 'offers';
    protected $guarded = [];

    public function user()
    {
        return User::find($this->user_id);
    }

    public function category()
    {
        return Categories::find($this->category_id);

    }
}

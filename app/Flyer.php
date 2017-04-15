<?php

namespace App;
use App\Photo;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    //
    protected $fillable = [
      'street','city','state','post_code','country','price','description'
    ];

    public function photos()
    {
      return $this->hasMany(Photo::class);
    }

    public static function locatedAt($post_code,$street)
    {
      $post_code = str_replace(' ', '', $post_code);
      $street = str_replace('-', ' ', $street);

      return static::where(compact('zip','street'))->first();
    }
}

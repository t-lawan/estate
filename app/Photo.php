<?php

namespace App;
use App\Flyer;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $table = 'flyer_photos';

    protected $fillable = ['name','path','thumbnail_path'];

    protected $baseDir = 'flyers/photos'

    public function flyer()
    {
      return $this->belongsTo(Flyer::class);
    }
}

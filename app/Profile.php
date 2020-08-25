<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded =[];

    public function profileImage()
  {
    $imagePath = ($this->image) ? $this->image : '/profile/va5P8LiS1p25eFB1mwdae8GQ4SIXw7B6a6VQiLAF.webp';

    return  '/storage/' .$imagePath;
  }

    public function followers()
    {
      return $this->belongsToMany(User::class);
    }
    public function user()
    {
      return $this -> belongsTo(User::class);
    }
}

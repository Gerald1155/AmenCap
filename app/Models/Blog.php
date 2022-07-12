<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ["title","blog","short_des"];

    public function images()
    {
        return $this->morphMany("App\Models\Image",'imageable');
    }

    public function cover()
    {
        if (count($this->images) > 0) {
            return asset($this->images[0]->url);
        }
        else
        {
            return asset("img/notfound.jpg");
        }
    }

    public function show()
    {
        $title = str_replace(" ","-",$this->title);
        return route("blog",[$this->id,$title]);
    }
}

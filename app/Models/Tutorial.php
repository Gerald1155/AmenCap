<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;

    protected $fillable = ["name","tutorial","short_des"];

    public function images()
    {
        return $this->morphMany("App\Models\Image","imageable");
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
        $name = str_replace(" ","-",$this->name);
        return route("tutorial",[$this->id,$name]);
    }
}

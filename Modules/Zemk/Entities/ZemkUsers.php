<?php

namespace Modules\Zemk\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZemkUsers extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Zemk\Database\factories\ZemkUserFactory::new();
    }


    public function news()
    {
        return $this->hasMany(ZemkNews::class,'id','author_id');
    }

}

<?php

namespace Modules\Phpcat\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhpcatNews extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Phpcat\Database\factories\PhpcatNewsFactory::new();
    }
}

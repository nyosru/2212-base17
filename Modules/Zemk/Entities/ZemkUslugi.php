<?php

namespace Modules\Zemk\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Zemk\Database\factories\ZemkUslugiFactory;

class ZemkUslugi extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['head', 'opis', 'sort'];

    protected static function newFactory()
    {
        return ZemkUslugiFactory::new();
    }
}

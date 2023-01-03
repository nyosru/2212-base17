<?php

namespace Modules\Zemk\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Zemk\Database\factories\ZemkUslugiFactory;

class ZemkUslugi extends Model
{
    use HasFactory;

    protected $fillable = ['head', 'opis', 'sort'];

    protected static function newFactory()
    {
        return ZemkUslugiFactory::new();
    }
}

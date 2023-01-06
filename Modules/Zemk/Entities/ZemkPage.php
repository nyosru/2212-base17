<?php

namespace Modules\Zemk\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\SoftDeletes;

class ZemkPage extends Model
{
    use HasFactory;

    protected $fillable = [ 'name_key' , 'name' , 'html' ];
    
    use SoftDeletes;

    /**
     * Атрибуты, которые должны быть преобразованы в дату
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected static function newFactory()
    {
        return \Modules\Zemk\Database\factories\ZemkPageFactory::new();
    }
}

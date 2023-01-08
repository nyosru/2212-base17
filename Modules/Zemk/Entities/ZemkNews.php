<?php

namespace Modules\Zemk\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ZemkNews extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['head','opis_Small','opis','author_id'];

    protected static function newFactory()
    {
        return \Modules\Zemk\Database\factories\ZemkNewsFactory::new();
    }

    /**
     * Получить пост, которому принадлежит комментарий.
     */
    public function author()
    {
        return $this->belongsTo(ZemkUsers::class, 'author_id', 'id');
    }
}

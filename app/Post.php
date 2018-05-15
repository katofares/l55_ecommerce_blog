<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed title
 * @property mixed body
 */
class Post extends Model
{
    // Soft delete
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    // Mass Assignment
    protected $fillable = ['title', 'body'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * Relation with categories table
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}

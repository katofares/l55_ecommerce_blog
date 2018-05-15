<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Category extends Model
{

    /**
     * @var array
     * Mass Assignment
     */
    protected $fillable = ['name', 'body', 'slug'];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * Relation with posts table
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);

    }

}

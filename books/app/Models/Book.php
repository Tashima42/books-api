<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'edition',
        'isbn',
        'published',
        'language',
        'description',
        ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    
    public function links()
    {
        return $this->hasMany('App\Models\Link');
    }
}

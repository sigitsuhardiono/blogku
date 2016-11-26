<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    public function users()
    {
        return $this->belongsTo('App\UsersModel','id_user');
    }

    public function categories()
    {
    	return $this->belongsTo('App\CategoriesModel','id_kategori');
    }
}

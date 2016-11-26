<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    public function posts()
    {
        return $this->HasMany('App\PostsModel','id_kategori');
    }
}

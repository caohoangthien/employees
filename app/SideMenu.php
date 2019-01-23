<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SideMenu extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'side_menus';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}

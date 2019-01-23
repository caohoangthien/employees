<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    /*
     * Using
     */
    const USING = 1;

    /*
     * Stop
     */
    const STOP = 2;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone', 'address', 'status'];

    /**
     * Get status employee
     *
     * @return array
     */
    public static function getStatusAttribute($value)
    {
        return self::getStatus()[$value];
    }

    /**
     * Get status name
     *
     * @return array
     */
    public static function getStatus()
    {
        return [
            self::USING => 'Using',
            self::STOP => 'Stop'
        ];
    }
}

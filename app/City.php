<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class City.
 *
 * @property int $id
 * @property string $country
 * @property string $name
 */
class City extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = ['id', 'country', 'name'];
}

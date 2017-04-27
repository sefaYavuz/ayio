<?php

namespace Ayio\Ui\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menu';

    protected $guarded = array();

    public function getAttributes() {
        return $this->attributes;
    }
}

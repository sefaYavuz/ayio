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

    public function buildMenu($menu, $children = null) {
        $menuArr = [];
        foreach($menu as $menuItem) {
            if($menuItem->parent_id === null) {
                $menuArr[$menuItem->id][] = $menuItem;
            } else {
                $menuArr[$menuItem->parent_id]['children'][] = $menuItem;
            }
        }

        return $menuArr;
    }
}

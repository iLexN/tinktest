<?php

namespace Tink\Model;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * This is the database Page table
 *
 * @property int $id
 * @property int $page_id page id
 * @property string $field_name field name
 * @property string $field_value field value
 * @property string $field_type field type : PlanText,HTML,InterLink
 */
class PageField extends Model
{
    protected $table = 'extra_field';

    protected $hidden = ['created_at', 'updated_at'];
}

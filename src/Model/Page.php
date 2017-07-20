<?php
/**
 * Created by PhpStorm.
 * User: IlexN
 * Date: 18/7/2017
 * Time: 18:58
 */

namespace Tink\Model;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * This is the database Page table
 *
 * @property int $id page id , db pk
 * @property string $title page title
 * @property string $body page body
 * @property string $type content type
 * @property string $content_type content type
 * @property string $uri url
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property mixed $fields
 */
class Page extends Model
{
    const TYPE_FRONTPAGE = 'FrontPage';
    const TYPE_PAGE = 'Page';
    const TYPE_POST = 'Post';

    protected $table = 'page';

    protected $hidden = ['created_at', 'updated_at'];

    /**
     * GET ALL field
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fields()
    {
        return $this->hasMany(__NAMESPACE__.'\PageField')->get()->keyBy('field_name');
    }
}

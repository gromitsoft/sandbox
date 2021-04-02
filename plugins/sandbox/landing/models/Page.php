<?php namespace Sandbox\Landing\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\Validation;
use October\Rain\Database\Traits\Nullable;

/**
 * page Model
 */
class Page extends Model
{

    public $table = 'sandbox_landing_pages';

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['title', 'content'];
    protected $jsonable = ['content'];

    use Validation;

    public $rules = [
        'title' => 'required',
    ];

    use Nullable;

    protected $nullable = ['content'];

}




<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * App\Models\Note\Note
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property bool $archived
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Auth\User\User sortable($defaultSortParameters = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Auth\User\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Auth\User\User whereArchived($archived)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Auth\User\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Auth\User\User whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Auth\User\User whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Auth\User\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Note extends Model
{
    use Sortable,
        SoftDeletes;

    public $sortable = ['created_at', 'updated_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['titel', 'body', 'archived'];
}

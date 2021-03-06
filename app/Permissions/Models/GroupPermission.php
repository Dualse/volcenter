<?php
namespace app\Permissions\Models;

use Illuminate\Database\Eloquent\Model;

class GroupPermission extends Model
{

    protected $table = 'GroupPermissions';
    protected $hidden = ['created_at', 'updated_at', 'created_by'];
    protected $fillable = ['group_id', 'permission_id', 'created_by'];

    public function rule()
    {
        return $this->hasOne(Rule::class, 'id', 'permissions_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskMaster extends Model
{   
    use SoftDeletes;
    protected $table = 'taskmasters';

    protected $primaryKey = 'task_id';

    protected $fillable = [
        'header',
        'givenTo',
        'givenBy',
        'description',
        'completeBy',
        'remark'
    ];
}

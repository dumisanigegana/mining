<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Data extends Model implements AuditableContract
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillables = ['location', 'part', 'description', 'mineral', 'name_from', 'email', 'cell', 'organisation'];
}

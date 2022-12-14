<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class ContactCompany extends Model implements AuditableContract

{
    use HasFactory;
    use HasAdvancedFilter;
     use SoftDeletes;
 use \OwenIt\Auditing\Auditable;

    public $table = 'contact_companies';

    public $orderable = [
        'id',
        'company_name',
        'company_address',
        'company_website',
        'company_email',
    ];

    public $filterable = [
        'id',
        'company_name',
        'company_address',
        'company_website',
        'company_email',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'company_name',
        'company_address',
        'company_website',
        'company_email',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}

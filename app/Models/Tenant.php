<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Stancl\Tenancy\Database\Models\Tenant as TenantBase;

class Tenant extends TenantBase
{
    use HasFactory;
}

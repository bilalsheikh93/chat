<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Project extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_type', 'project_name', 'target_name', 'target_sector', 'target_industry', 'target_description', 'target_location_lat', 'valuation_start_date', 'valuation_end_date', 'period_options',
        'user_id', 'target_location_long', 'status', 'created_by'
    ];



}

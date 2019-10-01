<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CostOfCapital extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'total_debt_amount', 'total_debt_weighted_interest_rate', 'total_equity_amount', 'total_equity_weighted_interest_rate', 'total_cost_capm', 
        'total_cost_dupont', 'total_cost_of_capital', 'project_id', 'created_by', 'status'
    ];



}

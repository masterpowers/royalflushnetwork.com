<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use SammyK\LaravelFacebookSdk\SyncableGraphNodeTrait;
use Silber\Bouncer\Database\HasRolesAndAbilities;
// use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // use  Billable;
    use SyncableGraphNodeTrait, HasRolesAndAbilities;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','fb_token', 'stripe_id', 'card_brand', 'card_last_four', 'resent'
    ];

    protected static $graph_node_field_aliases = [
        // from fb      => your database column
        'id'            => 'fbid',
        'name'          => 'name',
        'email'         => 'email',
        'verified'      => 'verified',
        'access_token'  => 'fb_token'
        
    ];
    protected static $graph_node_fillable_fields = [
        // database columns that will be filled
    'fbid', 'name', 'email', 'verified', 'fb_token'
    ];

    protected $dates = ['created_at', 'updated_at'];

    protected $casts = [
        'verified' => 'boolean',
        'blocked' => 'boolean'
    ];
}

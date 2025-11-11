<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model


{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'employers';
    protected $fillable = [
        'name',
    ];


    /**
     * Get the jobs for the employer.
     */
     public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
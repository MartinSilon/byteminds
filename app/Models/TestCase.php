<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestCase extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id', 'employee_id', 'title', 'description',
        'preconditions', 'steps', 'expected', 'priority', 'module'
    ];

    public function testPlan()
    {
        return $this->belongsTo(TestPlan::class, 'plan_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employer::class, 'employee_id');
    }

    public function testRuns()
    {
        return $this->hasMany(TestRun::class, 'case_id');
    }
}



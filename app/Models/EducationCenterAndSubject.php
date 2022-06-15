<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationCenterAndSubject extends Model
{
    use HasFactory;

    protected $table = "subject_education_center_relation";

    protected $guarded = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;
class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $guarded = [];


    /**
     * Get image of user by checking file exists
     *
     * @return string
     */
    public function getImage()
    {
        $check = Storage::disk('public')->has($this->img);
        if ($check) {
            return Storage::url($this->img);
        }

        return false;
    }
}

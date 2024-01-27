<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class BlogModel extends Model
{
    use HasFactory;

    public $table = 'blogs';
    protected $guarded = [];

//    /**
//     * Message
//     *
//     * @var string
//     */
//    public string $message;
//    /**
//     * Name
//     *
//     * @var string
//     */
//    public string $name;
//    /**
//     * email
//     *
//     * @var string
//     */
//    public string $email;
}

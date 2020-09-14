<?php
namespace App\Models;
use CodeIgniter\Model;


class BlogModel extends Model{

    protected $table = 'blogs';
    protected $allowedFields = ['title','body','author'];
    protected $useTimestamps = true;
}

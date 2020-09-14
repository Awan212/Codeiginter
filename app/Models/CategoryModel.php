<?php
namespace App\Models;
use CodeIgniter\Model;


class CategoryModel extends Model{

    protected $table = 'appcategories';
    protected $allowedFields = ['category','category_type'];
    protected $useTimestamps = true;
}

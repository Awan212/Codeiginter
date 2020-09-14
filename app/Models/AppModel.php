<?php
namespace App\Models;
use CodeIgniter\Model;


class AppModel extends Model{

    protected $table = 'apps';
    protected $allowedFields = ['app_type',
                                'app_category',
                                'app_name',
                                'app_url',
                                'app_icon',
                                'app_description',
                                'app_detail',
                                'app_thumbnails'
                                ];
    protected $useTimestamps = true;
}

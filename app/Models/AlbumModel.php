<?php

namespace App\Models;

use CodeIgniter\Model;

class AlbumModel extends Model
{
   protected $DBGroup          = 'default';
   protected $table            = 'album';
   protected $primaryKey       = 'id';
   protected $useAutoIncrement = true;
   protected $returnType       = 'array';
   protected $useSoftDeletes   = true;
   protected $protectFields    = true;
   protected $allowedFields    = ['img_url', 'album_name', 'type', 'songs'];

   // Dates
   protected $useTimestamps = true;
   protected $dateFormat    = 'datetime';
   protected $createdField  = 'created_at';
   protected $updatedField  = 'updated_at';
   protected $deletedField  = 'deleted_at';
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
   public function index()
   {
      $model = new \App\Models\AlbumModel;

      $albums = $model->findAll();
      $data = [
         'albums' => $albums,
      ];

      return view('home', $data);
   }
}

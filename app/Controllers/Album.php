<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Album extends BaseController
{
   private $model;

   public function __construct()
   {
      $this->model = new \App\Models\AlbumModel;
   }

   public function create()
   {
      $post = $this->request->getPost();

      if ($this->model->save($post)) {
         return redirect()->to("/");
      } else {
         dd($this->model->errors());
      }

      return view('new');
   }

   public function edit($id)
   {

      $album = $this->model->find($id);

      return view('action/edit', $album);
   }

   public function update()
   {
      $post = $this->request->getPost();

      if ($this->model->save($post)) {
         return redirect()->to("/");
      } else {
         dd($this->model->errors());
      }
   }

   public function delete($id)
   {
      if ($this->model->delete($id)) {
         return redirect()->to("/");
      }
   }
}

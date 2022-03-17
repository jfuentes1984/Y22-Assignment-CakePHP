<?php

namespace App\Controller;

class ArticlesController extends AppController
{
    public function index()
    {
        // die('hola'); //no view file set so use die function to test route works
        $this->loadComponent('Paginator');

        $articles = $this->Paginator->paginate($this->Articles->find()); //goes into the db and finds all articles.

        $this->set('articles', $articles); //pass variables into the view file
    }
}

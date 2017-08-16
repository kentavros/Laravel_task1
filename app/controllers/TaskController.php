<?php
class TaskController extends BaseController
{
    public function showHome()
    {
        return View::make('home');
    }

    public function getArticles()
    {
        return View::make('articles', array('list'=>array(1,2,3,4,5,6,7,8,9,10)));
    }

    public function getArticle($num=1)
    {
        return View::make('article', ['num' => $num]);
    }

    public function getAbout()
    {
        return View::make('about');
    }

    public function getContact()
    {
        return View::make('contact', ['error' => '0']);
    }

    public function postContact()
    {
        $name = Input::get('name');
        $msg = Input::get('msg');
        Input::flash();
        if ($name && $msg)
        {
            return Redirect::to('thank')->withInput();
        }
        else
        {
            return View::make('contact', ['error'=>'1']);
        }
    }

    public function getThank($name='unknown')
    {
        $name = Input::old('name');
        return View::make('thank', array('name' => $name));
    }

}
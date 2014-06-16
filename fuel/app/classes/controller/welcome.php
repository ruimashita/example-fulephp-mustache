<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller
{

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{

        $articles = [];
        foreach(range(0,3) as $i){
            $article = new \Model\Article();
            $article->title = md5(rand());
            $article->name = 'name' . $i;
            $articles[] = $article;
        }
        $context = [
            'is_admin' => false,
            'header2' => 'cccccc',
            '_header' => 'cccccc',
            'title'=>'it is header title',
            'articles' => $articles,
        ];

        $view = View::forge('welcome/index.mustache', $context);
        $view::parser()->setPartials(
            array('aHead' => file_get_contents(APPPATH.'/views/partials/_header.mustache'))
        );
        //var_dump($view);
        //var_dump($view::parser());
  
		return Response::forge($view);




	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a ViewModel to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
 
        $articles = [];
        foreach(range(0,3) as $i){
            $article = new \Model\Article();
            $article->title = md5(rand());
            $article->name = 'name' . $i;
            $articles[] = $article;
        }



        // load the theme template
        $theme = \Theme::instance();

        // set the page template
        $theme->set_template('layouts/default');

        $context = [
            'title'=>'it is wellcome hellow title',
            'articles' => $articles,
        ];
        $theme->get_template()->content = $theme->view('welcome/hello', $context);

        $theme->set_partial('header', 'welcome/hello');


        return Response::forge(\Theme::instance()->render());
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}

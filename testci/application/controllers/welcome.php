<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->model('blog_category');
		$this->load->model('blog_model');
		//查所有的文章类别
		$categories = $this -> blog_category_model ->get_all();
		//查所有的文章
		$blogs = $this ->blog_model ->get_all();

		$this->load->view('index',array(
				'categories' => $categories,
				'blogs'=>$blogs
		));
	}
}

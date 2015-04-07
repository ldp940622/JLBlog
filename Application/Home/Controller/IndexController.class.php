<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function index() {
		$manage_url = U('Admin/Index/index');
		$Article = M('Article');
		$Category = M('Category');
		$article_list = $Article->select();
		$category_list = $Category->select();
		$this->assign('article_list', $article_list);
		$this->assign('category_list', $category_list);
		$this->assign('manage_url', $manage_url);
		$this->display();
	}
}

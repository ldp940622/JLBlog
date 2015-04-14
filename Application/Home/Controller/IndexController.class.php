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
	public function details() {
		//传入的id
		$id = I('get.id');
		$Details = M('Article');
		$Category = M('Category');
		$manage_url = U('Admin/Index/index');
		$category_list = $Category->select();
		$article_details = $Details->where('id=' . $id)->find();
		$this->assign('category_list', $category_list);
		$this->assign('article_details', $article_details);
		$this->assign('manage_url', $manage_url);
		$this->display();
	}
}

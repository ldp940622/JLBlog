<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 默认模块的默认方法
 */
class IndexController extends Controller {
	public function index() {
		$manage_url = U('Admin/Index/index');
		$Article = M('Article');
		$Category = M('Category');
		$Tag = M('Tag');
		$article_list = $Article->order('id desc')->select();
		$category_list = $Category->select();
		$tag_list = $Tag->select();
		$this->assign('article_list', $article_list);
		$this->assign('category_list', $category_list);
		$this->assign('tag_list', $tag_list);
		$this->assign('manage_url', $manage_url);
		$this->display();
	}

	public function article() {
		$id = I('get.id');
		$Details = M('Article');
		$Category = M('Category');
		$Tag = M('Tag');
		$manage_url = U('Admin/Index/index');
		$category_list = $Category->select();
		$tag_list = $Tag->select();
		$article_details = $Details->where('tb_article.id=' . $id)->join('__CATEGORY__ ON __ARTICLE__.category = __CATEGORY__.id')->find();
		if (!$article_details) {
			header("HTTP/1.0 404 Not Found");
			$this->display('/404.html');
		} else {
			$this->assign('tag_list', $tag_list);
			$this->assign('category_list', $category_list);
			$this->assign('article_details', $article_details);
			$this->assign('manage_url', $manage_url);
			$this->display();
		}
	}

	/**
	 * 增加访问量
	 */
	public function _after_article() {
		$id = I('get.id');
		$Article = M('Article');
		$Article->where('id=' . $id)->setInc('views', 1);
	}

	/**
	 * 通过category进行筛选
	 */
	public function category() {
		$id = I('get.id');
		$Article = M('Article');
		$Category = M('Category');
		$Tag = M('Tag');
		$category_list = $Category->select();
		$tag_list = $Tag->select();
		$this->assign('category_list', $category_list);
		$this->assign('tag_list', $tag_list);
		$article_list = $Article->where('category=' . $id)->order('id desc')->select();
		$msg = array('type' => 'Category', 'name' => $Category->where("id=$id")->getField('name'));
		if (!$article_list) {
			// 目录下没有文章跳转的页面
			$this->display('none');
		} else {
			$this->assign('article_list', $article_list);
			$this->assign('msg', $msg);
			$this->display('index');
		}
	}

	/**
	 * 通过Tag进行筛选
	 */
	public function tag() {
		$id = I('get.id');
		$Article = M('Article');
		$Tag = M('Tag');
		$Category = M('Category');
		// 通过ID获取Name
		$tag_list = $Tag->select();
		$category_list = $Category->select();
		$this->assign('tag_list', $tag_list);
		$this->assign('category_list', $category_list);
		$tag_name = $Tag->where('id=' . $id)->getField('name');
		$map['tags'] = array('like', "%$tag_name%");
		// 连表查询
		$article_list = $Article->where($map)->order('id desc')->select();
		$msg = array('type' => 'Tag', 'name' => $Tag->where("id=$id")->getField('name'));
		if (!$article_list) {
			// 目录下没有文章跳转的页面
			$this->display('none');
		} else {
			$this->assign('article_list', $article_list);
			$this->assign('msg', $msg);
			$this->display('index');
		}
	}
	public function about() {
		$Category = M('Category');
		$Tag = M('Tag');
		$category_list = $Category->select();
		$tag_list = $Tag->select();
		$this->assign('category_list', $category_list);
		$this->assign('tag_list', $tag_list);
		$this->display();
	}
	public function search() {
		$key = I('get.keyword');
		$Article = M('Article');
		$Tag = M('Tag');
		$Category = M('Category');
		$tag_list = $Tag->select();
		$category_list = $Category->select();
		$this->assign('tag_list', $tag_list);
		$this->assign('category_list', $category_list);
		$map['content'] = array('like', "%$key%");
		$article_list = $Article->where($map)->order('id desc')->select();
		$msg = array('type' => 'Keyword', 'name' => $key);
		if (!$article_list) {
			// 目录下没有文章跳转的页面
			$this->display('none');
		} else {
			$this->assign('article_list', $article_list);
			$this->assign('msg', $msg);
			$this->display('index');
		}
	}
}

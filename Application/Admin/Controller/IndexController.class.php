<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {

	public function _before_index() {
		//前置操作，在用户点击管理按钮后跳转到index页面
		if (empty(cookie('jl_status'))) {
			//判断cookies,不存在，跳转到login action
			$this->redirect('Index/login', '', 0, '');
		}
	}
	public function index() {
		$this->display();
	}
	public function _before_login() {
		//前置操作，用来判断访问页面是否为post
		if (IS_POST) {
			//如果是，获得post数据
			$username = I('post.username');
			$password = I('post.password');
			//用户名密码判断
			if ($username == 'root' && $password == 'root') {
				//正确，存cookie
				cookie('status', md5('success'), array('expire' => 3600, 'prefix' => 'jl_'));
				$this->redirect('Index/index', '', 0, '');
			} else {
				//DOM中添加警示框
				$danger = '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning:</strong> Error password or username,please recorrect.
</div>';
				$this->assign('danger', $danger);
			}
		}
	}
	public function login() {
		//登录界面
		$login_url = U('login');
		$blog_url = U('Home/Index/index');
		$this->assign('login_url', $login_url);
		$this->assign('blog_url', $blog_url);
		$this->display('login');
	}
}
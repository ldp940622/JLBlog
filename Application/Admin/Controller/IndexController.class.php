<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
	//url list
	private $index_url;
	private $login_url;
	private $addArticle_url;
	private $blog_url;

	function __construct() {
		parent::__construct();
		$this->index_url = U('Index/index');
		$this->login_url = U('Index/login');
		$this->addArticle_url = U('Index/addArticle');
	}
	public function _before_index() {
		//前置操作，在用户点击管理按钮后跳转到index页面
		$this->isCookie(__ACTION__);

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
			$User = M('User')->find();
			if ($username == $User['username'] && $password == $User['password']) {
				//正确，存cookie
				cookie('status', md5('success'), array('expire' => 3600, 'prefix' => 'jl_'));
				redirect(cookie('jl_return_url'), 0, '');
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
		//login页面还是要判断cookie，如果符合条件直接进index
		$cookie_value = cookie('jl_status');
		if (!empty($cookie_value)) {
			redirect($this->index_url, 0, '');
		}
		$this->assign('return_url', $this->return_url);
		$this->assign('login_url', $this->login_url);
		$this->assign('blog_url', $this->blog_url);
		$this->display('login');
	}
	public function addArticle() {
		$this->isCookie(__ACTION__);
		if (IS_GET) {
			$Category = M('Category');
			$category_list = $Category->select();
			$this->assign('category_list', $category_list);
			$this->display('addArticle');
		} elseif (IS_POST) {
			$tags = I('post.tags');
			// 将传输来的Tag字符串，截取成数组
			$tagArr = explode(',', $tags);
			$Tag = M('Tag');
			// 获得Tag.name数组
			$tag_list = $Tag->getField('name', true);
			foreach ($tagArr as $tag) {
				// 循环比较
				if (!in_array($tag, $tag_list)) {
					$data['name'] = $tag;
					$Tag->add($data);
				}
			}
			$Article = M('Article');
			if ($Article->create()) {
				//写入date
				$Article->date = date("Y-m-d H:i:s", time());
				$result = $Article->add(); // 写入数据到数据库
				if ($result) {
					// 如果主键是自动增长型 成功后返回值就是最新插入的值
					// 跳转到页面
					redirect("/article/id/$result", 0, '');
				}
			}
		}
	}
	protected function isCookie($return_url) {
		//用来判断cookie
		$cookie_value = cookie('jl_status');
		if (empty($cookie_value)) {
			//给ruturn_url赋值，这样可以实现登陆后跳转到相应页面的情况
			cookie('return_url', $return_url, array('expire' => 3600, 'prefix' => 'jl_'));
			redirect($this->login_url, 0, '');
		}
	}
	public function test() {
		echo "test";
	}
}
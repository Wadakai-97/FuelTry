<?php

class Controller_User extends Controller_Layout
{

	/*
	ユーザー：トップ画面
	*/
	public function action_top() {
		if(Auth::check()) {
			$data['login_name'] = Auth::get_screen_name();
			$data['login_email'] = Auth::get_email();
			$this->template->content = VIew::forge('user/logout', $data);
		} else {
			$this->template->content = VIew::forge('user/login');
		}
	}

	/*
	ユーザー登録：フォーム表示
	*/
	public function action_form() {
		$this->template->content = VIew::forge('user/signup');
	}

	/*
	ユーザー登録：登録処理
	*/
	public function action_signup() {
		$validate = Model_User::validate();
		if(($validate->run())) {
			$signup = Model_User::signup();
			if($signup = "success") {
				$data['success_message'] = "ユーザー登録に成功しました。";
				$this->template->content = VIew::forge('user/login', $data);
			} elseif($signup = "failed") {
				$data['error_message'] = "ユーザー登録に失敗しました。";
				$this->template->content = VIew::forge('user/signup', $data);
			}
		} else {
			$data['error_message'] = "バリデーションエラー";
			$data['errors'] = $validate->error();
			$this->template->content = VIew::forge('user/signup', $data);
		}
	}

	/*
	ログイン：フォーム表示
	*/
	public function action_loginform() {
		$this->template->content = VIew::forge('user/login');
	}

	/*
	ログイン：ログイン処理
	*/
	public function action_login() {
		if(Auth::login(Input::post('email'), Input::post('password'))){
			$data['success_message'] = "ログインに成功しました。";
			$this->template->content = VIew::forge('user/status', $data);
		}else{
			$data['error_message'] = "ログインに失敗しました。";
			$this->template->content = VIew::forge('user/login', $data);
		}
	}

	/*
	ログアウト：フォーム表示
	*/
	public function action_logoutform() {
		$data['login_name'] = Auth::get_screen_name();
		$data['login_email'] = Auth::get_email();
		$data['group'] = Auth::groups();
		$data['profile'] = Auth::get_profile_fields();
		$this->template->content = VIew::forge('user/logout', $data);
	}

	/*
	ログアウト：ログアウト処理
	*/
	public function action_logout() {
		if(Auth::instance()->logout()) {
			$data['success_message'] = "ログアウトに成功しました。";
		} else {
			$data['error_message'] = "ログアウトに失敗しました。";
		}
		$this->template->content = VIew::forge('user/status', $data);
	}

	/*
	パスワードリセット：フォーム表示
	*/
	public function action_resetform() {
		$this->template->content = VIew::forge('user/reset');
	}

	/*
	パスワードリセット：メール送信
	*/
	public function action_resetmail() {
		$validate = Model_User::validateemail();
		if(($validate->run())) {
			$existence_check = Model_User::checkemail();
			if(!empty($existence_check)) {
				$send_mail = Model_User::sendemail();
				if($send_mail = "success") {
					$data['success_message'] = "パスワードリセットのメールを送信しました。";
					$this->template->content = VIew::forge('user/status', $data);
				} else {
					$data['error_message'] = "パスワードリセットのメール送信に失敗しました。";
					$this->template->content = VIew::forge('user/status', $data);
				}
			} else {
				$data['error_message'] = "ご入力されたメールアドレスは登録されていません。";
				$this->template->content = VIew::forge('user/reset', $data);
			}
		} else {
			$data['error_message'] = "バリデーションエラー";
			$data['errors'] = $validate->error();
			$this->template->content = VIew::forge('user/reset', $data);
		}
	}
	/*
	メール送信サンプル
	*/
	public function action_mail() {
		$result = Model_User::sendmail();
	}

}

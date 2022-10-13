<?php

class Model_User extends \Orm\Model
{
	protected static $_properties = array(
		"id" => array(
			"label" => "Id",
			"data_type" => "int",
		),
		"username" => array(
			"label" => "Username",
			"data_type" => "varchar",
		),
		"group" => array(
			"label" => "Group",
			"data_type" => "varchar",
		),
		"email" => array(
			"label" => "Email",
			"data_type" => "varchar",
		),
		"password" => array(
			"label" => "Password",
			"data_type" => "varchar",
		),
		"last_login" => array(
			"label" => "Last login",
			"data_type" => "varchar",
		),
		"profile_fields" => array(
			"label" => "Profile fields",
			"data_type" => "varchar",
		),
		"login_hash" => array(
			"label" => "Login hash",
			"data_type" => "varchar",
		),
		"created_at" => array(
			"label" => "Created at",
			"data_type" => "int",
		),
		"updated_at" => array(
			"label" => "Updated at",
			"data_type" => "int",
		),
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'property' => 'created_at',
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'property' => 'updated_at',
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'users';

	protected static $_primary_key = array('id');

	protected static $_has_many = array(
	);

	protected static $_many_many = array(
	);

	protected static $_has_one = array(
	);

	protected static $_belongs_to = array(
	);


	/*
	ユーザー登録：バリデーション
	*/
	public static function validate() {
		$validate  = Validation::forge();
		$validate->add_field('name','ユーザー名', 'required|max_length[30]');
		$validate->add_field('position', '役職', 'required|match_collection[1, 10, 100]'); 
		$validate->add_field('email', 'メールアドレス', 'required|valid_email');
		$validate->add_field('password', ' パスワード', 'required|min_length[6]|max_length[30]');
		$validate->add_field('confirm', ' パスワード(確認)', 'required|min_length[6]|max_length[30]');
		return $validate;
	}

	/*
	ユーザー登録：登録処理
	*/
	public static function signup() {
		try {
			Auth::create_user(Input::post('name'), Input::post('password'), Input::post('email'), Input::post('position'), array());
			$status = "success";
			return $status;
		} catch(Exception $e) {
			echo $e->getMessage(), "\n";
			$status = "failed";
			return $status;
		}
	}

	/*
	パスワードリセット：バリデーション
	*/
	public static function validateemail() {
		$validate  = Validation::forge();
		$validate->add_field('email', 'メールアドレス', 'required|valid_email');
		return $validate;
	}


	/*
	パスワードリセット：メールアドレス存在確認
	*/
	public static function checkemail() {
		$input_email = Input::post('email');
		$existence_check = DB::select('email')
													->from('users')
													->where('email', $input_email)
													->execute();
		return $existence_check;
	}

	/*
	パスワードリセット：メール送信
	*/
	public static function sendemail() {
		$email = Email::forge('jis');
		$email->from('wadakai1111@gmail.com', 'Orner');
		$email->to('k.wada@thenewgate.co.jp');
		$email->subject('This is the subject');
		$email->body('This is my message');

		try {
			$email->send();
			$result = "success";
		}
		catch (\EmailValidationFailedException $e) {
			$result = '送信に失敗しました。';
		}
		catch (\EmailSendingFailedException $e) {
			$result = '送信に失敗しました。';
		}

		return $result;
	}

}

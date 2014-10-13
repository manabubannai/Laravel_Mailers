<?php namespace Acme\Mailers;

Use User;

class UserMailer extends Mailer{

	public function welcome(User $user){
		$view = 'emails.welcome';
		$data = [];
		$subject = 'メールのタイトルです';

		return $this->sendTo($user, $subject, $view, $data);
	}

}
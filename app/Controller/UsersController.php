<?php
class UsersController extends AppController {

	public function login() {

	}

   public function register() {

	   if ($this->request->is('post')){
		   //save new user
		   if ($this->User->save($this->request->data)){

			   //set flash to user screen
			   $this->Session->setFlash('User was added.');
			   //redirect to user list
			   $this->redirect(array('action' => 'login'));

		   }else{
			   //if save failed
			   $this->Session->setFlash('Unable to add user. Please, try again.');

		   }
	   }

	   }

}

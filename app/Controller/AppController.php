<?php

App::uses ( 'Controller', 'Controller' );

class AppController extends Controller {
	public $components = array(
        'Session',
        'Cookie',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'posts',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish',
                    'fields' => array(
	                  'username' => 'username', //Default is 'username' in the userModel
	                  'password' => 'password'  //Default is 'password' in the userModel
	                )
                )
            )
        )
    );
    
	function beforeFilter() {
                //$this->Auth->allow ();    
		$this->layout = 'dashboards/index';
                $this->set('appRoot', $this->base);
	}
	function beforeRender() {
        $this->set('auth', $this->Auth->user());
		$this->set('base_url', 'http://'.$_SERVER['SERVER_NAME'].Router::url('/'));
	}
}

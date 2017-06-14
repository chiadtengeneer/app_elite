
<?php
App::uses ( 'AppController', 'Controller' );
App::uses ( 'Folder', 'Utility' );
class PostsController extends AppController {
	public $uses = array('Post'); 
	public function beforeFilter() {
       parent::beforeFilter ();
		$this->set ( 'layout_name', 'Oder' );
		$this->Auth->allow ( 'view' );
    }
	public function index() {
		$this->set('posts', $this->Post->find('all'));
	}
	public function thank() {
		$this->layout = 'default';
	
	}
	public function error() {
		$this->layout = 'default';
	}
	
	// Add function
	public function add() {
		$this->autoRender = false;	
		if ($this->request->is ( 'post' )) {
			$Post = $this->request->data;
			$Post['status'] = 0;
			$this->Post->create ();
			if ($this->Post->save ( $Post )) {
				return $this->redirect ( array (
						'action' => 'thank' 
				)
				 );
			}
			return $this->redirect ( array (
						'action' => 'error' 
				)
				 );
		}
	}
	// Edit function
	public function edit($id = null) {
		if (! $id) {
			throw new NotFoundException ( __ ( 'Invalid post' ) );
		}
		
		$post = $this->Post->findById ( $id );
		$this->set ( 'Post', $post );
		if (! $post) {
			throw new NotFoundException ( __ ( 'Invalid post' ) );
		}
		if ($this->request->is ( array (
				'post',
				'put' 
		) )) {
			$this->Post->id = $id;
			if ($this->Post->save ( $this->request->data )) {
				return $this->redirect ( array (
						'controller' => 'posts',
						'action' => 'index' 
				) );
			}
			$this->Session->setFlash ( __ ( 'Unable to update.' ) );
		}
		
		if (! $this->request->data) {
			$this->request->data = $post;
		}
		$this->set ( 'Post', $post );
		
	}
	
	// Delete function
	public function delete($id) {
		if ($this->request->is ( 'get' )) {
			throw new MethodNotAllowedException ();
		}
		
		if ($this->Post->delete ( $id )) {
			$this->Session->setFlash ( __ ( 'The Oder with id: %s has been deleted.', h ( $id ) ) );
		} else {
			$this->Session->setFlash ( __ ( 'The Oder with id: %s could not be deleted.', h ( $id ) ) );
		}
		
		return $this->redirect ( array (
				'controller' => 'posts',
				'action' => 'index' 
		) );
	}
}

?>
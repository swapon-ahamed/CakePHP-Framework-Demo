<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;


class DivisionsController extends AppController
{
	public function index()
	{
		$divisions = $this->paginate($this->Divisions);
		$this->set(compact('divisions'));
	}
	public function add()
	{
		$division = $this->Divisions->newEmptyEntity();
		if($this->request->is('post')){
			$division = $this->Divisions->patchEntity($division, $this->request->getData());
			if($this->Divisions->save($division)){
				$this->Flash->success(__("Division Entry Successfully Saved!"),['key'=>'positive']);
				return $this->redirect(['action' => 'index']);
			}else{
				$this->Flash->error(__('The division could not be saved. Please, try again.'));
			}
		}
		$this->set(compact('division'));
	}

	public function edit( $id = null ){
		$division = $this->Divisions->get($id, ['contain' => []

		]);

		if($this->request->is(['post','put','patch'])){
			$division = $this->Divisions->patchEntity($division, $this->request->getData());
			if($this->Divisions->save($division)){
				$this->Flash->success(__("Division Entry Successfully updated!"));
				return $this->redirect(['action' => 'index']);
			}else{
				$this->Flash->error(__('The division could not be updated. Please, try again.'));
			}
		}
		$this->set(compact('division'));
	}

	public function view($id = null){
		$division = $this->Divisions->get($id, ['contain' => [] ]);

		$this->set(compact('division'));
	}

	public function delete($id = null){
		$this->request->allowMethod(['post','delete']);
		$division = $this->Divisions->get($id);
		if($this->Divisions->delete($division)){
			$this->Flash->success(__('The division has been deleted.'));
		}else {
            $this->Flash->error(__('The division could not be deleted. Please, try again.'));
        }
         return $this->redirect(['action' => 'index']);
	}
}
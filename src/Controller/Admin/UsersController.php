<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use Cake\Event\EventInterface;
use App\Controller\Admin\AppController;
use Cake\View\Helper;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function beforeFilter(EventInterface $event){
        // layout called for all method on this controller
        $this->viewBuilder()->setLayout('admin');

        
        // debug($event);
        // exit;
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        // $this->Auth->user();
        // debug($this->Auth->user());die();
        $key = $this->request->getQuery('key');
        if($key){
             // $query = $this->Users->find('all')->where(['username like' => '%'.$key.'%'  ]);

        // $query = $this->Users->find('all')->where( ['Or' => ['username like' => '%'.$key.'%', 'email like' => '%'.$key.'%'  ]]);

        $query = $this->Users->findByUsernameOrEmail($key, $key);    
        }else{
            $query =$this->Users;
        }

        $users = $this->paginate($query, ['contain' => ['Profiles','Skills']] );

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Profiles','Skills'],
        ]);

        $this->set('user', $user);
        // $this->viewBuilder()->setLayout('front');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $image = $this->request->getData('image');
           $name = $image->getClientFilename();
            if($name){
                $name_arr = explode(".", $name);
                $extension = end($name_arr);
                $filename  = md5(uniqid().time()).".".$extension;
                $targetPath = WWW_ROOT.'img'.DS.$filename;
                
                if($name)
                $image->moveTo($targetPath);
                $user->image = $filename;
            }
            

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Profiles', 'Skills'],
        ]);

        $imagPath = WWW_ROOT.'img'.DS.$user->image;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $image = $this->request->getData('image');
             $name = $image->getClientFilename();
            if( $name){
               
                $name_arr = explode(".", $name);
                $extension = end($name_arr);
                $filename  = md5(uniqid().time()).".".$extension;
                $targetPath = WWW_ROOT.'img'.DS.$filename;
                
                if($name)
                $image->moveTo($targetPath);
                $user->image = $filename;

                if(file_exists($imagPath)){
                    unlink($imagPath);
                }


            }


            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);

        $imagPath = WWW_ROOT.'img'.DS.$user->image;


        if ($this->Users->delete($user)) {
            if(file_exists($imagPath)){
                unlink($imagPath);
            }
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function deleteAll(){
        $this->request->allowMethod(['post', 'delete']);

        $ids = $this->request->getData('ids');
        if( $this->Users->deleteAll(['Users.id IN' => $ids ]) ){
            $this->Flash->success(__('The users have been deleted.'));
        }else{
            $this->Flash->error(__('The users could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        if($this->request->is('post')){
            $user = $this->Auth->identify();
         
            if($user){
                if($user['active'] == 0){
                    $this->Flash->error('Your account is inactive !. Please contact to administrator.');
                }else{
                    $this->Auth->setUser($user);
                    return $this->redirect(['controller' => 'Users', 'action' => 'index']);
                }
                
            }else{
                $this->Flash->error('Incorrect User name or Password!');
            }
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    public function userStatus($id=null){
         $this->request->allowMethod(['post']);
         $user = $this->Users->get($id);
         $status = !$user->active;
         $this->Users->active = $status;
        if($this->Users->save($user)){
            $this->Flash->success(__('Uuser status has been changed.'));
        }
    }
}

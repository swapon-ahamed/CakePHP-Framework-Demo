<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AdminTest Controller
 *
 *
 * @method \App\Model\Entity\AdminTest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminTestController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $adminTest = $this->paginate($this->AdminTest);

        $this->set(compact('adminTest'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin Test id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminTest = $this->AdminTest->get($id, [
            'contain' => [],
        ]);

        $this->set('adminTest', $adminTest);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminTest = $this->AdminTest->newEmptyEntity();
        if ($this->request->is('post')) {
            $adminTest = $this->AdminTest->patchEntity($adminTest, $this->request->getData());
            if ($this->AdminTest->save($adminTest)) {
                $this->Flash->success(__('The admin test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin test could not be saved. Please, try again.'));
        }
        $this->set(compact('adminTest'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin Test id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminTest = $this->AdminTest->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminTest = $this->AdminTest->patchEntity($adminTest, $this->request->getData());
            if ($this->AdminTest->save($adminTest)) {
                $this->Flash->success(__('The admin test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin test could not be saved. Please, try again.'));
        }
        $this->set(compact('adminTest'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin Test id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminTest = $this->AdminTest->get($id);
        if ($this->AdminTest->delete($adminTest)) {
            $this->Flash->success(__('The admin test has been deleted.'));
        } else {
            $this->Flash->error(__('The admin test could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

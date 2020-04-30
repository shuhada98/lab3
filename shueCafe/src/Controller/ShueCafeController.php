<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ShueCafe Controller
 *
 *
 * @method \App\Model\Entity\ShueCafe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShueCafeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $shueCafe = $this->paginate($this->ShueCafe);

        $this->set(compact('shueCafe'));
    }

    /**
     * View method
     *
     * @param string|null $id Shue Cafe id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shueCafe = $this->ShueCafe->get($id, [
            'contain' => [],
        ]);

        $this->set('shueCafe', $shueCafe);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shueCafe = $this->ShueCafe->newEntity();
        if ($this->request->is('post')) {
            $shueCafe = $this->ShueCafe->patchEntity($shueCafe, $this->request->getData());
            if ($this->ShueCafe->save($shueCafe)) {
                $this->Flash->success(__('The shue cafe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shue cafe could not be saved. Please, try again.'));
        }
        $this->set(compact('shueCafe'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Shue Cafe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shueCafe = $this->ShueCafe->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shueCafe = $this->ShueCafe->patchEntity($shueCafe, $this->request->getData());
            if ($this->ShueCafe->save($shueCafe)) {
                $this->Flash->success(__('The shue cafe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shue cafe could not be saved. Please, try again.'));
        }
        $this->set(compact('shueCafe'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Shue Cafe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shueCafe = $this->ShueCafe->get($id);
        if ($this->ShueCafe->delete($shueCafe)) {
            $this->Flash->success(__('The shue cafe has been deleted.'));
        } else {
            $this->Flash->error(__('The shue cafe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

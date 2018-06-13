<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\Article $Article
 *
 */

class ArticlesController extends AppController {

  public function view() {

    $query = $this->Articles->find('all');
    $this->set('results', $query);

  }

  public function add() {

    $article = $this->Articles->newEntity($this->request->getData());
      if ($this->Articles->save($article)) {
          $this->Flash->success(__('The user has been saved.'));
      }
  }

  public function edit ($id) {
    // Getting a row inside articles table by getting the id.
    $articles = $this->Articles->get($id);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $articles = $this->Articles->patchEntity($articles, $this->request->getData());
      if ($this->Articles->save($articles)) {
        $this->Flash->success(__('The project has been saved.'));
        return $this->redirect(['action' => 'view']);
      }
      $this->Flash->error(__('The project could not be saved. Please, try again.'));
    }

    // Declaring multi-variables that should be displayed inside the view.
    $this->set(compact('id','articles'));
  }

}

?>

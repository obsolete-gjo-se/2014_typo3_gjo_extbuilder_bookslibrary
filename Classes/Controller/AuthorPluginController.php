<?php
namespace Gjo\GjoBookslibrary\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController,
    Gjo\GjoBookslibrary\Domain\Model\AuthorPlugin,
    Gjo\GjoBookslibrary\Domain\Model\BookPlugin;


class AuthorPluginController extends ActionController
{

    /**
     * @var \Gjo\GjoBookslibrary\Domain\Repository\AuthorPluginRepository
     * @inject
     */
    protected $authorPluginRepository;

    /**
     * @var \Gjo\GjoBookslibrary\Domain\Repository\BookPluginRepository
     * @inject
     */
    protected $bookPluginRepository;

    /**
     * @var \Gjo\GjoBookslibrary\Controller\BookPluginController
     * @inject
     */
    protected $bookPluginController;

    public function listAction()
    {
        $authors = $this->authorPluginRepository->findAll();


        //122122122


        $this->view->assign('authors', $authors);



        $books = $this->bookPluginRepository->findAll();
        $this->view->assign('books', $books);



    }

    /**
     * @param Authorplugin $author
     * @return void
     */
    public function showAction(AuthorPlugin $author)
    {
        $this->view->assign('author', $author);
    }


    /**
     * @param Authorplugin $newAuthor
     * @dontvalidate $newAuthor
     * @return void
     */
    public function newAction(AuthorPlugin $newAuthor = NULL)
    {
        $this->view->assign('newAuthor', $newAuthor);
    }

    /**
     * @param Authorplugin $newAuthor
     * @return void
     */
    public function createAction(AuthorPlugin $newAuthor)
    {
        $this->authorPluginRepository->add($newAuthor);
        $this->flashMessageContainer->add('Your new Author was created.');
        $this->redirect('list');
    }

    /**
     * @param Authorplugin $author
     * @return void
     */
    public function editAction(AuthorPlugin $author)
    {
        $this->view->assign('author', $author);
    }

    /**
     * @param Authorplugin $author
     * @return void
     */
    public function updateAction(AuthorPlugin $author)
    {
        $this->authorPluginRepository->update($author);
        $this->flashMessageContainer->add('Your Author was updated.');
        $this->redirect('list');
    }

    /**
     * @param Authorplugin $author
     * @return void
     */
    public function deleteAction(AuthorPlugin $author)
    {
        $this->authorPluginRepository->remove($author);
        $this->flashMessageContainer->add('Your Author was removed.');
        $this->redirect('list');
    }

}
<?php
namespace Gjo\GjoBookslibrary\Controller;

use Gjo\GjoBookslibrary\Domain\Model\BookPlugin;

class BookPluginController extends BaseController
{

    /**
     * @var \Gjo\GjoBookslibrary\Domain\Repository\BookPluginRepository
     * @inject
     */
    protected $bookPluginRepository;

    /**
     * @var \Gjo\GjoBookslibrary\Domain\Repository\AuthorPluginRepository
     * @inject
     */
    protected $authorPluginRepository;


    public function listAction()
    {
        $books = $this->bookPluginRepository->findAll();
        $this->view->assign('books', $books);
    }

    /**
     * @param BookPlugin $book
     * @return void
     */
    public function showAction(BookPlugin $book)
    {
        $this->view->assign('book', $book);
    }


    /**
     * @param BookPlugin $newBook
     * @dontvalidate $newBook
     * @return void
     */
    public function newAction(BookPlugin $newBook = NULL)
    {
        $authors = $this->authorPluginRepository->findAll();
        $this->view->assign('authors', $authors);

        $this->view->assign('newBook', $newBook);
    }

    /**
     * @param BookPlugin $newBook
     * @return void
     */
    public function createAction(BookPlugin $newBook)
    {
        $this->bookPluginRepository->add($newBook);
        $this->flashMessageContainer->add('Your new Book was created.');
        $this->redirect('list');

        debug();
    }

    /**
     * @param BookPlugin $book
     * @return void
     */
    public function editAction(BookPlugin $book)
    {
        $this->storeRedirectConfig($this->request->getArguments());

        $authors = $this->authorPluginRepository->findAll();
        $this->view->assign('authors', $authors);

        $this->view->assign('book', $book);
    }

    /**
     * @param BookPlugin $book
     * @return void
     */
    public function updateAction(BookPlugin $book)
    {
        $this->bookPluginRepository->update($book);
        $this->flashMessageContainer->add('Your Book was updated.');

        $this->makeRedirect();
    }

    /**
     * @param BookPlugin $book
     * @return void
     */
    public function deleteAction(BookPlugin $book)
    {
        $this->storeRedirectConfig($this->request->getArguments());

        $this->bookPluginRepository->remove($book);
        $this->flashMessageContainer->add('Your Book was removed.');

        $this->makeRedirect();
    }

}
<?php
namespace Gjo\GjoBookslibrary\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity,
    TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class AuthorPlugin extends AbstractEntity {

	/**
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoBookslibrary\Domain\Model\BookPlugin>
     */
    protected $books;

    /**
     * @return AuthorPlugin
     */
    public function __construct() {
        $this->initStorageObjects();
    }

    /**
     * @return void
     */
    protected function initStorageObjects() {
        $this->books = new ObjectStorage();
    }

    /**
     * @return \string $name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param \string $name
     * @return void
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoBookslibrary\Domain\Model\BookPlugin> books
     */
    public function getBooksRelation() {
        return $this->books;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoBookslibrary\Domain\Model\BookPlugin> $books
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoBookslibrary\Domain\Model\BookPlugin> books
     */
    public function setBooksRelation(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $books) {
        $this->books = $books;
    }

    /**
     * @param \Gjo\GjoBookslibrary\Domain\Model\BookPlugin $books
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoBookslibrary\Domain\Model\BookPlugin> books
     */
    public function addBooksRelation(\Gjo\GjoBookslibrary\Domain\Model\BookPlugin $books) {
        $this->books->attach($books);
    }

    /**
     * @param \Gjo\GjoBookslibrary\Domain\Model\BookPlugin $booksToRemove The BookModel to be removed
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoBookslibrary\Domain\Model\BookPlugin> books
     */
    public function removeBooksRelation(\Gjo\GjoBookslibrary\Domain\Model\BookPlugin $booksToRemove) {
        $this->books->detach($booksToRemove);
    }
}
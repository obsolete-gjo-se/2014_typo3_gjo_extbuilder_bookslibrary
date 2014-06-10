<?php
namespace Gjo\GjoBookslibrary\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity,
    Gjo\GjoBookslibrary\Domain\Model\AuthorPlugin;

class BookPlugin extends AbstractEntity {

	/**
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * @var \string
	 */
	protected $isbn;

	/**
	 * @var \float
	 */
	protected $cost;

	/**
	 * @var \integer
	 */
	protected $pages;

    /**
     * @var \Gjo\GjoBookslibrary\Domain\Model\AuthorPlugin
     */
    protected $author;

    /**
     * @return \string $title
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param \string $title
     * @return void
     */
    public function setTitle($title) {
        $this->title = $title;
    }

	/**
	 * @return \string $isbn
	 */
	public function getIsbn() {
		return $this->isbn;
	}

	/**
	 * @param \string $isbn
	 * @return void
	 */
	public function setIsbn($isbn) {
		$this->isbn = $isbn;
	}

	/**
	 * @return \integer $cost
	 */
	public function getCost() {
		return $this->cost;
	}

	/**
	 * @param \integer $cost
	 * @return void
	 */
	public function setCost($cost) {
		$this->cost = $cost;
	}

	/**
	 * @return \integer $pages
	 */
	public function getPages() {
		return $this->pages;
	}

	/**
	 * @param \integer $pages
	 * @return void
	 */
	public function setPages($pages) {
		$this->pages = $pages;
	}

    /**
     * @return \Gjo\GjoBookslibrary\Domain\Model\AuthorPlugin $author
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * @param \Gjo\GjoBookslibrary\Domain\Model\AuthorPlugin $author
     * @return void
     */
    public function setAuthor(\Gjo\GjoBookslibrary\Domain\Model\AuthorPlugin $author) {
        $this->author = $author;
    }
}
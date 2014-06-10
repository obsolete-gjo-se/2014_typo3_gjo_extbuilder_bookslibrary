<?php

namespace Gjo\GjoBooks\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Gregory Jo <email@gregoryjo>, emtec
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \Gjo\GjoBooks\Domain\Model\Book.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Books
 *
 * @author Gregory Jo <email@gregoryjo>
 */
class BookTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Gjo\GjoBooks\Domain\Model\Book
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Gjo\GjoBooks\Domain\Model\Book();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTitle11ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitle11ForStringSetsTitle11() { 
		$this->fixture->setTitle11('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle11()
		);
	}
	
	/**
	 * @test
	 */
	public function getIsbnReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setIsbnForStringSetsIsbn() { 
		$this->fixture->setIsbn('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getIsbn()
		);
	}
	
	/**
	 * @test
	 */
	public function getCostReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getCost()
		);
	}

	/**
	 * @test
	 */
	public function setCostForIntegerSetsCost() { 
		$this->fixture->setCost(12);

		$this->assertSame(
			12,
			$this->fixture->getCost()
		);
	}
	
	/**
	 * @test
	 */
	public function getPagesReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPages()
		);
	}

	/**
	 * @test
	 */
	public function setPagesForIntegerSetsPages() { 
		$this->fixture->setPages(12);

		$this->assertSame(
			12,
			$this->fixture->getPages()
		);
	}
	
	/**
	 * @test
	 */
	public function getPrintDaterReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setPrintDaterForDateTimeSetsPrintDater() { }
	
}
?>
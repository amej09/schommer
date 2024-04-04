<?php

declare(strict_types=1);

namespace Vendor\Produktshow\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class KategoryTest extends UnitTestCase
{
    /**
     * @var \Vendor\Produktshow\Domain\Model\Kategory|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Vendor\Produktshow\Domain\Model\Kategory::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNamekategoryReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getNamekategory()
        );
    }

    /**
     * @test
     */
    public function setNamekategoryForStringSetsNamekategory(): void
    {
        $this->subject->setNamekategory('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('namekategory'));
    }

    /**
     * @test
     */
    public function getKategoryReturnsInitialValueForProdukt(): void
    {
        self::assertEquals(
            null,
            $this->subject->getKategory()
        );
    }

    /**
     * @test
     */
    public function setKategoryForProduktSetsKategory(): void
    {
        $kategoryFixture = new \Vendor\Produktshow\Domain\Model\Produkt();
        $this->subject->setKategory($kategoryFixture);

        self::assertEquals($kategoryFixture, $this->subject->_get('kategory'));
    }
}

<?php

declare(strict_types=1);

namespace Produktsvendor\Produkts\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class ProduktTest extends UnitTestCase
{
    /**
     * @var \Produktsvendor\Produkts\Domain\Model\Produkt|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Produktsvendor\Produkts\Domain\Model\Produkt::class,
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
    public function getTitelReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTitel()
        );
    }

    /**
     * @test
     */
    public function setTitelForStringSetsTitel(): void
    {
        $this->subject->setTitel('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('titel'));
    }

    /**
     * @test
     */
    public function getPreisReturnsInitialValueForFloat(): void
    {
        self::assertSame(
            0.0,
            $this->subject->getPreis()
        );
    }

    /**
     * @test
     */
    public function setPreisForFloatSetsPreis(): void
    {
        $this->subject->setPreis(3.14159265);

        self::assertEquals(3.14159265, $this->subject->_get('preis'));
    }

    /**
     * @test
     */
    public function getLagerbestandReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getLagerbestand()
        );
    }

    /**
     * @test
     */
    public function setLagerbestandForIntSetsLagerbestand(): void
    {
        $this->subject->setLagerbestand(12);

        self::assertEquals(12, $this->subject->_get('lagerbestand'));
    }

    /**
     * @test
     */
    public function getLieferzeitReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getLieferzeit()
        );
    }

    /**
     * @test
     */
    public function setLieferzeitForIntSetsLieferzeit(): void
    {
        $this->subject->setLieferzeit(12);

        self::assertEquals(12, $this->subject->_get('lieferzeit'));
    }

    /**
     * @test
     */
    public function getDateinameReturnsInitialValueForFileReference(): void
    {
        self::assertEquals(
            null,
            $this->subject->getDateiname()
        );
    }

    /**
     * @test
     */
    public function setDateinameForFileReferenceSetsDateiname(): void
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setDateiname($fileReferenceFixture);

        self::assertEquals($fileReferenceFixture, $this->subject->_get('dateiname'));
    }
}

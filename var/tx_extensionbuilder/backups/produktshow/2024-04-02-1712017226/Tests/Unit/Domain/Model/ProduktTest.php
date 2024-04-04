<?php

declare(strict_types=1);

namespace Vendor\Produktshow\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class ProduktTest extends UnitTestCase
{
    /**
     * @var \Vendor\Produktshow\Domain\Model\Produkt|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Vendor\Produktshow\Domain\Model\Produkt::class,
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
    public function getLagerReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getLager()
        );
    }

    /**
     * @test
     */
    public function setLagerForIntSetsLager(): void
    {
        $this->subject->setLager(12);

        self::assertEquals(12, $this->subject->_get('lager'));
    }

    /**
     * @test
     */
    public function getLieferzeitReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getLieferzeit()
        );
    }

    /**
     * @test
     */
    public function setLieferzeitForStringSetsLieferzeit(): void
    {
        $this->subject->setLieferzeit('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('lieferzeit'));
    }

    /**
     * @test
     */
    public function getDateinameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getDateiname()
        );
    }

    /**
     * @test
     */
    public function setDateinameForStringSetsDateiname(): void
    {
        $this->subject->setDateiname('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('dateiname'));
    }

    /**
     * @test
     */
    public function getKategoryReturnsInitialValueForKategory(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getKategory()
        );
    }

    /**
     * @test
     */
    public function setKategoryForObjectStorageContainingKategorySetsKategory(): void
    {
        $kategory = new \Vendor\Produktshow\Domain\Model\Kategory();
        $objectStorageHoldingExactlyOneKategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneKategory->attach($kategory);
        $this->subject->setKategory($objectStorageHoldingExactlyOneKategory);

        self::assertEquals($objectStorageHoldingExactlyOneKategory, $this->subject->_get('kategory'));
    }

    /**
     * @test
     */
    public function addKategoryToObjectStorageHoldingKategory(): void
    {
        $kategory = new \Vendor\Produktshow\Domain\Model\Kategory();
        $kategoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $kategoryObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($kategory));
        $this->subject->_set('kategory', $kategoryObjectStorageMock);

        $this->subject->addKategory($kategory);
    }

    /**
     * @test
     */
    public function removeKategoryFromObjectStorageHoldingKategory(): void
    {
        $kategory = new \Vendor\Produktshow\Domain\Model\Kategory();
        $kategoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $kategoryObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($kategory));
        $this->subject->_set('kategory', $kategoryObjectStorageMock);

        $this->subject->removeKategory($kategory);
    }
}

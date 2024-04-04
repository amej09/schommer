<?php

declare(strict_types=1);

namespace Produktsvendor\Produkts\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class ProduktKategoryTest extends UnitTestCase
{
    /**
     * @var \Produktsvendor\Produkts\Domain\Model\ProduktKategory|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Produktsvendor\Produkts\Domain\Model\ProduktKategory::class,
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
    public function getProduktIDReturnsInitialValueForProdukt(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getProduktID()
        );
    }

    /**
     * @test
     */
    public function setProduktIDForObjectStorageContainingProduktSetsProduktID(): void
    {
        $produktID = new \Produktsvendor\Produkts\Domain\Model\Produkt();
        $objectStorageHoldingExactlyOneProduktID = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneProduktID->attach($produktID);
        $this->subject->setProduktID($objectStorageHoldingExactlyOneProduktID);

        self::assertEquals($objectStorageHoldingExactlyOneProduktID, $this->subject->_get('produktID'));
    }

    /**
     * @test
     */
    public function addProduktIDToObjectStorageHoldingProduktID(): void
    {
        $produktID = new \Produktsvendor\Produkts\Domain\Model\Produkt();
        $produktIDObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $produktIDObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($produktID));
        $this->subject->_set('produktID', $produktIDObjectStorageMock);

        $this->subject->addProduktID($produktID);
    }

    /**
     * @test
     */
    public function removeProduktIDFromObjectStorageHoldingProduktID(): void
    {
        $produktID = new \Produktsvendor\Produkts\Domain\Model\Produkt();
        $produktIDObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $produktIDObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($produktID));
        $this->subject->_set('produktID', $produktIDObjectStorageMock);

        $this->subject->removeProduktID($produktID);
    }

    /**
     * @test
     */
    public function getKategoryIDReturnsInitialValueForKategory(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getKategoryID()
        );
    }

    /**
     * @test
     */
    public function setKategoryIDForObjectStorageContainingKategorySetsKategoryID(): void
    {
        $kategoryID = new \Produktsvendor\Produkts\Domain\Model\Kategory();
        $objectStorageHoldingExactlyOneKategoryID = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneKategoryID->attach($kategoryID);
        $this->subject->setKategoryID($objectStorageHoldingExactlyOneKategoryID);

        self::assertEquals($objectStorageHoldingExactlyOneKategoryID, $this->subject->_get('kategoryID'));
    }

    /**
     * @test
     */
    public function addKategoryIDToObjectStorageHoldingKategoryID(): void
    {
        $kategoryID = new \Produktsvendor\Produkts\Domain\Model\Kategory();
        $kategoryIDObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $kategoryIDObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($kategoryID));
        $this->subject->_set('kategoryID', $kategoryIDObjectStorageMock);

        $this->subject->addKategoryID($kategoryID);
    }

    /**
     * @test
     */
    public function removeKategoryIDFromObjectStorageHoldingKategoryID(): void
    {
        $kategoryID = new \Produktsvendor\Produkts\Domain\Model\Kategory();
        $kategoryIDObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $kategoryIDObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($kategoryID));
        $this->subject->_set('kategoryID', $kategoryIDObjectStorageMock);

        $this->subject->removeKategoryID($kategoryID);
    }
}

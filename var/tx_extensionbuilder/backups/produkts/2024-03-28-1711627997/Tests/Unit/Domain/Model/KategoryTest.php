<?php

declare(strict_types=1);

namespace Produktsvendor\Produkts\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class KategoryTest extends UnitTestCase
{
    /**
     * @var \Produktsvendor\Produkts\Domain\Model\Kategory|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Produktsvendor\Produkts\Domain\Model\Kategory::class,
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
    public function getKategoryNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getKategoryName()
        );
    }

    /**
     * @test
     */
    public function setKategoryNameForStringSetsKategoryName(): void
    {
        $this->subject->setKategoryName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('kategoryName'));
    }

    /**
     * @test
     */
    public function getProduktReturnsInitialValueForProdukt(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getProdukt()
        );
    }

    /**
     * @test
     */
    public function setProduktForObjectStorageContainingProduktSetsProdukt(): void
    {
        $produkt = new \Produktsvendor\Produkts\Domain\Model\Produkt();
        $objectStorageHoldingExactlyOneProdukt = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneProdukt->attach($produkt);
        $this->subject->setProdukt($objectStorageHoldingExactlyOneProdukt);

        self::assertEquals($objectStorageHoldingExactlyOneProdukt, $this->subject->_get('produkt'));
    }

    /**
     * @test
     */
    public function addProduktToObjectStorageHoldingProdukt(): void
    {
        $produkt = new \Produktsvendor\Produkts\Domain\Model\Produkt();
        $produktObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $produktObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($produkt));
        $this->subject->_set('produkt', $produktObjectStorageMock);

        $this->subject->addProdukt($produkt);
    }

    /**
     * @test
     */
    public function removeProduktFromObjectStorageHoldingProdukt(): void
    {
        $produkt = new \Produktsvendor\Produkts\Domain\Model\Produkt();
        $produktObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $produktObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($produkt));
        $this->subject->_set('produkt', $produktObjectStorageMock);

        $this->subject->removeProdukt($produkt);
    }
}

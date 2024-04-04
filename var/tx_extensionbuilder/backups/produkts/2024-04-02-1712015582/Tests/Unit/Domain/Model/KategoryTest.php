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
}

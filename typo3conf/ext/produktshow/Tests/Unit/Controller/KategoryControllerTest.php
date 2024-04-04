<?php

declare(strict_types=1);

namespace Vendor\Produktshow\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 */
class KategoryControllerTest extends UnitTestCase
{
    /**
     * @var \Vendor\Produktshow\Controller\KategoryController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Vendor\Produktshow\Controller\KategoryController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllKategoriesFromRepositoryAndAssignsThemToView(): void
    {
        $allKategories = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $kategoryRepository = $this->getMockBuilder(\Vendor\Produktshow\Domain\Repository\KategoryRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $kategoryRepository->expects(self::once())->method('findAll')->will(self::returnValue($allKategories));
        $this->subject->_set('kategoryRepository', $kategoryRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('kategories', $allKategories);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenKategoryToView(): void
    {
        $kategory = new \Vendor\Produktshow\Domain\Model\Kategory();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('kategory', $kategory);

        $this->subject->showAction($kategory);
    }
}

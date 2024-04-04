<?php

declare(strict_types=1);

namespace Produktsvendor\Produkts\Tests\Unit\Controller;

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
     * @var \Produktsvendor\Produkts\Controller\KategoryController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Produktsvendor\Produkts\Controller\KategoryController::class))
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

        $kategoryRepository = $this->getMockBuilder(\::class)
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
        $kategory = new \Produktsvendor\Produkts\Domain\Model\Kategory();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('kategory', $kategory);

        $this->subject->showAction($kategory);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenKategoryToKategoryRepository(): void
    {
        $kategory = new \Produktsvendor\Produkts\Domain\Model\Kategory();

        $kategoryRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $kategoryRepository->expects(self::once())->method('add')->with($kategory);
        $this->subject->_set('kategoryRepository', $kategoryRepository);

        $this->subject->createAction($kategory);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenKategoryToView(): void
    {
        $kategory = new \Produktsvendor\Produkts\Domain\Model\Kategory();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('kategory', $kategory);

        $this->subject->editAction($kategory);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenKategoryInKategoryRepository(): void
    {
        $kategory = new \Produktsvendor\Produkts\Domain\Model\Kategory();

        $kategoryRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $kategoryRepository->expects(self::once())->method('update')->with($kategory);
        $this->subject->_set('kategoryRepository', $kategoryRepository);

        $this->subject->updateAction($kategory);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenKategoryFromKategoryRepository(): void
    {
        $kategory = new \Produktsvendor\Produkts\Domain\Model\Kategory();

        $kategoryRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $kategoryRepository->expects(self::once())->method('remove')->with($kategory);
        $this->subject->_set('kategoryRepository', $kategoryRepository);

        $this->subject->deleteAction($kategory);
    }
}

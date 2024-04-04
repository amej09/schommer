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
class ProduktControllerTest extends UnitTestCase
{
    /**
     * @var \Produktsvendor\Produkts\Controller\ProduktController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Produktsvendor\Produkts\Controller\ProduktController::class))
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
    public function listActionFetchesAllProduktsFromRepositoryAndAssignsThemToView(): void
    {
        $allProdukts = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $produktRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $produktRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProdukts));
        $this->subject->_set('produktRepository', $produktRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('produkts', $allProdukts);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProduktToView(): void
    {
        $produkt = new \Produktsvendor\Produkts\Domain\Model\Produkt();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('produkt', $produkt);

        $this->subject->showAction($produkt);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenProduktToProduktRepository(): void
    {
        $produkt = new \Produktsvendor\Produkts\Domain\Model\Produkt();

        $produktRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $produktRepository->expects(self::once())->method('add')->with($produkt);
        $this->subject->_set('produktRepository', $produktRepository);

        $this->subject->createAction($produkt);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenProduktToView(): void
    {
        $produkt = new \Produktsvendor\Produkts\Domain\Model\Produkt();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('produkt', $produkt);

        $this->subject->editAction($produkt);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenProduktInProduktRepository(): void
    {
        $produkt = new \Produktsvendor\Produkts\Domain\Model\Produkt();

        $produktRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $produktRepository->expects(self::once())->method('update')->with($produkt);
        $this->subject->_set('produktRepository', $produktRepository);

        $this->subject->updateAction($produkt);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenProduktFromProduktRepository(): void
    {
        $produkt = new \Produktsvendor\Produkts\Domain\Model\Produkt();

        $produktRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $produktRepository->expects(self::once())->method('remove')->with($produkt);
        $this->subject->_set('produktRepository', $produktRepository);

        $this->subject->deleteAction($produkt);
    }
}

<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Temando\ShippingRemover\Setup\Patch\Data;

use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\Search\SearchCriteriaBuilderFactory;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Ui\Api\BookmarkRepositoryInterface;

/**
 * Utility for removing outdated UI Bookmark entries after UI component changes.
 *
 * @author  Jason Jewel <jason.jewel@temando.com>
 */
class BookmarkCleaner implements DataPatchInterface
{
    /**
     * @var BookmarkRepositoryInterface
     */
    private $bookmarkRepository;

    /**
     * @var FilterBuilder
     */
    private $filterBuilder;

    /**
     * @var SearchCriteriaBuilderFactory
     */
    private $searchCriteriaBuilderFactory;

    /**
     * BookmarkCleaner constructor.
     * @param BookmarkRepositoryInterface $bookmarkRepository
     * @param FilterBuilder $filterBuilder
     * @param SearchCriteriaBuilderFactory $searchCriteriaBuilderFactory
     */
    public function __construct(
        BookmarkRepositoryInterface $bookmarkRepository,
        FilterBuilder $filterBuilder,
        SearchCriteriaBuilderFactory $searchCriteriaBuilderFactory
    ) {
        $this->bookmarkRepository = $bookmarkRepository;
        $this->filterBuilder = $filterBuilder;
        $this->searchCriteriaBuilderFactory = $searchCriteriaBuilderFactory;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function apply()
    {
        $this->resetPickupGrid();
        $this->resetOrderPickupGrid();
    }

    /**
     * Clean up the current pickup listing bookmark.
     */
    private function resetPickupGrid()
    {
        try {
            $searchCriteriaBuilder = $this->searchCriteriaBuilderFactory->create();

            $namespaceFilter = $this->filterBuilder
                ->setField('namespace')
                ->setConditionType('eq')
                ->setValue('temando_pickup_listing')
                ->create();

            $searchCriteriaBuilder->addFilter($namespaceFilter);

            $searchCriteria = $searchCriteriaBuilder->create();
            $searchResult = $this->bookmarkRepository->getList($searchCriteria);

            foreach ($searchResult->getItems() as $bookmark) {
                $this->bookmarkRepository->delete($bookmark);
            }
        } catch (\Exception $e) {
            // ignore
        }
    }

    /**
     * Clean up the current order pickup listing bookmark.
     */
    private function resetOrderPickupGrid()
    {
        try {
            $searchCriteriaBuilder = $this->searchCriteriaBuilderFactory->create();

            $namespaceFilter = $this->filterBuilder
                ->setField('namespace')
                ->setConditionType('eq')
                ->setValue('sales_order_pickup_listing')
                ->create();

            $searchCriteriaBuilder->addFilter($namespaceFilter);

            $searchCriteria = $searchCriteriaBuilder->create();
            $searchResult = $this->bookmarkRepository->getList($searchCriteria);

            foreach ($searchResult->getItems() as $bookmark) {
                $this->bookmarkRepository->delete($bookmark);
            }
        } catch (\Exception $e) {
            //ignore
        }
    }
}

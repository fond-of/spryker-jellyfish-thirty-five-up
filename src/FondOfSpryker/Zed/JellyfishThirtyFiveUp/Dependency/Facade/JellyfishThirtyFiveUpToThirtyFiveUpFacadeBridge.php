<?php

namespace FondOfSpryker\Zed\JellyfishThirtyFiveUp\Dependency\Facade;

use FondOfSpryker\Zed\ThirtyFiveUp\Business\ThirtyFiveUpFacadeInterface;
use Generated\Shared\Transfer\ThirtyFiveUpOrderTransfer;
use Orm\Zed\ThirtyFiveUp\Persistence\ThirtyFiveUpOrder;

class JellyfishThirtyFiveUpToThirtyFiveUpFacadeBridge implements JellyfishThirtyFiveUpToThirtyFiveUpFacadeInterface
{
    /**
     * @var \FondOfSpryker\Zed\ThirtyFiveUp\Business\ThirtyFiveUpFacadeInterface
     */
    protected $facade;

    /**
     * @param \FondOfSpryker\Zed\ThirtyFiveUp\Business\ThirtyFiveUpFacadeInterface $facade
     */
    public function __construct(ThirtyFiveUpFacadeInterface $facade)
    {
        $this->facade = $facade;
    }

    /**
     * @param \Orm\Zed\ThirtyFiveUp\Persistence\ThirtyFiveUpOrder $thirtyFiveUpOrder
     *
     * @return \Generated\Shared\Transfer\ThirtyFiveUpOrderTransfer
     */
    public function convertThirtyFiveUpOrderEntityToTransfer(ThirtyFiveUpOrder $thirtyFiveUpOrder): ThirtyFiveUpOrderTransfer
    {
        return $this->facade->convertThirtyFiveUpOrderEntityToTransfer($thirtyFiveUpOrder);
    }
}

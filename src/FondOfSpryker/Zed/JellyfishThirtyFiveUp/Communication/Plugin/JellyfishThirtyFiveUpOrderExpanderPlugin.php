<?php

namespace FondOfSpryker\Zed\JellyfishThirtyFiveUp\Communication\Plugin;

use FondOfSpryker\Zed\JellyfishExtension\Dependency\Plugin\JellyfishOrderExpanderPostMapPluginInterface;
use Generated\Shared\Transfer\JellyfishOrderTransfer;
use Orm\Zed\Sales\Persistence\SpySalesOrder;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * Class JellyfishThirtyFiveUpOrderExpanderPlugin
 *
 * @package FondOfSpryker\Zed\JellyfishThirtyFiveUp\Dependency\Plugin
 *
 * @method \FondOfSpryker\Zed\JellyfishThirtyFiveUp\Communication\JellyfishThirtyFiveUpCommunicationFactory getFactory()
 * @method \FondOfSpryker\Zed\JellyfishThirtyFiveUp\JellyfishThirtyFiveUpConfig getConfig()
 * @method \FondOfSpryker\Zed\JellyfishThirtyFiveUp\Business\JellyfishThirtyFiveUpFacadeInterface getFacade()
 */
class JellyfishThirtyFiveUpOrderExpanderPlugin extends AbstractPlugin implements JellyfishOrderExpanderPostMapPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\JellyfishOrderTransfer $jellyfishOrderTransfer
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder $salesOrder
     *
     * @return \Generated\Shared\Transfer\JellyfishOrderTransfer
     */
    public function expand(
        JellyfishOrderTransfer $jellyfishOrderTransfer,
        SpySalesOrder $salesOrder
    ): JellyfishOrderTransfer {
        $thirtyFiveUpOrder = $salesOrder->getThirtyFiveUpOrder();

        if ($thirtyFiveUpOrder !== null) {
            $thirtyFiveUpOrderTransfer = $this->getFactory()->getThirtyFiveUpFacade()->convertThirtyFiveUpOrderEntityToTransfer($thirtyFiveUpOrder);
            $jellyfishOrderTransfer->setThirtyFiveUpOrder($thirtyFiveUpOrderTransfer);
        }

        return $jellyfishOrderTransfer;
    }
}

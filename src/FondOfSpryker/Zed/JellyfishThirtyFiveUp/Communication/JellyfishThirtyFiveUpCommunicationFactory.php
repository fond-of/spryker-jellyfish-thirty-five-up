<?php

namespace FondOfSpryker\Zed\JellyfishThirtyFiveUp\Communication;

use FondOfSpryker\Zed\JellyfishThirtyFiveUp\Dependency\Facade\JellyfishThirtyFiveUpToThirtyFiveUpFacadeInterface;
use FondOfSpryker\Zed\JellyfishThirtyFiveUp\JellyfishThirtyFiveUpDependencyProvider;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

/**
 * @method \FondOfSpryker\Zed\JellyfishThirtyFiveUp\JellyfishThirtyFiveUpConfig getConfig()
 * @method \FondOfSpryker\Zed\JellyfishThirtyFiveUp\Business\JellyfishThirtyFiveUpFacadeInterface getFacade()
 */
class JellyfishThirtyFiveUpCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return \FondOfSpryker\Zed\JellyfishThirtyFiveUp\Dependency\Facade\JellyfishThirtyFiveUpToThirtyFiveUpFacadeInterface
     */
    public function getThirtyFiveUpFacade(): JellyfishThirtyFiveUpToThirtyFiveUpFacadeInterface
    {
        return $this->getProvidedDependency(JellyfishThirtyFiveUpDependencyProvider::FACADE_THIRTY_FIVE_UP);
    }
}

<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\QuickOrder;

use Generated\Shared\Transfer\CurrentProductConcretePriceTransfer;
use Generated\Shared\Transfer\ProductConcreteTransfer;

interface QuickOrderClientInterface
{
    /**
     * Specification:
     * - Returns ProductConcreteTransfer filled with data provided by plugins.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $productConcreteTransfer
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer
     */
    public function expandProductConcreteTransfer(ProductConcreteTransfer $productConcreteTransfer): ProductConcreteTransfer;

    /**
     * Specification:
     * - Returns CurrentProductConcretePriceTransfer with sum price and currency data.
     * - Volume prices will be used if configured and applicable.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CurrentProductConcretePriceTransfer $currentProductConcretePriceTransfer
     *
     * @return \Generated\Shared\Transfer\CurrentProductConcretePriceTransfer
     */
    public function getProductConcreteSumPrice(CurrentProductConcretePriceTransfer $currentProductConcretePriceTransfer): CurrentProductConcretePriceTransfer;
}

<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Customer\Business\Plugin\CustomerAnonymizer;

use DateTime;
use Generated\Shared\Transfer\CustomerTransfer;
use Spryker\Zed\Customer\Dependency\Plugin\CustomerAnonymizerPluginInterface;

class CustomerAnonymizePlugin implements CustomerAnonymizerPluginInterface
{

    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function processCustomer(CustomerTransfer $customerTransfer)
    {
        $customerTransfer->setAnonymizedAt(new DateTime());
        $customerTransfer->setEmail(md5($customerTransfer->getEmail()));

        $customerTransfer->setFirstName(null);
        $customerTransfer->setLastName(null);
        $customerTransfer->setSalutation(null);
        $customerTransfer->setGender(null);
        $customerTransfer->setDateOfBirth(null);

        return $customerTransfer;
    }

}

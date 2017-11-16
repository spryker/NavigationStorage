<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SequenceNumber\Business;

use Generated\Shared\Transfer\SequenceNumberSettingsTransfer;

interface SequenceNumberFacadeInterface
{
    /**
     * Specification:
     * - Generates a unique sequence value
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\SequenceNumberSettingsTransfer $sequenceNumberSettings
     *
     * @return string
     */
    public function generate(SequenceNumberSettingsTransfer $sequenceNumberSettings);
}

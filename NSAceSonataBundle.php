<?php

namespace NS\AceSonataBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NSAceSonataBundle extends Bundle
{
    public function getParent()
    {
        return 'SonataAdminBundle';
    }
}

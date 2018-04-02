<?php

namespace Souk\FrontBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FrontBundle extends Bundle
{
	/*return multiple Bundle*/
    public function getParent()
    {
        return 'FOSMessageBundle';
    }
}

<?php
namespace GDO\DogMail;

use GDO\Core\GDO_Module;
use GDO\Core\GDT_Secret;

final class Module_DogMail extends GDO_Module
{

    public function getDependencies(): array
    {
        return [
            'Dog',
        ];
    }

    public function getConfig(): array
    {
        return [
        ];
    }

}

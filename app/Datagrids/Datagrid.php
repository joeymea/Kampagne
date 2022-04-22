<?php


namespace App\Datagrids;


abstract class Datagrid
{
    /** @var bool */
    public $bulkPermissions = true;

    /** @var bool */
    public $bulkCopyToCampaign = true;
     /** @var bool */
    public $bulkTransform = true;

    /** @var bool */
    public $bulkPrint = true;
}

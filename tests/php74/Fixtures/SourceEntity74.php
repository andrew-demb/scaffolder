<?php

/**
 * Spiral Framework. Scaffolder
 *
 * @license MIT
 * @author  Valentin V (vvval)
 */

declare(strict_types=1);

namespace Spiral\Tests74\Fixtures;

class SourceEntity74
{
    protected bool $typedBool;

    public $noTypeString;

    /** @var SourceEntity74 */
    public $obj;

    /** @var int */
    protected $intFromPhpDoc;

    private $noTypeWithFloatDefault = 1.1;
}

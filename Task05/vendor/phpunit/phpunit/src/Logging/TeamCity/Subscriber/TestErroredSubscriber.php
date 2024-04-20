<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Logging\TeamCity;

use PHPUnit\Event\InvalidArgumentException;
use PHPUnit\Event\Test\Errored;
use PHPUnit\Event\Test\ErroredSubscriber;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestErroredSubscriber extends Subscriber implements ErroredSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(Errored $event): void
    {
        $this->logger()->testErrored($event);
    }
}

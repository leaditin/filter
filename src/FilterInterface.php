<?php declare(strict_types=1);

namespace Leaditin\Filter;

/**
 * Interface FilterInterface
 *
 * @package Leaditin\Filter
 * @author Igor Vuckovic <igor@vuckovic.biz>
 */
interface FilterInterface
{
    /**
     * @param string $value
     *
     * @return string
     */
    public function filter(string $value): string;
}

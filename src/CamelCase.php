<?php declare(strict_types=1);

namespace Leaditin\Filter;

/**
 * Class CamelCase
 *
 * @package Leaditin\Filter
 * @author Igor Vuckovic <igor@vuckovic.biz>
 */
class CamelCase implements FilterInterface
{
    /**
     * Takes multiple words separated by spaces or underscores and camellias them
     *
     * @param string $value
     *
     * @return string
     */
    public function filter(string $value): string
    {
        if (!preg_match('/[\s_\-]+/', $value)) {
            return lcfirst($value);
        }

        $value = 'x' . strtolower($value);
        $value = ucwords(preg_replace('/[\s_\-]+/', ' ', $value));

        return substr(str_replace(' ', '', $value), 1);
    }
}

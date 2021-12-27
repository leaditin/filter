<?php declare(strict_types=1);

namespace Leaditin\Filter;

/**
 * Class Humanize
 *
 * @package Leaditin\Filter
 * @author Igor Vuckovic <igor@vuckovic.biz>
 */
class Humanize implements FilterInterface
{
    private $rules = [
        '/([a-z])([A-Z])/' => '\1 \2',
        '/[\s_\-]+/' => ' '
    ];

    /**
     * Takes multiple words separated by spaces, dashes or underscores and humanize them
     *
     * @param string $value
     *
     * @return string
     */
    public function filter(string $value): string
    {
        foreach ($this->rules as $rule => $replacement) {
            if (preg_match($rule, $value)) {
                $value = preg_replace($rule, $replacement, $value);
            }
        }

        return ucfirst(strtolower($value));
    }
}

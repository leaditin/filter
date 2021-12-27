<?php declare(strict_types=1);

namespace Leaditin\Filter;

/**
 * Class Underscore
 *
 * @package Leaditin\Filter
 * @author Igor Vuckovic <igor@vuckovic.biz>
 */
class Underscore implements FilterInterface
{
    private $rules = [
        '/([a-z])([A-Z])/' => '\1_\2',
        '/[\s\-]+/' => '_',
    ];

    /**
     * Takes multiple words separated by spaces or dash and underscore them
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

        return strtolower($value);
    }
}

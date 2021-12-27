<?php declare(strict_types=1);

namespace Leaditin\Filter;

/**
 * Class Singular
 *
 * @package Leaditin\Filter
 * @author Igor Vuckovic <igor@vuckovic.biz>
 */
class Singular implements FilterInterface
{
    private $rules = [
        '/(matr)ices$/' => '\1ix',
        '/(vert|ind)ices$/' => '\1ex',
        '/^(ox)en/' => '\1',
        '/(alias)es$/' => '\1',
        '/(cris|ax|test)es$/' => '\1is',
        '/(shoe)s$/' => '\1',
        '/(business)$/' => '\1',
        '/(o)es$/' => '\1',
        '/(bus|campus)es$/' => '\1',
        '/([m|l])ice$/' => '\1ouse',
        '/(x|ch|ss|sh)es$/' => '\1',
        '/(m)ovies$/' => '\1\2ovie',
        '/(s)eries$/' => '\1\2eries',
        '/([^aeiouy]|qu)ies$/' => '\1y',
        '/([lr])ves$/' => '\1f',
        '/(tive)s$/' => '\1',
        '/(hive)s$/' => '\1',
        '/([^f])ves$/' => '\1fe',
        '/(^analy)ses$/' => '\1sis',
        '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/' => '\1\2sis',
        '/([ti])a$/' => '\1um',
        '/(p)eople$/' => '\1\2erson',
        '/(m)en$/' => '\1an',
        '/(s)tatuses$/' => '\1\2tatus',
        '/(c)hildren$/' => '\1\2hild',
        '/(n)ews$/' => '\1\2ews',
        '/^(sheep)$/' => '\1',
        '/^(octop)i$/' => '\1us',
        '/([^u])s$/' => '\1',
    ];

    /**
     * Converts a plural word in English to a singular
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
                break;
            }
        }

        return $value;
    }
}

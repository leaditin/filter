<?php declare(strict_types=1);

namespace Tests\Leaditin\Filter;

use Leaditin\Filter\CamelCase;
use PHPUnit\Framework\TestCase;

final class CamelCaseTest extends TestCase
{
    /**
     * @dataProvider camelCaseProvider
     *
     * @param string $input
     * @param string $output
     *
     * @return void
     */
    public function testFilter(string $input, string $output): void
    {
        $filter = new CamelCase();

        $this->assertSame($output, $filter->filter($input));
    }

    public function camelCaseProvider(): array
    {
        return [
            ['property', 'property'],
            ['my-property', 'myProperty'],
            ['my property', 'myProperty'],
            ['myProperty', 'myProperty'],
            ['MyProperty', 'myProperty'],
        ];
    }
}

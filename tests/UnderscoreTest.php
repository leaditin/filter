<?php declare(strict_types=1);

namespace Tests\Leaditin\Filter;

use Leaditin\Filter\Underscore;
use PHPUnit\Framework\TestCase;

final class UnderscoreTest extends TestCase
{
    /**
     * @dataProvider underscoreProvider
     *
     * @param string $input
     * @param string $output
     *
     * @return void
     */
    public function testFilter(string $input, string $output): void
    {
        $filter = new Underscore();

        $this->assertSame($output, $filter->filter($input));
    }

    public function underscoreProvider(): array
    {
        return [
            ['my property', 'my_property'],
            ['myProperty', 'my_property'],
            ['MyProperty', 'my_property'],
            ['MySuperClass', 'my_super_class'],
        ];
    }
}

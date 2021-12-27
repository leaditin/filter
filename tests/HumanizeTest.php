<?php declare(strict_types=1);

namespace Tests\Leaditin\Filter;

use Leaditin\Filter\Humanize;
use PHPUnit\Framework\TestCase;

final class HumanizeTest extends TestCase
{
    /**
     * @dataProvider humanizeProvider
     *
     * @param string $input
     * @param string $output
     *
     * @return void
     */
    public function testFilter(string $input, string $output): void
    {
        $filter = new Humanize();

        $this->assertSame($output, $filter->filter($input));
    }

    public function humanizeProvider(): array
    {
        return [
            ['property', 'Property'],
            ['my-property', 'My property'],
            ['my property', 'My property'],
            ['myProperty', 'My property'],
            ['MyProperty', 'My property'],
        ];
    }
}

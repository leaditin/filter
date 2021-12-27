<?php declare(strict_types=1);

namespace Tests\Leaditin\Filter;

use Leaditin\Filter\Plural;
use PHPUnit\Framework\TestCase;

final class PluralTest extends TestCase
{
    /**
     * @dataProvider pluralProvider
     *
     * @param string $input
     * @param string $output
     *
     * @return void
     */
    public function testFilter(string $input, string $output): void
    {
        $filter = new Plural();

        $this->assertSame($output, $filter->filter($input));
    }

    public function pluralProvider(): array
    {
        return [
            ['ox', 'oxen'],
            ['mouse', 'mice'],
            ['louse', 'lice'],
            ['matrix', 'matrices'],
            ['vertex', 'vertices'],
            ['index', 'indices'],
            ['search', 'searches'],
            ['switch', 'switches'],
            ['fix', 'fixes'],
            ['box', 'boxes'],
            ['process', 'processes'],
            ['address', 'addresses'],
            ['query', 'queries'],
            ['ability', 'abilities'],
            ['agency', 'agencies'],
            ['archive', 'archives'],
            ['hive', 'hives'],
            ['half', 'halves'],
            ['safe', 'saves'],
            ['wife', 'wives'],
            ['basis', 'bases'],
            ['diagnosis', 'diagnoses'],
            ['datum', 'data'],
            ['medium', 'media'],
            ['person', 'people'],
            ['salesperson', 'salespeople'],
            ['man', 'men'],
            ['woman', 'women'],
            ['spokesman', 'spokesmen'],
            ['child', 'children'],
            ['buffalo', 'buffaloes'],
            ['tomato', 'tomatoes'],
            ['bus', 'buses'],
            ['campus', 'campuses'],
            ['alias', 'aliases'],
            ['octopus', 'octopi'],
            ['axis', 'axes'],
            ['sheep', 'sheep'],
            ['pencil', 'pencils'],
        ];
    }
}

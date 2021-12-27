<?php declare(strict_types=1);

namespace Tests\Leaditin\Filter;

use Leaditin\Filter\Singular;
use PHPUnit\Framework\TestCase;

final class SingularTest extends TestCase
{
    /**
     * @dataProvider singularProvider
     *
     * @param string $input
     * @param string $output
     *
     * @return void
     */
    public function testFilter(string $input, string $output): void
    {
        $filter = new Singular();

        $this->assertSame($output, $filter->filter($input));
    }

    public function singularProvider(): array
    {
        return [
            ['oxen', 'ox'],
            ['mice', 'mouse'],
            ['lice', 'louse'],
            ['matrices', 'matrix'],
            ['vertices', 'vertex'],
            ['indices', 'index'],
            ['searches', 'search'],
            ['switches', 'switch'],
            ['fixes', 'fix'],
            ['boxes', 'box'],
            ['processes', 'process'],
            ['addresses', 'address'],
            ['queries', 'query'],
            ['abilities', 'ability'],
            ['agencies', 'agency'],
            ['archives', 'archive'],
            ['hives', 'hive'],
            ['halves', 'half'],
            ['saves', 'safe'],
            ['wives', 'wife'],
            ['bases', 'basis'],
            ['diagnoses', 'diagnosis'],
            ['data', 'datum'],
            ['media', 'medium'],
            ['people', 'person'],
            ['salespeople', 'salesperson'],
            ['men', 'man'],
            ['women', 'woman'],
            ['spokesmen', 'spokesman'],
            ['children', 'child'],
            ['buffaloes', 'buffalo'],
            ['tomatoes', 'tomato'],
            ['buses', 'bus'],
            ['campuses', 'campus'],
            ['aliases', 'alias'],
            ['octopi', 'octopus'],
            ['axes', 'axis'],
            ['sheep', 'sheep'],
            ['pencils', 'pencil'],
        ];
    }
}

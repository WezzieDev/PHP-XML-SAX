<?php declare(strict_types=1);

use WezzieDev\PXS;

class ParserTest
    extends \PHPUnit\Framework\TestCase
{

    public function testParserImplementsParserInterface(): void
    {
        $parser = new PXS\Parser();
        $this->assertInstanceOf(PXS\ParserInterface::class, $parser);
    }

}
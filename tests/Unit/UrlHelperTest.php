<?php

namespace Tests\Unit;

use App\Helpers\UrlHelper;
use PHPUnit\Framework\TestCase;

class UrlHelperTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExtractLinksFromString()
    {
        $urlHelper = new UrlHelper();

        $this->assertEmpty($urlHelper->extractLinksFromString(''));
    }
}

<?php

use Merophp\HtmlViewPlugin\HtmlView;
use PHPUnit\Framework\TestCase;

/**
 * @covers HtmlView
 */
class HtmlViewTest extends TestCase
{
    public function testAll(){
        $htmlView = new HtmlView;
        $htmlView->html('<i>Foo</i>');
        $this->assertEquals('<i>Foo</i>', $htmlView->render());

        $this->assertEquals('text/html;charset=utf-8', $htmlView->getContentType());
    }
}

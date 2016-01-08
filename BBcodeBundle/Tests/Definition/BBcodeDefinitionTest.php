<?php 

namespace OpenOrchestra\BBcodeBundle\Tests\Definition;

use OpenOrchestra\BaseBundle\Tests\AbstractTest\AbstractBaseTestCase;
use Phake;
use OpenOrchestra\BBcodeBundle\Definition\BBcodeDefinition;

/**
 * Class BBcodeDefinitionTest
 */
class BBcodeDefinitionTest extends AbstractBaseTestCase
{
    protected $definition;

    protected $tagName = 'TAG_NAME';
    protected $replacementText = 'REPLACEMENT_TEXT';

    /**
     * Set up the test
     */
    public function setUp()
    {
        $this->definition = new BBcodeDefinition($this->tagName, $this->replacementText);
    }

    /**
     * Test getHtml
     */
    public function testGetHtml()
    {
        $BBcodeElementNode = Phake::mock('OpenOrchestra\BBcodeBundle\ElementNode\BBcodeElementNode');
        Phake::when($BBcodeElementNode)->getChildren()->thenReturn(array());

        $html = $this->definition->getHtml($BBcodeElementNode);
        $this->assertSame($html, $this->definition->asHtml($BBcodeElementNode));
    }
}

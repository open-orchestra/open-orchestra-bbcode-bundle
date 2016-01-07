<?php 

namespace OpenOrchestra\BBcodeBundle\Tests\Definition;

use OpenOrchestra\BaseBundle\Tests\AbstractTest\AbstractBaseTestCase;
use OpenOrchestra\BBcodeBundle\Definition\BBcodeDefinitionFactory;

/**
 * Class BBcodeDefinitionFactoryTest
 */
class BBcodeDefinitionFactoryTest extends AbstractBaseTestCase
{
    /**
     * @param string $className
     * 
     * @dataProvider provideClassName
     */
    public function testCreate($className)
    {
        $factory = new BBcodeDefinitionFactory($className);
        $object = $factory->create('tag', 'html');

        $this->assertInstanceOf($className, $object);
    }

    /**
     * Provide class name
     */
    public function provideClassName()
    {
        return array(
            array('OpenOrchestra\BBcodeBundle\Definition\BBcodeDefinition'),
            array('JBBCode\CodeDefinition'),
        );
    }
}

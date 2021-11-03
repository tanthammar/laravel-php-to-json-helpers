<?php

namespace Tanthammar\Json\Tests;

use Tanthammar\Json\Json;
use PHPUnit\Framework\TestCase;

class JsonTest extends TestCase
{
    public function testJsonParse()
    {
        $this->assertEquals("'hey'", Json::parse('hey'));
        $this->assertEquals("'don\'t mess with my path\\path'", Json::parse("don't mess with my path\path"));
        $this->assertEquals("JSON.parse(atob('eyJoZXkiOiJ0aGVyZSJ9'))", Json::parse(['hey' => 'there']));
        $this->assertEquals("JSON.parse(atob('WyJoZXkiLCJ0aGVyZSJd'))", Json::parse(['hey', 'there']));
    }

    public function testJsonEncode()
    {
        $this->assertEquals('"hey"', Json::encode('hey'));
        $this->assertEquals('{"hey":"there"}', Json::encode(['hey' => 'there']));
        $this->assertEquals('["hey","there"]', Json::encode(['hey', 'there']));
    }

    public function testJsonStr()
    {
        $this->assertEquals("'hey'", Json::str('hey'));
        $this->assertEquals("'don\'t mess with my path\\path'", Json::str("don't mess with my path\path"));
    }

    public function testJsonBool()
    {
        $this->assertEquals('true', Json::bool((bool) 1));
        $this->assertEquals('false', Json::bool((bool) 0));
    }
}

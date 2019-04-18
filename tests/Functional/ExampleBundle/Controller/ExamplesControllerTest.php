<?php

namespace Tests\Functional\ExampleBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Tests\Functional\ApiBundle\Controller\KununuWebTestCase;

class ExamplesControllerTest extends KununuWebTestCase
{
    public function testIntegerAction()
    {
        $response = $this->requestGet('examples/integer');
        $this->assertArrayHasKey('data', $response);
        $this->assertEquals(42, $response['data']);
    }

    public function testStringAction()
    {
        $response = $this->requestGet('examples/string');
        $this->assertArrayHasKey('data', $response);
        $this->assertEquals('foobar', $response['data']);
    }

    public function testArrayAction()
    {
        $response = $this->requestGet('examples/array');
        $this->assertArrayHasKey('data', $response);
        $this->assertArrayHasKey('foo', $response['data']);
        $this->assertEquals('bar', $response['data']['foo']);
    }

    public function testExceptionAction()
    {
        $response = $this->requestGet('examples/exception', Response::HTTP_INTERNAL_SERVER_ERROR);
        $this->assertArrayHasKey('error', $response);
        $this->assertArrayHasKey('code', $response['error']);
        $this->assertArrayHasKey('message', $response['error']);
    }

    public function testEntityAction()
    {
        $response = $this->requestGet('examples/entity');
        $this->assertArrayHasKey('data', $response);
        $this->assertArrayHasKey('id', $response['data']);
        $this->assertArrayHasKey('name', $response['data']);
        $this->assertArrayHasKey('address', $response['data']);
        $this->assertArrayHasKey('zip', $response['data']);
        $this->assertEquals(1, $response['data']['id']);
        $this->assertEquals('Name', $response['data']['name']);
        $this->assertEquals('Address 1', $response['data']['address']);
        $this->assertEquals('1111', $response['data']['zip']);
    }

    public function testSuccessfulValidationAction()
    {
        $queryString = '?name=name&slug=slug&industry_id=2';
        $response = $this->requestGet('examples/validation' . $queryString);
        $this->assertArrayHasKey('data', $response);
        $this->assertEquals(true, $response['data']);
    }

    public function testUnsuccessfulValidationAction()
    {
        $response = $this->requestGet('examples/validation', Response::HTTP_BAD_REQUEST);
        $this->assertArrayHasKey('error', $response);
        $this->assertArrayHasKey('code', $response['error']);
        $this->assertArrayHasKey('message', $response['error']);
        $this->assertEquals(400, $response['error']['code']);
        $this->assertEquals('Validation error', $response['error']['message']);
    }
}

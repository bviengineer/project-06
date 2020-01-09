<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase 
{ 
    /** @test */
    function listingCannotBeCreatedDataIsUnavailable() 
    {
        // Exception
        $this->expectException(Exception::class);
       
        // Data 
        $data = [
            'id' => null,
            'title' => null
        ];
        
        // Code to be tested 
        new ListingBasic($data);
    }
    
    /** @test */
    function invalidIdCannotCreateListing() 
    {
        // Exception
        $this->expectException(Exception::class);

        // Data
        $data = [
            'id' => null,
            'title' => 'Caribbean'
        ];

        // Code being tested 
        new ListingBasic($data);
    }

    /** @test */
    function invalidTitleCannotCreateListing()
    {
        // Exception
        $this->expectException(Exception::class);

        // Data
        $data = [
            'id' => 1,
            'title' => null
        ];

        // Code being tested 
        new ListingBasic($data);
    }

    /** @test */
    function listingIsAnObjectInstance()
    {
        // Data
        $data = [
            'id' => 2,
            'title' => 'Coding is fun though frustrating at times'
        ];
        
        // Data to test
        $listing = new ListingBasic($data);

        // Assertion 
        $this->assertInstanceOf('ListingBasic', $listing);
    }

    /** @test */
    function getStatusMethodReturnsBasic()
    {
        // Data
        $data = [
            'id' => 3,
            'title' => 'Does Method Return Basic?'
        ];

        // Instance of ListingBasic
        $returnStatus = new ListingBasic($data);

        // Test
        $this->assertEquals('basic', $returnStatus->getStatus());
   }
}
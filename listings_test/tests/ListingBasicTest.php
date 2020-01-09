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
            'id' => '1',
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
            'id' => '2',
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
            'id' => '3',
            'title' => 'Does Method Return Basic?'
        ];

        // Instance of ListingBasic
        $returnStatus = new ListingBasic($data);

        // Test
        $this->assertEquals('basic', $returnStatus->getStatus());
   }

   /** @test */
   // Write a test for the ListingBasic class to ensure that the get method for each property is returning the expected results: id, title, website, email, twitter.
   
   function getMethodForEachPropertyReturnsExpectedResults() 
   {
       // The Data
       $data = [
           'id' => '4',
           'title' => 'Get Status Method Returns Expected Results',
           'website' => 'www.teamtreehouse.com',
           'email' => 'getcoding@gmail.com',
           'twitter' => '@code4good',
       ];

       // The Instance of ListingBasic
       $getMethod = new ListingBasic($data);

       // Test
       $this->assertSame($data['id'], $getMethod->getId());
   }
}
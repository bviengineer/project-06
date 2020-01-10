<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase 
{ 
    /** @test */
    function listingCannotBeCreatedDataIsUnavailable() 
    {
        // Assertion
        $this->expectException(Exception::class);
       
        // The Data 
        $data = [
            'id' => null,
            'title' => null
        ];
        
        // Code being tested (constructor will be called)
        new ListingBasic($data);
    }
    
    /** @test */
    function invalidIdCannotCreateListing() 
    {
        // Assertion
        $this->expectException(Exception::class);

        // The Data
        $data = [
            'id' => null,
            'title' => 'Caribbean'
        ];

        // Code being tested (constructor will be called)
        new ListingBasic($data);
    }

    /** @test */
    function invalidTitleCannotCreateListing()
    {
        // Assertion
        $this->expectException(Exception::class);

        // The Data
        $data = [
            'id' => 1,
            'title' => null
        ];

        // Code being tested (constructor will be called)
        new ListingBasic($data);
    }

    /** @test */
    function listingIsAnObjectInstance() 
    {
        // The Data
        $data = [
            'id' => 2,
            'title' => 'Coding is fun though frustrating at times'
        ];
        
        // Data to test
        $listing = new ListingBasic($data);

        // Assertion 
        $this->assertIsObject($listing);
    }

    /** @test */
    function getStatusMethodReturnsBasic()
    {
        // The Data
        $data = [
            'id' => 3,
            'title' => 'Does Method Return Basic?'
        ];

        // Instance of ListingBasic
        $returnStatus = new ListingBasic($data);

        // Assertion
        $this->assertEquals('basic', $returnStatus->getStatus());
   }

   /** @test */
   function getMethodForEachPropertyReturnsExpectedResults() 
   {
       // The Data
       $data = [
           'id' => 4,
           'title' => 'Get Status Method Returns Expected Results',
           'website' => 'http://www.teamtreehouse.com',
           'email' => 'getcoding@gmail.com',
           'twitter' => 'code4good',
       ];

       // The Instance of ListingBasic
       $getMethod = new ListingBasic($data);

       // Assertions
       //$this->assertSame($data['id'], $getMethod->getId()); // check for another assertion
        $this->assertEqualsCanonicalizing($data['id'], $getMethod->getId());
        $this->assertEqualsIgnoringCase($data['title'], $getMethod->getTitle());
        $this->assertEqualsIgnoringCase($data['website'], $getMethod->getWebsite());
        $this->assertEqualsIgnoringCase($data['email'], $getMethod->getEmail());
        $this->assertEqualsIgnoringCase($data['twitter'], $getMethod->getTwitter());
   }

   /** @test */
   function toArrayMethodReturnsAnArrayWhereEachItemEqualsTheExpectedResults()
   {
    // The Data
    $data = [
        'id' => 5,
        'title' => 'Expect a title to be returned',
        'website' => 'http://www.codelife.com',
        'email' => 'codelife@gmailcom',
        'twitter' => 'codeLife',
    ];

    // Instance of ListingBasic Class
    $theListing = new ListingBasic($data);
    $isArray = $theListing->toArray();

    // Assertions
    $this->assertIsArray($isArray);
    // $this->assertNotNull($data['id']);
    // $this->assertNotNull($theListing->getId());
    $this->assertEqualsCanonicalizing($data['id'], $theListing->getId());
    $this->assertEqualsIgnoringCase($data['title'], $theListing->getTitle());
    $this->assertEqualsIgnoringCase($data['website'], $theListing->getWebsite());
    $this->assertEqualsIgnoringCase($data['email'], $theListing->getEmail());
    $this->assertEqualsIgnoringCase($data['twitter'], $theListing->getTwitter());
   }
}
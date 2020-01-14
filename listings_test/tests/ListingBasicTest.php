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
            // 'id' => null,
            // 'title' => null
        ];
        
        // Code being tested (constructor will be called)
        $listing = new ListingBasic($data);
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
        $listing = new ListingBasic($data);
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
        $listing = new ListingBasic($data);
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
        $listing = new ListingBasic($data);

        // Assertion
        $this->assertEquals('basic', $listing->getStatus());
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
           'status' => '',
           'image' => 'images/listings/1.png'
       ];

       // The Instance of ListingBasic
       $listing = new ListingBasic($data);

       // Assertions
        $this->assertEqualsCanonicalizing($data['id'], $listing->getId());
        $this->assertEqualsIgnoringCase($data['title'], $listing->getTitle());
        $this->assertEqualsIgnoringCase($data['website'], $listing->getWebsite());
        $this->assertEqualsIgnoringCase($data['email'], $listing->getEmail());
        $this->assertEqualsIgnoringCase($data['twitter'], $listing->getTwitter());
        $this->assertEquals($data['status'], $listing->getStatus());
        $this->assertNotEmpty($listing->getImage());
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
    $listing = new ListingBasic($data);
    $isArray = $listing->toArray();

    // Assertions
    $this->assertIsArray($isArray);
    $this->assertEqualsCanonicalizing($data['id'], $listing->getId());
    $this->assertEqualsIgnoringCase($data['title'], $listing->getTitle());
    $this->assertEqualsIgnoringCase($data['website'], $listing->getWebsite());
    $this->assertEqualsIgnoringCase($data['email'], $listing->getEmail());
    $this->assertEqualsIgnoringCase($data['twitter'], $listing->getTwitter());
   }

   /** @test */
   function websiteIsNull() 
   {
       // The data
       $data = [
           'id' => 6,
           'title' => 'The website is blank',
           'website' => ''
       ];

       // Instance of ListingBasic class
       $listing = new ListingBasic($data);

       // Assertion 
       $this->assertNull($listing->getWebsite());
   }
}
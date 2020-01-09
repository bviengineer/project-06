<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase 
{
// Write a test for the ListingFeatured class to ensure that getStatus method returns 'featured'.
    /** @test */
    function getStatusMethodReturnsFeatured()
    {
        // The Data
        $data = [
            'id' => 1,
            'title' => 'Verify that the status for this is featured'
        ];

        // Instance of ListingFeatured
        $returnStatus = new ListingFeatured($data);

        // Test
        $this->assertEquals('featured', $returnStatus->getStatus());
    }

    /** @test */
    //Write a test for the ListingFeatured class to ensure that getCoc method returns the expected results.
    
    function getCocMethodReturnsExcpectedResults()
    {
       // The Data
       $data = [
           'id' => 2,
           'title' => 'Return expected results',
        //    'coc' => 'This is the COC'
       ];

       // Instance of ListingPremium  class
       $getCoc = new ListingFeatured($data);
       
       // Assertion
       $this->assertThat(
           $data['coc'],
           $this->equalTo($getCoc->getCoc()),
       );
    }

}
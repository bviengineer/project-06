<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase 
{
// Write a test for the ListingFeatured class to ensure that getStatus method returns 'featured'.
    /** @test */
    function getStatusMethodReturnsFeatured()
    {
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
    }

}
<?php
// Write a test for the ListingPremium class to ensure that getStatus method returns 'premium'.

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase 
{
      /** @test */
      function getStatusMethodReturnsPremium()
      {
          // The Data
          $data = [
              'id' => 1,
              'title' => 'Verify the status for this premium class'
          ];
  
          // Instance of ListingPremium
          $returnStatus = new ListingPremium($data);
  
          // Test
          $this->assertEquals('premium', $returnStatus->getStatus());
     }

     /** @test */
     //Write a test for the ListingPremium class to ensure that getDescription method returns the expected results.
     
     function getDescriptionMethodReturnsExcpectedResults()
     {
         
     }
}
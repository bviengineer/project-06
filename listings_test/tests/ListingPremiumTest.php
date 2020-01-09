<?php
// Write a test for the ListingPremium class to ensure that getStatus method returns 'premium'.

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase 
{
      /** @test */
      function getStatusMethodReturnsPremium()
      {
          // Data
          $data = [
              'id' => 1,
              'title' => 'Verify the status for this premium class'
          ];
  
          // Instance of ListingPremium
          $returnStatus = new ListingPremium($data);
  
          // Test
          $this->assertEquals('premium', $returnStatus->getStatus());
     }
}
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Hostel Days</title>

    <?php
    include "includes/head_links.php";
    ?>

    <link rel="stylesheet" href="css/common.css"  />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/home2.css" />
    <link rel="stylesheet" href="css/listingproperty-css.css"/>
</head>


<body>

    <?php
    include "includes/header.php";
    ?>

    <form id="listingproperty" class="form" role="form" method="post" action="api/list_property.php">
        
      <div class="listingproperty-page-container">
        <span class="listingproperty-page-text">Fill your Details</span>
        <div class="listingproperty-page-owner-container">
          <input
            type="text"
            placeholder="  Enter your name"
            name="full_owner_name"
            class="listingproperty-page-textinput input"
            required
          />
          <span class="listingproperty-page-text1">Name of the Owner</span>
        </div>


        <div class="listingproperty-page-beds-container">
          <input
            type="text"
            required
            placeholder="  eg. 2"
            name="bed_number"
            class="listingproperty-page-textinput1 input"
          />
          <span class="listingproperty-page-text2">Number of Beds</span>
        </div>


        <div class="listingproperty-page-property-description-container">
          <span class="listingproperty-page-text3">Property Description</span>
          <textarea 
            placeholder="  Write about your property description"
            name="description"
            class="textarea listingproperty-page-textarea"
          ></textarea>
        </div>


        <div class="listingproperty-page-type-of-bed-container">
          <span class="listingproperty-page-text4">
            Types of Beds(Please select from the dropdown options)
          </span>
          <select name="room_type" class="listingproperty-page-select">
            <option value="Private Room">Private Room</option>
            <option value="Double Sharing">Double Sharing</option>
            <option value="Triple Sharing">Triple Sharing</option>
            <option value="Deluxe Room">Deluxe Room</option>
            <option value="4 Bed Sharing">4 Bed Sharing</option>
            <option value="1 BHK">1 BHK</option>
            <option value="2 BHK">2 BHk</option>
            <option value="3 BHK">3 BHK</option>
          </select>
        </div>


        <div class="listingproperty-page-amenities-container">
          <span class="listingproperty-page-text5">
            Amenities(Write all the values with comma seperated words)
          </span>
          <textarea
            placeholder="  Wifi, car parking etc."
            name="amenities"
            class="textarea listingproperty-page-textarea1"
          ></textarea>
        </div>


        <div class="listingproperty-page-city-container">
          <span class="listingproperty-page-text6">City</span>
          <input
            type="text"
            placeholder="  eg. indore"
            name="city"
            class="input listingproperty-page-textinput2"
          />
        </div>


        <div class="listingproperty-page-address-container">
          <span class="listingproperty-page-text7">Address</span>
          <textarea
            placeholder="  eg. Annapurna road"
            name="address"
            class="textarea listingproperty-page-textarea2"
          ></textarea>
        </div>

        
        <button
          name="submit_button"
          type="submit"
          class="button listingproperty-page-button"
        >
          Submit button
        </button>

        <img
      alt="image"
      src="img/listing.png"
      class="listingproperty-page-image"
    />

      </div>
    </form>
  

    
      
    
</body>
</html>
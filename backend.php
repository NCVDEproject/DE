<?php
require 'vendor/autoload.php'; // Include Composer's autoloader

// Connect to MongoDB
$client = new MongoDB\Client("mongodb://localhost:27017"); // Replace with your MongoDB URI
$database = $client->mydatabase; // Replace 'mydatabase' with your database name
$collection = $database->restaurants; // Replace 'restaurants' with your collection name

// Test the connection by fetching some data
try {
    // Fetch all restaurants
    $restaurants = $collection->find();
    foreach ($restaurants as $restaurant) {
        echo "Name: " . $restaurant['name'] . "<br>";
        echo "Address: " . $restaurant['address'] . "<br>";
        echo "Cuisine: " . $restaurant['cuisine'] . "<br>";
        echo "Rating: " . $restaurant['rating'] . "<br><hr>";
    }
} catch (Exception $e) {
    echo "Error connecting to MongoDB: " . $e->getMessage();
}
?>
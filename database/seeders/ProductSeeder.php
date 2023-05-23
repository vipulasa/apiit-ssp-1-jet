<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $carProducts = [
            [
                "name" => "Toyota Camry",
                "description" => "The Toyota Camry is a reliable and comfortable mid-size sedan.",
                "price" => 25000,
                "image" => "camry.jpg",
                "category" => "Sedan",
                "attributes" => [
                    "Engine" => "2.5L 4-cylinder",
                    "Transmission" => "8-speed automatic",
                    "Fuel Economy" => "City: 28 MPG, Highway: 39 MPG",
                    "Seating Capacity" => "5",
                    "Safety Features" => "Lane Departure Warning, Adaptive Cruise Control"
                ]
            ],
            [
                "name" => "Honda Civic",
                "description" => "The Honda Civic is a popular compact car known for its fuel efficiency and sporty design.",
                "price" => 22000,
                "image" => "civic.jpg",
                "category" => "Sedan",
                "attributes" => [
                    "Engine" => "1.5L 4-cylinder",
                    "Transmission" => "Continuously Variable Transmission (CVT)",
                    "Fuel Economy" => "City: 32 MPG, Highway: 42 MPG",
                    "Seating Capacity" => "5",
                    "Safety Features" => "Forward Collision Warning, Lane Keeping Assist"
                ]
            ],
            [
                "name" => "Ford Mustang",
                "description" => "The Ford Mustang is an iconic muscle car with powerful performance and classic styling.",
                "price" => 40000,
                "image" => "mustang.jpg",
                "category" => "Sports Car",
                "attributes" => [
                    "Engine" => "5.0L V8",
                    "Transmission" => "6-speed manual",
                    "Horsepower" => "450 HP",
                    "Seating Capacity" => "4",
                    "Special Features" => "Track-ready suspension, Brembo brakes"
                ]
            ],
            [
                "name" => "Tesla Model S",
                "description" => "The Tesla Model S is an electric luxury sedan with cutting-edge technology and impressive range.",
                "price" => 80000,
                "image" => "model_s.jpg",
                "category" => "Electric",
                "attributes" => [
                    "Battery Range" => "370 miles",
                    "Acceleration" => "0-60 mph in 3.1 seconds",
                    "Charging Time" => "Supercharger: 15 minutes for 180 miles",
                    "Seating Capacity" => "5",
                    "Autopilot Features" => "Full Self-Driving Capability"
                ]
            ],
            [
                "name" => "BMW X5",
                "description" => "The BMW X5 is a luxury SUV with a spacious interior and advanced technology features.",
                "price" => 60000,
                "image" => "x5.jpg",
                "category" => "SUV",
                "attributes" => [
                    "Engine" => "3.0L 6-cylinder",
                    "Transmission" => "8-speed automatic",
                    "Cargo Capacity" => "33.9 cubic feet (rear seats up)",
                    "Seating Capacity" => "5",
                    "Technology Features" => "iDrive infotainment system, Apple CarPlay"
                ]
            ],
        ];

        // loop and create product
        foreach ($carProducts as $product) {
            \App\Models\Product::create($product);
        }
    }
}

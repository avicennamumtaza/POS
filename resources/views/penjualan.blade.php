<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sales Report</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #dbeef8;
            color: #333;
        }
        h1 {
            color: #3498db;
            text-decoration: underline;
        }
        h2 {
            color: #3498db;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #086499;
            text-align: left;
            padding: 12px;
        }
        th {
            background-color: #bbdcf9;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center" style="margin-top: 10px"><b><u>Sales Report</u></b></h1>

    <br>
    <table>
        <tr>
            <th>Category</th>
            <th>Product Name</th>
            <th>Quantity Sold</th>
            <th>Price per Unit (IDR)</th>
            <th>Total Sales (IDR)</th>
        </tr>

        <!-- Baby Products -->
        <tr>
            <td rowspan="5">Baby Products</td>
            <td>Chocolate Bars</td>
            <td>60</td>
            <td>20.000</td>
            <td>1.200.000</td>
        </tr>
        <tr>
            <td>Baby Blankets</td>
            <td>90</td>
            <td>5.000</td>
            <td>450.000</td>
        </tr>
        <tr>
            <td>Baby Shoes</td>
            <td>75</td>
            <td>15.000</td>
            <td>1.125.000</td>
        </tr>
        <tr>
            <td>Baby Formula</td>
            <td>40</td>
            <td>30.000</td>
            <td>1.200.000</td>
        </tr>
        <tr>
            <td>Baby Stroller</td>
            <td>25</td>
            <td>120.000</td>
            <td>3.000.000</td>
        </tr>

        <!-- Beauty Health -->
        <tr>
            <td rowspan="5">Beauty Health</td>
            <td>Perfume</td>
            <td>70</td>
            <td>250.000</td>
            <td>17.500.000</td>
        </tr>
        <tr>
            <td>Conditioner</td>
            <td>90</td>
            <td>140.000</td>
            <td>12.600.000</td>
        </tr>
        <tr>
            <td>Body Lotion</td>
            <td>60</td>
            <td>90.000</td>
            <td>5.400.000</td>
        </tr>
        <tr>
            <td>Lip Gloss</td>
            <td>40</td>
            <td>180.000</td>
            <td>7.200.000</td>
        </tr>
        <tr>
            <td>Eye Masks</td>
            <td>50</td>
            <td>60.000</td>
            <td>3.000.000</td>
        </tr>

        <!-- Home Care -->
        <tr>
            <td rowspan="5">Home Care</td>
            <td>Special Shampoo 1000ml</td>
            <td>120</td>
            <td>100.000</td>
            <td>12.000.000</td>
        </tr>
        <tr>
            <td>Red Velvet Liquid Soap 500gr</td>
            <td>80</td>
            <td>50.000</td>
            <td>4.000.000</td>
        </tr>
        <tr>
            <td>Wood Style Wall 1x1 Sticker</td>
            <td>100</td>
            <td>80.000</td>
            <td>8.000.000</td>
        </tr>
        <tr>
            <td>Complete Cooking Set</td>
            <td>60</td>
            <td>190.000</td>
            <td>11.400.000</td>
        </tr>
        <tr>
            <td>Dinner Table</td>
            <td>40</td>
            <td>600.000</td>
            <td>24.000.000</td>
        </tr>

        <!-- Food Beverages -->
        <tr>
            <td rowspan="5">Food Beverages</td>
            <td>Mie Instan</td>
            <td>150</td>
            <td>5.000</td>
            <td>750.000</td>
        </tr>
        <tr>
            <td>Galoon</td>
            <td>80</td>
            <td>50.000</td>
            <td>4.000.000</td>
        </tr>
        <tr>
            <td>Fried Rice</td>
            <td>100</td>
            <td>10.000</td>
            <td>1.000.000</td>
        </tr>
        <tr>
            <td>A Cup of Tea</td>
            <td>60</td>
            <td>4.000</td>
            <td>240.000</td>
        </tr>
        <tr>
            <td>A Cup of Coffee</td>
            <td>70</td>
            <td>5.000</td>
            <td>350.000</td>
        </tr>
    </table>
</body>
</html>
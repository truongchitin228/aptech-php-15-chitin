<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
    <th>#</th>
      <th scope="col">Type</th>
      <th>Price</th>
      <th>made In</th>
    </tr>
  </thead>
  <tbody>
     
 <?php
//  $arr = [
//     'iphone' => ['price' => 100, 'serial' => 'X222A'],
//     'ipad' => ['price' => 150, 'serial' => 'K555B'],
// ];
// echo $arr['iphone'];
$tuoi ="19";
$ten ="Tin";
echo"<h1>truong chi $ten</h1>" ;
echo"<h1>tuoi : $tuoi</h1>" ;
$data = [
    [
        'type' => 'iphone',
        'property' => [
            'price' => 100,
            'size' => 6.5,
            'ram' => '2 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
    [
        'type' => 'ipad',
        'property' => [
            'price' => 190,
            'size' => 7.9,
            'ram' => '4 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
];
foreach ($data as $x => $x_value) {
    echo '<tr>
    <th>' . $x_value['$i + 1 '] . '</th>
    <td>' . $x_value['type'] . '</td>
    <td>' . $x_value['property']['price'] . '</td>
    <td>' . $x_value['property']['made']['in'] . '</td>
    </tr>';
  }
?>
  </tbody>
</table>
</body>
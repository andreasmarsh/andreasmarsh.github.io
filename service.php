{\rtf1\ansi\ansicpg1252\cocoartf2580
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\froman\fcharset0 Times-Roman;}
{\colortbl;\red255\green255\blue255;\red67\green67\blue67;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c33333\c33333\c33333;\cssrgb\c0\c0\c0\c5098;}
\margl1440\margr1440\vieww28600\viewh18000\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs34 \cf2 \cb3 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 <?php\
 \
// Create connection\
$con=mysqli_connect("localhost\'94,\'94root\'94,\'94root\'94,\'94find_my_fish\'94);\
 \
// Check connection\
if (mysqli_connect_errno())\
\{\
  echo "Failed to connect to MySQL: " . mysqli_connect_error();\
\}\
 \
// This SQL statement selects ALL from the table \'91gen\'92us_species\
$sql = "SELECT * FROM ge\'94nus_species;\
 \
// Check if there are results\
if ($result = mysqli_query($con, $sql))\
\{\
	// If so, then create a results array and a temporary one\
	// to hold the data\
	$resultArray = array();\
	$tempArray = array();\
 \
	// Loop through each row in the result set\
	while($row = $result->fetch_object())\
	\{\
		// Add each row into our results array\
		$tempArray = $row;\
	    array_push($resultArray, $tempArray);\
	\}\
 \
	// Finally, encode the array to JSON and output the results\
	echo json_encode($resultArray);\
\}\
 \
// Close connections\
mysqli_close($con);\
?>\
}
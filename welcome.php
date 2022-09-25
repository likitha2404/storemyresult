<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>storemyresults..</title>
</head>


<body style="background-color:#1b1b32;
color:white;
h1 { align: center; }
background-image: images.jpg;"

<?php 

echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";
echo "<h1>Please enter ur credentials..." . $_SESSION['username'] . "</h1>";
echo "<h1>Name:" . $_SESSION['username'] . "</h1>";
?><br>

<div CLASS="id="formdesign>
    <input type="text" name="filter" value id="filter" placeholder="Search details" autocomplete="off">
    <table cellspacing="0" cellpadding="2" id="resultTable"><br>
        <a rel="facebox" href="add.php" id="add">ADD DETAILS</a>
</div>


   
<form><BR><BR>
<fieldset>
USN<BR>
<input type="text" name="filter" value id="filter" placeholder="ENTER USN" autocomplete="off"><BR><BR>

SEM<BR>
<a rel="facebox" href="sem.php" id="add">SELECT SEM</a>
<br><br>
SUBCODE/SUBNAME/MARKS   <BR>    
<input type="text" name="filter" value id="filter" placeholder="ENTER CODE" autocomplete="off"><input type="text" name="filter" value id="filter" placeholder="ENTER NAME" autocomplete="off">
<input type="text" name="filter" value id="filter" placeholder="ENTER MARKS" autocomplete="off"><BR><BR>

<input type="text" name="filter" value id="filter" placeholder="ENTER CODE" autocomplete="off"><input type="text" name="filter" value id="filter" placeholder="ENTER NAME" autocomplete="off">
<input type="text" name="filter" value id="filter" placeholder="ENTER MARKS" autocomplete="off"><BR><BR>

<input type="text" name="filter" value id="filter" placeholder="ENTER CODE" autocomplete="off"><input type="text" name="filter" value id="filter" placeholder="ENTER NAME" autocomplete="off">
<input type="text" name="filter" value id="filter" placeholder="ENTER MARKS" autocomplete="off"><BR><BR>

<input type="text" name="filter" value id="filter" placeholder="ENTER CODE" autocomplete="off"><input type="text" name="filter" value id="filter" placeholder="ENTER NAME" autocomplete="off">
<input type="text" name="filter" value id="filter" placeholder="ENTER MARKS" autocomplete="off"><BR><BR>

<input type="text" name="filter" value id="filter" placeholder="ENTER CODE" autocomplete="off"><input type="text" name="filter" value id="filter" placeholder="ENTER NAME" autocomplete="off">
<input type="text" name="filter" value id="filter" placeholder="ENTER MARKS" autocomplete="off"><BR><BR>

<input type="text" name="filter" value id="filter" placeholder="ENTER CODE" autocomplete="off"><input type="text" name="filter" value id="filter" placeholder="ENTER NAME" autocomplete="off">
<input type="text" name="filter" value id="filter" placeholder="ENTER MARKS" autocomplete="off"><BR><BR>

<input type="text" name="filter" value id="filter" placeholder="ENTER CODE" autocomplete="off"><input type="text" name="filter" value id="filter" placeholder="ENTER NAME" autocomplete="off">
<input type="text" name="filter" value id="filter" placeholder="ENTER MARKS" autocomplete="off"><BR><BR>

<input type="text" name="filter" value id="filter" placeholder="ENTER CODE" autocomplete="off"><input type="text" name="filter" value id="filter" placeholder="ENTER NAME" autocomplete="off">
<input type="text" name="filter" value id="filter" placeholder="ENTER MARKS" autocomplete="off"><BR><BR>
<input type="submit" name="submit">
<input type="RESET" NAME="reset">
<BR><br>

    <a href="logout.php">Logout</a>
</body>
</html>
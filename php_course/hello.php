<?php
$firstname = "Yorlys";
echo "Hello World! " . $firstname . "<br />" . "Hello 2";

define('STATUS_PAID', 'paid');

echo '<p>'.  STATUS_PAID . '</p>';

//phpinfo();

echo $_SERVER['HTTP_USER_AGENT'];

if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
    echo 'You are using Firefox.';
}

if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
?>
<h3>str_contains() returned true</h3>
<p>You are using Firefox</p>
<?php
} else {
?>
<h3>str_contains() returned false</h3>
<p>You are not using Firefox</p>
<?php
}
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
    echo 'You are using Internet Explorer.<br />';
}
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
     echo 'You are using Edge.<br />';
 }
?>

<?php echo "Some text <br />"; ?>
No newline
<?= "But newline now <br />" ?>

<?php
    echo 'This is a test <br />'; // This is a one-line c++ style comment
    /* This is a multi line comment
       yet another line of comment */
    echo 'This is yet another test < br/>';
    echo 'One Final Test < br/>'; # This is a one-line shell-style comment
?>


<?php
session_start();
$year        = $_SESSION['year'];
$month       = $_SESSION['month'];
$day         = $_SESSION['day'];
$hour        = $_SESSION['hour'];
$minute      = $_SESSION['minute'];
$second      = $_SESSION['second'];

$X      = $_SESSION['X'];
$Y      = $_SESSION['Y'];
$Z      = $_SESSION['Z'];

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	$action = $_POST['action'];
	echo $action;
	if($action == "time")
	{
		$year   = $_POST['year'];
		$month  = $_POST['month'];
		$day    = $_POST['day'];
		$hour   = $_POST['hour'];
		$minute = $_POST['minute'];
		$second = $_POST['second'];
	}
	if($action == "space")
	{
		$X   = $_POST['X'];
		$Y   = $_POST['Y'];
		$Z   = $_POST['Z'];
	}
}

$_SESSION['year']   = $year ;
$_SESSION['month']  = $month;
$_SESSION['day']    = $day;
$_SESSION['hour']   = $hour;
$_SESSION['minute'] = $minute;
$_SESSION['second'] = $second;

$_SESSION['X'] = $X;
$_SESSION['Y'] = $Y;
$_SESSION['Z'] = $Z;
//$current = getCurrentSpaceTime_position();
?>

<!DOCTYPE html>
<html>
<body>
<h2>Go Time</h2>
    <form method = "post" action="#">
        <input name="action" type = "hidden" value="time" />
        <label> Year </label>
        <input name="year" type ="text" size=5 autofocus value= <?php echo("$year"); ?> /> 

        <label> Month </label>
        <input name="month" type = "text" size=5/ value= <?php echo("$month"); ?> />
 
        <label> Day </label>
        <input name="day" type = "text" size=5 value= <?php echo("$day"); ?> />
 
        <label> Hour </label>
        <input name="hour" type = "txt" size=5 value= <?php echo("$hour"); ?> />

        <label> Minute </label>
        <input name="minute" type = "text" size=5 value= <?php echo("$minute"); ?> />

        <label> Second </label>
        <input name="second" type = "text" size=5 value= <?php echo("$second"); ?> />
      <br/><br/>
      <input type = "submit"  value="Go"/>
      <input type = "reset" value="Reset"/>
    </form>

<h2>Go Space</h2>
    <form method = "post" action="#">
        <input name="action" type = "hidden" value="space"/>
        <label> X </label>
        <input name="X" type ="text" size=5 autofocus value= <?php echo("$X"); ?> /> 

        <label> Y </label>
        <input name="Y" type = "text" size=5/ value= <?php echo("$Y"); ?> />
 
        <label> Z </label>
        <input name="Z" type = "text" size=5 value= <?php echo("$Z"); ?> />
 
      <br/><br/>
      <input type = "submit"  value="Go"/>
      <input type = "reset" value="Reset"/>
    </form>

</body>
</html>



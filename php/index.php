<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hello World!</title>
    </head>
    <body>
		<p>Hello World!</p>
        <p>Welcome to the future site of Nuts 'n Bolts!</p>
		<form action="includes/data_input.inc.php" method="POST">
        <!--  button - Log Timer -->
    	<timer>
    	    <input id="logtime_button" name = "logtime_button" type="button" value="Log Timer" onclick="setLogTime()" />
    	    <input type="text" id="logtime" name="logtime" value="" />
    	</timer>
    </form>
    <script>
        function setLogTime(){
            document.getElementById('logtime').value = new Date().toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit', second:'2-digit'});
        }
    </script>
    </body>
</html>
<? 
} 
?>

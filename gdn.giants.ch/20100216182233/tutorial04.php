<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GDN - Tutorials</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="title" content="Tutorials"/>
	<meta name="description" content="Tutorial 4 – Timers"/>
    <link rel="stylesheet" type="text/css" href="./style.css" media="screen, tv, projection, print" title="Default" />
  </head>
  <body>
    <!-- ##### Header ##### -->

    <div id="header">
      <div class="superHeader">
        <span>&nbsp;</span>
      </div>

      <div class="midHeader">
        <h1 class="headerTitle" lang="la">GDN</h1>
        <div class="headerSubTitle" title="'GIANTS Developer Network'">
          { GIANTS Developer Network }
        </div>


        <br class="doNotDisplay doNotPrint" />

		<form action="search.php" method="get">
        <div class="headerLinks">
        	<span><input style="border:1px solid #999999; color: #666666; width:148px; font-size: 8pt;" type="text" name="search" title="Text input: query" size="24" /></span>
			<span><input style="border:1px solid #FFFFFF; background: rgb(61,92,122); color: #FFFFFF; font-size: 9pt; font-weight:bold;" type="submit" value="Search" /></span>
        </div>
        </form>
      </div>

	  <div class="subHeader">

		<div class="subHeader-left">
			&nbsp;&nbsp;
			<a href="index.php" title="GDN - Home">Home</a> |
            <a href="license.php" title="GDN - Store">Store</a> |			
			<a href="documentation.php" title="GDN - Documentation">Documentation</a> |
			<a href="forum.php" title="GDN - Tutorials">Forum</a> |
			<a href="downloads.php" title="GDN - Downloads">Downloads</a>
        </div>

		<div class="subHeader-right">
					</div>
	  </div>

	</div>

    <!-- ##### Main Copy ##### -->

    <div id="main-copy">
      <div class="rowOfBoxes">
        <div class="twoThirds noBorderOnLeft">


<a name="tutorial04"><h1 style="page-break-before: always;">Tutorial 4 - Timers</h1></a>
<br>
<b>Sample name:</b> SampleTimer<br>
<b>Script source code file:</b> <i>sample/timer/main.lua</i><br>
<br>
<b>The goal of this tutorial is to show you</b><br>
<ul>
    <li>how to create and use timers</li>
</ul>

<b>New functions in this tutorial</b><br>
<br>
<i>addTimer()</i><br />
<i>setTimerTime()</i><br />
<i>removeTimer()</i><br />
<br>
Run the sample SampleTimer.exe. Only three lines of text are rendered. The 
first shows you a random timer interval, the second is a string that says 
that you can remove the timer with the space key and finally, there is a 
line showing a flashing text :"Timer called".<br />
<br />
Before we start looking at the code we should get a rough idea about what a 
timer is, and what functionalities it has.<br />
<br />
A timer is a simple object that has a certain set time and the name of the 
callback function. As soon as the timer is activated, the defined time is 
counted down to zero.  When this happens, the timer calls the callback 
function. This behavior can be used in various situations, for instance if 
a trigger shouldn’t react immediately but only after a certain delay.<br />
<br />
Open the the main.lua which is located in the directory /sample/timer.<br />
<br />
At first, four variables are defined:<br />
<br />
<table><tbody><tr><td>
<div id="code">
timerId = 0;<br />
timerInterval = 0;<br />
renderCount = 0;<br />
timerRemoved = false;<br />
</div>
</td></tr></tbody></table>
<br />
<h2>init()</h2>
<br />
In the init function the first line calls the function setRandomTimerInterval. 
This function simply generates a random value between 1000 and 5000 for the 
variable timerInterval.<br />
<br>
<table><tbody><tr><td>
<div id="code">
function setRandomTimerInterval()<br />
&nbsp;&nbsp;timerInterval = math.random(1000, 5000);<br />
end;<br />
</div>
</td></tr></tbody></table>
<br />
The variable timerInterval is used immediately because a new timer is created 
with the line:<br />
<br />
<i>&nbsp;timerId = addTimer(timerInterval, "onTimer");</i><br />
<br />
The variable timerId stores the Id of the new timer which is returned by the 
function addTimer. Here is how this function is described in the 
documentation:<br />
<br />
<span style="color:blue;">
<h3>addTimer</h3>
<b>Description</b><br />
<blockquote>Adds timer callback function</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function addTimer(float time, string timerFunctionCallback, object instance)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>time</i></td><td>time in milliseconds</td></tr>
<tr><td><i>string</i></td><td><i>triggerFunctionCallback</i></td><td>trigger function callback</td></tr>
<tr><td><i>object</i></td><td><i>instance</i></td><td>instance object (optional)</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>timerId</i></td><td>timer id</td></tr>
</table></blockquote>
<br />
</span>
The first argument is the time in milliseconds and the second argument is the 
function that is called when the time reaches zero. In this case, the variable 
timerInterval defines how long the timer will wait, until it calls its callback 
function. After this time, the function onTimer is called.<br />
<br />
<h2>keyEvent()</h2>
<br />
If you hit the space key the timer is removed and the boolean timerRemoved is 
switched to true.<br />
<br />
<table><tbody><tr><td>
<div id="code">
if sym == Input.KEY_space then<br />
&nbsp;&nbsp;-- Remove timer<br />
&nbsp;&nbsp;removeTimer(timerId);<br />
&nbsp;&nbsp;timerRemoved = true;<br />
end;<br />
</div>
</td></tr></tbody></table>
<br />
<h2>onTimer()</h2>
<br />
This function is called as soon as the timer reaches zero.<br />
<br />
The first line defines the variable renderCount to be 100. This defines the 
number of frames the line "timer called" is rendered in the draw function 
later on.<br />
<br />
The second line defines a new timerInterval by calling the 
setRandomTimerInterval function again.<br />
<br />
The third line sets a new timer time with the new timerInterval time. The 
setTimerTime function needs the id of the timer (timerId) and the new time 
(timerInterval). After the timer reaches zero again, the onTimer function is 
called again. You can remove a timer within the callback function by returning 
false.<br />
<br />
<table><tbody><tr><td>
<div id="code">
-- Timer callback<br />
function onTimer()<br />
&nbsp;&nbsp;renderCount = 100;<br />
&nbsp;&nbsp;setRandomTimerInterval();<br />
&nbsp;&nbsp;setTimerTime(timerId, timerInterval);<br />
&nbsp;&nbsp;return true;<br />
end;<br />
</div>
</td></tr></tbody></table>
<br />
<h2>draw()</h2>
<br />
First we have an if-else construct that handles the two states, i.e. whether 
the timer is removed or not. Depending on the state of the boolean 
timerRemoved, the different renderText functions are executed.<br />
<br />
The string "timer called" is only called if the variable renderCount is not 
zero. Remember that we set the renderCount to 100 in the onTimer function 
which is the trigger callback of the timer. With each frame the renderCount 
is decreased by 1. <br />
<br />





</div>
<div class="oneThird">
	
    <span class="newsHeading">Latest Versions</span>
	<p class="newsDate">18 June 2009</p>
	<p class="newsSummary">
	GIANTS SDK v4.1.3<br />
	GIANTS Editor v4.1.4<br />
	GIANTS Script Debugger v4.1.3<br />
	</p>

    <span class="newsHeading">Latest Public Versions</span>
	<p class="newsDate">30 December 2009</p>
	<p class="newsSummary">
	GIANTS Editor v4.1.2<br />
	Maya Exporter Plugins v4.1.5<br />
	3Ds MAX Exporter Plugins v4.1.5<br />
	Blender Exporter Plugins v4.1.5
	</p>
	
    <p class="more"><a href="downloads.php">» More</a></p>
   


	<form method="post" action="?r=450810853">
	<input type="hidden" name="greenstoneX" value="1" />

	<span class="newsHeading">Login <img border="0" src="images/misc/login.png" alt="Login" /></span>
    <div class="newsSummary">
                <div style="font-size: 9pt; padding-bottom:5px;">User name</div>
        <input style="border:1px solid #999999; color: #666666; width:256px; font-size: 9pt;" type="text" size="35" name="redstoneX" /><br />
        <br />
        <div style="font-size: 9pt; padding-bottom:5px;">Password</div>
        <input style="border:1px solid #999999; color: #666666; width:256px; font-size: 9pt;" type="password" size="35" name="bluestoneX" /><br />
        <br />
        <input style="border:1px solid black; background: silver; color: black; font-size: 9pt; font-weight:bold;" type="submit" name="foobarX" value="&nbsp;Login&nbsp;" />
        &nbsp;<small><a href="register.php">Register Now</a></small>
    </div>

	</form>

	<p class="filler"></p>
	
	<span class="newsHeading">Contact</span>
	<img border="0" src="images/misc/contact.gif" alt="contact" />
	<span class="newsHeading">Newsletter</span>	
	<p class="newsSummary">
		Subscribe to our newsletter and keep yourself informed about updates and new releases of the GIANTS engine. Register <a href="register.php">here</a>.
	</p>
	
	
	<p class="filler"></p>
    <p><img src="images/giantsLogo01.png" alt="GIANTS Logo" /></p>
</div>
</div>



    </div>
    <!-- ##### Footer ##### -->
    <div id="footer">
      &copy; 2010 <a target="_NEW" href="http://www.giants-software.com" title="GIANTS Software GmbH">GIANTS Software GmbH</a>, All Rights Reserved.
    </div>
  </body>
</html>

	
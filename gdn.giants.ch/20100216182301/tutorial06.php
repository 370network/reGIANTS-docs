<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GDN - Tutorials</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="title" content="Tutorials"/>
	<meta name="description" content="Tutorial 6 – Overlays"/>
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


<a name="tutorial06"><h1 style="page-break-before: always;">Tutorial 6 - Overlays</h1></a>
<br>
<b>Sample name:</b> SampleOverlay<br>
<b>Script source code file:</b> <i>sample/overlay/main.lua</i><br>
<br>
<b>The goal of this tutorial is to show you</b><br>
<ul>
    <li>how overlays work</li>
    <li>how to create overlays</li>
</ul>

<b>New functions in this tutorial:</b><br />
<br />
<i>createOverlay()</i><br />
<i>setOverlayColor()</i><br />
<i>renderOverlay()</i><br />
<br />
When you run sampleOverlay.exe you see an overlay displayed on the screen. If 
you click on it, its position changes randomly.<br />
<br />
Open main.lua which is in /sample/overlay to take a look at the code.<br />
<br />
First there are three variables: overlayId holds the id of the overlay, 
overlayX and overlayY are used to define the position of the overlay.<br />
<br />
<h2>init()</h2>
<br />
In the first line, the variable overlayId is filled with the result of the 
function createOverlay which returns the id of the newly created overlay. The 
documentation describes the createOverlay functions as follows:<br />
<br />
<span style="color:blue;">
<h3>createOverlay</h3>
<b>Description</b><br />
<blockquote>Create overlay object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createOverlay(string overlayName, string textureFilename)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>overlayName</i></td><td>overlay name</td></tr>
<tr><td><i>string</i></td><td><i>textureFilename</i></td><td>texture file name</td></tr>
</table></blockquote>
</span>
<br />
Take note that you have to use the relative path to your file.<br /> 
<br />
&nbsp;<i>overlayId = createOverlay("overlay", "sample/overlay/overlay.png");</i><br /> 
<br />
The second line consists of the setOverlayColor function.<br />
Try to comment it out by adding -- in front of the line. Save the script and 
run the program. You see that this sample also works without the 
setOverlayColor function. It isn’t needed to display an overlay, but it gives 
you the possibility to change its appearance. Here is how it is described in 
the documentation:<br />
<br />
<span style="color:blue;">
<h3>setOverlayColor</h3>
<b>Description</b><br />
<blockquote>Set overlay color</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setOverlayColor(integer overlayId, float red, float green, float blue, float alpha)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>overlayId</i></td><td>overlay id</td></tr>
<tr><td><i>float</i></td><td><i>red</i></td><td>red value</td></tr>
<tr><td><i>float</i></td><td><i>green</i></td><td>green value</td></tr>
<tr><td><i>float</i></td><td><i>blue</i></td><td>blue value</td></tr>
<tr><td><i>float</i></td><td><i>alpha</i></td><td>alpha value</td></tr>
</table></blockquote>
</span>
<br />
The used arguments in the example result in white with an opacity of 0.75.<br /> 
<br />
&nbsp;<i>setOverlayColor(overlayId, 1, 1, 1, 0.75);</i><br />
<br />
Try the arguments 1, 0, 0, 0.75, to see the difference.<br />
<br />
<h2>mouseEvent()</h2>
<br />
This function runs every time you move the mouse or click on it. If the mouse 
is inactive this function isn’t executed. It provides the position of the 
cursor, and the state of the buttons which can be used within the function.<br />
We first check, if the state of a mouse button is down, which is done by the 
isDown part of the if-construct. The rest of the if-construct is a simple hit 
test, it checks whether the cursor is within the overlay or not. If the 
if-construct returns true, you have clicked on the button. Then the overlayX 
and overlayY values are overwritten with a random number between 0.05 and 
0.8.<br />
<br />
<table><tbody><tr><td>
<div id="code">
function mouseEvent(posX, posY, isDown, isUp, button)<br />
&nbsp;&nbsp;-- Check if overlay has been clicked<br />
&nbsp;&nbsp;if isDown and posX > overlayX and posX < overlayX+0.16 and <br />
&nbsp;&nbsp;&nbsp;&nbsp;posY > overlayY and posY < overlayY+0.04 then<br />
&nbsp;&nbsp;&nbsp;&nbsp;overlayX = math.random(50, 800)/1000;<br />
&nbsp;&nbsp;&nbsp;&nbsp;overlayY = math.random(50, 900)/1000;<br />
&nbsp;&nbsp;end;
end;
</div>
</td></tr></tbody></table>
<br />
<h2>draw()</h2>
<br />
What happens here is essential : try commenting out the renderOverlay function 
once. If you run the sample now, nothing will be rendered at all. This function 
is needed to render an overlay. This allows you to display or hide components 
(e.g. menu options) depending on the state of your program.<br />
<br />
Here is how the function is described in the documentation:<br />
<br />
<span style="color:blue;">
<h3>renderOverlay</h3>
<b>Description</b><br />
<blockquote>Render overlay</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function renderOverlay(integer overlayId, float x1, float y1, float width, float height)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>overlayId</i></td><td>overlay id</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>x position [0,1]</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y position [0,1]</td></tr>
<tr><td><i>float</i></td><td><i>width</i></td><td>width [0,1]</td></tr>
<tr><td><i>float</i></td><td><i>height</i></td><td>height [0,1]</td></tr>
</table></blockquote>
</span>
<br />
A width and height of 1 means that the overlay has exactly the size of the screen.<br />
<br />
Since overlayX and overlayY change when you click on the overlay, it is 
instantly rendered in the new position.<br />
<br />
<table><tbody><tr><td>
<div id="code">
function draw()<br />
&nbsp;&nbsp;-- Render overlay<br />
&nbsp;&nbsp;renderOverlay(overlayId, overlayX, overlayY, 0.16, 0.04);<br />
end;<br />
</div>
</td></tr></tbody></table>
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
   


	<form method="post" action="?r=2025256197">
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

	
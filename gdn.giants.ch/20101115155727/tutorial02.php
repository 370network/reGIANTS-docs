<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GDN - Tutorials</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="title" content="Tutorials"/>
	<meta name="description" content="Tutorial 2 – Light functions, global time and rendering text"/>
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
			<a href="forum.php" title="GDN - Community">Community</a> <!--|
			<a href="downloads.php" title="GDN - Downloads">Downloads</a> -->
        </div>

		<div class="subHeader-right">
					</div>
	  </div>

	</div>

    <!-- ##### Main Copy ##### -->

    <div id="main-copy">
      <div class="rowOfBoxes">
        <div class="twoThirds noBorderOnLeft">


<a name="tutorial02"><h1 style="page-break-before:always">Tutorial 2 – Light functions, global time and rendering text</h1></a>
<br />
<b>Sample name:</b> SampleLighting<br />
<b>Script source code file:</b> <i>sample/lighting/main.lua</i><br />
<br />
<b>The goal of this tutorial is to show you</b><br />
<ul>
    <li>how to manipulate lights in your scene</li>
    <li>how to handle time</li>
    <li>how to print a text on the screen</li>
</ul>

<b>New functions in this tutorial</b><br />
<br />
<i>setLightDiffuseColor()</i><br />
<i>getLightDiffuseColor()</i><br />
<i>setLightRange()</i><br />
<i>getLightRange()</i><br />
<i>renderText()</i><br />
<br />
The first thing you might notice is that there are two new additional variables 
that we’re going to use:<br />
<i>&nbsp;local globalTime = 0;</i><br />
<i>&nbsp;local lightRadius = 7;</i><br />
<br />
In this, and also in further tutorials, we will just cover the new functions 
and variables. So, if there is anything you don’t understand, have a look at  
<a href="tutorial01.php">Tutorial 1</a>.<br />
<br />
<h2>init()</h2>
In the init() function we additionally store the id of the point light in the 
variable pointLightId.<br />
<br />
<i>&nbsp;pointLightId = getChildAt(id, 2);</i><br />
<br />
When you open the i3d file cubeWithPointLight.i3d, you can see that the light 
is in third position. Since the function getChildAt()starts counting from 0, 
the argument 2 points to the third child.<br />
<br />
Set the light radius to an initial value of 7.<br />
<br />
<i>&nbsp;setLightRange(pointLightId, lightRadius);</i><br />
<br />
<h2>keyEvent()</h2>
Here are two more keys: Key 1 and Key 2. When they are pressed, the functions 
decreaseLightRadius and increaseLightRadius are called.<br />
<br />

<table><tr><td>
<div id="code">
if sym == Input.KEY_1 and isDown == true then<br />
&nbsp;decreaseLightRadius();<br />
end;<br />
<br />
if sym == Input.KEY_2 and isDown == true then<br />
&nbsp;increaseLightRadius();<br />
end;<br />
</div>
</td></tr></table>
<br />
increase- decreaseLightRadius()<br />
These two functions change the variable lightRadius by 0.5 and then call the 
lightRadius function with the new value.<br />
<br />
<table><tr><td>
<div id="code">
function increaseLightRadius()<br />
&nbsp;lightRadius = lightRadius + 0.5<br />
&nbsp;setLightRange(pointLightId,lightRadius);<br />
end;<br />
</div>
</td></tr></table>

<h2>update(dt)</h2>
Two variables are new here:<br />
<br />
Why do we need a globalTime here? Well, we want the light to rotate around the 
cube. Therefore, we need a value that constantly changes in corrrespondence 
with time. Of course you could also increase a number every frame, but since 
the framerate isn’t constant we also use the time which has passed since the 
last frame and thus get an exact and constantly growing number that isn’t 
affected by the different framerates. Remember that dt is the time passed 
between the last and the actual frame in milliseconds. So, if dt is multiplied 
by 0.001 you get seconds. We also need a distance to the center which is 
stored in the variable radius.<br />
<br />
<i>&nbsp;globalTime = globalTime+dt*0.001;</i><br />
<i>&nbsp;local radius = 2;</i><br />
<br />
This function handles the translation of the pointLight using the globalTime 
and the radius 2.<br />
<br />
<i>&nbsp;setTranslation(pointLightId, math.sin(globalTime)*radius, 3, math.cos(globalTime)*radius);</i><br />
<br />
We also change the color of the diffuse color of the light. This is done with 
the setLightDiffuseColor() function. As arguments it uses the id, and then the 
three values for red, green and blue as floats between 0 and 1. As r we use 
the sinus of the globalTime.<br />
<br />
<i>&nbsp;setLightDiffuseColor(pointLightId, math.sin(globalTime), 0.4, 0.2);</i><br />
<br />
When you execute the program, you see that there is a white box where the point 
light is. This may seem a bit odd since you probably don’t want this cube to be 
visible at all. When you open the file cubeWithPointLight.i3d and click on the 
plus left of the light in the scene graph, you see that we have attached a 
little cube to the light. We have done this to to give you a better visual 
feedback on where the pointLight is. On top of that, it shows also another 
important thing: as a child it inherits the translations of the parent and 
thus also moves with it.<br />
<br />
<h2>draw()</h2>
Like the update function, the draw function is executed after every frame.<br />
<br />
First we store the rgb values of the pointLight using the getLightDiffuseColor() 
function. It returns three different values. So be careful, you need to 
separate the different variables by commas!<br />
<br />
<i>&nbsp;local r, g, b = getLightDiffuseColor(pointLightId);</i><br />
<br />
Then we use the function renderText() to render the result directly onto the screen.<br />
<br />
<span style="color:blue;">
<h3>renderText</h3>
<b>Description</b><br />
<blockquote>Render text to viewport</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function renderText(float x, float y, float size, string str)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x position [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y position [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>size</i></td><td>font size</td></tr>
<tr><td><i>string</i></td><td><i>str</i></td><td>string to print</td></tr>
</table></blockquote>
<br />
</span>

When using renderText you can also weld parts together with the .. operator to 
concatenate variables and strings like in the example.<br />
<br />
<i>&nbsp;renderText(0,0.95,0.05,"r value: " .. r);</i><br />
<i>&nbsp;renderText(0,0.90,0.05,"g value: " .. g);</i><br />
<i>&nbsp;renderText(0,0.85,0.05,"b value: " .. b);</i><br />
<br />
The next line stores the value of the getLightRange() function in the 
lightRadius variable<br />
<br />
<i>&nbsp;local lightRadius = getLightRange(pointLightId);</i><br />
<br />
and then the variable is rendered onto the screen:<br />
<br />
<i>&nbsp;renderText(0,0.75,0.05,"LightRadius: " .. lightRadius);</i><br />
<br />
With the last line we simply render the globalTime. Since it is a float we use 
math.floor to get an integer.<br />
<br />
<i>&nbsp;renderText(0,0.65,0.05,"seconds: " .. math.floor(globalTime));</i><br />



</div>
<div class="oneThird">
	
    <span class="newsHeading">Latest Versions</span>
	<p class="newsDate">18 October 2010</p>
	<p class="newsSummary">
	GIANTS SDK v4.1.3<br />
	GIANTS Script Debugger v4.1.5<br />
	GIANTS Editor v4.1.7<br />
	Maya Exporter Plugins v4.1.7<br />
	3Ds MAX Exporter Plugins v4.1.6b<br />
	Blender Exporter Plugins v4.1.5
	</p>
	
    <!--p class="more"><a href="downloads.php">» More</a></p-->


	<form method="post" action="?r=1028821670">
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

	

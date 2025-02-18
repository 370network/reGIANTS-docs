<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GDN - Tutorials</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="expires" content="0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta name="title" content="Tutorials"/>
	<meta name="description" content="Tutorial 1 – Load i3d files and basics"/>
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
			<a href="http://gdn.giants.ch/index.php" title="GDN - Home">Home</a> |
			<a href="http://gdn.giants.ch/documentation.php" title="GDN - Documentation">Documentation</a> |
			<a href="http://gdn.giants.ch/tutorials.php" title="GDN - Tutorials">Tutorials</a> |
			<a href="http://gdn.giants.ch/downloads.php" title="GDN - Downloads">Downloads</a> |
			<a href="http://gdn.giants.ch/newsletter.php" title="GDN - Newsletter">Newsletter</a>
        </div>

		<div class="subHeader-right">
					</div>
	  </div>

	</div>

    <!-- ##### Main Copy ##### -->

    <div id="main-copy">
      <div class="rowOfBoxes">
        <div class="twoThirds noBorderOnLeft">


<h1 style="page-break-before:always">Tutorial 1 – Load i3d files and basics</h1>
<br />
The goal of this tutorial is to teach you the very basics of the GIANTS engine. 
You simply load an i3d with a cube in it and then rotate the cube by using 
LUA script.<br />
<br />
<b>Sample name:</b> SampleI3DLoading<br />
<b>Script source code file:</b> <i>sample/i3dLoading/main.lua</i><br />
<br />
<b>The goal of this tutorial is to show you</b><br />
<ul>
    <li>how the engine uses ids</li>
    <li>how to load i3d files</li>
    <li>how to access objects within a loaded i3d</li>
    <li>what the base callback functions of the engine are</li>
    <li>how to access keyboard commands</li>
</ul>

<b>New functions in this tutorial</b><br />
<br />
<i>init()</i><br />
<i>keyEvent()</i><br />
<i>update()</i><br />
<i>rotate()</i><br />
<i>getRootNode()</i><br />
<i>loadI3DFile()</i><br />
<i>link()</i><br />
<i>getChildAt()</i><br />
<i>print()</i><br />
<i>requestExit()</i><br />
<br />
The most important script file is your main.lua. It is a lua file that is 
loaded and executed when your exe file is started.<br />
<br />
The first thing you need to know is how the engine exactly knows where your 
main.lua is. Well there has to be an xml file in the same folder as your exe 
with exactly the same name as your exe. In this case it is named 
SampleI3DLoading.xml. Open it with a text editor.<br />
<br />
<table><tr><td>
<div id="code">
&lt;?xml version="1.0" encoding="iso-8859-1" standalone="no" ?&gt;<br />
&lt;startup&gt;<br />
&nbsp;&lt;cmdline&gt;game.exe -script sample/i3dLoading/main.lua&lt;/cmdline&gt;<br />
&lt;/startup&gt;<br />
</div>
</td></tr></table>
<br />
In the third line you see where your main.lua is located. If you want to move 
your main.lua, you have to change the path in this xml as well.<br />
<br />
So, let's have a look at this main.lua, open it with any text editor. There 
are 5 essential functions: init(), mouseEvent(), keyEvent(), update() and 
draw(). Let's look at these functions in detail:<br />
<br />
<h2>init()</h2>
<br />
init() is executed once when you start your exe. Let’s go through the function 
line by line:<br />
<br />
<i>&nbsp;local worldRootNode = getRootNode();</i><br />
<br />
The variable worldRootNode is defined and assigned with the result of a 
function called getRootNode();<br />
<br />
If you meet a new function and you don’t exactly know what it does, simply look  
<a href="documentation.php">here</a> and search for the function. Then you get 
detailed information about the function. In the tutorials those function 
descriptions are always blue.<br />
Here is what you find if you search for the getRootNode function:<br />
<br />

<span style="color:blue;">
<h3>getRootNode</h3>
<b>Description</b><br />
<blockquote>Get scenegraph root node</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getRootNode()</i></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>rootNodeId</i></td><td>id of the root node</td></tr>
</table></blockquote>
<br />
</span>
The descriptions of the functions are quite self-explanatory and can be really 
helpful.<br />
<br />
It's important to see that the GIANTS engine works with ids also called handles.
This function returns the id from the root node of your root scene graph.<br />
<br />
Your entire world is attached to this root node. Each object you want to see 
later on must be a child of this root node.<br />
<br />
Now we need to load the i3d that contains the cube we want to rotate later on.<br /> 
<br />
<i>&nbsp;local sceneToLoad = loadI3DFile("sample/i3dLoading/cube.i3d");</i><br />
<br />
With this function, you load an i3d file, and its id (which is an integer) is 
returned. Now that we’ve got both things, the worldRootNode and the i3d we 
want to load, we have to link them together, which is the next line of code.<br />
<br />
<i>&nbsp;link(getRootNode(), sceneToLoad);</i><br />
<br />
Now we want the cube's id to rotate. Be aware that the i3d we've already loaded 
is the whole scene which contains not only the cube, but also a light and the 
camera. So now we need to know which id the cube has. Since the cube is a child 
of the i3d we can use the following function:<br />
<br />
<i>&nbsp;cubeId = getChildAt(sceneToLoad, 0);</i><br />
<br />
First you name the i3d that  you want the child from and then you say which 
child you want. 0 is the first child, 1 is the second. You need to know which 
child is your cube. Just open the cube .i3d with the Editor and you can see 
that the cube is the first position in your scenegraph (reading from top 
down)<br />
<br />
<image border="0" src="images/tutorial/tutorial01_scenegraph.png" alt="Scenegraph"/><br />
<br />
A very important thing you need in programming are prints. The function needed 
here is simply called print(). The thing you want to print are the parameters. 
Be careful with strings, they always need quotes. You can link strings and 
variables by using .. as shown in the example.<br />
<br />
<i>&nbsp;print("this is a print: cube id: " .. cubeId);</i><br />
<br />
You can see the printed text in the in game console. Just press tilde '~' to 
make the console visible.<br />
<br />
Now we have all the information we need, but one thing remains to be done. 
Since the camera is located right in the center (inside the cube actually) 
we won’t be able to see anything. So we grab the camera and move it a bit. 
With the getCamera() function we first get the id of the camera, because the 
setTranslation function needs to know which id has to be translated. The next 
parameters are the desired x, y, z values.<br />
<br />
<i>&nbsp;setTranslation(getCamera(), 5, 10.0, 10.0);</i><br />
<br />
Then we rotate the camera so that we can see our cube nicely. The function is 
similar to the setTranslation but you define the rotations around the three 
axes of course. You need a radian value, that’s why the functions math.rad() 
are used. They convert a degree value into a radian value.<br />
<br />
<i>setRotation(getCamera(), math.rad(-45), math.rad(20), 0);</i><br />
<br />
<h2>mouseEvent()</h2>
We don’t use this function right now, but of course you can access the mouse 
commands with it.<br />
<br />

<table><tr><td>
<div id="code">
function mouseEvent(posX, posY, isDown, isUp, button)<br />
end;<br />
</div>
</td></tr></table>

<br />
<h2>keyEvent()</h2>
This function is used to access any keyboard commands. In this case, we only 
want to know if the escape key is pressed. If this is the case, then the 
program closes with the command requestExit();<br />
<br />
<table><tr><td>
<div id="code">
function keyEvent(unicode, sym, modifier, isDown)<br />
&nbsp;-- Check for escape key<br />
&nbsp;if sym == Input.KEY_esc and isDown == true then<br />
&nbsp;&nbsp;-- Request quit<br />
&nbsp;&nbsp;requestExit();<br />
&nbsp;end;<br />
end;<br />
</div>
</td></tr></table>


<br />
<h2>update(dt)</h2>
The update function is a function that is called after every frame. The 
parameter dt is the time that has passed since the last update call in 
milliseconds.<br /> 
<br />
So, this is the place where we can finally make our cube rotate. For this we 
use the rotate(dt) function. It needs the id of the object that should rotate, 
in this case the cubeId, and also the rate of rotation on the x, y and z-axis. 
We just let it rotate on the x-axis with the value of 0.08 degree per 
millisecond.<br />
<br />

<table><tr><td>
<div id="code">
function update(dt)<br />
&nbsp;rotate(cubeId, math.rad(0.08)*dt, 0, 0);<br />
end;<br />
</div>
</td></tr></table>


<br />
<h2>draw()</h2>
The draw function is needed to draw something onto the screen. This will be 
discussed later on.<br />
<br />
<table><tr><td>
<div id="code">
function draw()<br />
end;<br />
</div>
</td></tr></table>


</div>
<div class="oneThird">
	
    <span class="newsHeading">Latest Versions</span>
	<p class="newsDate">17 November 2008</p>
	<p class="newsSummary">
	GIANTS SDK v4.1.1<br />
	GIANTS Editor v4.1.1<br />
	GIANTS Script Debugger v4.1.1<br />
	Maya Exporter Plugins v4.1.1<br />
	MAX Exporter Plugins v4.1.1<br />
	Blender Exporter Plugins v4.1.1<br />
	</p>

    <span class="newsHeading">Latest Public Versions</span>
	<p class="newsDate">18 July 2008</p>
	<p class="newsSummary">
	GIANTS SDK v4.0<br />
	GIANTS Editor v4.0<br />
	Maya Exporter Plugins v4.0
	</p>
	
    <p class="more"><a href="downloads.php">» More</a></p>
   


	<form method="POST" action="?r=54009772">
	<input type="hidden" name="greenstoneX" value="1" />

	<span class="newsHeading">Login <img border="0" src="images/misc/login.png" alt="Login" /></span>
	<p class="newsSummary">
	<table border="0"><tr><td>
				<div style="font-size: 9pt; padding-bottom:5px;">User name</div>
		<input style="border:1px solid #999999; color: #666666; width:256px; font-size: 9pt;" type="text" size="35" name="redstoneX" /><br />
		<br />
		<div style="font-size: 9pt; padding-bottom:5px;">Password</div>
		<input style="border:1px solid #999999; color: #666666; width:256px; font-size: 9pt;" type="password" size="35" name="bluestoneX" /><br />
		<br />
		<input style="border:1px solid black; background: silver; color: black; font-size: 9pt; font-weight:bold;" type="submit" name="foobarX" value="&nbsp;Login&nbsp;" />
	</td></tr></table>
	</p>

	</form>

	<p class="filler"></p>


   
	<!--p class="filler"></p-->

    <!--span class="newsHeading">Newsletter</span>
    <p class="more"><a href="newsletter.php">» More</a></p-->
	
	
	<span class="newsHeading">Contact</span>
	<img border="0" src="images/misc/contact.gif" alt="contact" />
	<!--ul>
		<li>Christian Ammann (giants-software.ch cammann)</li>
		<li>Stefan Geiger (giants-software.ch sgeiger)</li>
		<li>Thomas Brunner (giants-software.ch tbrunner)</li>
	</ul-->
	
	<p class="filler"></p>
    <p><img src="images/giantsLogo01.png" alt="GIANTS Logo" /></p></div>
</div>



    </div>
    <!-- ##### Footer ##### -->
    <div id="footer">
      &copy; 2009 <a target="_NEW" href="http://www.giants-software.com" title="GIANTS Software GmbH">GIANTS Software GmbH</a>, All Rights Reserved.
    </div>
  </body>
</html>

	

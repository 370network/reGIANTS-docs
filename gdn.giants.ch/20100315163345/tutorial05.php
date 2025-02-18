<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GDN - Tutorials</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="title" content="Tutorials"/>
	<meta name="description" content="Tutorial 5 � Physics"/>
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


<a name="tutorial05"><h1 style="page-break-before: always;">Tutorial 5 - Physics</h1></a>
<br />
<b>Sample name:</b> SamplePhysics<br />
<b>Script source code file:</b> <i>sample/physics/main.lua</i><br />
<br />
<b>The goal of this tutorial is to show you</b><br />
<ul>
    <li>the difference between rigid body and no rigid body</li>
    <li>the difference between static, kinematic and dynamic objects</li>
    <li>how to create objects with physical behavior</li>
</ul>
<br />
Basically, there are two different types of objects available. Objects with 
rigid body and objects without rigid body.<br />
<br />
<h2>No rigid body</h2>
<br />
Objects with no rigid body are only rendered. They can be moved freely and 
they don�t cause any collision, thus other objects can move through them. 
These objects only use a minimum of the engine's performance. If you export 
a new object from Maya without having changed the attributes, the rigid body 
is activated by default. You should turn it off in the editor, when you don�t 
need it.<br />
<br />
<h2>Rigid body</h2>
<br />
Objects with rigid body behave like real objects. If another object with rigid 
body tries to go trough it, there will be a collosion. Since the used up power 
of this behavior has to be calculated, it should only be used when necessary. 
There are three rigid body types:<br />
<br />
<h3>Static</h3>
These objects offer collision, but they can�t be moved, nor do they react to 
gravity.<br />
<br />
<h3>Kinematic</h3>
These objects offer collisions with dynamic objects and can be moved in a 
predefined way. E.g. if you have a train that goes from A to B along a 
predefined path and a collision occurs with a kinematic object, the train 
will simply continue its movement, while the dynamic object will be pushed 
away. If the same train hits a static or another kinematic object, nothing 
will happen.<br />
<br />
<h3>Dynamic</h3>
This kind of objects react dynamically to collisions and can't be moved 
manually. The movement of dynamic objects is a result of external forces and 
isn�t predefined.<br />
<br />
Run SamplePhysics.exe.<br />
<br />
Since it is self-explanatory, just open the sceneWithPhysics.i3d which is 
located in /sample/physics to see how it is done.<br />
<br />
<img src="images/tutorial/tutorial05_editor.png" alt="Editor" border="0"><br>
<br />
You probably need to zoom out a bit to see the whole scene.<br />
<br />
Select the different objects and look at the Rigid Body Type in the red marked 
area. In this scene all objects are rigid bodies, but the Rigid Body Type is 
different, depending on how their physics should react.<br />
<br />
If you want to select a cube which is within the sphere of the 
multi-selection-tool, you�ll first have to select something that is a bit 
further away.<br />
<br />
Try to change the Rigid Body Type of the different objects and see what 
happens, when you run the program. To change it, simply open the dropdown 
menu and select the desired Rigid Body Type. Hit enter, and don�t forget to 
save your scene.<br />
<br />
Instead of defining the physical behavior of an object in the editor, you 
could specify these settings directly in Maya. Launch the i3d exporter and 
open the attributes panel where you can see all the Rigid Body options 
available. Just select the desired mesh, click <i>Load Current</i> and then set 
the Rigid Body settings as you wish. Don�t forget to click <i>Save Current</i> 
when you've done it. If you export the mesh as an i3d file, the rigid body 
settings are already included. This method has the advantage that attributes 
defined in Maya remain in the saved scene file. If you export the same scene 
more than once, you might save time by defining it once in Maya instead of 
redoing it every time in the editor.<br />
<br />
<img src="images/tutorial/tutorial05_maya.png" alt="Maya" border="0"><br>










</div>
<div class="oneThird">
	
    <span class="newsHeading">Latest Versions</span>
	<p class="newsDate">18 June 2009</p>
	<p class="newsSummary">
	GIANTS SDK v4.1.3<br />
	GIANTS Editor v4.1.5<br />
	GIANTS Script Debugger v4.1.5<br />
	</p>

    <span class="newsHeading">Latest Public Versions</span>
	<p class="newsDate">30 December 2009</p>
	<p class="newsSummary">
	GIANTS Editor v4.1.2<br />
	Maya Exporter Plugins v4.1.5<br />
	3Ds MAX Exporter Plugins v4.1.5<br />
	Blender Exporter Plugins v4.1.5
	</p>
	
    <p class="more"><a href="downloads.php">� More</a></p>
   


	<form method="post" action="?r=211304719">
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

	
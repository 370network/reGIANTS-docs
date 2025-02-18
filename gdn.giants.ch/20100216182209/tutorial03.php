<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GDN - Tutorials</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="title" content="Tutorials"/>
	<meta name="description" content="Tutorial 3 � User Attributes"/>
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


<a name="tutorial03"><h1 style="page-break-before: always;">Tutorial 3 - User Attributes</h1></a>
<br />
<b>Sample name:</b> SampleUserAttributes<br />
<b>Script source code file:</b> <i>sample/userAttributes/main.lua</i><br />
<br />
<b>The goal of this tutorial is to show you</b><br />
<ul>
    <li>how to create user attributes</li>
    <li>how to access user attributes from script</li>
    <li>how to use the onCreate script callback</li>
</ul>

<b>New functions in this tutorial</b><br />
<br />
<i>getUserAttribute()</i><br />
<i>setUserAttribute()</i><br />
<i>setScale()</i><br />
<i>translate()</i><br />
<br />
Open sceneWithUserAttributes.i3d and main.lua which are located in 
\sample\userAttributes.<br />
<br />
Run the sample SampleUserAttributes.exe. You see three cubes with different 
scales and one cube that is rotating. If you press 1,2 or 3, the related cube 
is translated onto the y-axis and the number of translations is also 
displayed.<br />
<br />
If you look at sceneWithUserAttributes.i3d in the editor, you will see, that 
all three cubes in the back have the same size.
Open the User Attributes window.<br />
<br />
<img src="images/tutorial/tutorial03_editor.png" alt="Editor" border="0"><br />
<br />
In the User Attributes window you see the name of your object, followed by the 
user attributes and at the bottom there is the possibility to create new 
attributes. Select the different objects to see what kind of user attributes 
they have.<br />
<br />
You�ll notice that both cubes in the back have two user attributes labeled 
count and size. The bigger cube in the front only has an onCreate script 
callback.<br />
<br />
<b>How to create new user attributes</b><br />
To create your own attributes, just enter the name of your attribute and then 
choose the according type of your attribute. You can choose whether your 
attribute is a boolean, integer, float, a string or a script callback. Then 
hit add and your attribute will appear.<br />
<br />
Let�s have a look at the LUA code in main.lua. The very first line of code is 
the creation of an empty array called cubeIdArray.<br />
<br />
<h2>init()</h2>
<br />
You should be familiar with the first two lines, otherwise have a look at 
<a href="tutorial01.php">Tutorial 1</a>.<br />
What follows is a for loop from 0 to 2 where the array cubeIdArray is filled 
up with three new arrays containing the cubeIds of the three cubes.<br />
<br />
Then the variable size gets filled with the result of the getUserAttributes 
function. The getUserAttributes function needs the id of the object and the 
name of the attribute as arguments. Be careful here, the name has to be exactly 
the same as you have specified in the editor.<br />
<br />
Finally, there is a check whether size has a value and then the function 
setScale is used to scale the cube accordingly. Try to enter new size values 
in the i3d and then see the result by running the program.<br />
<br />
<table><tbody><tr><td>
<div id="code">
for&nbsp;index=0,&nbsp;2&nbsp;do<br />
--&nbsp;Get&nbsp;current&nbsp;cube&nbsp;id&nbsp;and&nbsp;store&nbsp;it&nbsp;for&nbsp;later<br />
local&nbsp;cubeId&nbsp;=&nbsp;getChildAt(i3dRoot,&nbsp;index);<br />
&nbsp;&nbsp;&nbsp;cubeIdArray[index]&nbsp;=&nbsp;{};<br />
&nbsp;&nbsp;&nbsp;cubeIdArray[index].id&nbsp;=&nbsp;cubeId;<br />
<br />
&nbsp;&nbsp;&nbsp;--&nbsp;Get&nbsp;scale&nbsp;value&nbsp;from&nbsp;user&nbsp;attributes<br />
&nbsp;&nbsp;&nbsp;local&nbsp;size&nbsp;=&nbsp;getUserAttribute(cubeId,&nbsp;"size");<br />
&nbsp;&nbsp;&nbsp;if&nbsp;size&nbsp;~=&nbsp;nil&nbsp;then<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;Set&nbsp;scale&nbsp;of&nbsp;current&nbsp;cube<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setScale(cubeId,&nbsp;size,&nbsp;size,&nbsp;size);<br />
&nbsp;&nbsp;&nbsp;end;<br />
end;<br />
</div>
</td></tr></tbody></table>
<br />
<h2>keyEvent()</h2>
<br />
First we check if esc is pressed.<br />
<br />
Then, if the keys 1,2 or 3 are pressed, the rest of the code is executed. The 
id of the corresponding cube is stored within the variable cubeId. Then the 
count of the cube is stored in the variable count by using the return value 
of the function <b>getUserAttribute</b>. If the count isn�t nil, the count is 
increased by one using the <b>setUserAttribute</b> function.<br />
<br />
The setUserAttribute function can either be used to create new attributes or 
to overwrite values of existing attributes. It uses the id of the object 
(cubeId), the name of the attribute("count"), the data type(Integer) and the 
new value as arguments(count+1). Finally, the corresponding cube is translated 
onto the y-axis with the value 0.1 using the translate function.<br />
<br />
<table><tbody><tr><td>
<div id="code">
if isDown == true then<br />
<br />
&nbsp;&nbsp;-- Check for escape key<br />
&nbsp;&nbsp;if sym == Input.KEY_esc then<br />
&nbsp;&nbsp;&nbsp;-- Request quit<br />
&nbsp;&nbsp;&nbsp;requestExit();<br />
&nbsp;&nbsp;end;<br />
<br />
&nbsp;&nbsp;-- Check for key 1 to 3<br />
&nbsp;&nbsp;if sym >= Input.KEY_1 and sym <= Input.KEY_3 then<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;-- Get id of current cube<br />
&nbsp;&nbsp;&nbsp;&nbsp;local cubeId = cubeIdArray[sym-Input.KEY_1].id;<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;-- Get count user attribute<br />
&nbsp;&nbsp;&nbsp;&nbsp;local count = getUserAttribute(cubeId, "count");<br />
&nbsp;&nbsp;&nbsp;&nbsp;if count ~= nil then<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- Set count user attribute<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setUserAttribute(cubeId, "count", "Integer", count+1);<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- Translate cube a bit<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;translate(cubeId, 0, 0.1, 0);<br />
&nbsp;&nbsp;&nbsp;&nbsp;end;<br />
<br />
&nbsp;&nbsp;end;<br />
<br />
end;<br />
</div>
</td></tr></tbody></table>
<br />
<h2>cubeOnCreate(id)</h2>
<br />
This function isn't called anywhere in the LUA code. So what is it used for? 
As soon as the cube in the front gets loaded, its attribute script callback 
causes the function cubeOnCreate to run once. The script also provides the id 
of the object that caused the script callback. Be careful with the spelling, 
the function in your LUA script has to be exactly the same as your 
ScriptCallback in the i3d. What we do in the cubeOnCreate function is quite 
simple: we store the id in the new variable rotatingCubeId.<br />
<br />
<table><tbody><tr><td>
<div id="code">
function cubeOnCreate(id)<br />
&nbsp;&nbsp;-- Store the id for later<br />
&nbsp;&nbsp;rotatingCubeId = id;<br />
end;<br />
</div>
</td></tr></tbody></table>
<br />
<h2>update(dt)</h2>
<br />
Here we first check if rotatingCubeId exists and then we rotate the cube using 
the rotate function with the id we stored in the variable rotatingCubeId.<br />
<br />
<table><tbody><tr><td>
<div id="code">
function update(dt)<br />
<br />
&nbsp;&nbsp;-- Rotate cube3<br />
&nbsp;&nbsp;if rotatingCubeId ~= nil then<br />
&nbsp;&nbsp;&nbsp;&nbsp;rotate(rotatingCubeId, 0, 0.05, 0);<br />
&nbsp;&nbsp;end;<br />
<br />
end;<br />
</div>
</td></tr></tbody></table>
<br />
<h2>draw()</h2>
<br />
Here you can see how flexibly you can use the renderText function: using it 
within a for loop, for  welding text and variables as well as for calling 
functions like the getUserAttributes in this case.<br />
<br />



<table><tbody><tr><td>
<div id="code">
function draw()<br />
<br />    
&nbsp;&nbsp;for index=0, 2 do<br />
&nbsp;&nbsp;&nbsp;&nbsp;renderText(0,0.95-index*0.05, 0.04,"Cube " .. index .. ": "<br />
&nbsp;&nbsp;&nbsp;&nbsp;.. getUserAttribute(cubeIdArray[index].id, "count") .. " press key " .. index+1);<br />
&nbsp;&nbsp;end;<br />
<br />
end;<br />
</div>
</td></tr></tbody></table>



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
	
    <p class="more"><a href="downloads.php">� More</a></p>
   


	<form method="post" action="?r=349749971">
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

	
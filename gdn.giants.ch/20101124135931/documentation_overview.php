<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GDN - Overview</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="title" content="Overview"/>
	<meta name="description" content="Documentation - Overview"/>
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


<table width="100%"><tr><td align="right" width="100%">
<i><a target="_NEW" href="documentation_print.php">Printable Version</a></i><br />
</td></tr></table>

<h1 style="page-break-before:auto;">Overview</h1>
<br /><br />

<h2>Table of Contents</h2>
<ol type="none">
	<li><a href="#introduction">Introduction</a></li>
	<li><a href="#key_features">Feature List</a></li>
	<li><a href="#runtime_keys">Runtime development key short-cuts</a></li>
	<li><a href="#runtime_console">Console Command Reference</a></li>
</ol>

<a name="introduction"><h2>Introduction</h2></a>
<br />
GIANTS Engine is a real-time 3D game engine with corresponding content pipeline tools. Its flexible and modular design supports multiple platforms and game genres.
<br /><br /><br /><br />

<a name="key_features"><h2>Feature List (GIANTS Engine SDK)</h2></a>

<h3>Graphics</h3>
<ul>
	<li>Flexible culling, sorting and rendering</li>
	<li>Particle systems</li>
	<li>Level-of-detail (hierarchy, geometry and shader)</li>
	<li>Dynamic shader generation</li>
	<li>Dynamic directional, point, spot and ambient lights</li>
	<li>Dynamic shadows</li>
	<li>Reflections and refractions</li>
	<li>Customizable shaders</li>
	<li>Multi layered terrain</li>
	<li>Scene graph representation</li>
	<li>Flexible foliage system</li>
</ul>

<h3>Physics</h3>
<ul>
	<li>Rigid Body physics</li>
	<li>Advanced character control</li>
	<li>Articulated vehicle dynamics</li>
	<li>Ragdoll dynamics</li>
	<li>Customizable joints</li>
	<li>Triggers</li>
	<li>Contact reports</li>
	<li>Automated collision geometry generation</li>
</ul>

<h3>Animations</h3>
<ul>
	<li>Hierarchical scene graph animation</li>
	<li>Skeleton animation</li>
	<li>Animation sequence blending and interpolation</li>
	<li>Animation sequence instancing</li>
</ul>

<h3>Artificial Intelligence</h3>
<ul>
	<li>Automated navigation mesh generation</li>
	<li>Path finding</li>
	<li>Containment queries</li>
</ul>
    
<h3>Tools</h3>
<ul>
	<li>Flexible and powerful content pipeline tool chain</li>
	<li>Full featured editor</li>
	<li>3D modeling tool exporters (including animation, hierarchy, physics, materials, shaders and user attributes)
	    <ul>
	        <li>Autodesk Maya</li>
	        <li>Autodesk 3ds MAX</li>
	        <li>Blender</li>
	    </ul>
	</li>
	<li>Remote runtime target debugger
	    <ul>
	        <li>Connection via TCP/IP</li>
	        <li>Script debugger</li>
	        <li>Physics debugger</li>
	    </ul>
	</li>
</ul>
    
<h3>Miscellaneous</h3>
<ul>
	<li>Streaming support</li>
	<li>Generic scripting support</li>
	<li>Unicode support</li>
	<li>Flexible XML-based file formats</li>
	<li>Multi-Threading support</li>
	<li>3D audio support</li>
	<li>Detailed runtime stats and profiling system</li>
	<li>Extensive documentation and tutorials</li>	
</ul>
    

<br /><br /><br />
<a name="runtime_keys"><h2>Runtime development key short-cuts</h2></a>
<br /><br />
<table cellpadding="6">
<tr>
	<th class="list" align="left"><b>Key</b></th>
	<th class="list" align="left"><b>Function</b></th>
</tr>
<tr>
	<td class="list" valign="top"><i>~ or `</i></td>
	<td class="list" valign="top">Toggle console</td>
</tr>
<tr>
	<td class="list" valign="top"><i>F2</i></td>
	<td class="list" valign="top">Show frame rate</td>
</tr>
<tr>
	<td class="list" valign="top"><i>F3</i></td>
	<td class="list" valign="top">Toggle frame rate limiter</td>
</tr>
<tr>
	<td class="list" valign="top"><i>F4</i></td>
	<td class="list" valign="top">Wireframe mode</td>
</tr>
<tr>
	<td class="list" valign="top"><i>F5</i></td>
	<td class="list" valign="top">Toggle debug rendering</td>
</tr>
<tr>
	<td class="list" valign="top"><i>F7</i></td>
	<td class="list" valign="top">Toggle camera</td>
</tr>
<tr>
	<td class="list" valign="top"><i>F8</i></td>
	<td class="list" valign="top">Toggle stats</td>
</tr>
<tr>
	<td class="list" valign="top"><i>F9</i></td>
	<td class="list" valign="top">Connect to physics visual debugger (PVD)</td>
</tr>
<tr>
	<td class="list" valign="top"><i>F10</i></td>
	<td class="list" valign="top">Connect to remote debugger</td>
</tr>
</table>
<br /><br />


<a name="runtime_console"><h2>Console Command Reference</h2></a>
<br />
<h3>enableFramerateLimit</h3>
<b>Description</b><br />
<blockquote>Enable/disable frame per second limiter</blockquote><br />

<h3>exit, quit or q</h3>
<b>Description</b><br />
<blockquote>Quits application</blockquote><br />

<h3>framerateLimitFPS</h3>
<b>Description</b><br />
<blockquote>Frame per second limit attribute</blockquote><br />

<h3>globalClipDistance</h3>
<b>Description</b><br />
<blockquote>Global clipping distance. Additional distance clipping per object (at center of object).</blockquote><br />

<h3>globalCullOverride</h3>
<b>Description</b><br />
<blockquote> Global cull override. If true no visibility culling is used.</blockquote><br />

<h3>listEntities</h3>
<b>Description</b><br />
<blockquote>Print detailed entity list</blockquote><br />

<h3>listResources</h3>
<b>Description</b><br />
<blockquote>Print detailed resource list</blockquote><br />

<h3>reload</h3>
<b>Description</b><br />
<blockquote>Reloads resource with given name</blockquote><br />

<h3>reloadAll</h3>
<b>Description</b><br />
<blockquote>Reload all resources with given type</blockquote><br />

<h3>showDebugAudioSource</h3>
<b>Description</b><br />
<blockquote>Show debug audio sources</blockquote><br />

<h3>showDebugLightSources</h3>
<b>Description</b><br />
<blockquote>Show debug lights</blockquote><br />

<h3>showDebugRendering</h3>
<b>Description</b><br />
<blockquote>Show debug rendering. Global switch for all debug rendering.</blockquote><br />

<h3>showShapeBoundingVolume</h3>
<b>Description</b><br />
<blockquote>Show shape bounding volumes</blockquote><br />

<h3>showTransformGroupFrames</h3>
<b>Description</b><br />
<blockquote>Show debug transform group frames</blockquote><br />

<h3>showFps</h3>
<b>Description</b><br />
<blockquote>Show frames per second</blockquote><br />

<h3>sortGeometry</h3>
<b>Description</b><br />
<blockquote>Sort render queue by material sort id</blockquote><br />

<h3>parallelRenderingAndPhysics</h3>
<b>Description</b><br />
<blockquote>Enable parallel rendering and physics</blockquote><br />

<br />
<br />
<br />





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


	<form method="post" action="?r=327220312">
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

	
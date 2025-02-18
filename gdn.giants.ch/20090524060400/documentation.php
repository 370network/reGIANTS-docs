
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GDN - GIANTS Game Engine v4 Documentation</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="expires" content="0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta name="title" content="GIANTS Game Engine v4 Documentation"/>
	<meta name="description" content="GIANTS Developer Network - SDK Documentation"/>
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
            <a href="license.php" title="GDN - License">Store</a> |			
			<a href="documentation.php" title="GDN - Documentation">Documentation</a> |
			<a href="tutorials.php" title="GDN - Tutorials">Tutorials</a> |
			<a href="downloads.php" title="GDN - Downloads">Downloads</a> |
			<a href="newsletter.php" title="GDN - Newsletter">Newsletter</a>
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


<h1 style="page-break-before:auto;">GIANTS Game Engine v4 Documentation</h1>
<br /><br />
<h1 style="page-break-before:auto;">Content</h1>

<ol type="none">
    <li><b>Chapter 01:</b> <a href="#introduction">Introduction</a></li>
    <li><b>Chapter 02:</b> <a href="#runtime">SDK</a>
        <ol type="none">
            <li><a href="#runtime_keys">Runtime development key short-cuts</a></li>
            <li><a href="#runtime_console">Console Command Reference</a></li>
            <li><a href="#runtime_function_reference">Function Reference</a>
                <ol type="none">
                	<li><a href="#runtime_function_reference_general">General</a></li>
                	<li><a href="#runtime_function_reference_entity">Entity</a></li>
                	<li><a href="#runtime_function_reference_node">Node</a></li>
                	<li><a href="#runtime_function_reference_scenegraph">Scenegraph</a></li>
                	<li><a href="#runtime_function_reference_lighting">Lighting</a></li>
                	<li><a href="#runtime_function_reference_camera">Camera</a></li>
                	<li><a href="#runtime_function_reference_shape">Shape</a></li>
                	<li><a href="#runtime_function_reference_physics">Physics</a></li>
                	<li><a href="#runtime_function_reference_spline">Spline</a></li>
                	<li><a href="#runtime_function_reference_animation">Animation</a></li>
                	<li><a href="#runtime_function_reference_overlays">Overlays</a></li>
                	<li><a href="#runtime_function_reference_sound">Sound</a></li>	
                	<li><a href="#runtime_function_reference_input">Input</a></li>	
                	<li><a href="#runtime_function_reference_XML">XML</a></li>
                	<li><a href="#runtime_function_reference_network">Network</a></li>
                	<li><a href="#runtime_function_reference_callbacks">Callbacks</a></li>
                </ol>            
            </li>
            <li><a href="#runtime_foundation_reference">Foundation Reference</a>
                <ol type="none">
                	<li><a href="#runtime_foundation_reference_scenegraph">Scenegraph</a></li>
                	<li><a href="#runtime_foundation_reference_input">Input</a></li>
                </ol>
            </li>
        </ol>
    </li>
    <li><b>Chapter 03:</b> <a href="#editor">Editor</a>
        <ol type="none">
            <li><a href="#editor_viewport">Viewport</a></li>
            <li><a href="#editor_scenegraph">Scenegraph</a></li>
            <li><a href="#editor_attributes">Attributes</a></li>
            <li><a href="#editor_toolbar">Toolbar</a></li>
            <li><a href="#editor_terrain">Terrain</a></li>
            <li><a href="#editor_user_attributes">User Attributes</a></li>
            <li><a href="#editor_scripting">Scripting</a></li>
            <li><a href="#editor_terrain">Terrain Editing</a></li>
            <li><a href="#editor_replace_dialog">Replace Dialog</a></li>
            <li><a href="#editor_interactive_placement">Interactive Placement</a></li>
            <li><a href="#editor_other_functionality">Other functionality</a></li>
            <li><a href="#editor_keys">Key short-cuts</a></li>
        </ol>
    </li>
    <li><b>Chapter 04:</b> <a href="#exporter">Exporter</a>
        <ol type="none">
            <li>
                <a href="#exporter_maya_installation">Autodesk Maya<sup style="font-size: 10px;">1</sup> i3d exporter</a>
                <ol type="none">
                    <li><a href="#exporter_maya_material">Material export options</a></li>
                </ol>
            </li>
            <li><a href="#exporter_max_installation">Autodesk 3ds MAX<sup style="font-size: 10px;">2</sup> i3d exporter</a></li>
            <li><a href="#exporter_blender_installation">Blender i3d exporter</a></li>
        </ol>
    </li>

    <li><b>Chapter 05:</b> <a href="#artwork_guide">Content Creation - Artwork Guide</a>
        <ol type="none">
            <li><a href="#artwork_guide_maya">Autodesk Maya</a></li>
            <li><a href="#artwork_guide_max">Autodesk 3DS MAX</a></li>
            <li><a href="#artwork_guide_texturing">Texturing</a></li>
        </ol>
    </li>

    <li><b>Chapter 06:</b> <a href="#i3d">I3D</a>
        <ol type="none">
            <li><a href="#i3d_introduction">Introduction</a></li>
            <li><a href="#i3d_features">Features</a></li>
            <li><a href="#i3d_overview">Overview</a></li>
            <li><a href="#i3d_specification">Specification</a>
                <ol type="none">
                    <li><a href="#i3d_general_layout">General Layout</a></li>
                    <li><a href="#i3d_materials">Materials</a></li>
                    <li><a href="#i3d_shapes">Shapes</a></li>
                    <li><a href="#i3d_dynamics">Dynamics</a></li>
                    <li><a href="#i3d_scenegraph">Scenegraph</a></li>
                    <li><a href="#i3d_animation">Animation</a></li>
                </ol>
            </li>
            <li><a href="#i3d_example">Example file</a></li>
            <li><a href="#i3d_test_scenes">Test Scenes</a></li>
        </ol>
    </li>
</ol>
<br /><br />

<a name="introduction"><h1>Introduction</h1></a>
<br />
GIANTS Engine is a real-time 3D game engine with corresponding content pipeline tools. Its flexible and modular design supports multiple platforms and game genres.
<br /><br />
<h2>Key features</h2>
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
	<li>Automatic collision geometry generation</li>
</ul>

<h3>Animations</h3>
<ul>
	<li>Hierarchical scene graph animation</li>
	<li>Skeleton animation</li>
	<li>Animation sequence blending and interpolation</li>
	<li>Animation sequence instancing</li>
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
	<li>Generic scripting support (LUA, Ruby, Small, ...)</li>
	<li>Networking support
		<ul>
			<li>Peer-to-peer or Client/Server</li>
			<li>NAT Traversal</li>
		</ul>
	</li>
	<li>Flexible XML-based file formats</li>
	<li>Multi-Threading support</li>
	<li>Cross-Platform</li>
	<li>3D audio support</li>
	<li>Detailed built-in stats and profiling system</li>
	<li>Extensive documentation </li>	
</ul>
    

<br /><br /><br />
<a name="runtime"><h1 style="page-break-before:always">SDK</h1></a>
<a name="runtime_keys"><h2>Runtime development key short-cuts</h2></a>
<br /><br />
<table cellpadding="6">
<tr>
	<th class="list" align="left"><b>Key</b></th>
	<th class="list" align="left"><b>Function</b></th>
</tr>
<tr>
	<td class="list" valign="top"><i>~</i></td>
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
	<td class="list" valign="top">Connect to physics visual remote debugger (VRD)</td>
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






<a name="runtime_function_reference"><h2>Function Reference</h2></a>

<a name="runtime_function_reference_general"><h2>General Function Reference</h2></a>

<br /

<h3>print</h3>
<b>Description</b><br />
<blockquote>Print to console</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function print(arg1, ...)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>any type</i></td><td><i>arg1</i></td><td>variable to print</td></tr>
<tr><td><i>any type</i></td><td><i>...</i></td><td>variable to print</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>source</h3>
<b>Description</b><br />
<blockquote>Source script file</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function source(filename)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>filename</i></td><td>name of script file</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>requestExit</h3>
<b>Description</b><br />
<blockquote>Request application to exit at the end of this frame</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function requestExit()</i></blockquote>
<br />
<br /><br /><br />

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
<br /><br /><br />

<h3>setTextColor</h3>
<b>Description</b><br />
<blockquote>Set the text color to be used for the following renderText calls</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setTextColor(float r, float g, float b, float a)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>r</i></td><td>red color component [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>g</i></td><td>green color component [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>b</i></td><td>blue color component [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>a</i></td><td>alpha (opacity) [0, 1]</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setTextBold</h3>
<b>Description</b><br />
<blockquote>Set the text boldness to be used for the following renderText calls</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setTextBold(boolean isBold)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>isBold</i></td><td>bold state</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setTextAlignment</h3>
<b>Description</b><br />
<blockquote>Set the text alignment to be used for the following renderText calls</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setTextAlignment(integer alignment)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>alignment</i></td><td>alignment (RenderText.ALIGN_LEFT, RenderText.ALIGN_CENTER or RenderText.ALIGN_RIGHT)</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setFog</h3>
<b>Description</b><br />
<blockquote>Set fog properties</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setFog(string fogType, float startDistanceOrDensity, float endDistance, float r, float g, float b)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>fogType</i></td><td>fog type ("none", "linear", "exp" or "exp2")</td></tr>
<tr><td><i>float</i></td><td><i>startDistanceOrDensity</i></td><td>start distance (linear) or density (exp and exp2)</td></tr>
<tr><td><i>float</i></td><td><i>endDistance</i></td><td>end distance (linear)</td></tr>
<tr><td><i>float</i></td><td><i>r</i></td><td>color r</td></tr>
<tr><td><i>float</i></td><td><i>g</i></td><td>color g</td></tr>
<tr><td><i>float</i></td><td><i>b</i></td><td>color b</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setVolumeFog</h3>
<b>Description</b><br />
<blockquote>Set volume fog properties</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setVolumeFog(string fogType, float startDistanceOrDensity, float endDistance, float yPlane, float r, float g, float b)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>fogType</i></td><td>fog type ("none", "linear", "exp" or "exp2")</td></tr>
<tr><td><i>float</i></td><td><i>startDistanceOrDensity</i></td><td>start distance (linear) or density (exp and exp2)</td></tr>
<tr><td><i>float</i></td><td><i>endDistance</i></td><td>end distance (linear)</td></tr>
<tr><td><i>float</i></td><td><i>yPlane</i></td><td>y plane value</td></tr>
<tr><td><i>float</i></td><td><i>r</i></td><td>color r</td></tr>
<tr><td><i>float</i></td><td><i>g</i></td><td>color g</td></tr>
<tr><td><i>float</i></td><td><i>b</i></td><td>color b</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>wrapMousePosition</h3>
<b>Description</b><br />
<blockquote>Wrap mouse position</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function wrapMousePosition(float x, float y)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x coord [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y coord [0, 1]</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setShowMouseCursor</h3>
<b>Description</b><br />
<blockquote>Set show mouse cursor</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setShowMouseCursor(boolean state)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>state</i></td><td>enable state</td></tr>
</table></blockquote>
<br />
<br /><br /><br />	

<h3>setCaption</h3>
<b>Description</b><br />
<blockquote>Set caption</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setCaption(string caption)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>caption</i></td><td>application caption</td></tr>
</table></blockquote>
<br />
<br /><br /><br />	

<h3>loadI3DFile</h3>
<b>Description</b><br />
<blockquote>Load I3D file</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function loadI3DFile(string filename)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>filename</i></td><td>i3d filename</td></tr>
</table></blockquote>
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>rootNodeId</i></td><td>id of root node</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>project</h3>
<b>Description</b><br />
<blockquote>Transform vector from world space into screen space</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function project(float wx, float wy, float wz)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>wx</i></td><td>world space x coordinate</td></tr>
<tr><td><i>float</i></td><td><i>wy</i></td><td>world space y coordinate</td></tr>
<tr><td><i>float</i></td><td><i>wz</i></td><td>world space z coordinate</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>sx</i></td><td>screen space x coordinate</td></tr>
<tr><td><i>float</i></td><td><i>sy</i></td><td>screen space y coordinate</td></tr>
<tr><td><i>float</i></td><td><i>sz</i></td><td>screen space z coordinate</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>unProject</h3>
<b>Description</b><br />
<blockquote>Transform vector from screen space into world space</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function unProject(float sx, float sy, float sz)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>sx</i></td><td>screen space x coordinate</td></tr>
<tr><td><i>float</i></td><td><i>sy</i></td><td>screen space y coordinate</td></tr>
<tr><td><i>float</i></td><td><i>sz</i></td><td>screen space z coordinate</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>wx</i></td><td>world space x coordinate</td></tr>
<tr><td><i>float</i></td><td><i>wy</i></td><td>world space y coordinate</td></tr>
<tr><td><i>float</i></td><td><i>wz</i></td><td>world space z coordinate</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

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
<br /><br /><br />

<h3>setTimerTime</h3>
<b>Description</b><br />
<blockquote>Set timer interval time</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setTimerTime(integer timerId, float time)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>timerId</i></td><td>timer id</td></tr>
<tr><td><i>float</i></td><td><i>time</i></td><td>time in milliseconds</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>saveScreenshot</h3>
<b>Description</b><br />
<blockquote>Save screenshot</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function saveScreenshot(string filename)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>filename</i></td><td>filename</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getAppBasePath</h3>
<b>Description</b><br />
<blockquote>Get application base path</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getAppBasePath()</i></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>appBasePath</i></td><td>application base path</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getUserProfileAppPath</h3>
<b>Description</b><br />
<blockquote>Get user profile application path</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getUserProfileAppPath()</i></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>getUserProfileAppPath</i></td><td>user profile application path</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>copyFile</h3>
<b>Description</b><br />
<blockquote>Get copy file</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function copyFile(string sourceFile, string destinationFile, boolean overwrite)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>sourceFile</i></td><td>source filename</td></tr>
<tr><td><i>string</i></td><td><i>destinationFile</i></td><td>destination filename</td></tr>
<tr><td><i>boolean</i></td><td><i>overwrite</i></td><td>overwrite file if it already exists</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getFiles</h3>
<b>Description</b><br />
<blockquote>Get all files of a directory</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getFiles(string path, string fileFunctionCallback, object instance)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>path</i></td><td>path</td></tr>
<tr><td><i>string</i></td><td><i>fileFunctionCallback</i></td><td>file function callback</td></tr>
<tr><td><i>object</i></td><td><i>instance</i></td>instance object (optional)<td></td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>numFiles</i></td><td>number of files</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<a name="runtime_function_reference_entity"><h2>Entity Function Reference</h2></a>

<br />

<h3>delete</h3>
<b>Description</b><br />
<blockquote>Delete Entity/Object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function delete(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
</table></blockquote>
<br /><br /><br />

<h3>getClassName</h3>
<b>Description</b><br />
<blockquote>Get class name of object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getClassName(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>className</i></td><td>class name of object</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>addDeleteListener</h3>
<b>Description</b><br />
<blockquote>Add a delete listener</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function addDeleteListener(integer objectId, string deleteFunctionCallback, object targetObject)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>deleteFunctionCallback</i></td><td>delete listener function callback, is called when the entity is deleted</td></tr>
<tr><td><i>object</i></td><td><i>targetObject</i></td><td>target object (optional), the callback function is called as a member function of targetObject</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>listenerId</i></td><td>id to the created callback, must be given to removeDeleteListener</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>removeDeleteListener</h3>
<b>Description</b><br />
<blockquote>Remove a delete listener. Note: it is important to call removeDeleteListener for each addDeleteListener call to avoid memory leaks</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function removeDeleteListener(integer objectId, integer listenerId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>integer</i></td><td><i>listenerId</i></td><td>id of the delete listener</td></tr>
</table></blockquote>
<br />
<br /><br /><br />



<a name="runtime_function_reference_node"><h2>Node Function Reference</h2></a>

<br />

<h3>getParent</h3>
<b>Description</b><br />
<blockquote>Get parent id</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getParent(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>parentId</i></td><td>parent id</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>link</h3>
<b>Description</b><br />
<blockquote>Link node to another node</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function link(integer parentNodeId, integer childNodeId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>parentNodeId</i></td><td>id of parent node</td></tr>
<tr><td><i>integer</i></td><td><i>childNodeId</i></td><td>id of child node</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>unlink</h3>
<b>Description</b><br />
<blockquote>Unlink node from parent</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function unlink(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>getNumOfChildren</h3>
<b>Description</b><br />
<blockquote>Get number of children</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getNumOfChildren(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>numOfChildren</i></td><td>number of children</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>getChildAt</h3>
<b>Description</b><br />
<blockquote>Get child id at given index</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getChildAt(integer objectId, integer index)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>integer</i></td><td><i>index</i></td><td>index of child</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>childId</i></td><td>id of child node</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getChild</h3>
<b>Description</b><br />
<blockquote>Get child id</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getChild(integer objectId, string childName)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>childName</i></td><td>child name</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>childId</i></td><td>id of child node</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getName</h3>
<b>Description</b><br />
<blockquote>Get object name</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getName(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>objectName</i></td><td>object name</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setName</h3>
<b>Description</b><br />
<blockquote>Set object name</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setName(integer objectId, string objectName)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>objectName</i></td><td>new object name</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>removeChildAt</h3>
<b>Description</b><br />
<blockquote>Remove child at given index</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function removeChildAt(integer objectId, integer index)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>integer</i></td><td><i>index</i></td><td>index of child</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<a name="runtime_function_reference_scenegraph"><h2>Scenegraph Function Reference</h2></a>

<br />

<h3>createTransformGroup</h3>
<b>Description</b><br />
<blockquote>Create transform group</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createTransformGroup(string transformName)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>transformName</i></td><td>name of transform object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setTranslation</h3>
<b>Description</b><br />
<blockquote>Set translation of a transform object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setTranslation(integer transformId, float x, float y, float z)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of translation</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of translation</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of translation</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getTranslation</h3>
<b>Description</b><br />
<blockquote>Get translation of a transform object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getTranslation(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of translation</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of translation</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of translation</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getWorldTranslation</h3>
<b>Description</b><br />
<blockquote>Get world translation of a transform object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getWorldTranslation(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of world translation</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of world translation</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of world translation</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setRotation</h3>
<b>Description</b><br />
<blockquote>Set euler rotation of a transform object. Order ZY'X''</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setRotation(integer transformId, float x, float y, float z)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of rotation (radian units)</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of rotation (radian units)</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of rotation (radian units)</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getRotation</h3>
<b>Description</b><br />
<blockquote>Get rotation of a transform object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getRotation(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of rotation (radian units)</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of rotation (radian units)</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of rotation (radian units)</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getWorldRotation</h3>
<b>Description</b><br />
<blockquote>Get world rotation of a transform object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getWorldRotation(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of world rotation (radian units)</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of world rotation (radian units)</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of world rotation (radian units)</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setDirection</h3>
<b>Description</b><br />
<blockquote>Set the direction of an object, the positive z-axis points towards the given direction. The y-axis lies in the direction-up-plane.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setDirection(integer transformId, float x, float y, float z, float upX, float upY, float upZ)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of direction</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of direction</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of direction</td></tr>
<tr><td><i>float</i></td><td><i>upX</i></td><td>x value of up vector</td></tr>
<tr><td><i>float</i></td><td><i>upY</i></td><td>y value of up vector</td></tr>
<tr><td><i>float</i></td><td><i>upY</i></td><td>z value of up vector</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setScale</h3>
<b>Description</b><br />
<blockquote>Set scale of a transform object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setScale(integer transformId, float x, float y, float z)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of scale</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of scale</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of scale</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getScale</h3>
<b>Description</b><br />
<blockquote>Get scale of a transform object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getScale(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of scale</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of scale</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of scale</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setVisibility</h3>
<b>Description</b><br />
<blockquote>Set transform object visibility</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setVisibility(integer transformId, boolean visibility)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>boolean</i></td><td><i>visibility</i></td><td>visibility state</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getVisibility</h3>
<b>Description</b><br />
<blockquote>Get transform object visibility</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getVisibility(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>visibility</i></td><td>visibility state</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>clone</h3>
<b>Description</b><br />
<blockquote>Clone scenegraph object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function clone(integer objectId, boolean groupUnderParent)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>id</i></td><td><i>objectId</i></td><td>id of scenegraph object</td></tr>
<tr><td><i>boolean</i></td><td><i>groupUnderParent</i></td><td>if true the clone will be linked to the the same parent as objectId, otherwise it is not linked to the scenegraph</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>id</i></td><td><i>cloneId</i></td><td>id of clone object</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setRootNode</h3>
<b>Description</b><br />
<blockquote>Set scenegraph root node</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setRootNode(integer rootNodeId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>rootNodeId</i></td><td>id of new root node</td></tr>
</table></blockquote>
<br />
<br /><br /><br />        

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
<br /><br /><br />        

<h3>localToWorld</h3>
<b>Description</b><br />
<blockquote>Local space to world space transformation</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function localToWorld(integer transformId, float x, float y, float z)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of local position</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of local position</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of local position</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of world position</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of world position</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of world position</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>localDirectionToWorld</h3>
<b>Description</b><br />
<blockquote>Local space to world space transformation, only direction without translation</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function localDirectionToWorld(integer transformId, float x, float y, float z)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of local direction</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of local direction</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of local direction</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of world direction</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of world direction</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of world direction</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>worldToLocal</h3>
<b>Description</b><br />
<blockquote>World space to local space transformation</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function worldToLocal(integer transformId, float x, float y, float z)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of world position</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of world position</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of world position</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of local position</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of local position</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of local position</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>worldDirectionToLocal</h3>
<b>Description</b><br />
<blockquote>World space to local space transformation, only direction without translation</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function worldDirectionToLocal(integer transformId, float x, float y, float z)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of world direction</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of world direction</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of world direction</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of local direction</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of local direction</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of local direction</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getAnimCharacterSet</h3>
<b>Description</b><br />
<blockquote>Get animation character set id</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getAnimCharacterSet(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>animId</i></td><td>animation character set id</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setUserAttribute</h3>
<b>Description</b><br />
<blockquote>Set user attribute value</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setUserAttribute(integer objectId, string attributeName, string typeName, integer/float/boolean/string value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>attributeName</i></td><td>name of the user attribute</td></tr>
<tr><td><i>string</i></td><td><i>typeName</i></td><td>name of the type ("Integer", "Float", "String", "Boolean")</td></tr>
<tr><td><i>integer/float/boolean/string</i></td><td><i>value</i></td><td>value of the user attribute, must match typeName</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getUserAttribute</h3>
<b>Description</b><br />
<blockquote>Get user attribute value</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getUserAttribute(integer objectId, string attributeName)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>attributeName</i></td><td>name of the user attribute</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer/float/boolean/string</i></td><td><i>attributeValue</i></td><td>value of the user attribute, return type is the type of the attribute. Returns nil if attributeName doest not exist</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setObjectMask</h3>
<b>Description</b><br />
<blockquote>Set object mask</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setObjectMask(integer objectId, integer mask)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>integer</i></td><td><i>mask</i></td><td>the object mask to set</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getObjectMask</h3>
<b>Description</b><br />
<blockquote>Get object mask</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getObjectMask(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>mask</i></td><td>the object mask</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getTerrainHeightAtWorldPos</h3>
<b>Description</b><br />
<blockquote>get the terrain height at the given position</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getTerrainHeightAtWorldPos(integer terrainId, float x, float y, float z)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>terrainId</i></td><td>terrain id</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of the world position</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of the world position</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of the world position</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>heightValue</i></td><td>height of the terrain at the given position</td></tr>
</table></blockquote>
<br /><br /><br />
<a name="runtime_function_reference_lighting"><h2>Lighting Function Reference</h2></a>
<br />
<h3>setAmbientColor</h3>
<b>Description</b><br />
<blockquote>Set global ambient color</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setAmbientColor(float r, float g, float b)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>r</i></td><td>red value of ambient color</td></tr>
<tr><td><i>float</i></td><td><i>g</i></td><td>green value of ambient color</td></tr>
<tr><td><i>float</i></td><td><i>b</i></td><td>blue value of ambient color</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getLightDiffuseColor</h3>
<b>Description</b><br />
<blockquote>Get diffuse color of a light</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getLightDiffuseColor(integer lightId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>lightId</i></td><td>id of light</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>r</i></td><td>red value of diffuse color</td></tr>
<tr><td><i>float</i></td><td><i>g</i></td><td>green value of diffuse color</td></tr>
<tr><td><i>float</i></td><td><i>b</i></td><td>blue value of diffuse color</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setLightDiffuseColor</h3>
<b>Description</b><br />
<blockquote>Set diffuse color of a light</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setLightDiffuseColor(integer lightId, float r, float g, float b)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>lightId</i></td><td>id of light</td></tr>
<tr><td><i>float</i></td><td><i>r</i></td><td>red value of diffuse color</td></tr>
<tr><td><i>float</i></td><td><i>g</i></td><td>green value of diffuse color</td></tr>
<tr><td><i>float</i></td><td><i>b</i></td><td>blue value of diffuse color</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getLightSpecularColor</h3>
<b>Description</b><br />
<blockquote>Get specular color of a light</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getLightSpecularColor(integer lightId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>lightId</i></td><td>id of light</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>r</i></td><td>red value of specular color</td></tr>
<tr><td><i>float</i></td><td><i>g</i></td><td>green value of specular color</td></tr>
<tr><td><i>float</i></td><td><i>b</i></td><td>blue value of specular color</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setLightSpecularColor</h3>
<b>Description</b><br />
<blockquote>Set specular color of a light</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setLightSpecularColor(integer lightId, float r, float g, float b)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>lightId</i></td><td>id of light</td></tr>
<tr><td><i>float</i></td><td><i>r</i></td><td>red value of specular color</td></tr>
<tr><td><i>float</i></td><td><i>g</i></td><td>green value of specular color</td></tr>
<tr><td><i>float</i></td><td><i>b</i></td><td>blue value of specular color</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getLightRange</h3>
<b>Description</b><br />
<blockquote>Get range of a light</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getLightRange(integer lightId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>lightId</i></td><td>id of light</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>range</i></td><td>light range</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setLightRange</h3>
<b>Description</b><br />
<blockquote>Set range of a light</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setLightRange(integer lightId, float range)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>lightId</i></td><td>id of light</td></tr>
<tr><td><i>float</i></td><td><i>range</i></td><td>light range</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<a name="runtime_function_reference_camera"><h2>Camera Function Reference</h2></a>

<br />

<h3>createCamera</h3>
<b>Description</b><br />
<blockquote>Create camera</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createCamera(integer cameraId, float fovy, float nearClip, float farClip)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>cameraId</i></td><td>camera id</td></tr>
<tr><td><i>float</i></td><td><i>fovy</i></td><td>field of view (degree)</td></tr>
<tr><td><i>float</i></td><td><i>nearClip</i></td><td>near clip</td></tr>
<tr><td><i>float</i></td><td><i>farClip</i></td><td>far clip</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setCamera</h3>
<b>Description</b><br />
<blockquote>Set currently used camera</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setCamera(integer cameraId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>cameraId</i></td><td>new camera id</td></tr>
</table></blockquote>
<br />
<br /><br /><br />        

<h3>getCamera</h3>
<b>Description</b><br />
<blockquote>Get currently used camera</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getCamera()</i></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>currentCameraId</i></td><td>current camera id</td></tr>
</table></blockquote>
<br />
<br /><br /><br />  

<h3>setFovy</h3>
<b>Description</b><br />
<blockquote>Set the field of view angle</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setFovy(integer cameraId, float fovy)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>cameraId</i></td><td>camera id</td></tr>
<tr><td><i>float</i></td><td><i>fovy</i></td><td>field of view angle (degree)</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getFovy</h3>
<b>Description</b><br />
<blockquote>Get the field of view angle</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getFovy(integer cameraId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>cameraId</i></td><td>camera id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>fovy</i></td><td>field of view angle (degree)</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setNearClip</h3>
<b>Description</b><br />
<blockquote>Set the near clip distance</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setNearClip(integer cameraId, float nearClip)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>cameraId</i></td><td>camera id</td></tr>
<tr><td><i>float</i></td><td><i>nearClip</i></td><td>near clip distance</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getNearClip</h3>
<b>Description</b><br />
<blockquote>Get the near clip distance</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getNearClip(integer cameraId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>cameraId</i></td><td>camera id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>nearClip</i></td><td>near clip distance</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setFarClip</h3>
<b>Description</b><br />
<blockquote>Set the far clip distance</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setFarClip(integer cameraId, float farClip)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>cameraId</i></td><td>camera id</td></tr>
<tr><td><i>float</i></td><td><i>farClip</i></td><td>far clip distance</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getFarClip</h3>
<b>Description</b><br />
<blockquote>Get the far clip distance</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getFarClip(integer cameraId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>cameraId</i></td><td>camera id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>farClip</i></td><td>far clip distance</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>aimCamera</h3>
<b>Description</b><br />
<blockquote>Aim camera (spring/damper)</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function aimCamera(integer cameraId, float x, float y, float z, float distance, float dt, float springStrength)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>cameraId</i></td><td>camera id</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>target x coordinate</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>target y coordinate</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>target z coordinate</td></tr>
<tr><td><i>float</i></td><td><i>distance</i></td><td>distance from target</td></tr>
<tr><td><i>float</i></td><td><i>dt</i></td><td>delta time</td></tr>
<tr><td><i>float</i></td><td><i>springStrength</i></td><td>spring strength</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<a name="runtime_function_reference_shape"><h2>Shape Function Reference</h2></a>

<br />

<h3>setShaderParameter</h3>
<b>Description</b><br />
<blockquote>Set shader parameter</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setShaderParameter(integer shapeId, string parameterName, float x, float y, float z, float w, boolean shared)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>shapeId</i></td><td>shape id id</td></tr>
<tr><td><i>string</i></td><td><i>parameterName</i></td><td>the name of the parameter</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>x value</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value</td></tr>
<tr><td><i>float</i></td><td><i>w</i></td><td>w value</td></tr>
<tr><td><i>boolean</i></td><td><i>shared</i></td><td>if true, the value is applied to all shapes with the same material</td></tr>
</table></blockquote>
<br /><br /><br />

<a name="runtime_function_reference_physics"><h2>Physics Function Reference</h2></a>

<br />

<h3>simulatePhysics</h3>
<b>Description</b><br />
<blockquote>Enable/disable physics simulation</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function simulatePhysics(boolean state)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>state</i></td><td>enable simulation state</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>createCCT</h3>
<b>Description</b><br />
<blockquote>Create character controller (y axis capsule based)</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createCCT(integer transformId, float radius, float height, float stepOffset, float slopeLimit, float skinWidth, float collisionMask, float mass)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>radius</i></td><td>radius</td></tr>
<tr><td><i>float</i></td><td><i>height</i></td><td>height</td></tr>
<tr><td><i>float</i></td><td><i>stepOffset</i></td><td>step offset</td></tr>
<tr><td><i>float</i></td><td><i>slopeLimit</i></td><td>slope limit</td></tr>
<tr><td><i>float</i></td><td><i>skinWidth</i></td><td>skin width</td></tr>
<tr><td><i>integer</i></td><td><i>collisionMask</i></td><td>collision mask</td></tr>
<tr><td><i>float</i></td><td><i>mass</i></td><td>character mass [kg]</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterIndex</i></td><td>character index number</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>moveCCT</h3>
<b>Description</b><br />
<blockquote>Enqueue character movement</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function moveCCT(integer characterIndex, float x, float y, float z, float collisionMasks)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterIndex</i></td><td>character index number</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>x value</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value</td></tr>
<tr><td><i>float</i></td><td><i>collisionMasks</i></td><td>collision masks</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>removeCCT</h3>
<b>Description</b><br />
<blockquote>Remove character controller</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function removeCCT(integer characterIndex)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterIndex</i></td><td>character index number</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getCCTCollisionFlags</h3>
<b>Description</b><br />
<blockquote>Get character controller collision flags</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function Engine.getCCTCollisionFlags(integer characterIndex)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterIndex</i></td><td>character index number</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>side</i></td><td>side flag</td></tr>
<tr><td><i>boolean</i></td><td><i>up</i></td><td>up flag</td></tr>
<tr><td><i>boolean</i></td><td><i>down</i></td><td>down flag</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>raycastAll</h3>
<b>Description</b><br />
<blockquote>Raycast objects</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function raycastAll(float x, float y, float z, float nx, float ny, float nz, string raycastFunctionCallback, float maxDistance)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>origin x</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>origin y</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>origin z</td></tr>
<tr><td><i>float</i></td><td><i>nx</i></td><td>direction x</td></tr>
<tr><td><i>float</i></td><td><i>ny</i></td><td>direction y</td></tr>
<tr><td><i>float</i></td><td><i>nz</i></td><td>direction z</td></tr>
<tr><td><i>string</i></td><td><i>raycastFunctionCallback</i></td><td>raycast function callback</td></tr>
<tr><td><i>float</i></td><td><i>maxDistance</i></td><td>max distance</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>numShapes</i></td><td>number of shapes hit</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>raycastClosest</h3>
<b>Description</b><br />
<blockquote>Raycast closest object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function raycastClosest(float x, float y, float z, float nx, float ny, float nz, string raycastFunctionCallback, float maxDistance)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>origin x</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>origin y</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>origin z</td></tr>
<tr><td><i>float</i></td><td><i>nx</i></td><td>direction x</td></tr>
<tr><td><i>float</i></td><td><i>ny</i></td><td>direction y</td></tr>
<tr><td><i>float</i></td><td><i>nz</i></td><td>direction z</td></tr>
<tr><td><i>string</i></td><td><i>raycastFunctionCallback</i></td><td>raycast function callback</td></tr>
<tr><td><i>float</i></td><td><i>maxDistance</i></td><td>max distance</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>numShapes</i></td><td>number of shapes hit</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>overlapSphere</h3>
<b>Description</b><br />
<blockquote>Overlap sphere objects</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function overlapSphere(float x, float y, float z, float radius, string overlapFunctionCallback, object targetObject)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>center x</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>center y</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>center z</td></tr>
<tr><td><i>float</i></td><td><i>radius</i></td><td>radius</td></tr>
<tr><td><i>string</i></td><td><i>overlapFunctionCallback</i></td><td>overlap function callback</td></tr>
<tr><td><i>object</i></td><td><i>targetObject</i></td><td>target object (optional), the callback function is called as a member function of targetObject</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>numShapes</i></td><td>number of shape overlaps</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>overlapBox</h3>
<b>Description</b><br />
<blockquote>Overlap box objects</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function overlapBox(float x, float y, float z, float rx, float ry, float rz, float ex, float ey, float ez, string overlapFunctionCallback, object targetObject)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>center x</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>center y</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>center z</td></tr>
<tr><td><i>float</i></td><td><i>rx</i></td><td>rotation x</td></tr>
<tr><td><i>float</i></td><td><i>ry</i></td><td>rotation y</td></tr>
<tr><td><i>float</i></td><td><i>rz</i></td><td>rotation z</td></tr>
<tr><td><i>float</i></td><td><i>ex</i></td><td>extent x</td></tr>
<tr><td><i>float</i></td><td><i>ey</i></td><td>extent y</td></tr>
<tr><td><i>float</i></td><td><i>ez</i></td><td>extent z</td></tr>
<tr><td><i>string</i></td><td><i>overlapFunctionCallback</i></td><td>overlap function callback</td></tr>
<tr><td><i>object</i></td><td><i>targetObject</i></td><td>target object (optional), the callback function is called as a member function of targetObject</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>numShapes</i></td><td>number of shape overlaps</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>addForce</h3>
<b>Description</b><br />
<blockquote>Add force to object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function addForce(integer transformId, float forceX, float forceY, float forceZ, float positionX, float positionY, float positionZ, boolean isPositionLocal)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>forceX</i></td><td>force x</td></tr>
<tr><td><i>float</i></td><td><i>forceY</i></td><td>force y</td></tr>
<tr><td><i>float</i></td><td><i>forceZ</i></td><td>force z</td></tr>
<tr><td><i>float</i></td><td><i>positionX</i></td><td>position x</td></tr>
<tr><td><i>float</i></td><td><i>positionY</i></td><td>position y</td></tr>
<tr><td><i>float</i></td><td><i>positionZ</i></td><td>position z</td></tr>
<tr><td><i>boolean</i></td><td><i>isPositionLocal</i></td><td>is position local</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>addImpulse</h3>
<b>Description</b><br />
<blockquote>Add impulse to object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function addImpulse(integer transformId, float impulseX, float impulseY, float impulseZ, float positionX, float positionY, float positionZ, boolean isPositionLocal)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>	
<tr><td><i>float</i></td><td><i>impulseX</i></td><td>impulse x</td></tr>
<tr><td><i>float</i></td><td><i>impulseY</i></td><td>impulse y</td></tr>
<tr><td><i>float</i></td><td><i>impulseZ</i></td><td>impulse z</td></tr>
<tr><td><i>float</i></td><td><i>positionX</i></td><td>position x</td></tr>
<tr><td><i>float</i></td><td><i>positionY</i></td><td>position y</td></tr>
<tr><td><i>float</i></td><td><i>positionZ</i></td><td>position z</td></tr>
<tr><td><i>boolean</i></td><td><i>isPositionLocal</i></td><td>is position local</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setJointDrive</h3>
<b>Description</b><br />
<blockquote>Set joint drive. Drives orientation if position drive or angular velocity if velocity drive.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setJointDrive(integer transformId, float angle, float valueX, float valueY, float valueZ)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>angle</i></td><td>orientation angle</td></tr>
<tr><td><i>float</i></td><td><i>valueX</i></td><td>orientation axis x or angular velocity x</td></tr>
<tr><td><i>float</i></td><td><i>valueY</i></td><td>orientation axis y or angular velocity y</td></tr>
<tr><td><i>float</i></td><td><i>valueZ</i></td><td>orientation axis z or angular velocity z</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>createWheelShape</h3>
<b>Description</b><br />
<blockquote>Create wheel shape</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createWheelShape(integer transformId, float positionX, float positionY, float positionZ, float radius, float suspensionTravel, float spring, float damper, float mass)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>positionX</i></td><td>position x</td></tr>
<tr><td><i>float</i></td><td><i>positionY</i></td><td>position y</td></tr>
<tr><td><i>float</i></td><td><i>positionZ</i></td><td>position z</td></tr>
<tr><td><i>float</i></td><td><i>radius</i></td><td>radius</td></tr>
<tr><td><i>float</i></td><td><i>suspensionTravel</i></td><td>suspension travel</td></tr>
<tr><td><i>float</i></td><td><i>spring</i></td><td>spring</td></tr>
<tr><td><i>float</i></td><td><i>damper</i></td><td>damper</td></tr>
<tr><td><i>float</i></td><td><i>mass</i></td><td>mass</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>wheelShapeIndex</i></td><td>wheel shape index</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setWheelShapeProps</h3>
<b>Description</b><br />
<blockquote>Set wheel shape properties</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setWheelShapeProps(integer transformId, integer wheelShapeIndex, float motorTorque, float brakeTorque, float steerAngle)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>integer</i></td><td><i>wheelShapeIndex</i></td><td>wheel shape index</td></tr>
<tr><td><i>float</i></td><td><i>motorTorque</i></td><td>motor torque</td></tr>
<tr><td><i>float</i></td><td><i>brakeTorque</i></td><td>brake torque</td></tr>
<tr><td><i>float</i></td><td><i>steerAngle</i></td><td>steer angle</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>getWheelShapeAxleSpeed</h3>
<b>Description</b><br />
<blockquote>Get wheel shape axle speed</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getWheelShapeAxleSpeed(integer transformId, integer wheelShapeIndex)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>integer</i></td><td><i>wheelShapeIndex</i></td><td>wheelShapeIndex</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>axleSpeed</i></td><td>axle speed</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getWheelShapeContactPoint</h3>
<b>Description</b><br />
<blockquote>Get wheel shape contact point</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getWheelShapeContactPoint(integer transformId, integer wheelShapeIndex)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>integer</i></td><td><i>wheelShapeIndex</i></td><td>wheelShapeIndex</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x position</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y position</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z position</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getWheelShapePosition</h3>
<b>Description</b><br />
<blockquote>Get wheel shape position</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getWheelShapePosition(integer transformId, integer wheelShapeIndex)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>integer</i></td><td><i>wheelShapeIndex</i></td><td>wheelShapeIndex</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x position</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y position</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z position</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>addTrigger</h3>
<b>Description</b><br />
<blockquote>Adds a trigger callback function<br/><br/>
The transformId must have set the trigger flag and must be a static or a kinematic rigid body.<br/>
The given triggerFunctionCallback is called, whenever a dynamic or kinematic body enters or leaves the region defined by the trigger geometry. Static objects do not trigger an event.<br/>
See "trigger callback" in section "Custom callbacks"
</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function addTrigger(integer transformId, string triggerFunctionCallback, object targetObject)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>string</i></td><td><i>triggerFunctionCallback</i></td><td>trigger function callback</td></tr>
<tr><td><i>object</i></td><td><i>targetObject</i></td><td>target object (optional), the callback function is called as a member function of targetObject</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>removeTrigger</h3>
<b>Description</b><br />
<blockquote>Removes trigger callback function</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function removeTrigger(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>addContactReport</h3>
<b>Description</b><br />
<blockquote>Adds contact report callback function</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function addContactReport(integer transformId, float forceThreshold, string contactReportFunctionCallback, object targetObject)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>forceThreshold</i></td><td>force threshold</td></tr>
<tr><td><i>string</i></td><td><i>triggerFunctionCallback</i></td><td>contact report function callback</td></tr>
<tr><td><i>object</i></td><td><i>targetObject</i></td><td>target object (optional), the callback function is called as a member function of targetObject</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>removeContactReport</h3>
<b>Description</b><br />
<blockquote>Removes contact report callback function</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function removeContactReport(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<br /><br /><br />



<h3>getRigidBodyType</h3>
<b>Description</b><br />
<blockquote>Get rigid body type</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getRigidBodyType(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>type</i></td><td>rigid body type ("Static", "Dynamic", "Kinematic" or "NoRigidBody")</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setRigidBodyType</h3>
<b>Description</b><br />
<blockquote>Set rigid body type</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setRigidBodyType(integer transformId, string type)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>string</i></td><td><i>type</i></td><td>rigid body type ("Static", "Dynamic", "Kinematic" or "NoRigidBody")</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getCollisionMask</h3>
<b>Description</b><br />
<blockquote>Get collision mask</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getCollisionMask(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>mask</i></td><td>collision mask</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setCollisionMask</h3>
<b>Description</b><br />
<blockquote>Set collision mask</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setCollisionMask(integer transformId, integer mask)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>integer</i></td><td><i>mask</i></td><td>collision mask</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getCenterOfMass</h3>
<b>Description</b><br />
<blockquote>Get center of mass</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getCenterOfMass(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x position</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y position</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z position</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setCenterOfMass</h3>
<b>Description</b><br />
<blockquote>Set center of mass</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setCenterOfMass(integer transformId, float x, float y, float z)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>x position</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y position</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z position</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>getMass</h3>
<b>Description</b><br />
<blockquote>Set mass</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getMass(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>mass</i></td><td>mass</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setMass</h3>
<b>Description</b><br />
<blockquote>Set mass</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setMass(integer transformId, float mass)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>mass</i></td><td>mass</td></tr>
</table></blockquote>
<br /><br /><br />

<a name="runtime_function_reference_spline"><h2>Spline Function Reference</h2></a>
<br />
<h3>getSplinePosition</h3>
<b>Description</b><br />
<blockquote>Get spline position</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getSplinePosition(integer shapeId, float time)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>shapeId</i></td><td>id of curve shape object</td></tr>
<tr><td><i>float</i></td><td><i>time</i></td><td>time [0,1]</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x coordinate</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y coordinate</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z coordinate</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getSplineOrientation</h3>
<b>Description</b><br />
<blockquote>Get spline orientation</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getSplineOrientation(integer shapeId, float time, float upDirX, float upDirY, float upDirZ)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>shapeId</i></td><td>id of curve shape object</td></tr>
<tr><td><i>float</i></td><td><i>time</i></td><td>time [0,1]</td></tr>
<tr><td><i>float</i></td><td><i>upDirX</i></td><td>up direction x coordinate</td></tr>
<tr><td><i>float</i></td><td><i>upDirY</i></td><td>up direction y coordinate</td></tr>
<tr><td><i>float</i></td><td><i>upDirZ</i></td><td>up direction z coordinate</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>rx</i></td><td>x rotation</td></tr>
<tr><td><i>float</i></td><td><i>ry</i></td><td>y rotation</td></tr>
<tr><td><i>float</i></td><td><i>rz</i></td><td>z rotation</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getSplineLength</h3>
<b>Description</b><br />
<blockquote>Get spline length</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getSplineLength(integer shapeId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>shapeId</i></td><td>id of curve shape object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>length</i></td><td>length of spline</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getSplineNumOfCV</h3>
<b>Description</b><br />
<blockquote>Get number of spline control vertices</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getSplineNumOfCV(integer shapeId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>shapeId</i></td><td>id of curve shape object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>num</i></td><td>number of spline control vertices</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getSplineCV</h3>
<b>Description</b><br />
<blockquote>Get spline control vertex</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getSplineCV(integer shapeId, float time)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>shapeId</i></td><td>id of curve shape object</td></tr>
<tr><td><i>integer</i></td><td><i>index</i></td><td>control vertex index</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>control vertex x coordinate</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>control vertex y coordinate</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>control vertex z coordinate</td></tr>
</table></blockquote>
<br />
<br /><br /><br />



<a name="runtime_function_reference_animation"><h2>Animation Function Reference</h2></a>

<br />

<h3>getAnimCharacterSet</h3>
<b>Description</b><br />
<blockquote>Returns the character set driving the transform group</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getAnimCharacterSet(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform group</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>id</i></td><td>id of character set object, 0 if no character set is assigned to the transform group</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>enableAnimTrack</h3>
<b>Description</b><br />
<blockquote>Enable animation track</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function enableAnimTrack(integer characterSetId, integer track)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>track</i></td><td>track number</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>disableAnimTrack</h3>
<b>Description</b><br />
<blockquote>Disable animation track</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function disableAnimTrack(string characterSetId, integer track)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>characterSetId</i></td><td>name of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>track</i></td><td>track number</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>isAnimTrackEnabled</h3>
<b>Description</b><br />
<blockquote>Is animation track enabled</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function isAnimTrackEnabled(integer characterSetId, integer track)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>track</i></td><td>track number</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>bool</i></td><td><i>state</i></td><td>enable state</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setAnimTrackSpeedScale</h3>
<b>Description</b><br />
<blockquote>Set animation track speed scale</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setAnimTrackSpeedScale(integer characterSetId, integer track, float speedScale)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>track</i></td><td>track number</td></tr>
<tr><td><i>float</i></td><td><i>speedScale</i></td><td>speed scale</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setAnimTrackLoopState</h3>
<b>Description</b><br />
<blockquote>Set animation track loop state</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setAnimTrackLoopState(integer characterSetId, integer track, bool loopState)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>track</i></td><td>track number</td></tr>
<tr><td><i>bool</i></td><td><i>loopState</i></td><td>loop scale</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>setAnimTrackTime</h3>
<b>Description</b><br />
<blockquote>Set animation track time</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setAnimTrackTime(integer characterSetId, integer track, float time)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>track</i></td><td>track number</td></tr>
<tr><td><i>float</i></td><td><i>time</i></td><td>time</td></tr>
</table></blockquote>
<br />
<br /><br /><br />



<h3>getAnimTrackTime</h3>
<b>Description</b><br />
<blockquote>Get animation track time</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getAnimTrackTime(integer characterSetId, integer track)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>track</i></td><td>track number</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>time</i></td><td>current time</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getAnimClipDuration</h3>
<b>Description</b><br />
<blockquote>Get the duration of the clip at the given index</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getAnimClipDuration(integer characterSetId, integer index)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>index</i></td><td>clip index</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>duration</i></td><td>clip duration</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>setAnimTrackBlendWeight</h3>
<b>Description</b><br />
<blockquote>Set animation track blend weight</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setAnimTrackBlendWeight(integer characterSetId, integer track, float weight)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>track</i></td><td>track number</td></tr>
<tr><td><i>float</i></td><td><i>weight</i></td><td>blend weight</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>getAnimTrackBlendWeight</h3>
<b>Description</b><br />
<blockquote>Get animation track blend weight</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getAnimTrackBlendWeight(integer characterSetId, integer track)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>track</i></td><td>track number</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>weight</i></td><td>blend weight</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getAnimClipIndex</h3>
<b>Description</b><br />
<blockquote>Returns the index of the clip with the given name</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getAnimClipIndex(integer characterSetId, string clipName)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>string</i></td><td><i>clipName</i></td><td>the name of the clip to find</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>index</i></td><td>index of the clip, -1 if clip was not found</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>assignAnimTrackClip</h3>
<b>Description</b><br />
<blockquote>Assign clip to animation track</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function assignAnimTrackClip(integer characterSetId, integer track, float clipIndex)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>track</i></td><td>track number</td></tr>
<tr><td><i>float</i></td><td><i>clipIndex</i></td><td>clip index number</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>isAnimTrackClipAssigned</h3>
<b>Description</b><br />
<blockquote>Is clip assigned to animation track</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function isAnimTrackClipAssigned(integer characterSetId, integer track)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>track</i></td><td>track number</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>bool</i></td><td><i>state</i></td><td>assigned state</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getAnimTrackAssignedClip</h3>
<b>Description</b><br />
<blockquote>Get animation track assigned clip index number</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getAnimTrackAssignedClip(integer characterSetId, integer track)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>track</i></td><td>track number</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>clipIndex</i></td><td>clip index number</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>clearAnimTrackClip</h3>
<b>Description</b><br />
<blockquote>Clear animation track clip assignment</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function clearAnimTrackClip(integer characterSetId, integer track)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
<tr><td><i>integer</i></td><td><i>track</i></td><td>track number</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getAnimNumOfClips</h3>
<b>Description</b><br />
<blockquote>Get number of clips</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getAnimNumOfClips(integer characterSetId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>characterSetId</i></td><td>id of CharacterSet object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>clips</i></td><td>number of clips</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<a name="runtime_function_reference_overlays"><h2>Overlays Function Reference</h2></a>

<br />

<h3>createOverlay</h3>
<b>Description</b><br />
<blockquote>Create image overlay object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createOverlay(string overlayName, string textureFilename)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>overlayName</i></td><td>overlay name</td></tr>
<tr><td><i>string</i></td><td><i>textureFilename</i></td><td>texture file name</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>deprecated, use createImageOverlay</i></blockquote>
<br />
<br /><br /><br />

<h3>createImageOverlay</h3>
<b>Description</b><br />
<blockquote>Create overlay object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createImageOverlay(string textureFilename)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>textureFilename</i></td><td>texture file name</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.3</i></blockquote>
<br />
<br /><br /><br />

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
<br />
<br /><br /><br />

<h3>setOverlayUVs</h3>
<b>Description</b><br />
<blockquote>Set overlay uv coordinates</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setOverlayUVs(integer overlayId, float u0, float v0, float u1, float v1, float u2, float v2, float u3, float v3)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>overlayId</i></td><td>overlay id</td></tr>
<tr><td><i>float</i></td><td><i>v0</i></td><td>v0 texture coodinate</td></tr>
<tr><td><i>float</i></td><td><i>u0</i></td><td>u0 texture coodinate</td></tr>
<tr><td><i>float</i></td><td><i>v1</i></td><td>v1 texture coodinate</td></tr>
<tr><td><i>float</i></td><td><i>u1</i></td><td>u1 texture coodinate</td></tr>
<tr><td><i>float</i></td><td><i>v2</i></td><td>v2 texture coodinate</td></tr>
<tr><td><i>float</i></td><td><i>u2</i></td><td>u2 texture coodinate</td></tr>
<tr><td><i>float</i></td><td><i>v3</i></td><td>v3 texture coodinate</td></tr>
<tr><td><i>float</i></td><td><i>u3</i></td><td>u3 texture coodinate</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

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
<br />
<br /><br /><br />

<h3>createVideoOverlay</h3>
<b>Description</b><br />
<blockquote>Create video overlay object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createVideoOverlay(string videoFilename, bool loopVideo, float soundVolume)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>videoFilename</i></td><td>video file name</td></tr>
<tr><td><i>bool</i></td><td><i>loopVideo</i></td><td>loop video</td></tr>
<tr><td><i>float</i></td><td><i>soundVolume</i></td><td>sound volume [0,1]</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.3</i></blockquote>
<br />
<br /><br /><br />

<h3>playVideoOverlay</h3>
<b>Description</b><br />
<blockquote>Play video overlay object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function playVideoOverlay(integer videoOverlayId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>videoOverlayId</i></td><td>overlay id</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.3</i></blockquote>
<br />
<br /><br /><br />

<h3>stopVideoOverlay</h3>
<b>Description</b><br />
<blockquote>Stop video overlay object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function stopVideoOverlay(integer videoOverlayId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>videoOverlayId</i></td><td>overlay id</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.3</i></blockquote>
<br />
<br /><br /><br />

<h3>updateVideoOverlay</h3>
<b>Description</b><br />
<blockquote>Update video overlay object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function updateVideoOverlay(integer videoOverlayId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>videoOverlayId</i></td><td>overlay id</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.3</i></blockquote>
<br />
<br /><br /><br />

<h3>getVideoOverlayDuration</h3>
<b>Description</b><br />
<blockquote>Get video overlay duration</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getVideoOverlayDuration(integer videoOverlayId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>videoOverlayId</i></td><td>overlay id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>videoDuration</i></td><td>video duration in milliseconds</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.3</i></blockquote>
<br />
<br /><br /><br />

<h3>isVideoOverlayPlaying</h3>
<b>Description</b><br />
<blockquote>Get is video overlay playing</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function isVideoOverlayPlaying(integer videoOverlayId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>videoOverlayId</i></td><td>overlay id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>bool</i></td><td><i>isVideoOverlayPlaying</i></td><td>is video overlay playing</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.3</i></blockquote>
<br />
<br /><br /><br />
<a name="runtime_function_reference_sound"><h2>Sound Function Reference</h2></a>

<br />

<h3>createSample</h3>
<b>Description</b><br />
<blockquote>Create sample object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createSample(string objectName)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>objectName</i></td><td>sample object name</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>sampleId</i></td><td>id of the created sample</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>loadSample</h3>
<b>Description</b><br />
<blockquote>Load sample object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function loadSample(integer objectId, string sampleFilename, bool b3DSound)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of sample object</td></tr>
<tr><td><i>string</i></td><td><i>sampleFilename</i></td><td>Sample filename (.wav)</td></tr>
<tr><td><i>bool</i></td><td><i>b3DSound</i></td><td>true=enables 3D Sound-Rendering, false=disables 3D Sound-Rendering</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>playSample</h3>
<b>Description</b><br />
<blockquote>Play sample object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function playSample(integer objectId, integer loops, float volume, float offset)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of sample object</td></tr>
<tr><td><i>integer</i></td><td><i>loops</i></td><td>number of loops [0,n] 0 = endless looping</td></tr>
<tr><td><i>float</i></td><td><i>volume</i></td><td>volume [0,1]</td></tr>
<tr><td><i>float</i></td><td><i>offset</i></td><td>offset in milliseconds</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>stopSample</h3>
<b>Description</b><br />
<blockquote>Stop sample object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function stopSample(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of sample object</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setSamplePitch</h3>
<b>Description</b><br />
<blockquote>Set sample pitch</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setSamplePitch(integer objectId, float pitch)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of sample object</td></tr>    
<tr><td><i>float</i></td><td><i>pitch</i></td><td>pitch value [0.5-2.0]</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getSamplePitch</h3>
<b>Description</b><br />
<blockquote>Get sample pitch</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getSamplePitch(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of sample object</td></tr>    
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>pitch</i></td><td>pitch of sample object</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setSampleVolume</h3>
<b>Description</b><br />
<blockquote>Set sample volume</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setSampleVolume(integer objectId, float volume)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of sample object</td></tr>    
<tr><td><i>float</i></td><td><i>volume</i></td><td>volume value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getSampleVolume</h3>
<b>Description</b><br />
<blockquote>Get sample volume</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getSampleVolume(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of sample object</td></tr>    
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>volume</i></td><td>volume of sample object</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getSampleDuration</h3>
<b>Description</b><br />
<blockquote>Get sample duration</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getSampleDuration(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of sample object</td></tr>    
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>duration</i></td><td>duration in milliseconds</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setSampleVelocity</h3>
<b>Description</b><br />
<blockquote>Set velocity of a sample object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setSampleVelocity(int sampleId, float x, float y, float z)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>velocity value towards x</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>velocity value towards y</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>velocity value towards z</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getSampleVelocity</h3>
<b>Description</b><br />
<blockquote>Get velocity of a sample object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getSampleVelocity(integer transformId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x value of velocity towards x</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y value of velocity towards y</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z value of velocity towards z</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>enableSampleFX</h3>
<b>Description</b><br />
<blockquote>enable audio effects - Reverberation</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function enableSampleFX(integer objectId, int reverbPresetType)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of sample object</td></tr>    
<tr><td><i>int</i></td><td><i>reverbPresetType</i></td><td>reverberation preset id [1, 68]</td></tr>
</table></blockquote>
<br />
<br /><br /><br/>

<h3>disableSampleFX</h3>
<b>Description</b><br />
<blockquote>disable audio effects - Reverberation</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function disableSampleFX(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of sample object</td></tr>    
</table></blockquote>
<br />
<br /><br /><br/>

<h3>enableSampleFilter</h3>
<b>Description</b><br />
<blockquote>enable audio filters</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function enableSampleFilter(integer objectId, int filterType, float gain, float gainLF, float gainHF)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of sample object</td></tr>    
<tr><td><i>int</i></td><td><i>reverbPresetType</i></td><td>filter type id [0, 3]</td></tr>
<tr><td><i>float</i></td><td><i>gain</i></td><td>gain [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>gainLF</i></td><td>gain low frequency [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>gainHF</i></td><td>gain high frequency [0, 1]</td></tr>
</table></blockquote>
<br />
<br /><br /><br/>

<h3>disableSampleFilter</h3>
<b>Description</b><br />
<blockquote>disable audio filter</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function disableSampleFilter(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of sample object</td></tr>    
</table></blockquote>
<br />
<br /><br /><br/>

<!--StreamedSample-->
<h3>createStreamedSample</h3>
<b>Description</b><br />
<blockquote>Create streamed sample object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createStreamedSample(string objectName)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>objectName</i></td><td>streamed sample object name</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>sampleId</i></td><td>id of the created sample</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>loadStreamedSample</h3>
<b>Description</b><br />
<blockquote>Load streamed sample object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function loadStreamedSample(integer objectId, string bgmusicFilename)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of streamed sample object</td></tr>
<tr><td><i>string</i></td><td><i>bgmusicFilename</i></td><td>streamed sample filename (.ogg)</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>playStreamedSample</h3>
<b>Description</b><br />
<blockquote>Play streamed sample music object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function playStreamedSample(integer objectId, integer repeat)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of streamed sample object</td></tr>
<tr><td><i>integer</i></td><td><i>repeat</i></td><td>amount of recurrences. 0 means endless loop.</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>pauseStreamedSample</h3>
<b>Description</b><br />
<blockquote>Pause streamed sample object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function pauseStreamedSample(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of streamed sample object</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>resumeStreamedSample</h3>
<b>Description</b><br />
<blockquote>Resume streamed sample</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function resumeStreamedSample(integer objectId</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of streamed sample object</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>stopStreamedSample</h3>
<b>Description</b><br />
<blockquote>Stop streamed sample object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function stopStreamedSample(integer objectId</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of streamed sample object</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setStreamedSampleVolume</h3>
<b>Description</b>
<br />
<blockquote>Set streamed sample volume</blockquote>
<br />
<b>Definition</b>
<br />
<blockquote><i>function setStreamedSampleVolume(integer objectId, float volume)</i></blockquote>
<br />
<b>Arguments</b>
<br />
<blockquote>
<table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td>
<td><i>objectId</i></td>
<td>id of sample object</td>
</tr><tr><td><i>float</i></td>
<td><i>volume</i></td>
<td>volume value</td>
</tr></table>
</blockquote>
<br /><br /><br /><br />

<h3>getStreamedSampleVolume</h3>
<b>Description</b>
<br />
<blockquote>Get streamed sample volume</blockquote>
<br />
<b>Definition</b>
<br />
<blockquote> <i>function getStreamedSampleVolume(integer objectId)</i></blockquote>
<br />
<b>Arguments</b>
<br /><blockquote>
<table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td>
<td><i>objectId</i> </td>
<td>id of sample object</td>
</tr></table>
</blockquote>
<br /><b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td>
<td><i>volume</i></td>
<td>volume of sample object</td></tr>
</table>
</blockquote>
<br /><br /><br /><br />

<!--AudioSource-->
<h3>createAudioSource</h3>
<b>Description</b><br />
<blockquote>Create audio source object for 3D sounds</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createAudioSource(string audioSourceName, string sampleFilename, float radius, float innerRadius, float volume, integer loops)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>audioSourceName</i></td><td>audio source name</td></tr>
<tr><td><i>string</i></td><td><i>sampleFilename</i></td><td>sample file name (.wav or .ogg)</td></tr>
<tr><td><i>float</i></td><td><i>radius</i></td><td>radius</td></tr>
<tr><td><i>float</i></td><td><i>innerRadius</i></td><td>inner radius</td></tr>
<tr><td><i>float</i></td><td><i>volume</i></td><td>volume [0,1]</td></tr>
<tr><td><i>integer</i></td><td><i>loops</i></td><td>loops</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getAudioSourceSample</h3>
<b>Description</b><br />
<blockquote>Gets the sample id of an audio source</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getAudioSourceSample(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>id</i></td><td><i>objectId</i></td><td>id of the audio source</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>sampleId</i></td><td>id of the sample</td></tr>
</table></blockquote>
<br /><br /><br />

<a name="runtime_function_reference_input"><h1>Input Function Reference</h1></a>

<br />

<h3>getInputAxis</h3>
<b>Description</b><br />
<blockquote>Get joystick/gampad axis value</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getInputAxis(integer axisNumber)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>axisNumber</i></td><td>axis number [0=Input.AXIS_1, 5=Input.AXIS_6], </td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>axisValue</i></td><td>axis value [-1, 1]</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getInputButton</h3>
<b>Description</b><br />
<blockquote>Get joystick/gampad button value</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getInputButton(integer buttonNumber)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>buttonNumber</i></td><td>button number [0=Input.BUTTON_1, 15==Input.BUTTON_16]</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>buttonValue</i></td><td>button value [0, 1]</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3><a href="#runtime_function_reference_callbacks">keyEvent and mouseEvent callbacks</a></h3>

<br /><br /><br />

<a name="runtime_function_reference_XML"><h2>XML Function Reference</h2></a>

<a name="xml_path"><h3>XML Path</h3></a>
<blockquote>
XML paths used in the getXML... and setXML... functions have the following format:<br/>
node1.node2.....nodeN<br/>or<br/>node1.node2.....nodeN#attribute.<br/>
<br/>
Example:<br/>
&lt;test&gt;<br/>
&nbsp;&nbsp;&nbsp;&lt;test1 attr="test"&gt;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is some text<br/>
&nbsp;&nbsp;&nbsp;&lt;/test1&gt;<br/>
&lt;/test&gt;<br/>
<br/>
To get the attribute "attr", use the path test.test1#attr.<br/>
To get the content of test1, use the path test.test1.<br/>
</blockquote>

<br />

<h3>createXMLFile</h3>
<b>Description</b><br />
<blockquote>Create an empty XML file</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createXMLFile(string objectName, string filename, string rootNodeName)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>objectName</i></td><td>internal name for the object created</td></tr>
<tr><td><i>string</i></td><td><i>filename</i></td><td>filename (full path)</td></tr>
<tr><td><i>string</i></td><td><i>rootNodeName</i></td><td>name of the root node</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>loadXMLFile</h3>
<b>Description</b><br />
<blockquote>Load XML file</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function loadXMLFile(string objectName, string filename)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>objectName</i></td><td>internal name for the object created</td></tr>
<tr><td><i>string</i></td><td><i>filename</i></td><td>filename (full path)</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>saveXMLFile</h3>
<b>Description</b><br />
<blockquote>Save XML file</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function saveXMLFile(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getXMLInt</h3>
<b>Description</b><br />
<blockquote>Get XML file integer attribute<br/>See <a href="#xml_path">XML Path</a></blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getXMLInt(integer objectId, string attributePath)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>attributePath</i></td><td>attribute path</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>value</i></td><td>attribute value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getXMLFloat</h3>
<b>Description</b><br />
<blockquote>Get XML file float attribute<br/>See <a href="#xml_path">XML Path</a></blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getXMLFloat(integer objectId, string attributePath)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>attributePath</i></td><td>attribute path</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>value</i></td><td>attribute value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getXMLBool</h3>
<b>Description</b><br />
<blockquote>Get XML file boolean attribute<br/>See <a href="#xml_path">XML Path</a></blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getXMLBool(integer objectId, string attributePath)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>attributePath</i></td><td>attribute path</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>value</i></td><td>attribute value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>getXMLString</h3>
<b>Description</b><br />
<blockquote>Get XML file string attribute<br/>See <a href="#xml_path">XML Path</a></blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getXMLString(integer objectId, string attributePath)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>attributePath</i></td><td>attribute path</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>value</i></td><td>attribute value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>setXMLInt</h3>
<b>Description</b><br />
<blockquote>Set XML file integer attribute<br/>See <a href="#xml_path">XML Path</a></blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setXMLInt(integer objectId, string attributePath, integer value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>attributePath</i></td><td>attribute path</td></tr>
<tr><td><i>integer</i></td><td><i>value</i></td><td>attribute value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setXMLFloat</h3>
<b>Description</b><br />
<blockquote>Set XML file float attribute<br/>See <a href="#xml_path">XML Path</a></blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setXMLFloat(integer objectId, string attributePath, float value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>attributePath</i></td><td>attribute path</td></tr>
<tr><td><i>float</i></td><td><i>value</i></td><td>attribute value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setXMLBool</h3>
<b>Description</b><br />
<blockquote>Set XML file boolean attribute<br/>See <a href="#xml_path">XML Path</a></blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setXMLBool(integer objectId, string attributePath, boolean value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>attributePath</i></td><td>attribute path</td></tr>
<tr><td><i>boolean</i></td><td><i>value</i></td><td>attribute value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>setXMLString</h3>
<b>Description</b><br />
<blockquote>Set XML file string attribute<br/>See <a href="#xml_path">XML Path</a></blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setXMLString(integer objectId, string attributePath, boolean value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>attributePath</i></td><td>attribute path</td></tr>
<tr><td><i>boolean</i></td><td><i>value</i></td><td>attribute value</td></tr>
</table></blockquote>
<br /><br /><br />

<a name="runtime_function_reference_network"><h2>Network Function Reference</h2></a>

<br />

<h3>netStartup</h3>
<b>Description</b><br />
<blockquote>Startup network subsystem</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function netStartup(integer maxConnections, integer threadSleepTimer, string localHostAddress, integer port, string packetReceivedCallback, object targetObject)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>maxConnections</i></td><td>max connections</td></tr>
<tr><td><i>integer</i></td><td><i>threadSleepTimer</i></td><td>thread sleep timer (milliseconds)</td></tr>
<tr><td><i>string</i></td><td><i>localHostAddress</i></td><td>local listen host address. Leave empty to disable listen port.</td></tr>
<tr><td><i>integer</i></td><td><i>port</i></td><td>listen port number</td></tr>
<tr><td><i>string</i></td><td><i>packetReceivedCallback</i></td><td>callback function which is called when a packet was received</td></tr>
<tr><td><i>object</i></td><td><i>targetObject</i></td><td>target object (optional), the callback function is called as a member function of targetObject</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>result</i></td><td>true if successful false otherwise</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>netSetMaximumIncomingConnections</h3>
<b>Description</b><br />
<blockquote>Set maximum incoming connections</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function netSetMaximumIncomingConnections(integer maximumIncomingConnections)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>maximumIncomingConnections</i></td><td>maximum incoming connections</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>netSetIncomingPassword</h3>
<b>Description</b><br />
<blockquote>Set incoming password</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function netSetIncomingPassword(string incomingPassword)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>incomingPassword</i></td><td>incoming password</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>netConnect</h3>
<b>Description</b><br />
<blockquote>Connect</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function netConnect(string host, integer port, string password)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>host</i></td><td>remote host address</td></tr>
<tr><td><i>integer</i></td><td><i>port</i></td><td>remote post address</td></tr>
<tr><td><i>string</i></td><td><i>password</i></td><td>connection password</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id (zero if failed)</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>netCloseConnection</h3>
<b>Description</b><br />
<blockquote>Close network connection</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function netCloseConnection(integer streamId, boolean sendDisconnectionNotification, integer orderingChannel)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>sendDisconnectionNotification</i></td><td>send disconnection notification</td></tr>
<tr><td><i>integer</i></td><td><i>orderingChannel</i></td><td>ordering channel</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>netShutdown</h3>
<b>Description</b><br />
<blockquote>Network shutdown</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function netShutdown(integer maxBlockDurationTime, integer orderingChannel)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
<tr><td><i>integer</i></td><td><i>maxBlockDurationTime</i></td><td>maximum blocking duration time</td></tr>
<tr><td><i>integer</i></td><td><i>orderingChannel</i></td><td>ordering channel</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>netSendStream</h3>
<b>Description</b><br />
<blockquote>Network send stream</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function netSendStream(integer streamId, string priority, string reliability, integer orderingChannel, boolean flushStream)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
<tr><td><i>string</i></td><td><i>priority</i></td><td>priority (low, medium or high)</td></tr>
<tr><td><i>string</i></td><td><i>reliability</i></td><td>reliability (unreliable, unreliable_sequenced, reliable, reliable_sequenced or reliable_ordered)</td></tr>
<tr><td><i>integer</i></td><td><i>orderingChannel</i></td><td>ordering channel</td></tr>
<tr><td><i>boolean</i></td><td><i>flushStream</i></td><td>flush stream</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamWriteBool</h3>
<b>Description</b><br />
<blockquote>Stream write boolean</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamWriteBool(integer streamId, boolean value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
<tr><td><i>boolean</i></td><td><i>value</i></td><td>value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamWriteInt8</h3>
<b>Description</b><br />
<blockquote>Stream write 8bit sigend integer</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamWriteInt8(integer value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
<tr><td><i>integer</i></td><td><i>value</i></td><td>value [-127, 127]</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamWriteInt16</h3>
<b>Description</b><br />
<blockquote>Stream write 16bit signed integer</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamWriteInt16(integer value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
<tr><td><i>integer</i></td><td><i>value</i></td><td>value [-32768, 32768]</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamWriteInt32</h3>
<b>Description</b><br />
<blockquote>Stream write 32bit signed integer</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamWriteInt32(integer value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
<tr><td><i>integer</i></td><td><i>value</i></td><td>value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamWriteIntN</h3>
<b>Description</b><br />
<blockquote>Stream write N bit signed integer. 0&gt;N&gt;32.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamWriteIntN(integer value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
<tr><td><i>integer</i></td><td><i>value</i></td><td>value [-2^(N-1), 2^(N-1)]</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamWriteFloat32</h3>
<b>Description</b><br />
<blockquote>Stream write 32bit float</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamWriteFloat32(float value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
<tr><td><i>float</i></td><td><i>value</i></td><td>value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamWriteString</h3>
<b>Description</b><br />
<blockquote>Stream write string</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamWriteString(string value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
<tr><td><i>string</i></td><td><i>value</i></td><td>value, max 64k characters</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamReadBool</h3>
<b>Description</b><br />
<blockquote>Stream read boolean</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamReadBool(integer streamId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>value</i></td><td>value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamReadInt8</h3>
<b>Description</b><br />
<blockquote>Stream read 8bit signed integer</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamReadInt8(integer streamId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>value</i></td><td>value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamReadInt16</h3>
<b>Description</b><br />
<blockquote>Stream read 16bit signed integer</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamReadInt16(integer streamId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>value</i></td><td>value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamReadInt32</h3>
<b>Description</b><br />
<blockquote>Stream read 32bit signed integer</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamReadInt32(integer streamId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>value</i></td><td>value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamReadIntN</h3>
<b>Description</b><br />
<blockquote>Stream read N bit signed integer</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamReadIntN(integer streamId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>value</i></td><td>value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamReadFloat32</h3>
<b>Description</b><br />
<blockquote>Stream read 32bit float</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamReadFloat32(integer streamId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>value</i></td><td>value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamReadString</h3>
<b>Description</b><br />
<blockquote>Stream read string</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamReadString(integer streamId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>value</i></td><td>value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamGetNumOfUnreadBits</h3>
<b>Description</b><br />
<blockquote>Stream get number of unread bits</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamGetNumOfUnreadBits(integer streamId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>value</i></td><td>number of unread bit</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>streamGetReadOffset</h3>
<b>Description</b><br />
<blockquote>Stream get read offset</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamGetReadOffset(integer streamId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>offset</i></td><td>Read offset</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>Network defines</h3>
<b>Description</b><br />
<blockquote>Network message types</blockquote>
<br />
<b>Definition</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>Variable</i></td><td>Description</td></tr>
<tr><td><i>Network.TYPE_APPLICATION</i></td><td>Application</td></tr>
<tr><td><i>Network.TYPE_CONNECTION_REQUEST_ACCEPTED</i></td><td>Connection request accepted</td></tr>
<tr><td><i>Network.TYPE_CONNECTION_ATTEMPT_FAILED</i></td><td>Connection attempt failed</td></tr>
<tr><td><i>Network.TYPE_ALREADY_CONNECTED</i></td><td>Already connected</td></tr>
<tr><td><i>Network.TYPE_NEW_INCOMING_CONNECTION</i></td><td>New incoming connection</td></tr>
<tr><td><i>Network.TYPE_NO_FREE_INCOMING_CONNECTIONS</i></td><td>No free incoming connections</td></tr>
<tr><td><i>Network.TYPE_DISCONNECTION_NOTIFICATION</i></td><td>Disconnection notification</td></tr>
<tr><td><i>Network.TYPE_CONNECTION_LOST</i></td><td>Connection lost</td></tr>
<tr><td><i>Network.TYPE_RSA_PUBLIC_KEY_MISMATCH</i></td><td>RSA public key mismatch</td></tr>
<tr><td><i>Network.TYPE_CONNECTION_BANNED</i></td><td>Connection banned</td></tr>
<tr><td><i>Network.TYPE_INVALID_PASSWORD</i></td><td>Invalid password</td></tr>
<tr><td><i>Network.TYPE_MODIFIED_PACKET</i></td><td>Modified packet</td></tr>
<tr><td><i>Network.TYPE_PONG</i></td><td>Pong</td></tr>
<tr><td><i>Network.TYPE_ADVERTISE_SYSTEM</i></td><td>Advertise system</td></tr>
<tr><td><i>Network.TYPE_REMOTE_DISCONNECTION_NOTIFICATION</i></td><td>Remote disconnection notification</td></tr>
<tr><td><i>Network.TYPE_REMOTE_CONNECTION_LOST</i></td><td>Remote connection lost</td></tr>
<tr><td><i>Network.TYPE_REMOTE_NEW_INCOMING_CONNECTION</i></td><td>Remote new incoming connection</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<a name="runtime_function_reference_callbacks"><h2>Callbacks Function Reference</h2></a>
<br />
<h2>Default callbacks</h2>

<h3>init</h3>
<b>Description</b><br />
<blockquote>This function is called once on startup. Create and load objects here.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function init()</i></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>success</i></td><td>return true if successful</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>keyEvent</h3>
<b>Description</b><br />
<blockquote>This function is called when a key event occurs.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function keyEvent(float unicode, float sym, float modifier, boolean isDown)</i></blockquote>
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>unicode</i></td><td>unicode value</td></tr>
<tr><td><i>float</i></td><td><i>sym</i></td><td>sym key</td></tr>
<tr><td><i>float</i></td><td><i>modifier</i></td><td>key modifier</td></tr>
<tr><td><i>boolean</i></td><td><i>isDown</i></td><td>is down state</td></tr>
</table></blockquote>
<br /><br /><br />

<h3>mouseEvent</h3>
<b>Description</b><br />
<blockquote>This function is called when a mouse event occurs.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function mouseEvent(float posX, float posY, boolean isDown, boolean isUp, float button)</i></blockquote>
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>posX</i></td><td>x position [0,1]</td></tr>
<tr><td><i>float</i></td><td><i>posY</i></td><td>y position [0,1]</td></tr>
<tr><td><i>boolean</i></td><td><i>isDown</i></td><td>is down state</td></tr>
<tr><td><i>boolean</i></td><td><i>isUp</i></td><td>is up state</td></tr>
<tr><td><i>float</i></td><td><i>button</i></td><td>button number</td></tr>
</table></blockquote>
<br /><br /><br />

<h3>update</h3>
<b>Description</b><br />
<blockquote>This function is called once per frame to update game state.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function update(float dt)</i></blockquote>
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>dt</i></td><td>time between this frame and last frame in milliseconds</td></tr>
</table></blockquote>
<br />
<br /><br />

<h3>draw</h3>

<b>Description</b><br />
<blockquote>This function is called once per frame to draw game objects. Call render functions here.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function draw()</i></blockquote>
<br />


<h2>Custom callbacks</h2>

<h3>trigger callback</h3>
<b>Description</b><br />
<blockquote>This function is called when a trigger event occurs.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function triggerFunctionName(integer triggerId, string otherId, boolean onEnter, boolean onLeave, boolean onStay)</i></blockquote>
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>triggerId</i></td><td>id of the trigger node</td></tr>
<tr><td><i>integer</i></td><td><i>otherId</i></td><td>id of the other node</td></tr>
<tr><td><i>boolean</i></td><td><i>onEnter</i></td><td>on enter state</td></tr>
<tr><td><i>boolean</i></td><td><i>onLeave</i></td><td>on leave state</td></tr>
<tr><td><i>boolean</i></td><td><i>onStay</i></td><td>on stay state</td></tr>
</table></blockquote>
<br /><br /><br />

<h3>contact callback</h3>
<b>Description</b><br />
<blockquote>This function is called when a contact event occurs.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function onContact(integer objectId, integer otherObjectId, boolean isStart, float normalForce, float tangentialForce)</i></blockquote>
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of the object</td></tr>
<tr><td><i>integer</i></td><td><i>otherObjectId</i></td><td>id of the other object</td></tr>
<tr><td><i>boolean</i></td><td><i>isStart</i></td><td>is start touch</td></tr>
<tr><td><i>float</i></td><td><i>normalForce</i></td><td>normal contact force</td></tr>
<tr><td><i>float</i></td><td><i>tangentialForce</i></td><td>tangential contact force</td></tr>
</table></blockquote>
<br /><br /><br />

<h3>raycast callback</h3>
<b>Description</b><br />
<blockquote>This function is called when a raycast hit event occurs.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function raycastFunctionName(integer hitObjectId, float x, float y, float z, float distance)</i></blockquote>
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>hitObjectId</i></td><td>id of the hit node</td></tr>
<tr><td><i>float</i></td><td><i>x</i></td><td>world impact x</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>world impact y</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>world impact z</td></tr>
<tr><td><i>float</i></td><td><i>distance</i></td><td>distance</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>continue</i></td><td>continue raycasting</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>create callback</h3>
<b>Description</b><br />
<blockquote>Create callbacks are called during i3d loads.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createFunctionName(integer objectId)</i></blockquote>
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of the object</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>timer callback</h3>
<b>Description</b><br />
<blockquote>This function is called when a timer event occurs.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function timerFunctionName()</i></blockquote>
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>keepTimer</i></td><td>return false if the timer should be removed</td></tr>
</table></blockquote>
<br />
<br /><br /><br />


<h3>packet received callback</h3>
<b>Description</b><br />
<blockquote>This function is called when a network packet was received.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function packetReceived(packetType, timestamp, streamId)</i></blockquote>
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>packetType</i></td><td>type of the packet. All available types are stored in the Network table</td></tr>
<tr><td><i>integer</i></td><td><i>timestamp</i></td><td>timestamp of when the packet was sent</td></tr>
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>id of the stream containing the packet data</td></tr>
</table></blockquote>
<br />
<br /><br /><br />
<a name="runtime_foundation_reference"><h2>Foundation Reference</h2></a>
<a name="runtime_foundation_reference_scenegraph"><h2>Scenegraph</h2></a>
<br />
<h3>translate</h3>
<b>Description</b><br />
<blockquote>Translate object (transform)</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function translate(integer objectId, float dx, float dy, float dz)</i></blockquote>
<br />
<b>Arguments</b><br />

<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id (transform)</td></tr>
<tr><td><i>float</i></td><td><i>dx</i></td><td>x relative translation value</td></tr>
<tr><td><i>float</i></td><td><i>dy</i></td><td>y relative translation value</td></tr>
<tr><td><i>float</i></td><td><i>dz</i></td><td>z relative translation value</td></tr>
</table></blockquote>
<br />
<b>Source file</b><br />
<blockquote>shared/foundation/scenegraph.lua</blockquote>
<br />
<br /><br /><br />

<h3>rotate</h3>
<b>Description</b><br />
<blockquote>Rotate object (transform)</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function rotate(integer objectId, float dx, float dy, float dz)</i></blockquote>
<br />
<b>Arguments</b><br />

<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id (transform)</td></tr>
<tr><td><i>float</i></td><td><i>dx</i></td><td>x relative rotation value</td></tr>
<tr><td><i>float</i></td><td><i>dy</i></td><td>y relative rotation value</td></tr>
<tr><td><i>float</i></td><td><i>dz</i></td><td>z relative rotation value</td></tr>
</table></blockquote>
<br />
<b>Source file</b><br />
<blockquote>shared/foundation/scenegraph.lua</blockquote>
<br />
<br /><br /><br />

<h3>toggleVisibility</h3>
<b>Description</b><br />
<blockquote>Toggle visibility of a scenegraph object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function toggleVisibility(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of scenegraph object</td></tr>
</table></blockquote>
<br />
<b>Source file</b><br />
<blockquote>shared/foundation/scenegraph.lua</blockquote>
<br />
<br /><br /><br />

<h3>printScenegraph</h3>
<b>Description</b><br />
<blockquote>Prints scenegraph object</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function printScenegraph(integer objectId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>id of scenegraph object</td></tr>
</table></blockquote>
<br />
<b>Source file</b><br />
<blockquote>shared/foundation/scenegraph.lua</blockquote>
<br />
<br /><br /><br />

<a name="runtime_foundation_reference_input"><h2>Input</h2></a>

<br /><br /><br />

<h3>Key values</h3>

<b>Description</b><br />
<blockquote>Key values used by keyEvent function</blockquote>
<br />
<b>Definition</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>Variable</i></td><td>Value</td><td>Description</td></tr>
<tr><td><i>Input.KEY_a</i></td><td><i>97</i></td><td>Value of key a</td></tr>
<tr><td><i>Input.KEY_b</i></td><td><i>98</i></td><td>Value of key b</td></tr>
<tr><td><i>...</i></td><td><i>...</i></td><td>..</td></tr>
<tr><td><i>Input.KEY_z</i></td><td><i>122</i></td><td>Value of key z</td></tr>
<tr><td><i>Input.KEY_esc</i></td><td><i>27</i></td><td>Value of escape key</td></tr>
</table></blockquote>
<br />
<b>Source file</b><br />
<blockquote>shared/foundation/input.lua</blockquote>
<br />
<br /><br /><br />

<h3>Mouse values</h3>

<b>Description</b><br />
<blockquote>Mouse values used by mouseEvent function</blockquote>
<br />
<b>Definition</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>Variable</i></td><td>Value</td><td>Description</td></tr>
<tr><td><i>Input.MOUSE_BUTTON_NONE</i></td><td><i>0</i></td><td>none mouse button</td></tr>
<tr><td><i>Input.MOUSE_BUTTON_LEFT</i></td><td><i>1</i></td><td>left mouse button</td></tr>
<tr><td><i>Input.MOUSE_BUTTON_MIDDLE</i></td><td><i>2</i></td><td>middle mouse button</td></tr>
<tr><td><i>Input.MOUSE_BUTTON_RIGHT</i></td><td><i>3</i></td><td>right mouse button</td></tr>
</table></blockquote>
<br />
<b>Source file</b><br />
<blockquote>shared/foundation/input.lua</blockquote>
<br />
<br /><br /><br />

<h3>Gamepad/Joystick values</h3>

<b>Description</b><br />
<blockquote>Gamepad/Joystick axis values used by getInputAxis function</blockquote>
<br />
<b>Definition</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>Variable</i></td><td>Value</td><td>Description</td></tr>
<tr><td><i>Input.AXIS_X</i></td><td><i>0</i></td><td>x axis</td></tr>
<tr><td><i>Input.AXIS_Y</i></td><td><i>1</i></td><td>y axis</td></tr>
<tr><td><i>Input.AXIS_Z</i></td><td><i>2</i></td><td>z axis</td></tr>
<tr><td><i>Input.AXIS_W</i></td><td><i>3</i></td><td>w axis</td></tr>
</table></blockquote>
<br />
<b>Source file</b><br />
<blockquote>shared/foundation/input.lua</blockquote>
<br />
<br /><br /><br />

<!-- audio stuff -->
<h3>Reverberation Preset values</h3>

<b>Description</b><br />
<blockquote>Reverberation preset values used by enableSampleFX function</blockquote>
<br />
<b>Definition</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>Variable</i></td><td>Value</td><td>Description</td></tr>
<tr><td><i>Audio.REVERB_PRESET_DEFAULT</i></td><td><i>1</i></td><td>Value of default reverberation preset</td></tr>
<tr><td><i>Audio.REVERB_PRESET_GENERIC</i></td><td><i>2</i></td><td>Value of generic reverberation preset</td></tr>
<tr><td><i>...</i></td><td><i>...</i></td><td>..</td></tr>
<tr><td><i>Audio.REVERB_PRESET_SPORT_FULLSTADIUM</i></td><td><i>67</i></td><td>Preset values of a full sport stadium</td></tr>
<tr><td><i>Audio.REVERB_PRESET_SPORT_STADIUMTANNOY</i></td><td><i>68</i></td><td>Preset values of a statium tannoy</td></tr>
</table></blockquote>
<br />
<b>Source file</b><br />
<blockquote>shared/foundation/audio.lua</blockquote>
<br />
<br /><br /><br />

<h3>Filter types</h3>

<b>Description</b><br />
<blockquote>Filter types values used by enableSampleFilter function</blockquote>
<br />
<b>Definition</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>Variable</i></td><td>Value</td><td>Description</td></tr>
<tr><td><i>Audio.FILTER_NULL</i></td><td><i>0</i></td><td>Value of a NULL filter type. A filter that has no parameters and does nothing.</td></tr>
<tr><td><i>Audio.FILTER_LOWPASS</i></td><td><i>1</i></td><td>Value of a lowpass filter type. It is used to remove high frequency content from a signal.   <i>Not currently implemented</i></td></tr>
<tr><td><i>Audio.FILTER_HIGHPASS</i></td><td><i>2</i></td><td>Value of a hightpass filter type. It is used to remove low frequency content from a signal. <i>Not currently implemented</i></td></tr>
<tr><td><i>Audio.FILTER_BANDPASS</i></td><td><i>35</i></td><td>Value of a bandpass filter type. It is used to remove high and low frequency content from a signal.  <i>Not currently implemented</i></td></tr>
</table></blockquote>
<br />
<b>Source file</b><br />
<blockquote>shared/foundation/audio.lua</blockquote>
<br />
<br /><br /><br />


<a name="editor"><h1 style="page-break-before:always">Editor</h1></a>


<br />
<img src="images/editor/editor_editor.png" border="0"><br />
<br />

If you start up the Editor, you might not have all the panel windows open. To
open other panel windows open the menu option window and enable the panel you want.
You can adjust the width and height of the panels by dragging the outlines and if you 
want to close a window you can simply press the cross right of the panel name.<br />
<br />
<br />

<a name="editor_viewport"><h2>Viewport</h2></a>

<br />
<img src="images/editor/editor_viewport.png" border="0"><br />
<br />

<h3>Navigation</h3>
The navigation is quite like in Maya. If you have nothing open in your editor I
suggest you quickly open a simple i3d file otherwise you won�t see much of an
effect. If its to dark in your scene just create a light by going to Create�>Light.
<br />
Some shortcuts:<br />
LMB = Left Mouse Button<br />
RMB = Right Mouse Button<br />
MMB = Middle Mouse Button<br />
Alt + LMB = Press and hold the Alt-Key and the left mouse button.<br />
<br />
Alt + LMB is rotating the camera.<br />
Alt + RMB moves the camera forward and backward.<br />
Alt + MMB causes the camera to pan.<br />
<br />
If you don�t have a middle mouse button, you can press LMB and RMB instead.<br />
<br />

<h3>View Options</h3>
By simply right-clicking into the viewport panel you get the View Options.
Sometimes it�s useful too use different cameras in a scene. You can create them
once and then with the View Options you can choose the camera to view at your
scene from different angles quickly.<br />
<br />
You might notice that if you rotate, the camera is rotated. If you have a big
level this behaviour is very useful, but if you want to look at one particular
object this can be quite awkward. To change the rotation to Framed Rotate you
first have to select your object either  by clicking on it directly or by
choosing it from the scene-graph and the framing the selected object by pressing
the F key. Now you can simply click (RMB) on the screen to open the View Options
and choose Framed Rotate. Now the camera is rotating around your the last framed object.<br />
<br />
With solid or wireframe you can choose if you want the view shaded.<br />
<br />
If you have large scenes, you can toggle the visibility of lights,
audio sources, physics and the cameras by checking them on the show submenu.<br />
<br />
You can also use the Selectable submenu to toggle whether you can select
lights, audio sources or cameras.<br />
<br />
Furthermore you can toggle the grid and the polycount on and off.<br />
<br />
<br />

<a name="editor_scenegraph"><h2>Scenegraph Panel</h2></a>
A very useful feature of the GIANTS Editor is the scenegraph. If you don�t
have it on the screen, just go to menu window and hit scenegraph. It is basically
the same you have in Maya. It shows all objects you have in your scene
and also the parent-child relationship between your objects.<br />
<br />
<img src="images/editor/editor_scenegraph.png" border="0"><br />
<br />
Let�s just make a little scene with some Transform Groups. The Transform Group is 
the basic building block of your scene. You can use a TransformGroup to move 
all the attached objects just by moving the Transform Group since the children
inherit the transformations of the parent. To create a new Transform Group go to
Create and hit TransformGroup. Now you can see it in the Scenegraph, its name is
transform. To change the name just select it and go to the attributes panel. 
At the very top of the panel you can choose the name of your object. Make two
TransformGroups and name them Parent and Child. If you move them around you see
that their transformations are independent, the movement of the parent
doesn�t affect the child. Now let�s make the appropriate relationship between
the two. Select the child in the scenegraph panel and go to Edit->Cut. Now select
your parent and hit Edit->Paste.<br />
<br />
As you can see now, the child is now connected to the parent. If you now move
around the parent, the transformation of the child is affected too whereas the child
can be moved around without affecting the parent.<br />
<br />
<img src="images/editor/editor_scenegraph2.png" border="0"><br />
<br />
<br />
There can be 6 types of objects in your scene: Triangle Meshes, Nurbs Curves, 
Cameras, Transform Groups, Lights, Terrains and Audio Sources.<br />
<br />
It is also possible to use CTRL+C to copy objets, CTRL+X to cut objects and
CTRL+V to paste objects. Notice that pasted objects are always children of the
currently selected object. If you want to paste an object on the highest hierarchy 
level of the scenegraph be sure that nothing is selected in the scenegraph. This can
be achieved by clicking at an empty space in the scenegraph panel.<br />
<br />
<br />

<a name="editor_attributes"><h2>Attributes Panel</h2></a>
If you don�t see the attributes panel go to Windows->Attributes then select 
an object in the scenegraph or the viewport. One important thing to notice is, 
that if the background color of an attribute turns red, you entered a value that isn�t allowed.
(eg scale values other than 1 for a dynamic rigid body object) The background
color of animated attributes is yellow.<br />
<br />
<img src="images/editor/editor_attributes.png" border="0"><br />
<br />
<br />
<a name="editor_toolbar"><h2>Toolbar</h2></a>
<br />
<img src="images/editor/editor_toolbar.png" border="0"><br />
<br />
The toolbar looks like this. If your pointing on the icons with your mouse, a text with the functionality of
the tool is displayed.<br />
<br />
Let�s quickly go through them from left to right.<br />
<br />
<b>File Operations</b><br />
<ul>
    <li>Create a new i3d-File</li>
    <li>Open a i3d-File</li>
    <li>Save the i3d-File</li>
    <li>Save the i3d-File as</li>
    <li>Import an i3d-file</li>
</ul>
<b>History</b><br />
<ul>
    <li>Undo last action</li>
    <li>Redo last action</li>
</ul>
<b>Physics and Animation</b><br />
<ul>
    <li>Play</li>
    <li>Stop</li>
</ul>
If you hit the play icon, the physics will simulate and the animations play.<br />
<br />
<b>Toggle Local- World Mode</b><br />
A handy tool is the toggle Local- World Mode, it changes the orientation of the
viewport transform gizmo from the local space of your object to world space.<br />
<br />
<b>Terrain and Terrain Foliage</b><br />
<ul>
    <li>Terrain Sculpt Mode</li>
    <li>Terrain Detail Texture Paint Mode</li>
    <li>Terrain Foliage Paint Mode</li>
    <li>Save Terrain Data</li>
</ul>
<b>Texture Reload</b><br />
<ul>
    <li>Reload all Textures</li>
    <li>Reload Textures of selected objects</li>
</ul>
<br />
<br />

<a name="editor_terrain"><h2>Terrain Editing</h2></a>
<br />
<img src="images/editor/editor_terrain.png" border="0"><br />
<br />
To test the terrain sculpting, just open the terrain test scene. Now you have
a terrain to play with. Open the terrain editing panel with window->Terrain Editing.
(If the scenegraph panel is still open it might cut off a bit, just close it
to get more space.)<br />
<br />
<img src="images/editor/editor_terrain2.png" border="0"><br />
<br />
If the terrain sculpt mode is active now, you can rise or lower the surface of 
your terrain by using RMB and LMB. MMB can be used to smooth and the value 
defines the force with which you pull or push. What happens here is, that you 
are painting a height map, that defines the height of each point of your 
terrain by giving it a grey-value. The attributes Opacity, Hardness and the 
Value are defining the �brush� you are painting the height map with. Just play 
around with the setting.With the shortcuts "V" and "B" you can change size of 
the brush and with "N" and "M" you can change the opacity of the brush quickly.<br />
<br />
In the terrain texture paint mode next to the terrain sculpt icon you can 
colorize your terrain with different textures.<br />
The used texture layers are defined in the i3d-file. (If you want to change the texture layers, 
you have to open the i3d with a text editor and change the layers there) Just 
choose your texture and paint onto your terrain. With the Chunk vis checkbox on, 
you can see exactly which texture layers you used in a chunk by what amout. You can 
use as many texture layers as you want, but you are limited to a maximum of four 
texture layers per chunk.<br />
<br />
With the Terrain Foliage Paint Mode active, you can paint your foliage onto 
your terrain, it`s the same thing as if you would paint onto your terrain - 
not with a texture but with foliage. LMB adds foliage, RMB removes foliage.<br />
<br />
<br />

<a name="editor_user_attributes"><h2>User Attributes</h2></a>
<br />
<img src="images/editor/editor_user_attributes.png" border="0"><br />
<br />
The user attributes panel is typically not visible if you open the editor for 
the first time. So go to Windows->User Attributes. Select an object in the 
scenegraph to see its user attributes.<br />
<br />
User Attributes can be defined in the editor and then be used in the engine 
(eg. within a script). This enables you to define object specific attributes for
every object in the scene.<br />
<br />
<br />
<a name="editor_scripting"><h2>Scripting</h2></a>
Here you can execute script snippets. With ENTER, you can add new lines.
SHIFT+ENTER will execute the code in the text field.<br />
<br />
Type in the following:<br />
<br />
<table><tr><td>
<div id="code">
print("hello world from the GIANTS Editor");<br />
</div>
</td></tr></table>
<br />
Then hit SHIFT+ENTER and the string is printed out above.<br />
<br /><br />
The scripting can be useful for many things. For example you can run this script snippet to test the fog settings in 
an i3d scene:<br />
<br />
<table><tr><td>
<div id="code">
setFog("exp2", 0.002, 0, 0.8, 0.81, 0.97);<br />
</div>
</td></tr></table>
<br />
<br />

<a name="editor_replace_dialog"><h2>Replace Dialog</h2></a>
<br />
<img src="images/editor/editor_replace.png" border="0"><br />
<br />
If you want to replace an object in your scene, you can go to Edit->Replace to
open the replace panel. Select the object you want to replace, then hit load.
Do likewise with the object you want to replace with and choose whether you want 
to keep the User Attributes or not. Now you can replace one single object by 
hitting replace or you can replace all objects that are similar to the one you 
selected by hitting replace all.<br />
<br />
Note: replace all does only work with single objects, but not with hierarchies of objects,
however the single replace function works.
<br />
This feature is quite useful because you can use it to substitute an object
reference feature within your i3d scene file.<br />
<br />
<br />

<a name="editor_interactive_placement"><h2>Interactive Placement</h2></a>
This is a really nice feature of the editor, so you should try it at least once!<br />
To place an object on the surface of another object, you can simply select the 
object you want to place and then press CTRL + B + LMB, while pointing at your 
desired location. The selected object will then instantly be set to the 
location you�ve chosen.<br />
<br />
Hint: you can do this with all your objects within your scenegraph and also 
with the camera or light sources. E.g. you can select the current camera and then place the
camera at a location far away, allowing for fast relocation of the camera.<br />
<br />
If you keep the LMB pressed and hit CRTL or SHIFT you can clone the selected object
at the currect mouse position. CRTL will just clone the object while SHIFT will
add a random rotation in the y-axis. (Very useful feature if you want to 
create a forest with hundreds of randomly rotated trees for instance)

<br />
<br />

<a name="editor_other_functionality"><h2>Other functionality</h2></a>
<br />
Edit->Clear Stacks: This clears the undo/ redo history.<br />
<br />
Edit->Move to Camera: Moves the selected object in front of the camera<br />
<br />
Navigation Speed: Moves the camera faster or slower. Use - and + to ajust the speed.<br />
<br />
<br />



<a name="editor_keys"><h2>Keyboard short-cuts</h2></a>

<table cellpadding="6">
<tr>
	<th class="list" align="left"><b>Key</b></th>
	<th class="list" align="left"><b>Function</b></th>
</tr>
<tr>
	<td class="list" valign="top"><i>Alt + LMB</i></td>
	<td class="list" valign="top">Rotate camera</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Alt + MMB</i></td>
	<td class="list" valign="top">Pan camera</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Alt + RMB</i></td>
	<td class="list" valign="top">Zoom camera</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Alt + LMB + RMB</i></td>
	<td class="list" valign="top">Move camera up or down and left or right camera</td>
</tr>
<tr>
	<td class="list" valign="top"><i>F</i></td>
	<td class="list" valign="top">Frame selected object</td>
</tr>
<tr>
	<td class="list" valign="top"><i>-</i></td>
	<td class="list" valign="top">Decrease navigation speed</td>
</tr>
<tr>
	<td class="list" valign="top"><i>+</i></td>
	<td class="list" valign="top">Increase navigation speed</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Ctrl-S</i></td>
	<td class="list" valign="top">Save</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Ctrl-Z</i></td>
	<td class="list" valign="top">Undo</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Ctrl-X</i></td>
	<td class="list" valign="top">Cut</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Ctrl-C</i></td>
	<td class="list" valign="top">Copy</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Ctrl-V</i></td>
	<td class="list" valign="top">Paste</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Delete</i></td>
	<td class="list" valign="top">Delete</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Ctrl-D</i></td>
	<td class="list" valign="top">Duplicate</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Ctrl-F</i></td>
	<td class="list" valign="top">Move to Camera</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Ctrl-B</i></td>
	<td class="list" valign="top">Interactive placement (hold left mouse button to move around)</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Shift</i></td>
	<td class="list" valign="top">Interactive placement paint</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Ctrl</i></td>
	<td class="list" valign="top">Interactive placement paint with random rotation around y axis</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Ctrl-R</i></td>
	<td class="list" valign="top">Pick replace value in viewport (Terrain edit modes)</td>
</tr>
<tr>
	<td class="list" valign="top"><i>V</i></td>
	<td class="list" valign="top">Decrease brush radius</td>
</tr>
<tr>
	<td class="list" valign="top"><i>B</i></td>
	<td class="list" valign="top">Increase brush radius</td>
</tr>
<tr>
	<td class="list" valign="top"><i>N</i></td>
	<td class="list" valign="top">Decrease brush opacity</td>
</tr>
<tr>
	<td class="list" valign="top"><i>M</i></td>
	<td class="list" valign="top">Increase brush opacity</td>
</tr>
<tr>
	<td class="list" valign="top"><i>F8</i></td>
	<td class="list" valign="top">Toggle stats</td>
</tr>
<tr>
	<td class="list" valign="top"><i>Shift + Enter</i></td>
	<td class="list" valign="top">Execute Script (Script Window)</td>
</tr>
</table>
<br />
<br /><a name="exporter"><h1 style="page-break-before:always">Exporter</h1></a>

<a name="exporter_maya_installation"><h2>Autodesk Maya<sup style="font-size: 10px;">1</sup> i3d exporter</h2></a>
<br /><br />
To generate i3d files of your 3d-models you can use the exporter plugin for Autodesk Maya.
The GIANTS Editor and the GIANTS Engine can only load i3d files. This section of the documentation will show you,
how to export i3d files with the I3D exporter plugins in Autodesk Maya.

The first thing you probably want to do is to install the exporter plugins in Autodesk Maya.

<h3>Installing I3D exporter plugin</h3>

<b>Step 1</b><br />
Place the files I3DExportUI.mel, I3DExportValidate.mel and I3DExporter2008.mll into the folder
"C:/Documents and Settings/&lt;USERNAME&gt;/My Documents/maya/scripts".<br />
<br />
<b>Step 2</b><br />
Start Maya and open the Script Editor window.<br />
<br />

<img src="images/i3d/export_installation.gif" border="0">
<br />
<br />

<b>Step 3</b><br />
Select custom shelf tab<br />
<br />

<b>Step 4</b><br />
Type the following commands in the lower portion of the Script Editor:<br />
<br />

<table><tr><td>
<div id="code">
loadPlugin -qt "C:/Documents and Settings/&lt;USERNAME&gt;/My Documents/maya/scripts/I3DExporter2008.mll";<br />
source I3DExportUI;<br />
source I3DExportValidate;<br />
I3DExport;<br />
</div>
</td></tr></table><br />
Highlight the commands, then use the middle mouse button, to drag the highlighted MEL commands to the shelf.<br />
<br />
<b>Note:</b>
<ul>
<li>Maya don't like backslashes so replace them with slashes.</li>
<li>Replace <i>&lt;USERNAME&gt;</i> with your username.</li>
<li>The file path can be different depending on the language of your operating system
(eg. C:/Dokumente und Einstellungen/&lt;USERNAME&gt;/Eigene Dateien/maya/scripts/I3DExporter2008.mll)</li>
</ul>
<br />
<b>Step 5</b><br />
Copy the I3D_icon.bmp into the folder "C:/Documents and Settings/&lt;USERNAME&gt;/My Documents/maya/2008/prefs/icons".
Edit shelf to replace the default icon with the one enclosed.<br />
<br />
<br />


<h3>Preparing your 3d-model for export</h3>

Before you can actually use the exporter, it�s wise to check certain things with your 3d-model in Maya
which can cause issues later in the editor or the engine.<br />
<br />
In the Channel-Box you see the transformations of your selected object.<br />
<br />
<img src="images/exporter/exporter_scale.png" border="0"><br />
<br />
The ScaleX, ScaleY and ScaleZ of your object should be 1 1 1.<br />

If you just plan to use this object as a static mesh or with no physics at all 
you could export it with any scale you want, but if you want to simulate your 
object in the engine (as a dynamic or kinematic rigid body object) the scale must
be 1 1 1 otherwise the physics simulation will produce incorrect results.<br />

<br />
<img src="images/exporter/exporter_freeze.png" border="0"><br />
<br />

If you have an object with scale, you can easily get rid of the scale. Go to the
Modify-Panel, and select the option box right of the Freeze Transformations.
The Freeze Transformations dialog window opens. You can select the checkbox scale
and hit apply.<br />
<br />
<b>Note:</b> Please refer to the artwork guide for further information about asset conditioning for the engine.<br />
<br />
<br />



<h3>I3D exporter usage</h3>

Start the exporter dialog with a click on the I3D exporter icon you have
created on your custom shelf (<i>see Installing I3D exporter plugins</i>)<br />
<br />
<img src="images/exporter/exporter_export.png" border="0"><br />
<br />
<b>Export Panel</b><br />
The export panel is quite self-explanatory. In the export options part you can include
and exclude parts from exporting (IK, Animation, Shapes, Nurbs Curves, Lights,
Cameras, Particle Systems and/or Default Cameras). The Shape Export Subparts 
section allows you to control which subshape attributes are exported (Normals,
vertex Colors, Texture Coordinates and/or Skin Weights).<br />
<br />
The miscellaneous section has this options:<br />
<ul>
<li><b>Verbose</b>, display verbose information in output window during the export</li>
<li><b>Relative Paths</b>, generate relative paths for texture files</li>
<li><b>Float Epsilon</b>, truncate values within epsilon range to zero. Epsilon: [-1e-5, 1e-5]</li>
</ul>
<br />

<b>Buttons</b>
<ul>
<li><b>Preview</b>, exports whole scene to a temporary file and starts the editor</li>
<li><b>Export All</b>, exports the whole scene</li>
<li><b>Export</b>, exports only currently selected objects</li>
</ul>
<br />

<b>Attributes Panel</b><br />
In the attributes panel you can load and save attributes of your objects those
attributes will be saved into the Maya file and are translated into the correct 
i3d attributes when you export to a i3d file.<br />
<br />
<img src="images/exporter/exporter_attributes.png" border="0"><br />
<br />
The first thing you have to do here is, that you must press the "Load Current"
button at the bottom in order to load the attibutes of your object. Otherwise
everything is unchecked and is not showing the attributes that are currently active 
on you object. So be sure, to hit this button first.<br />
<br />
<b>Current Node</b><br />
Here you can see the name of your current working object.<br />
<br />
<b>Rigid Body</b><br />
This section handles all the attributes regarding to physics rigid bodies.<br />
<br />
<b>Joint</b><br />
Here you can define your joint-attributes in detail. One thing you might miss
here are the joint limits, they must be defined within Maya, since your object
can have many joints with different limits. You can define the limit of a joint
angle by the limit informations of your transform-object.<br />
<br />
<b>Rendering</b><br />
<ul>
    <li><b>Occlusion Culling</b>, Objects that are entirely covered by other objects
        may be culled and thus not rendered at all. This option can increase
        the rendering performace in the engine if you have big objects 
        containing much smaller objects, for instance a house. If you activate
        the occlusion culling on the root-node of the house all its childs are also
        not rendered, if the house is complete covered behind other objects. However,
        you should not apply this attribute on too many small objects because it is
        one more task for the engine.
    </li>
    <li><b>Non Renderable</b>, With this option a objects will not be rendered at any time.
        Use this option for collision geometry. If you have
        complex objects with sub-objects attached, be careful with this checkbox since
        this attribute is also going to affect all the attached children.
    </li>
    <li><b>Clip Distance</b>, This value defines how far the object is still going to be
        rendered. If you have a large scene and tons of objects this is a powerful
        method to keep your framerate high.
    </li>    
</ul>

After you have defined all your attributes, you have to hit the "Save Current"
button to save your attributes. If you have lots of objects with the same
attributes, you can select them all, and then use apply selected to apply the 
current settings to all the selected objects. Remove current resets the
attributes to the default values and if you want do reset multiple objects,
you can select them all and hit "Remove Selected"<br />
<br />
<b>Validate Panel</b><br />
With this panel you can validate if one of your objects have an incorrect
pivot. In Maya your pivot can have a local and a world space attribute which 
you can find in the attribute editor on the right side. The x y and z values of
both, local and world-space have to be 0 0 0 otherwise you will get a warning.
You can fix incorrect pivots with the FreeezeToPivot option in the tools panel.<br />
<br />
<b>Tools</b><br />
If you have validated your objects and a local pivot was not set to 0 0 0, you can
quickly fix affected objects with the FreeezeToPivot button.<br />
<br />
<br />

<h3>Known issues</h3>

<table cellpadding="6" border="1" rules="groups">
<thead><tr>
	<th class="list" align="left" width="300"><b>Issue</b></th>
	<th class="list" align="left" width="300"><b>Solution</b></th>
</tr></thead>
<tbody><tr>
	<td class="list" valign="top" width="300">place2dTexture node information is ignored</td>
	<td class="list" valign="top" width="300">Don't modify place2dTexture nodes and operate directly on the texture coordinates</td>
</tr>
<tr>
	<td class="list" valign="top" width="300">Polygons with more than 4 sides and/or holes are ignored</td>
	<td class="list" valign="top" width="300">Triangulate affected polygons (Modeling->Polygons->Triangulate)</td>
</tr></tbody>
</table>
<br />





<a name="exporter_maya_material"><h3>Material export options</h3></a>

<b>Mapping between Maya and i3d material attributes</b><br />
<br />
<img src="images/i3d/export_material.gif" border="0">
<br />
<br />

<a name="exporter_max_installation"><h2>Autodesk 3ds MAX<sup style="font-size: 10px;">2</sup> i3d exporter</h2></a>

<h3>Installing I3D exporter plugin</h3>

Copy the plugin file I3DExporter2008.dle or I3DExporter2009.dle into this
directory:<br />
<br />
<i>%3DSMAX installation path%/plugins/</i><br />
<br />
On a Windows XP (english version) this would be this path:<br />
<br />
<i>C:\Program Files\Autodesk\3ds Max 2009\plugins</i><br />
<br />
for example.<br />


<br />
<br />


<a name="exporter_blender_installation"><h2>Blender i3d exporter</h2></a>

<h3>Installing I3D exporter plugin (Windows)</h3>

<ol>
    <li>Install <a href="http://www.python.org/ftp/python/2.6/python-2.6.msi">Python Runtime 2.6</a></li>
    <li>Setup the environment variable PYTHONPATH to the python installation path. Also add DLLs and LIB directory.<br />
   <i>Example: PYTHONPATH = C:\Python26;C:\Python26\DLLs;C:\Python26\Lib</i></li>
    <li>
        Copy blenderI3DExport.py to Blenders scripts directory.<br />
        (eg. C:\Documents and Settings\<USERNAME>\Application Data\Blender Foundation\Blender\.blender\scripts)
    </li>
</ol>
   
<h3>Installing I3D exporter plugin (Linux)</h3>
  
You'll find a hidden directory called ".blender" in your home directory. Inside there's a sub-directory
called "scripts", place the file blenderI3DExport.py there. Restart Blender.<br />







<br />
<br />
<br />
<br />
<sup>1</sup>&nbsp;Autodesk Maya is a registered trademark of the Autodesk Corp.<br />
<sup>2</sup>&nbsp;Autodesk 3ds MAX is a registered trademark of the Autodesk Corp.<br />
<br />
<br />
<br /><a name="artwork_guide"><h1 style="page-break-before:always">Content Creation - Artwork Guide</h1></a>
<a name="artwork_guide_maya"><h2>Autodesk Maya</h2></a>
<a name="Fix_normals"><h3>Set correct normals</h3></a>

<p>Adjust normals to match topology. Use hard edges for cubic and soft edges for curved surfaces.</p>

<p><img src="images/artwork/mesh_modelling1_maya/fixNormals1.jpg" alt="fixNormals1" /></p>
<p><img src="images/artwork/mesh_modelling1_maya/fixNormals2.jpg" alt="fixNormals2" /></p>

<br />
<br />

<a name="Double_sided"><h3>Disable double sided option</h3></a>

<p><img src="images/artwork/mesh_modelling1_maya/doubleSided.jpg" alt="doubleSided" /></p>

<br />
<br />


<a name="Remove_zero_area_polygons"><h3>Remove zero area polygons</h3></a>

<p><img src="images/artwork/mesh_modelling1_maya/zero_area_poly.jpg" alt="zero_area_poly" /></p>

<br />
<br />

<a name="Eliminate_t-injunction"><h3>Eliminate T-Injunction</h3></a>

<p><img src="images/artwork/mesh_modelling1_maya/t-injunction.jpg" alt="t-injunction" /></p>

<br />
<br />


<a name="artwork_guide_max"><h2>Autodesk 3DS MAX</h2></a>
<br /><br />

<a name="artwork_guide_Remove_useless_polygons"><h3>Remove useless polygons</h3></a>

<p><img src="images/artwork/mesh_modelling1_max/unusedPolygons.jpg" alt="Remove useless polygons" /></p>
<br />
<br />

<a name="artwork_guide_Generate_Normalmaps"><h3>Generate normalmaps for details</h3></a>

<p>Generate Normalmaps for appropriate details in the geometry.</p>

<p><img src="images/artwork/mesh_modelling1_max/useNormalmaps.jpg" alt="Generate Normalmaps" /></p>
<br />
<br />


<a name="artwork_guide_Flip_edges"><h3>Flip edges</h3></a>

<p>Flip/turn edges to match topology of the polygon mesh.</p>

<p>Retriangulation of the polygon mesh is a good starting point. This works only with Editable Polys</p>
<p><img src="images/artwork/mesh_modelling1_max/retriangulate.jpg" alt="retriangulate" /></p>

<p>Convert to a Editable Mesh</p>
<p><img src="images/artwork/mesh_modelling1_max/convertToMesh.jpg" alt="convertToMesh" /></p>

<p>Flip/Turn individual edges manually</p>
<p>
   <img src="images/artwork/mesh_modelling1_max/flipEdges1.jpg" alt="Flip edges 1" /><br />
   <img src="images/artwork/mesh_modelling1_max/flipEdges2.jpg" alt="Flip edges 2" />
   
</p>
<br />
<br />
<a name="artwork_guide_Remove_two_sided_materials"><h3>Disable two sided material option</h3></a>

<p>Two sided materials are not supported in the engine and have to be replaced by an inverted copy of the affected polygons.</p>

<p><img src="images/artwork/mesh_modelling1_max/2sided1.jpg" alt="2sided1" /></p>
<p><img src="images/artwork/mesh_modelling1_max/2sided2.jpg" alt="2sided2" /></p>

<p>Used operations</p>
<ul>
    <li>Disable 2-Sided checkbox material property</li>    
    <li>Select Mesh</li>    
    <li>Clone</li>    
    <li>Select clone</li>    
    <li>Modifier: Polygon mode, select affected polygons and flip normals</li>    
    <li>Delete unused faces from cloned mesh</li>    
    <li>Attach cloned mesh to original mesh</li>    
    <li>Modifier: Vertex mode and weld vertices</li>    
</ul>

<p><img src="images/artwork/mesh_modelling1_max/2sided3.jpg" alt="2sided3" /></p>
<br />
<br />
<a name="artwork_guide_Fix_normals"><h3>Set correct normals</h3></a>

<p>Adjust normals to match topology. Use hard edges for cubic and soft edges for curved surfaces.</p>

<p><img src="images/artwork/mesh_modelling1_max/fixNormals1.jpg" alt="fixNormals1" /></p>

<p>Used operations</p>
<ul>
    <li>Select Mesh</li>  
    <li>Normal Modifier</li>
    <li>Select affected normals and break them</li>
    <li>Fine tune normals manually (optional)</li>
</ul>

<p><img src="images/artwork/mesh_modelling1_max/fixNormals1b.jpg" alt="fixNormals1b" /></p>
<p><img src="images/artwork/mesh_modelling1_max/fixNormals2.jpg" alt="fixNormals2" /></p>

<br />
<br />


<a name="artwork_guide_Merge_to_single_mesh"><h3>Merge to single polygon mesh</h3></a>

<p>Merge groups of objects to a single mesh for optimal in-game performance.</p>


<p><img src="images/artwork/mesh_modelling1_max/mergeToSingleMesh1.jpg" alt="mergeToSingleMesh1" /></p>

<p>Used operations</p>
<ul>
    <li>Select one object</li>
    <li>Modifier: Object mode and attach list</li>
    <li>Select objects to merge</li>
</ul>

<p><img src="images/artwork/mesh_modelling1_max/mergeToSingleMesh2.jpg" alt="mergeToSingleMesh2" /></p>

<br />
<br />

<a name="artwork_guide_texturing"><h2>Texturing</h2></a>
<a name="artwork_guide_JEPG_compression_artifacts"><h3>JPEG compression artifacts</h3></a>

<p>Never use the JPG format to store textures. Each time a jpg file is stored the quality of the image decreases. Even if the compression quality is set to 100%.</p>

<p>
<img src="images/artwork/texturing1/jpg_artifacts1.png" alt="jpg_artifacts1" />
<img src="images/artwork/texturing1/jpg_artifacts2.jpg" alt="jpg_artifacts2" />
<br />
Saved once as png from orignal texture (left), saved multiple times as jpg (right)
</p>

<a name="artwork_guide_non_power_of_two"><h3>Non-Power-of-Two textures</h3></a>

<p>Use power-of-two textures but you can use non-squared textures. As a general
rule you should make your textures as big as they are in pixels when beeing
projected onto the screen in the game.<br />
Eg. if you want to texture a fullscreen squad, you probably want to use a 1024x1024px to 2048x1024px sized texture.<br />Normalmap textures should be at least as big as the diffuse textures or even twice as big.</p>

<a name="artwork_guide_non_power_of_two"><h3>Texture size</h3></a>
<p>Texture size must be 2048x2048 pixels or smaller. Bigger textures are not
supported on older graphics cards (eg. GeforceFX, Radeon9xxx, Radeon8xx and Intel onboard graphic chips).</p>
<br />

<a name="artwork_guide_parallaxmapping"><h3>Generate maps for parallaxmapping</h3></a>

<p><b>Requirements</b><br />
  The Nvidia Photoshop Normal Map Filter plug-in from Nvidia. This plug-in can be downloaded from 
  <a target="_NEW" href="http://developer.nvidia.com/object/photoshop_dds_plugins.html">developer.nvidia.com</a>
</p>
	
<b>Description</b><br />
<ul>
  <li>First, you need a greyscale image or a bump map as the base for the Parallax Map. Please note that 
  	most of the time, you will have to convert this greyscale image to a RGB image. You can do this with 
  	select Image &gt; Mode &gt; RGB Color (menu bar). </li>
  <li>Go to the &quot;Window&quot; tab and select &quot;Show Channels&quot;. In the channel window, click the 
  	'Create New Channel' icon on the bottom right, just left of the Trash Icon.  A new channel &quot;Alpha 1&quot; will appear.</li>
  <br />
  <p><img src="images/artwork/ps_alpha.jpg" alt="NV_Settings" /></p>
  <br />
  <li>Click one of the Color channels, press CTRL-A then CTRL-C to copy the channel informations to the clipboard for later use. </li>
  <li>In the channel window select the RGB channel with shift and the left mouse button. All channel tabs should now be marked or accordingly selected. </li>
  <li>Go now to the &quot;Filter&quot; menu and select &quot;nvTools/NormalMapFilter...&quot;. In the Height Generation section, select InvertY. 
  	To create a Parallax Map you also have to select Height in the Alpha Field Section. 
  	With the &quot;Scale&quot; setting you can alter the intensity (depth) of the normal map. The &quot;Filter Type&quot; setting, 
  	defines how precise the normal map has to be. &quot;4 sample&quot; means precise, whereas 9x9 means rough. Click &quot;OK&quot; to proceed. <br>
  </li>
  <br />
  <p><img src="images/artwork/ps_nv_settings.jpg" alt="NV_Settings" /></p>
  <br />
  <li>You should now have a normal map, combined with a bump map in the Alpha Channel.</li>
  
  <li>Now you have to insert the previous saved channel information to the &quot;Alpha 1&quot; channel. 
  	Select the alpha channel with your left mouse button and then press CTRL-V to paste the Heightmap image into the channel. </li>
  
  <li>To increase the quality of your Parallax Map you can try also to apply a low 
  	gaussian filter to the alpha channel. Further you can reduce the contrast to get better results.</li>
  
  <li>Save the Image as png with transparency (RGBA 32 bit).</li>
</ul>


<br />
<br /><br /><br />


<a name="i3d"><h1 style="page-break-before:always">I3D</h1></a>
<a name="i3d_introduction"><h2>Introduction</h2></a>

I3D is an open eXtensible Markup Language (XML) file format.<br />
<br />
The purpose of i3D is to interchange 3D assets between applications and platforms without loss of information.<br />
<br />
<img src="images/i3d/i3d_xml.gif" alt="Workflow" /><br />
<br />
A vaild I3D file can have up to seven parts: Textures, Materials, Shapes, Dynamics, Scene graph, Animation and Userdata.
Dependent on application each part can be omitted.<br />
<br />
The XML Schema language is used to describe the I3D feature set. Download: <a href="http://i3d.giants.ch/schema/i3d-1.6.xsd">I3D 1.6 Schema</a><br />
<br />


<a name="i3d_features"><h2>Features</h2></a>
<ul>
	<li>Scenegraph hierarchy with
		<ul>
			<li>TransformGroups/Bones: translation, rotation, scale and visibility</li>
			<li>Lights: ambient, point, directional and spot lights</li>
			<li>Cameras: field of view, near and far clipping plane</li>
			<li>Shapes: meshes and nurbs curves (supports geometry instancing)</li>
			<li>Particle Systems</li>
		</ul>	
	</li>
	
	<li>Animation
		<ul>
			<li>Animation sets</li>
			<li>Clips</li>
			<li>Keyframes: translation, rotation, scale and visibility</li>
			<li>Morph Targets</li>
		</ul>
	</li>
	
	<li>User Attributes</li>

	<li>Dynamics
		<ul>
			<li>Particle Systems (Sprite based)
			<ul>
				<li>Surface Emitter</li>
				<li>Gravity Fields</li>
				<li>Air Fields</li>
			</ul>
			</li>
		</ul>
	</li>	

	<li>Meshes
		<ul>
			<li>Vertices</li>
			<li>Normals</li>
			<li>Vertex colors</li>
			<li>Skin weights</li>
			<li>Texture coordinates (including multiple uv sets)</li>
			<li>Faces (vertex color, normals and texture coordinates per face)</li>
		</ul>
	</li>

	<li>Curves
		<ul>
			<li>Nurbscurves</li>
		</ul>
	</li>

	<li>Shader/Materials
		<ul>
			<li>Multitextures (arbitrary layered textures)</li>
			<li>Lightmaps</li>
			<li>Bumpmaps/Normalmaps</li>
			<li>Environmentmaps</li>
			<li>Specularmaps</li>
		</ul>
	</li>
</ul>


<a name="i3d_overview"><h2>Overview</h2></a><br /><br />
<a href="images/i3d/i3d-1.6.gif" title="Click to enlarge"><img src="images/i3d/i3d-1.6_thumbnail.png" alt="Overview"/></a>
<br />
<br />

<a name="i3d_specification"><h2>Specification</h2></a>
<a name="i3d_general_layout"><h3>General Layout</h3></a>
<table><tr><td>
<div id="code">
&nbsp;&nbsp;&lt;?xml&nbsp;version="1.0"&nbsp;encoding="iso-8859-1"?&gt;<br />
&nbsp;&nbsp;&lt;i3D&nbsp;name="MyScene"&nbsp;version="1.6"&nbsp;xsi:noNamespaceSchemaLocation="http://i3d.giants.ch/schema/i3d-1.6.xsd"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Files&gt;..&lt;/Files&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Materials&gt;..&lt;/Materials&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shapes&gt;..&lt;/Shapes&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Dynamics&gt;..&lt;/Dynamics&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Scene&gt;..&lt;/Scene&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Animation&gt;..&lt;/Animation&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;UserAttributes&gt;..&lt;/UserAttributes&gt;<br />
&nbsp;&nbsp;&lt;/i3D&gt;<br />
</div>
</td></tr></table>

<br />
<h3>Coordinate Systems</h3>
I3D uses a right-handed coordinate system.<br />
<br />
<br />
<h3>Files</h3>
<br />
All used file references are defined here. File handles are mapped to the corresponding filenames.<br />
<br />
<table><tr><td>

<div id="code">
&nbsp;&nbsp;&lt;Files&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;File&nbsp;fileId="1"&nbsp;filename="myTexture1.png"&nbsp;relativePath="true"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&lt;/Files&gt;<br />
</div>
</td></tr></table>

<br />
<a name="i3d_materials"><h3>Materials</h3></a>
<br />
Materials used in the materials attribute of Shape nodes within the scenegraph section are defined in this section.<br />
<br />
<table><tr><td>
<div id="code">
&nbsp;&nbsp;&lt;Materials&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Material&nbsp;name="myShader_001"&nbsp;materialId="12"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Texture&nbsp;fileId="1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Material&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&lt;/Materials&gt;<br />
</div>
</td></tr></table>
<br />

<a name="i3d_shapes"><h3>Shapes</h3></a>
<br />
Shapes are defined here and referenced from the Scene graph section.
This mechanism allows multiple instancing of shapes.
<br />
<table><tr><td>

<div id="code">
&nbsp;&nbsp;&lt;Shapes&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;IndexedTriangleSet&nbsp;name="myMesh01" shapeId="1"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/IndexedTriangleSet&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&lt;/Shapes&gt;<br />
</div>
</td></tr></table>
<br />
<h3>Shape node types</h3>
<br />

<h3>IndexedTriangleSet</h3>

<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">name</td>
	<td class="list" valign="top">Name of Shape</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">shapeId</td>
	<td class="list" valign="top">Shape id</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">no</td>
</tr>
</table>
<br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Element</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Cardinality</b></th>
</tr>
<tr>
	<td class="list" valign="top">Vertices</td>
	<td class="list" valign="top" width="300">List of vertices</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">1</td>
</tr>
<tr>
	<td class="list" valign="top">Triangles</td>
	<td class="list" valign="top" width="300">List of triangles</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">1</td>
</tr>
<tr>
	<td class="list" valign="top">Subsets</td>
	<td class="list" valign="top" width="300">List of Subsets</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">1</td>
</tr>
</table>

<br />
<b>Vertices</b><br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">count</td>
	<td class="list" valign="top">Number of vertices</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">normal</td>
	<td class="list" valign="top">Normal</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">uv0</td>
	<td class="list" valign="top">UV set 0</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">uv1</td>
	<td class="list" valign="top">UV set 1</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">uv2</td>
	<td class="list" valign="top">UV set 2</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">uv3</td>
	<td class="list" valign="top">UV set 3</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">color</td>
	<td class="list" valign="top">Vertex color</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">blendweights</td>
	<td class="list" valign="top">Blend weights</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
</table>
<br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Element</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Cardinality</b></th>
</tr>
<tr>
	<td class="list" valign="top">v</td>
	<td class="list" valign="top" width="300">Vertex</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">1..n</td>
</tr>
</table>
<br />
<b>v</b>
<br /><br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">p</td>
	<td class="list" valign="top" width="300">Vertex position</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">n</td>
	<td class="list" valign="top" width="300">Vertex normals</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">t0 to t16</td>
	<td class="list" valign="top" width="300">Texture coordinate</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">c</td>
	<td class="list" valign="top" width="300">Vertex colors</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">bw</td>
	<td class="list" valign="top" width="300">Bone weights</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">bi</td>
	<td class="list" valign="top" width="300">Bone indices</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">yes</td>
</tr>
</table>

<br /><br />
<b>Triangles</b><br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">count</td>
	<td class="list" valign="top" width="300">Number of triangles</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">no</td>
</tr>
</table>
<br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Element</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Cardinality</b></th>
</tr>
<tr>
	<td class="list" valign="top">t</td>
	<td class="list" valign="top" width="300">Triangle</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">1..n</td>
</tr>
</table>
<br />
<b>t</b>
<br /><br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">vi</td>
	<td class="list" valign="top" width="300">Vertices index</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
</table>


<br /><br />
<b>Subsets</b><br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Element</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Cardinality</b></th>
</tr>
<tr>
	<td class="list" valign="top">Subset</td>
	<td class="list" valign="top" width="300">Subset</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">1..n</td>
</tr>
</table>
<br />
<b>Subset</b>
<br /><br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">firstVertex</td>
	<td class="list" valign="top" width="300">First vertex</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">numVertices</td>
	<td class="list" valign="top" width="300">Number of vertices</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">firstIndex</td>
	<td class="list" valign="top" width="300">First index</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">numIndices</td>
	<td class="list" valign="top" width="300">Number of indices</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">no</td>
</tr>
</table>

<br />
<br />
<b>Example</b><br />
<table><tr><td>
<div id="code">
&lt;IndexedTriangleSet&nbsp;name="myMesh01"&nbsp;shapeId="1"&gt;<br />
&nbsp;&nbsp;&lt;Vertices count="30" uv0="true"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;v&nbsp;c="-0.50&nbsp;-0.5&nbsp;0.50"&nbsp;t0="0&nbsp;0.1&nbsp;0.3&nbsp;0.3&nbsp;0.2&nbsp;0&nbsp;0.1&nbsp;1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;v&nbsp;c="0.49&nbsp;-0.5&nbsp;0.50"&nbsp;t0="1&nbsp;0.9&nbsp;0.3&nbsp;0.3&nbsp;0.6&nbsp;0&nbsp;0.1&nbsp;1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;v&nbsp;c="-0.50&nbsp;0.49&nbsp;0.50"&nbsp;t0="0&nbsp;0.1&nbsp;0.9&nbsp;0.3&nbsp;0.2&nbsp;0&nbsp;0&nbsp;1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&lt;/Vertices&gt;<br />
&nbsp;&nbsp;&lt;Triangles count="40"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;t&nbsp;vi="0&nbsp;1&nbsp;3"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;t&nbsp;vi="2&nbsp;3&nbsp;5"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;t&nbsp;vi="4&nbsp;5&nbsp;7"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&lt;/Triangles&gt;<br />
&nbsp;&nbsp;&lt;Subsets count="1"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Subset firstVertex="0" numVertices="30" firstIndex="0" numIndices="40"/&gt;<br />
&nbsp;&nbsp;&lt;/Subsets&gt;<br />
&lt;/IndexedTriangleSet&gt;<br />
</div>
</td></tr></table>

<br />
<br />

<h3>NurbsCurve</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">name</td>
	<td class="list" valign="top">Name of Shape</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">shapeId</td>
	<td class="list" valign="top">Shape id</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">degree</td>
	<td class="list" valign="top">Degree</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">form</td>
	<td class="list" valign="top">Form (stored as: "open", "close" or "periodic")</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
</table>
<br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Element</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Cardinality</b></th>
</tr>
<tr>
	<td class="list" valign="top">cv</td>
	<td class="list" valign="top" width="300">List of contol vertices</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">3..n</td>
</tr>
</table>
<br />


<br />
<b>cv</b><br />
<br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">c</td>
	<td class="list" valign="top" width="300">Contol vertex (stored as "x y z")</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
</table>
<br />

<br />
<b>Example</b><br />
<table><tr><td>
<div id="code">
&lt;NurbsCurve&nbsp;name="cameraPathShape"&nbsp;shapeId="1"&nbsp;degree="3"&nbsp;form="periodic"&gt;<br />
&nbsp;&nbsp;&lt;cv&nbsp;c="-160.4501888&nbsp;7.53270339&nbsp;82.4246445"/&gt;<br />
&nbsp;&nbsp;&lt;cv&nbsp;c="-72.07301868&nbsp;2.962592169&nbsp;111.1353409"/&gt;<br />
&nbsp;&nbsp;&lt;cv&nbsp;c="-14.67712792&nbsp;3.470019386&nbsp;126.2614971"/&gt;<br />
&nbsp;&nbsp;&lt;cv&nbsp;c="15.12607817&nbsp;8.251274441&nbsp;47.11430616"/&gt;<br />
&nbsp;&nbsp;&lt;cv&nbsp;c="30.05244121&nbsp;12.88635426&nbsp;26.06245926"/&gt;<br />
&nbsp;&nbsp;&lt;cv&nbsp;c="34.16515005&nbsp;11.5454009&nbsp;-1.548135874"/&gt;<br />
&nbsp;&nbsp;&lt;cv&nbsp;c="-86.27624814&nbsp;11.50889609&nbsp;-65.1259517"/&gt;<br />
&nbsp;&nbsp;&lt;cv&nbsp;c="-88.5073931&nbsp;11.67542369&nbsp;-86.80101523"/&gt;<br />
&nbsp;&nbsp;&lt;cv&nbsp;c="-174.5511508&nbsp;8.575730303&nbsp;-67.03592031"/&gt;<br />
&nbsp;&nbsp;&lt;cv&nbsp;c="-189.2139061&nbsp;8.539901228&nbsp;-43.65303468"/&gt;<br />
&nbsp;&nbsp;&lt;cv&nbsp;c="-199.9735277&nbsp;8.470538543&nbsp;63.31385212"/&gt;<br />
&nbsp;&nbsp;&lt;cv&nbsp;c="-191.3309447&nbsp;8.438562697&nbsp;75.55727406"/&gt;<br />
&nbsp;&nbsp;&lt;cv&nbsp;c="-176.8774992&nbsp;8.259085125&nbsp;81.87273025"/&gt;<br />
&lt;/NurbsCurve&gt;<br />
</div>
</td></tr></table>

<br />

<a name="i3d_dynamics"><h3>Dynamics</h3></a>
<br />
Dynamic objects are defined in this part and referenced from the Scene graph section.<br />
<br />
<table><tr><td>

<div id="code">

&nbsp;&nbsp;&lt;Dynamics&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;ParticleSystem name="emitter1" dynamicId="1" type="sprite" rate="0.004" lifespanInfinite="false"<br />
&nbsp;&nbsp;&nbsp;&nbsp;speed="0.01" speedRandom="0" tangentSpeed="0" normalSpeed="1" lifespan="10000" maxCount="1000"<br />
&nbsp;&nbsp;&nbsp;&nbsp;spriteScaleX="50" spriteScaleY="50" depthSort="false" emitterShape="pCubeShape1" shader="lambert2"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Gravity force="0 -3 0"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Air velocity="2 0 0"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ParticleSystem&gt;<br />
&nbsp;&nbsp;&lt;/Dynamics&gt;<br />

</div>
</td></tr></table>
<br />

<a name="i3d_scenegraph"><h3>Scenegraph</h3></a>
<br />
The Scene graph hierarchy (transformations, bones, joints, shapes, lights, cameras and particle systems) are stored in this 
section. Shapes, materials and particle systems are stored as references.<br />
<br />
<table><tr><td>
<div id="code">
&nbsp;&nbsp;&lt;Scene&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;TransformGroup&nbsp;name="myGroup1"&nbsp;translation="1.25&nbsp;0&nbsp;-9"&nbsp;nodeId="47"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape&nbsp;name="mySphere"&nbsp;materialIds="1"&nbsp;shapeId="1"&nbsp;nodeId="48"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;TransformGroup&nbsp;name="myGroup2"&nbsp;rotation="90&nbsp;0&nbsp;270"&nbsp;nodeId="49"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape&nbsp;name="mySphere2"&nbsp;materialIds="1"&nbsp;shapeId="2"&nbsp;nodeId="50"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&lt;/Scene&gt;<br />
</div>
</td></tr></table>
<br />
<h3>Scene graph node types</h3>
<br />

<h3>TransformGroup</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">name</td>
	<td class="list" valign="top">Name of TransformGroup</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">translation</td>
	<td class="list" valign="top">Translation</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">rotation</td>
	<td class="list" valign="top">Rotation, euler order ZY'X''</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">scale</td>
	<td class="list" valign="top">Scale</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">visibility</td>
	<td class="list" valign="top">Visibility</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">kinematic</td>
	<td class="list" valign="top">Kinematic object</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">dynamic</td>
	<td class="list" valign="top">Dynamic object</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">static</td>
	<td class="list" valign="top">Static object</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">compound</td>
	<td class="list" valign="top">Compound parent</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">compoundChild</td>
	<td class="list" valign="top">Compound child</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">collision</td>
	<td class="list" valign="top">Enable collision</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">ccd</td>
	<td class="list" valign="top">Continuous collision detection</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">trigger</td>
	<td class="list" valign="top">Trigger</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">cloth</td>
	<td class="list" valign="top">Cloth</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">restitution</td>
	<td class="list" valign="top">Restitution</td>
	<td class="list" valign="top">float</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">staticFriction</td>
	<td class="list" valign="top">Static friction</td>
	<td class="list" valign="top">float</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">dynamicFriction</td>
	<td class="list" valign="top">Dynamic friction</td>
	<td class="list" valign="top">float</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">skinWidth</td>
	<td class="list" valign="top">Skin width</td>
	<td class="list" valign="top">float</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">density</td>
	<td class="list" valign="top">Density</td>
	<td class="list" valign="top">float</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">collisionMask</td>
	<td class="list" valign="top">Collision mask</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">yes</td>
</tr>

<tr>
	<td class="list" valign="top">joint</td>
	<td class="list" valign="top">Joint</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">breakableJoint</td>
	<td class="list" valign="top">Breakable joint</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">jointBreakForce</td>
	<td class="list" valign="top">Joint break force</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">jointBreakTorque</td>
	<td class="list" valign="top">Joint break torque</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">projection</td>
	<td class="list" valign="top">Enable joint projection</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">xAxisDrive</td>
	<td class="list" valign="top">Enable x axis drive</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">yAxisDrive</td>
	<td class="list" valign="top">Enable y axis drive</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">zAxisDrive</td>
	<td class="list" valign="top">Enable z axis drive</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">drivePos</td>
	<td class="list" valign="top">Enable drive position</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">projDistance</td>
	<td class="list" valign="top">Projection distance</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">driveForceLimit</td>
	<td class="list" valign="top">Drive force limit</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">driveSpring</td>
	<td class="list" valign="top">Drive spring</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">driveSpring</td>
	<td class="list" valign="top">Drive spring</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">solverIterationCount</td>
	<td class="list" valign="top">Solver iteration count</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">rotMinX</td>
	<td class="list" valign="top">Rotation minimum x</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">rotMinY</td>
	<td class="list" valign="top">Rotation minimum y</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">rotMinZ</td>
	<td class="list" valign="top">Rotation minimum z</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">rotMaxX</td>
	<td class="list" valign="top">Rotation maximum x</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">rotMaxY</td>
	<td class="list" valign="top">Rotation maximum y</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">rotMaxZ</td>
	<td class="list" valign="top">Rotation maximum z</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">transMinX</td>
	<td class="list" valign="top">Translation minimum x</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">transMinY</td>
	<td class="list" valign="top">Translation minimum y</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">transMinZ</td>
	<td class="list" valign="top">Translation minimum z</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">transMaxX</td>
	<td class="list" valign="top">Translation maximum x</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">transMaxY</td>
	<td class="list" valign="top">Translation maximum y</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">transMaxZ</td>
	<td class="list" valign="top">Translation maximum z</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">objectMask</td>
	<td class="list" valign="top">Object mask</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">nodeId</td>
	<td class="list" valign="top">Node reference id, used for Animation and UserAttributes section</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">no</td>
</tr>
</table>
<br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Element</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Cardinality</b></th>
</tr>
<tr>
	<td class="list" valign="top">TransformGroup</td>
	<td class="list" valign="top" width="300">Transform group node</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">0..N</td>
</tr>
<tr>
	<td class="list" valign="top">Shape</td>
	<td class="list" valign="top" width="300">Shape node</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">0..N</td>
</tr>
<tr>
	<td class="list" valign="top">Camera</td>
	<td class="list" valign="top" width="300">Camera node</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">0..N</td>
</tr>
<tr>
	<td class="list" valign="top">Light</td>
	<td class="list" valign="top" width="300">Light node</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">0..N</td>
</tr>
<tr>
	<td class="list" valign="top">Dynamic</td>
	<td class="list" valign="top" width="300">Dynamic node (eg. particle system)</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">0..N</td>
</tr>
</table>
<br />

<h3>Shape</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">shapeId</td>
	<td class="list" valign="top" width="300">Shape reference id (reference to shapes section)</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">materialIds</td>
	<td class="list" valign="top" width="300">List of used material ids (reference to materials section)</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">skinBindNodeIds</td>
	<td class="list" valign="top" width="300">Skin bind node ids</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">castsShadows</td>
	<td class="list" valign="top" width="300">Casts shadows</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">receiveShadows</td>
	<td class="list" valign="top" width="300">Receive shadows</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">clipDistance</td>
	<td class="list" valign="top" width="300">Clip distance</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">nonRenderable</td>
	<td class="list" valign="top" width="300">Non renderable</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>

</table>
<br />
<br />

<h3>Camera</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">fov</td>
	<td class="list" valign="top" width="300">Field of view</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">nearClip</td>
	<td class="list" valign="top" width="300">Near clipping plane</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">farClip</td>
	<td class="list" valign="top" width="300">Far clipping plane</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">no</td>
</tr>
</table>
<br />

<h3>Light</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">type</td>
	<td class="list" valign="top">Light type</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">diffuseColor</td>
	<td class="list" valign="top">Diffuse color</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">emitDiffuse</td>
	<td class="list" valign="top">Emit diffuse</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">specularColor</td>
	<td class="list" valign="top">Specular color</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">emitSpecular</td>
	<td class="list" valign="top">Emit specular</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">castShadowMap</td>
	<td class="list" valign="top">Cast shadow Map</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">depthMapBias</td>
	<td class="list" valign="top">Depth map bias</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">depthMapResolution</td>
	<td class="list" valign="top">Depth map resolution</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">yes</td>
</tr>

<tr>
	<td class="list" valign="top">shadowFarDistance</td>
	<td class="list" valign="top">Shadow far fistance</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>

<tr>
	<td class="list" valign="top">shadowTextureOffset</td>
	<td class="list" valign="top">Shadow texture offset</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">shadowExtrusionDistance</td>
	<td class="list" valign="top">Shadow extrusion distance</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">decayRate</td>
	<td class="list" valign="top">Decay rate</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">coneAngle</td>
	<td class="list" valign="top">coneAngle</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">dropOff</td>
	<td class="list" valign="top">dropOff</td>
	<td class="list" valign="top">integer</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">projTexture</td>
	<td class="list" valign="top">Projective texture name</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">range</td>
	<td class="list" valign="top">Range</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">no</td>
</tr>
</table>
<br />
<h3>5 Dynamic</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">dynamicId</td>
	<td class="list" valign="top" width="300">Dynamic id (reference to dynamics section)</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
</table>
<br />
<br />

<br />
<h3>Example</h3>
<table><tr><td>
<div id="code">
&lt;Scene&gt;<br />
&nbsp;&nbsp;&lt;Camera name="camera1" translation="0 2.00 6.47" rotation="-13.07 0 0" fov="54.43" nearClip="0.01" farClip="1000" nodeId="34"/&gt;<br />
&nbsp;&nbsp;&lt;Light name="pointLight1" translation="6.56 5.76 4.04" type="point" diffuseColor="1 1 1" range="10" nodeId="35"/&gt;<br />
&nbsp;&nbsp;&lt;TransformGroup name="group1" translation="1.35 0.96 0.81" nodeId="36"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape name="pCubeShape1" rotation="-23.94 6.49 14.29" materialIds="1 2" shapeId="1" nodeId="37"/&gt;<br />
&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&lt;/Scene&gt;<br />
</div>
</td></tr></table>


<br />
<a name="i3d_animation"><h3>Animation</h3></a>
<br />
Motions are defined in this part. Clips are the basic building block and allow Non-Linear Animation by composing multiple clips.<br />
<br />
<table><tr><td>

<div id="code">
&nbsp;&nbsp;&lt;Animation&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;AnimationSets&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;AnimationSet&nbsp;name="walk_crouched"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Clip&nbsp;name="walk_crouched1Source"&nbsp;duration="1000"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Keyframes&nbsp;nodeId="Hips"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Keyframe&nbsp;time="0"&nbsp;translation="-0.467&nbsp;13.504&nbsp;39.842"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Keyframe&nbsp;time="333"&nbsp;translation="-0.559&nbsp;12.915&nbsp;39.370"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Keyframe&nbsp;time="1000"&nbsp;translation="-2.610&nbsp;11.917&nbsp;35.462"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Keyframes&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Keyframes&nbsp;node="Chest"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Keyframe&nbsp;time="0"&nbsp;rotation="-1.013&nbsp;-4.465&nbsp;0.890"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Keyframe&nbsp;time="666"&nbsp;rotation="10.009&nbsp;-6.667&nbsp;4.381"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Keyframe&nbsp;time="1000"&nbsp;rotation="11.638&nbsp;-3.906&nbsp;4.115"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Keyframes&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Clip&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/AnimationSet&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/AnimationSets&gt;<br />
&nbsp;&nbsp;&lt;/Animation&gt;<br />
</div>
</td></tr></table>
<br />




<a name="i3d_example"><h3>I3D Example: Quad</h3></a>
<table><tr><td>
<div id="code">
&lt;?xml&nbsp;version="1.0"&nbsp;encoding="iso-8859-1"?&gt;<br />
<br />
&lt;i3D&nbsp;name="myScene"&nbsp;version="1.6"&nbsp;xsi:noNamespaceSchemaLocation="http://i3d.giants.ch/schema/i3d-1.6.xsd"&gt;<br />
&nbsp;&nbsp;&lt;Files&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;File&nbsp;fileId="1"&nbsp;filename="myTexture1.png"/&gt;<br />
&nbsp;&nbsp;&lt;/Files&gt;<br />
<br />
&nbsp;&nbsp;&lt;Materials&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Material&nbsp;name="myShader_001"&nbsp;materialId="1"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Texture&nbsp;fileId="1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Material&gt;<br />
&nbsp;&nbsp;&lt;/Materials&gt;<br />
<br />
&nbsp;&nbsp;&lt;Shapes&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;IndexedTriangleSet&nbsp;name="myPolyObject"&nbsp;shapeId="1"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Vertices count="3" uv0="true"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;v&nbsp;c="-0.50&nbsp;-0.5&nbsp;0.50"&nbsp;t0="0&nbsp;0.1&nbsp;0.3&nbsp;0.3&nbsp;0.2&nbsp;0&nbsp;0.1&nbsp;1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;v&nbsp;c="0.49&nbsp;-0.5&nbsp;0.50"&nbsp;t0="1&nbsp;0.9&nbsp;0.3&nbsp;0.3&nbsp;0.6&nbsp;0&nbsp;0.1&nbsp;1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;v&nbsp;c="-0.50&nbsp;0.49&nbsp;0.50"&nbsp;t0="0&nbsp;0.1&nbsp;0.9&nbsp;0.3&nbsp;0.2&nbsp;0&nbsp;0&nbsp;1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Vertices&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Triangles count="3"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;t&nbsp;vi="0&nbsp;1&nbsp;3"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;t&nbsp;vi="2&nbsp;3&nbsp;5"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;t&nbsp;vi="4&nbsp;5&nbsp;7"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Triangles&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Subsets count="1"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Subset firstVertex="0" numVertices="3" firstIndex="0" numIndices="3"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Subsets&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/IndexedTriangleSet&gt;<br />
&nbsp;&nbsp;&lt;/Shapes&gt;<br />
<br />
&nbsp;&nbsp;&lt;Scene&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;TransformGroup&nbsp;name="myGroup1"&nbsp;translation="1.25&nbsp;0&nbsp;-9"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape&nbsp;name="myPolyObject"&nbsp;shapeId="1"&nbsp;materialIds="1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;TransformGroup&nbsp;name="myGroup2"&nbsp;translation="2.0&nbsp;1.0&nbsp;1.5"&nbsp;rotation="90&nbsp;0&nbsp;270"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape&nbsp;name="polyObject"&nbsp;shapeId="1"&nbsp;materialIds="1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&nbsp;&nbsp;&lt;/Scene&gt;<br />
&lt;/i3D&gt;<br />
</div>
</td></tr></table>
<br />

<a name="i3d_test_scenes"><h2>Test Scenes</h2></a>
<table>
<tr><td><img src="images/i3d/terrain_test.jpg" alt="terrain_test" /></td></tr>
<tr><td align="center">Terrain and Foliage (<i>terrain_test.i3d</i>)</td></tr>
</table>
<table>
<tr><td><img src="images/i3d/water_test.jpg" alt="water_test" /></td></tr>
<tr><td align="center">Water Shader (<i>terrain_test.i3d</i>)</td></tr>
</table>
<table>
<tr><td><img src="images/i3d/physics_test.jpg" alt="physics_test" /></td></tr>
<tr><td align="center">Physics (<i>physics_test.i3d</i>)</td></tr>
</table>
<table>
<tr><td><img src="images/i3d/custom_shader_test.jpg" alt="custom_shader_test" /></td></tr>
<tr><td align="center">Custom Shader (<i>custom_shader_test_scene.i3d</i>)</td></tr>
</table>
<table>
<tr><td><img src="images/i3d/character_animation_test.jpg" alt="character_animation_test" /></td></tr>
<tr><td align="center">Character Animation (<i>character_animation_test.i3d</i>)</td></tr>
</table>
<table>
<tr><td><img src="images/i3d/parallax_mapping_test.jpg" alt="parallax_mapping_test" /></td></tr>
<tr><td align="center">Parallax Mapping (<i>parallax_mapping_test.i3d</i>)</td></tr>
</table>
<table>
<tr><td><img src="images/i3d/level_of_detail_test.jpg" alt="level_of_detail_test" /></td></tr>
<tr><td align="center">Level of Detail (<i>level_of_detail_test.i3d</i>)</td></tr>
</table>
<table>
<tr><td><img src="images/i3d/particle_system_test.jpg" alt="particle_system_test" /></td></tr>
<tr><td align="center">Particle System (<i>particle_system_test.i3d</i>)</td></tr>
</table>

<br />
<br />

</div>
<div class="oneThird">
	
    <span class="newsHeading">Latest Versions</span>
	<p class="newsDate">9 April 2009</p>
	<p class="newsSummary">
	GIANTS SDK v4.1.3<br />
	GIANTS Editor v4.1.3<br />
	GIANTS Script Debugger v4.1.3<br />
	Maya Exporter Plugins v4.1.2<br />
	MAX Exporter Plugins v4.1.2<br />
	Blender Exporter Plugins v4.1.2<br />
	</p>

    <span class="newsHeading">Latest Public Versions</span>
	<p class="newsDate">30 March 2009</p>
	<p class="newsSummary">
	GIANTS Editor v4.1.2<br />
	Maya Exporter Plugins v4.1.2<br />
	3Ds MAX Exporter Plugins v4.1.2<br />
	Blender Exporter Plugins v4.1.2
	</p>
	
    <p class="more"><a href="downloads.php">� More</a></p>
   


	<form method="POST" action="?r=1219918258">
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
	
	<span class="newsHeading">Contact</span>
	<img border="0" src="images/misc/contact.gif" alt="contact" />

	<p class="filler"></p>
    <p><img src="images/giantsLogo01.png" alt="GIANTS Logo" /></p>
</div>
</div>



    </div>
    <!-- ##### Footer ##### -->
    <div id="footer">
      &copy; 2009 <a target="_NEW" href="http://www.giants-software.com" title="GIANTS Software GmbH">GIANTS Software GmbH</a>, All Rights Reserved.
    </div>
  </body>
</html>

	
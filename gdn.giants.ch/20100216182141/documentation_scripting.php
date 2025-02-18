<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GDN - Function and Foundation Reference</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="title" content="Function and Foundation Reference"/>
	<meta name="description" content="Documentation - Function and Foundation Reference"/>
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


<table width="100%"><tr><td align="right" width="100%">
<i><a target="_NEW" href="documentation_print.php">Printable Version</a></i><br />
</td></tr></table>

<h1 style="page-break-before:auto;">Function and Foundation Reference</h1>
<br /><br />


<h2>Table of Contents</h2>
<ol type="none">
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



<a name="runtime_function_reference"></a><h2>Function Reference</h2>

<a name="runtime_function_reference_general"></a><h2>General Function Reference</h2>

<br />

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
<blockquote>Render text to viewport<br/>See <a href="#asciiToUtf8">asciiToUtf8</a> to convert to utf8</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function renderText(float x, float y, float size, string str)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x position [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y position [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>size</i></td><td>font size</td></tr>
<tr><td><i>string</i></td><td><i>str</i></td><td>utf8 encoded string to print</td></tr>
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

<h3>setTextWrapWidth</h3>
<b>Description</b><br />
<blockquote>Set the text wrap width to be used for the following renderText calls</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function setTextWrapWidth(float wrapWidth)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>wrapWidth</i></td><td>wrap width</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.5</i></blockquote>
<br />
<br /><br /><br />

<h3>drawDebugPoint</h3>
<b>Description</b><br />
<blockquote>Render a point. Only use for debug rendering</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function drawDebugPoint(float x, float y, float z, float r, float g, float b, float a)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x position</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y position</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z position</td></tr>
<tr><td><i>float</i></td><td><i>r</i></td><td>red color component [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>g</i></td><td>green color component [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>b</i></td><td>blue color component [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>a</i></td><td>alpha color component [0, 1]</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.5</i></blockquote>
<br />
<br /><br /><br />

<h3>drawDebugLine</h3>
<b>Description</b><br />
<blockquote>Render a line. Only use for debug rendering</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function drawDebugLine(float x0, float y0, float z0, float r0, float g0, float b0, float x1, float y1, float z1, float r1, float g1, float b1)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x0</i></td><td>start x position</td></tr>
<tr><td><i>float</i></td><td><i>y0</i></td><td>start y position</td></tr>
<tr><td><i>float</i></td><td><i>z0</i></td><td>start z position</td></tr>
<tr><td><i>float</i></td><td><i>r0</i></td><td>start red color component [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>g0</i></td><td>start green color component [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>b0</i></td><td>start blue color component [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>x1</i></td><td>end x position</td></tr>
<tr><td><i>float</i></td><td><i>y1</i></td><td>end y position</td></tr>
<tr><td><i>float</i></td><td><i>z1</i></td><td>end z position</td></tr>
<tr><td><i>float</i></td><td><i>r1</i></td><td>end red color component [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>g1</i></td><td>end green color component [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>b1</i></td><td>end blue color component [0, 1]</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.5</i></blockquote>
<br />
<br /><br /><br />

<h3>drawDebugArrow</h3>
<b>Description</b><br />
<blockquote>Render an arrow. Only use for debug rendering</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function drawDebugArrow(float x, float y, float z, float dirX, float dirY, float dirZ, float tangX, float tangY, float tangZ, float r, float g, float b)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>x</i></td><td>x position</td></tr>
<tr><td><i>float</i></td><td><i>y</i></td><td>y position</td></tr>
<tr><td><i>float</i></td><td><i>z</i></td><td>z position</td></tr>
<tr><td><i>float</i></td><td><i>dirX</i></td><td>direction x coordinate</td></tr>
<tr><td><i>float</i></td><td><i>dirY</i></td><td>direction y coordinate</td></tr>
<tr><td><i>float</i></td><td><i>dirZ</i></td><td>direction z coordinate</td></tr>
<tr><td><i>float</i></td><td><i>tangX</i></td><td>tangential x direction</td></tr>
<tr><td><i>float</i></td><td><i>tangY</i></td><td>tangential y direction</td></tr>
<tr><td><i>float</i></td><td><i>tangZ</i></td><td>tangential z direction</td></tr>
<tr><td><i>float</i></td><td><i>r</i></td><td>red color component [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>g</i></td><td>green color component [0, 1]</td></tr>
<tr><td><i>float</i></td><td><i>b</i></td><td>blue color component [0, 1]</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.5</i></blockquote>
<br />
<br /><br /><br />

<a name="asciiToUtf8"></a>
<h3>asciiToUtf8</h3>
<b>Description</b><br />
<blockquote>Converts an ascii latin1 (ISO 88859-1) encoded string to an utf8 string</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function asciiToUtf8(string asciiString)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>asciiString</i></td><td>ascii string</td></tr>
</table></blockquote>
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>utf8string</i></td><td>utf8 encoded string</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.5</i></blockquote>
<br />
<br /><br /><br />

<h3>unicodeToUtf8</h3>
<b>Description</b><br />
<blockquote>Converts an unicode value to an utf8 string</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function unicodeToUtf8(integer unicode)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>unicode</i></td><td>unicode value</td></tr>
</table></blockquote>
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>utf8string</i></td><td>utf8 encoded string representing the unicode</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.5</i></blockquote>
<br />
<br /><br /><br />

<h3>utf8Strlen</h3>
<b>Description</b><br />
<blockquote>Returns the length of an utf8 formated string</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function utf8Strlen(string utf8string)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>utf8string</i></td><td>utf8 formated string</td></tr>
</table></blockquote>
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>length</i></td><td>length of the given string</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.5</i></blockquote>
<br />
<br /><br /><br />

<h3>utf8Substr</h3>
<b>Description</b><br />
<blockquote>Returns a sub string of an utf8 formated string</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function utf8Substr(string utf8string, integer startIndex, integer length)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>utf8string</i></td><td>utf8 formated string</td></tr>
<tr><td><i>integer</i></td><td><i>startIndex</i></td><td>zero based start index</td></tr>
<tr><td><i>integer</i></td><td><i>length</i></td><td>maximal length of the sub string (optional)</td></tr>
</table></blockquote>
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>subString</i></td><td>utf8 formated sub string</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.5</i></blockquote>
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
<tr><td><i>object</i></td><td><i>instance</i></td><td>instance object (optional)</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>numFiles</i></td><td>number of files</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<a name="runtime_function_reference_entity"></a><h2>Entity Function Reference</h2>

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



<a name="runtime_function_reference_node"></a><h2>Node Function Reference</h2>

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

<a name="runtime_function_reference_scenegraph"></a><h2>Scenegraph Function Reference</h2>

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
<a name="runtime_function_reference_lighting"></a><h2>Lighting Function Reference</h2>
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

<a name="runtime_function_reference_camera"></a><h2>Camera Function Reference</h2>

<br />

<h3>createCamera</h3>
<b>Description</b><br />
<blockquote>Create camera</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function createCamera(string cameraName, float fovy, float nearClip, float farClip)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>cameraName</i></td><td>camera name</td></tr>
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

<a name="runtime_function_reference_shape"></a><h2>Shape Function Reference</h2>

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

<a name="runtime_function_reference_physics"></a><h2>Physics Function Reference</h2>

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

<h3>simulatePhysicsTimeScale</h3>
<b>Description</b><br />
<blockquote>Time scale of physics simulation</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function simulatePhysicsTimeScale(float scale)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>scale</i></td><td>physics time scale</td></tr>
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

<a name="function_physics_addContactReport"></a><h3>addContactReport</h3>
<b>Description</b><br />
<blockquote>Adds contact report callback function<br/>See <a href="documentation_scripting.php#function_callback_contactCallback">contact callback function</a></blockquote></blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function addContactReport(integer transformId, float forceThreshold, string contactReportFunctionCallback, object targetObject)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>transformId</i></td><td>id of transform object</td></tr>
<tr><td><i>float</i></td><td><i>forceThreshold</i></td><td>force threshold</td></tr>
<tr><td><i>string</i></td><td><i>contactFunctionCallback</i></td><td>contact report function callback</td></tr>
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
<blockquote>Get mass</blockquote>
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

<a name="runtime_function_reference_spline"></a><h2>Spline Function Reference</h2>
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



<a name="runtime_function_reference_animation"></a><h2>Animation Function Reference</h2>

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


<a name="runtime_function_reference_overlays"></a><h2>Overlays Function Reference</h2>

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

<h3>getVideoOverlayCurrentTime</h3>
<b>Description</b><br />
<blockquote>Get video overlay current time</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getVideoOverlayCurrentTime(integer videoOverlayId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>videoOverlayId</i></td><td>overlay id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>videoCurrentTime</i></td><td>video current time in milliseconds</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.5</i></blockquote>
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
<a name="runtime_function_reference_sound"></a><h2>Sound Function Reference</h2>

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
<tr><td><i>integer</i></td><td><i>sampleId</i></td><td>id of transform object</td></tr>
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
<blockquote><i>function getSampleVelocity(integer sampleId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>sampleId</i></td><td>id of transform object</td></tr>
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

<a name="runtime_function_reference_input"></a><h2>Input Function Reference</h2>

<br />

<h3>getNumOfGamepads</h3>
<b>Description</b><br />
<blockquote>Get number of joysticks/gampads</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getNumOfGamepads()</i></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>numOfGamepads</i></td><td>number of joysticks/gampads</td></tr>
</table></blockquote>
<br />
<b>Notes</b><br />
<blockquote><i>since v4.1.5</i></blockquote>
<br />
<br /><br /><br />

<h3>getInputAxis</h3>
<b>Description</b><br />
<blockquote>Get joystick/gampad axis value</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function getInputAxis(integer axisNumber, integer gamepadIndex)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>axisNumber</i></td><td>axis number [0=Input.AXIS_1, 5=Input.AXIS_6], </td></tr>
<tr><td><i>integer</i></td><td><i>gamepadIndex</i></td><td>joystick/gampad index</td></tr>
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
<blockquote><i>function getInputButton(integer buttonNumber, integer gamepadIndex)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>buttonNumber</i></td><td>button number [0=Input.BUTTON_1, 15==Input.BUTTON_16]</td></tr>
<tr><td><i>integer</i></td><td><i>gamepadIndex</i></td><td>joystick/gampad index</td></tr>
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

<a name="runtime_function_reference_XML"></a><h2>XML Function Reference</h2>

<a name="xml_path"></a><h3>XML Path</h3>
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
<blockquote><i>function setXMLString(integer objectId, string attributePath, string value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>attributePath</i></td><td>attribute path</td></tr>
<tr><td><i>string</i></td><td><i>value</i></td><td>attribute value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>hasXMLProperty</h3>
<b>Description</b><br />
<blockquote>Returns if an XML path is available in the file<br/>See <a href="#xml_path">XML Path</a></blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function hasXMLProperty(integer objectId, string propertyPath)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>objectId</i></td><td>object id</td></tr>
<tr><td><i>string</i></td><td><i>propertyPath</i></td><td>path to a node or an attribute</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>value</i></td><td>is the given property available in the xml file</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<a name="runtime_function_reference_network"></a><h2>Network Function Reference</h2>

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

<h3>streamSetReadOffset</h3>
<b>Description</b><br />
<blockquote>Sets the read pointer to the given offset in bytes</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamSetReadOffset(integer streamId, integer offset)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
<tr><td><i>integer</i></td><td><i>offset</i></td><td>read offset in bytes</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamGetWriteOffset</h3>
<b>Description</b><br />
<blockquote>Returns the write pointer offset in bytes</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamGetWriteOffset(integer streamId)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>offset</i></td><td>Write offset</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>streamSetWriteOffset</h3>
<b>Description</b><br />
<blockquote>Sets the write pointer to the given offset in bytes</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function streamSetWriteOffset(integer streamId, integer offset)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>stream id</td></tr>
<tr><td><i>integer</i></td><td><i>offset</i></td><td>write offset in bytes</td></tr>
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

<a name="runtime_function_reference_callbacks"></a><h2>Callbacks Function Reference</h2>
<br />
<h2>Default callbacks</h2>

<h3>init</h3>
<b>Description</b><br />
<blockquote>This function is called once on startup. Create and load objects here.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function init(string args)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>args</i></td><td>command line arguments</td></tr>
</table></blockquote>
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
<br />
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
<br />
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
<br />
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
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>triggerId</i></td><td>id of the trigger node</td></tr>
<tr><td><i>integer</i></td><td><i>otherId</i></td><td>id of the other node</td></tr>
<tr><td><i>boolean</i></td><td><i>onEnter</i></td><td>on enter state</td></tr>
<tr><td><i>boolean</i></td><td><i>onLeave</i></td><td>on leave state</td></tr>
<tr><td><i>boolean</i></td><td><i>onStay</i></td><td>on stay state</td></tr>
</table></blockquote>
<br /><br /><br />

<a name="function_callback_contactCallback"></a><h3>contact callback</h3>
<b>Description</b><br />
<blockquote>This function is called when a contact event occurs.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function onContact(integer objectId, integer otherObjectId, boolean isStart, float normalForce, float tangentialForce)</i></blockquote>
<br />
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
<br />
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
<br />
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
<br />
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
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>packetType</i></td><td>type of the packet. All available types are stored in the Network table</td></tr>
<tr><td><i>integer</i></td><td><i>timestamp</i></td><td>timestamp of when the packet was sent</td></tr>
<tr><td><i>integer</i></td><td><i>streamId</i></td><td>id of the stream containing the packet data</td></tr>
</table></blockquote>
<br />
<br /><br /><br />
<a name="runtime_foundation_reference"></a><h2>Foundation Reference</h2>
<a name="runtime_foundation_reference_scenegraph"></a><h2>Scenegraph</h2>
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

<a name="runtime_foundation_reference_input"></a><h2>Input</h2>

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
   


	<form method="post" action="?r=380813211">
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

	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GIANTS Developer Network - Scripting</title>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=iso-8859-1" />
	<meta name="title" content="Scripting"/>
	<meta name="description" content="Scripting (LUA) - Foundation Script Functions"/>
    <link rel="stylesheet" type="text/css" href="./style.css" media="screen, tv, projection" title="Default" />
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
        <span class="doNotDisplay">Navigation:</span>

		<a href="index.php" title="GDN - Home">Home</a> | 
		<a href="scripting.php" title="GDN - Scripting">Scripting</a> | 
		<a href="editor.php" title="GDN - Editor">Editor</a> | 
		<a href="i3d.php" title="GDN - I3D">I3D</a> | 
		<a href="artwork.php" title="GDN - Artwork">Artwork</a> | 
		<a href="console.php" title="GDN - Console">Console</a> | 
		<a href="techDoc.php" title="GDN - C/C++ SDK">C/C++ SDK</a>
      </div>
    </div>

    <!-- ##### Main Copy ##### -->

    <div id="main-copy">
      <div class="rowOfBoxes">
        <div class="twoThirds noBorderOnLeft">



<h1>Foundation Script Functions</h1>

<ol style="list-style-type: decimal;">
	<li><a href="#Scenegraph">Scenegraph</a></li>
	<li><a href="#Input">Input</a></li>
</ol>
	
<a name="Scenegraph">
<h2>1 Scenegraph</h2></a>

<h3>translate</h3>
<b>Description</b><br />
<blockquote>Translate object (transform)</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function translate(string name, float dx, float dy, float dz)</i></blockquote>
<br />
<b>Arguments</b><br />

<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>name</i></td><td>name of object (transform)</td></tr>
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
<blockquote><i>function rotate(string name, float dx, float dy, float dz)</i></blockquote>
<br />
<b>Arguments</b><br />

<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>name</i></td><td>name of object (transform)</td></tr>
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
<blockquote><i>function toggleVisibility(string name)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>name</i></td><td>name of scenegraph object</td></tr>
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
<blockquote><i>function printScenegraph(string name)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>name</i></td><td>name of scenegraph object</td></tr>
</table></blockquote>
<br />
<b>Source file</b><br />
<blockquote>shared/foundation/scenegraph.lua</blockquote>
<br />
<br /><br /><br />

<a name="Input">
<h2>2 Input</h2></a>

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


<br />
</div>

</div>





<!--
        <div class="oneThird">
          <h1>Latest News</h1>

          <p class="newsDate">24 Oct 04</p>
          <p class="newsSummary">Template (finally!) submitted to
            <acronym title="Open Source Web Design">OSWD</acronym>.</p>
          <p class="newsDate">28 Apr 04</p>
          <p class="newsSummary">Thanks to Rapha&eacute;l Enrici for spotting it!</p>

          <div class="more"></div>

          <p class="filler"></p>
        </div>
      </div>
      <div class="rowOfBoxes dividingBorderAbove">
        <div class="quarter noBorderOnLeft">
          <h1>Standards</h1>
          <p><span lang="la">Prosimii</span> is 100% compliant with
             <acronym title="eXtensible HyperText Markup Language">XHTML</acronym> 1.0 Strict and
             uses <acronym title="Cascading Style Sheets">CSS</acronym>.
             <span class="doNotPrint">[Validate

          <p>Unlike this design&rsquo;s inspiration, no tables have been used to layout elements
            and text.</p>
        </div>

        <div class="quarter">
          <h1>Stylesheet</h1>
          <p>An external stylesheet dictates the format and layout of text in this design.</p>

          <p>Thus, website-wide design changes can be achieved by editing only the stylesheet.</p>

          <p class="filler"></p>
        </div>

        <div class="quarter">
          <h1>Compatibility</h1>
          <p><span lang="la">Prosimii&rsquo;s</span> stylesheet is more robust and comprehensive than
            
          <p>This design has been tested for consistent rendering in Gecko</p>
        </div>

        <div class="quarter">
          <h1>Accessibility</h1>
          <p><span lang="la">Prosimii</span> tentatively conforms to the
             
             and  guidelines for web
             content accessibility.</p>

          <p>Additionally, most document metrics (lengths, widths and spacings) are font-size
             relative.</p>
        </div>
      </div>
    </div>
-->
    </div>
    <!-- ##### Footer ##### -->

    <div id="footer">
      &copy; 2007 <a target="_NEW" href="http://www.giants.ch" title="GIANTS INC.">GIANTS</a>
    </div>
  </body>
</html>
	
	
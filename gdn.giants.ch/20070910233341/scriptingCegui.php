
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GIANTS Developer Network - Scripting</title>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=iso-8859-1" />
	<meta name="title" content="Scripting"/>
	<meta name="description" content="Scripting (LUA) - CeGui Script Functions"/>
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



<h1>CeGui Script Functions</h1>

<ol style="list-style-type: decimal;">
	<li><a href="#Create">Creation and loading</a></li>
	<li><a href="#Update">Update</a></li>
</ol>


<h2><a name="Create">1 Creation and loading</a></h2>

<h3>ceGuiInit</h3>
<b>Description</b><br />
<blockquote>Init the CeGui system</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiInit()</i></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>success</i></td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiSetResourceGroupDirectory</h3>
<b>Description</b><br />
<blockquote>Set the directory for the given resource group (where to search for the files)</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiSetResourceGroupDirectory(string resourceGroup, string directory)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>resourceGroup</i></td><td>either "schemes", "imagesets", "fonts", "looknfeels" or "layouts"</td></tr>
<tr><td><i>string</i></td><td><i>directory</i></td><td>the path to the directory, ending with a /</td></tr>
</table></blockquote>
<br />
<b>Sample</b><br />
<blockquote>All your cegui files are located at "data/gui":<br />
    <div style="padding-left:5px;font-family: 'Courier New', verdana, helvetica, arial, sans-serif;">
    ceGuiSetResourceGroupDirectory("schemes", "data/gui/");<br />
    ceGuiSetResourceGroupDirectory("imagesets", "data/gui/");<br />
    ceGuiSetResourceGroupDirectory("fonts", "data/gui/");<br />
    ceGuiSetResourceGroupDirectory("looknfeels", "data/gui/");<br />
    ceGuiSetResourceGroupDirectory("layouts", "data/gui/");</div></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiGetResourceGroupDirectory</h3>
<b>Description</b><br />
<blockquote>Get the directory of the given resource group</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiGetResourceGroupDirectory(string resourceGroup)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>resourceGroup</i></td><td>either "schemes", "imagesets", "fonts", "looknfeels" or "layouts"</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiCreateFont</h3>
<b>Description</b><br />
<blockquote>Create font from the specified file</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiCreateFont(string fontFilename)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>fontFilename</i></td><td>name of font definition file</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>success</i></td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiSetDefaultFont</h3>
<b>Description</b><br />
<blockquote>Set the default font to be used</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiSetDefaultFont(string fontname)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>fontname</i></td><td>name of font, must be created before with ceGuiCreateFont</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiCreateImageSet</h3>
<b>Description</b><br />
<blockquote>Create an imageset from the given file</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiCreateImageSet(string filename)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>filename</i></td><td>file name of the imageset</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>success</i></td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiCreateImageSetFromImageFile</h3>
<b>Description</b><br />
<blockquote>Create an imageset object from the specified image file. The imageset will initially have a single image defined named "full_image" which is an image that represents the entire area of the loaded image.</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiCreateImageSetFromImageFile(string name, string filename)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
    <tr><td><i>string</i></td><td><i>name</i></td><td>imageset name</td></tr>
<tr><td><i>string</i></td><td><i>filename</i></td><td>file name of the image</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>success</i></td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiLoadScheme</h3>
<b>Description</b><br />
<blockquote>Load a scheme form the specified file</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiLoadScheme(string filename)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>filename</i></td><td>file name of the scheme file</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>success</i></td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiSetDefaultMouseCursor</h3>
<b>Description</b><br />
<blockquote>Set the default mouse cursor to use</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiSetDefaultMouseCursor(string imageset, string imageName)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>imageset</i></td><td>name of the imageset</td></tr>
<tr><td><i>string</i></td><td><i>imageName</i></td><td>name of the image to use</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiSetRootSheet</h3>
<b>Description</b><br />
<blockquote>Set root window to be rendered</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiSetRootSheet(string name)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>name</i></td><td>window name</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiLoadWindowLayout</h3>
<b>Description</b><br />
<blockquote>Load windows from layout file</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiLoadWindowLayout(string filename)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>filename</i></td><td>layout filename</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>windowName</i></td><td>root window name</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiCreateWindow</h3>
<b>Description</b><br />
<blockquote>Create new window</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiLoadWindowLayout(string type, string name, string parentName)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>type</i></td><td>type of window</td></tr>
<tr><td><i>string</i></td><td><i>name</i></td><td>window name</td></tr>
<tr><td><i>string</i></td><td><i>parentName</i></td><td>(optional) name of parent window</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>success</i></td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiDestroyWindow</h3>
<b>Description</b><br />
<blockquote>Destory the specified window</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiDestroyWindow(string name)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>name</i></td><td>window name</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiSetProperty</h3>
<b>Description</b><br />
<blockquote>Set window property</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiSetProperty(string windowName, string propertyName, string value)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>windowName</i></td><td>name of the window</td></tr>
<tr><td><i>string</i></td><td><i>propertyName</i></td><td>name of the property</td></tr>
<tr><td><i>string</i></td><td><i>value</i></td><td>property value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiGetProperty</h3>
<b>Description</b><br />
<blockquote>Get window property</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiGetProperty(string windowName, string propertyName)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>windowName</i></td><td>name of the window</td></tr>
<tr><td><i>string</i></td><td><i>propertyName</i></td><td>name of the property</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>value</i></td><td>property value</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiAddChildWindow</h3>
<b>Description</b><br />
<blockquote>Add window as child of another window</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiGetProperty(string parentWindow, string childWindow)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>parentWindow</i></td><td>name of the parent window</td></tr>
<tr><td><i>string</i></td><td><i>childWindow</i></td><td>name of the child window</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiSubscribeEvent</h3>
<b>Description</b><br />
<blockquote>Subscribe an event listener callback function</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiSubscribeEvent(string window, string eventName, string callback)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>string</i></td><td><i>window</i></td><td>name of the window</td></tr>
<tr><td><i>string</i></td><td><i>eventName</i></td><td>name of the event</td></tr>
<tr><td><i>string</i></td><td><i>callback</i></td><td>name of the callback function</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h2><a name="Update">2 Update</a></h2>

<h3>ceGuiInjectChar</h3>
<b>Description</b><br />
<blockquote>Inject a character to the gui system</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiInjectChar(integer unicode)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>unicode</i></td><td>unicode of the character</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>processed</i></td><td>true if the input was processed by the gui system</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiInjectKeyDown</h3>
<b>Description</b><br />
<blockquote>Inject a key down event to the gui system</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiInjectKeyDown(integer key)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>key</i></td><td>key code of the key</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>processed</i></td><td>true if the input was processed by the gui system</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiInjectKeyUp</h3>
<b>Description</b><br />
<blockquote>Inject a key up event to the gui system</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiInjectKeyUp(integer key)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>key</i></td><td>key code of the key</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>processed</i></td><td>true if the input was processed by the gui system</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiInjectMouseButtonDown</h3>
<b>Description</b><br />
<blockquote>Inject a mouse button down event to the gui system</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiInjectMouseButtonDown(integer button)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>button</i></td><td>button number</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>processed</i></td><td>true if the input was processed by the gui system</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiInjectMouseButtonUp</h3>
<b>Description</b><br />
<blockquote>Inject a mouse button up event to the gui system</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiInjectMouseButtonUp(integer button)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>integer</i></td><td><i>button</i></td><td>button number</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>processed</i></td><td>true if the input was processed by the gui system</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiInjectMousePosition</h3>
<b>Description</b><br />
<blockquote>Inject the mouse position to the gui system</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiInjectMousePosition(float posx, float posy)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>posx</i></td><td>mouse x-position</td></tr>
<tr><td><i>float</i></td><td><i>posy</i></td><td>mouse y-position</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>processed</i></td><td>true if the input was processed by the gui system</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiInjectMouseWheelChange</h3>
<b>Description</b><br />
<blockquote>Inject a mouse wheel change to the gui system</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiInjectMouseWheelChange(float rotation)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>rotation</i></td><td>amount the wheel rotated</td></tr>
</table></blockquote>
<br />
<b>Return Values</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>boolean</i></td><td><i>processed</i></td><td>true if the input was processed by the gui system</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiInjectTimePulse</h3>
<b>Description</b><br />
<blockquote>Inject time pulse to the gui system</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiInjectTimePulse(float dt)</i></blockquote>
<br />
<b>Arguments</b><br />
<blockquote><table cellpadding="3" border="1" style="border-collapse:collapse">
<tr><td><i>float</i></td><td><i>dt</i></td><td>time elapsed in miliseconds</td></tr>
</table></blockquote>
<br />
<br /><br /><br />

<h3>ceGuiRenderGui</h3>
<b>Description</b><br />
<blockquote>Calls the gui system render method</blockquote>
<br />
<b>Definition</b><br />
<blockquote><i>function ceGuiRenderGui()</i></blockquote>
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
	
	
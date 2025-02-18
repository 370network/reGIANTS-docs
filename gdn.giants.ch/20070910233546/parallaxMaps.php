
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GIANTS Developer Network - Parallaxmapping</title>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=iso-8859-1" />
	<meta name="title" content="Parallaxmapping"/>
	<meta name="description" content="Artwork - Generate maps for parallaxmapping"/>
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



<h1>Generate maps for parallaxmapping</h1>


<p><b>Requirements</b><br />
  The Nvidia Photoshop Normal Map Filter plug-in from Nvidia. This plug-in can be downloaded from 
  <a href="http://developer.nvidia.com/object/photoshop_dds_plugins.html">developer.nvidia.com</a>
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
  
  <li>Save the Image as PNG or TGA as 32 bit.</li>
</ul>


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
	
	
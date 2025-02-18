
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GDN - Content Creation - Artwork Guide</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="expires" content="0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta name="title" content="Content Creation - Artwork Guide"/>
	<meta name="description" content="Content Creation - Artwork Guide Documentation"/>
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

<h1 style="page-break-before:auto;">Content Creation - Artwork Guide</h1>
<br /><br />


<h2>Table of Contents</h2>
<ol type="none">
	<li><a href="#artwork_guide_maya">Autodesk Maya</a></li>
	<li><a href="#artwork_guide_max">Autodesk 3DS MAX</a></li>
	<li><a href="#artwork_guide_texturing">Texturing</a></li>
</ol>

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



</div>
<div class="oneThird">
	
    <span class="newsHeading">Latest Versions</span>
	<p class="newsDate">18 June 2009</p>
	<p class="newsSummary">
	GIANTS SDK v4.1.3<br />
	GIANTS Editor v4.1.4<br />
	GIANTS Script Debugger v4.1.3<br />
	Maya Exporter Plugins v4.1.2<br />
	MAX Exporter Plugins v4.1.4<br />
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
	
    <p class="more"><a href="downloads.php">» More</a></p>
   


	<form method="POST" action="?r=121699666">
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
		&nbsp;<small><a href="register.php">Register Now</a></small>
	</td></tr></table>
	</p>

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
      &copy; 2009 <a target="_NEW" href="http://www.giants-software.com" title="GIANTS Software GmbH">GIANTS Software GmbH</a>, All Rights Reserved.
    </div>
  </body>
</html>

	
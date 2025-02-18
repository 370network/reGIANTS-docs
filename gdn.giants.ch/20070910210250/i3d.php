
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GIANTS Developer Network - I3D</title>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=iso-8859-1" />
	<meta name="title" content="I3D"/>
	<meta name="description" content="GIANTS Developer Network  - I3D"/>
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

	
<h1>I3D</h1>

<br />
<img src="images/i3d/boxes01.jpg" width="380" height="253" alt="Boxes" />

<h3>1 Introduction</h3>

i3D is an open XML 3D file format.<br />
<br />
The purpose of i3D is to interchange 3D data between applications and platforms.<br />
<br />
A vaild i3D file can have up to six parts: Textures, Shaders, Shapes, Dynamics, Scene graph and Animation.
Dependent on application each part can be omitted.<br />

<br />

<br />
<h3><a href="i3d_export.php">2 Export</a></h3>
<h3><a href="i3d_specification.php">3 Specification</a></h3>
<h3><a href="i3d_test_scenes.php">4 Test Scenes</a></h3>
<br />

<h3>5 Features</h3>	
	
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
			<li>Character sets</li>
			<li>Clips</li>
			<li>Keyframes: translation, rotation, scale and visibility</li>
			<li>Morph Targets</li>
		</ul>
	</li>

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

<h3>6 Example .i3d file</h3>
<table><tr><td>
<div id="code">
&lt;?xml&nbsp;version="1.0"&nbsp;encoding="iso-8859-1"?&gt;<br />
<br />
&lt;i3D&nbsp;name="myScene"&nbsp;version="1.5"&nbsp;xsi:noNamespaceSchemaLocation="http://i3d.giants.ch/schema/i3d-1.5.xsd"&gt;<br />
&nbsp;&nbsp;&lt;Files&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;File&nbsp;name="myTexture1"&nbsp;filename="myTexture1.png"/&gt;<br />
&nbsp;&nbsp;&lt;/Files&gt;<br />
<br />
&nbsp;&nbsp;&lt;Materials&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Material&nbsp;name="myShader_001"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Texture&nbsp;name="myTexture1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Material&gt;<br />
&nbsp;&nbsp;&lt;/Materials&gt;<br />
<br />
&nbsp;&nbsp;&lt;Shapes&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;IndexedFaceSet&nbsp;name="myPolyObject"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Vertices&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;v&nbsp;c="0.0&nbsp;3.75&nbsp;4.28"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;v&nbsp;c="2.0&nbsp;10.25&nbsp;9.28"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;v&nbsp;c="-4.382&nbsp;2.75&nbsp;9.99"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Vertices&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Faces&nbsp;shaderlist="myShader_001"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;f&nbsp;vi="0&nbsp;1&nbsp;2"&nbsp;ct="0"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;f&nbsp;vi="1&nbsp;2&nbsp;0"&nbsp;ct="0"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Faces&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/IndexedFaceSet&gt;<br />
&nbsp;&nbsp;&lt;/Shapes&gt;<br />
<br />
&nbsp;&nbsp;&lt;Scene&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;TransformGroup&nbsp;name="myGroup1"&nbsp;translation="1.25&nbsp;0&nbsp;-9"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape&nbsp;name="myPolyObject"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;TransformGroup&nbsp;name="myGroup2"&nbsp;1.0"&nbsp;translation="2.0&nbsp;1.0&nbsp;1.5"&nbsp;rotation="90&nbsp;0&nbsp;270"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape&nbsp;name="polyObject" ref="myPolyObject"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&nbsp;&nbsp;&lt;/Scene&gt;<br />
&lt;/i3D&gt;<br />
</div>
</td></tr></table>
<br />
<h3>7 Overview</h3>
<a href="images/i3d/i3d-1.4.gif" title="click to enlarge"><img src="images/i3d/i3d-1.4_thumbnail.gif" alt="Overview" /></a>
<br />
<br />






</div>
<div class="oneThird">

	<h1>I3D downloads</h1>
	<ul><li><a href="downloads/GIANTS_Editor_0.2.3.exe">GIANTS Editor v0.2.3</a><br /><i>Date: 10.08.2007 Size: 6783KB</i></li>
</ul>
	<ul><li><a href="downloads/maya_i3d_export_1.1.4.zip">Maya i3D exporter for Maya 6.5, 7.0, and 8.x v1.1.4</a><br /><i>Date: 19.06.2007 Size: 226KB</i></li>
</ul>
	<ul><li><a target="_blank" href="http://i3d.giants.ch/schema/i3d-1.5.xsd">i3D xml schema definition Version 1.5</a></li>
</ul>
	
	<p class="filler"></p>

	<h1>Contact</h1>
	<img border=0 src="images/misc/contact.gif">
	
	<p class="filler"></p>
    <p><img src="images/giantsLogo01.png" alt="GIANTS Logo"></p>




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
	
	
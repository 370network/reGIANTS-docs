<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>i3D - Export</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta name="title" content="Export"/>
	<meta name="description" content="Export plugins and scrips for i3D."/>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>


<body>

<!-- main content container -->
<div id="content_container">

	<!-- header -->
	<div id="header">
		<div id="header_main">
		<a href="index.php" title="i3D.giants.ch home"><img style="border: 0px;" src="images/header01.gif" width="487" height="48" title="i3D.giants.ch home" alt="i3D logo" /></a>
		</div>
		
		<form action="search.php" method="get">
		<div id="search">
			<span><input id="query" type="text" name="search" title="Text input: query" size="24" /></span>
			<span><input id="button" type="submit" value="Search" /></span>
		</div>
		</form>
	</div>

	<!-- navigation -->
	<div id="navigation">
		<a class="navBar" href="index.php" title="i3D.giants.ch home">HOME</a> | 
		<a class="navBar" href="specification.php" title="i3D.giants.ch specification">SPECIFICATION</a> | 
		<a class="navBar" href="export.php" title="i3D.giants.ch export">EXPORT</a> | 
		<a class="navBar" href="downloads.php" title="i3D.giants.ch downloads">DOWNLOADS</a> | 
		<a class="navBar" href="links.php" title="i3D.giants.ch links">LINKS</a> | 
		<a class="navBar" href="contact.php" title="i3D.giants.ch contact">CONTACT</a>
	</div>

	<!-- page -->
	<div id="page">
<h2>1 Maya<sup style="font-size: 10px;">1</sup> i3d exporter</h2>
	
<h3>1.1 Exports</h3>	
	
<ul>
	<li>Scenegraph hierarchy with
		<ul>
			<li>TransformGroups: translation, rotation, scale and visibility</li>
			<li>Lights: type, color and intensity</li>
			<li>Cameras: field of view, near and far clipping plane</li>
			<li>Shapes: meshes and nurbs curves (supports shape instances)</li>
		</ul>	
	</li>		
	<li>Animation
		<ul>
			<li>Character sets</li>
			<li>Clips</li>
			<li>Keyframes: time, translation, rotation, scale and visibility</li>
		</ul>
	</li>
	<li>Meshes
		<ul>
			<li>Vertices</li>
			<li>Normals</li>
			<li>Vertex colors</li>
			<li>Skin weights</li>
			<li>Texture coordinates (including multiple uv sets)</li>
			<li>Faces (texture coordinates per face)</li>
		</ul>
	</li>
	<li>Shader
		<ul>
			<li>Multitexture (layered textures)</li>
			<li>Bumpmap</li>
			<li>Solid color</li>
		</ul>
	</li>
</ul>
	
<h3>1.2 Installation</h3>

<b>Step 1</b><br />
Place the files i3DExport.mel, i3DExportUI.mel, i3DExportValidate.mel and i3DExporter.mll into the folder "drive:/username/My documents/maya/scripts".<br />
<br />
<b>Step 2</b><br />
Start Maya and open the Script Editor window. Type the following commands in the lower portion of the Script Editor:<br />
<br />
<table><tr><td>
<div id="code">
loadPlugin -qt "drive:/username/My documents/maya/scripts/i3DExporter.mll";<br />
source i3DExport;<br />
source i3DExportUI;<br />
source i3DExportValidate;<br />
i3DExport;<br />
</div>
</td></tr></table>

<b>Note:</b> Maya don't like backslashes so replace them with slashes.<br /><br />
Highlight the commands, then use the middle mouse button, to drag the highlighted MEL commands to the shelf.<br />
<br />
<b>Step 3 (optional)</b><br />
Copy the i3D_icon.bmp into the folder "drive:/username/My documents/maya/x.y/prefs/icons".
Edit shelf to replace the default icon with the one enclosed.<br />
<br />
<br />

<h3>1.3 Usage</h3>

<img src="images/export_script.gif" border="0">
<br />
<br />
<b>Export Options</b><br />
<br />
Export: Scene graph, Animation, Shapes, Shaders, Lights and/or Cameras<br />
<br />
<b>Shape Export Subparts</b><br />
<br />
Defines which parts of a shape are exported.
Normals, Vertex Colors, Texture Coordinates and/or Skin Weights.<br />
<br />
<b>Miscellaneous</b><br />
<br />
<ul>
<li><b>Verbose</b>, Display verbose information in output window during the export.</li>
<li><b>Relative Paths</b>, Generate relative paths for texture files.</li>
<li><b>Template</b>, Don't include nodes that begin with "template_" into scene graph. Child Shapes are included in shape part.</li>
</ul>
<br />

<h3>1.4 Known bugs/problems</h3>

<table>
<tr>
	<th class="list" align="left"><b>Number</b></th>
	<th class="list" align="left" width="300"><b>Issue</b></th>
	<th class="list" align="left" width="300"><b>Workaround</b></th>
</tr>
<tr>
	<td class="list" valign="top">002</td>
	<td class="list" valign="top" width="300">Transformations with pivot points other than (0,0,0) are not correct exported</td>
	<td class="list" valign="top" width="300">Don't move the pivots - move the vertices. Use the validate option to determine affected nodes.</td>
</tr>
<tr>
	<td class="list" valign="top">004</td>
	<td class="list" valign="top" width="300">place2dTexture node information is not exported</td>
	<td class="list" valign="top" width="300">Leave place2dTexture nodes empty and operate directly on the texture coordinates.</td>
</tr>
<tr>
	<td class="list" valign="top">006</td>
	<td class="list" valign="top" width="300">Polygons with holes are not supported.</td>
	<td class="list" valign="top" width="300">Triangulate affected polygons (Modeling->Polygons->Triangulate).</td>
</tr>
</table>
<br />
<h3>1.5 Downloads</h3>
<ul>
	<li>Maya i3D exporter, version 0.8.6, <a href="download/maya_i3d_export_0.8.6.zip">maya_i3d_export_0.8.6.zip</a> (Date: 28/02/05 Size: ~38KB)</li>
</ul>
<br />
<h3>1.6 Related links</h3>
<ul>
	<li><a target="_blank" href="http://www.alias.com">Alias WebSite</a></li>
<li><a target="_blank" href="http://www.alias.com/eng/community/index.jhtml">Maya User Community WebSite</a></li>
<li><a target="_blank" href="http://www.robthebloke.org/research">The Maya Exporter Factfile</a></li>
<li><a target="_blank" href="http://florian.loitsch.com/gpExport">gpExport - a Maya Exporter</a></li>
</ul>
<br />
<br />

<sup>1</sup>&nbsp;Maya a registered trademark of the Alias Systems Corp.

	</div>

	<!-- footer -->
	<div id="footer">
		&copy; 2005 <a class="linkPlain" href="http://www.giants.ch" title="GIANTS INC."><strong>GIANTS INC.</strong></a> - Ver.1.0, Rev.120, 2005-03-01	</div>

</div>
	
</body>
</html>
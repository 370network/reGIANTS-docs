<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>i3D - Home</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta name="title" content="Home"/>
	<meta name="description" content="i3d.giants.ch: Home of the i3D file format."/>
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
<h2>1 Introduction</h2>

i3D is an open XML 3D file format.<br />
<br />
The purpose of i3D is to interchange scene graph based 3D data between applications and platforms.<br />
<br />
A vaild i3D file can have five fundamental parts: Textures, Shaders, Shapesn, Scene graph and Animation.<br />
Dependent on application each part can be omitted.<br />
<br />

<h3>1.1 Features</h3>	
	
<ul>
	<li>Scenegraph hierarchy with
		<ul>
			<li>TransformGroups: translation, rotation, scale and visibility</li>
			<li>Lights: type, color and intensity</li>
			<li>Cameras: field of view, near and far clipping plane</li>
			<li>Shapes: meshes and nurbs curves (supports geometry instancing)</li>
		</ul>	
	</li>		
	<li>Animation
		<ul>
			<li>Character sets</li>
			<li>Clips</li>
			<li>Keyframes: time, translation, rotation, scale and visibility</li>
			<li>Morph Targets</li>
		</ul>
	</li>
	<li>Meshes
		<ul>
			<li>Vertices</li>
			<li>Normals</li>
			<li>Vertex colors</li>
			<li>Skin weights</li>
			<li>Texture coordinates (including multiple uv sets)</li>
			<li>Faces</li>
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

<h2>2 Example .i3d file</h2>
<table><tr><td>
<div id="code">
&lt;?xml&nbsp;version="1.0"&nbsp;encoding="iso-8859-1"?&gt;<br />
<br />
&lt;i3D&nbsp;version="1.0"&nbsp;xsi:noNamespaceSchemaLocation="http://i3d.giants.ch/schema/i3d-1.1.xsd"&gt;<br />
&nbsp;&nbsp;&lt;Textures&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Texture&nbsp;name="myTexture1"&nbsp;filename="myTexture1.png"/&gt;<br />
&nbsp;&nbsp;&lt;/Textures&gt;<br />
<br />
&nbsp;&nbsp;&lt;Shaders&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shader&nbsp;name="myShader_001"&nbsp;type="Blinn"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Texture&nbsp;name="myTexture1"&nbsp;blend="None"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Ambient&nbsp;value="0.5&nbsp;0.1&nbsp;0.3"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Shader&gt;<br />
&nbsp;&nbsp;&lt;/Shaders&gt;<br />
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape&nbsp;name="myPolyObject"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&nbsp;&nbsp;&lt;/Scene&gt;<br />
&lt;/i3D&gt;<br />
</div>
</td></tr></table>
<br />
<h2>3 Overview</h2>
<a href="images/i3d-1.1.gif" target="_new" title="click to enlarge"><img border="1" src="images/i3d-1.1_thumbnail.gif" alt="Overview" /></a>
<br />
<br />

	</div>

	<!-- footer -->
	<div id="footer">
		&copy; 2005 <a class="linkPlain" href="http://www.giants.ch" title="GIANTS INC."><strong>GIANTS INC.</strong></a> - Ver.1.0, Rev.118, 2005-02-28	</div>

</div>
	
</body>
</html>
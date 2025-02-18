<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>i3D - Specification</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta name="title" content="Specification"/>
	<meta name="description" content="i3D file format specification."/>
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
<h2>1 Specification</h2>
<h3>1.1 General Layout</h3>
<table><tr><td>
<div id="code">
&nbsp;&nbsp;&lt;?xml&nbsp;version="1.0"&nbsp;encoding="iso-8859-1"?&gt;<br />
&nbsp;&nbsp;&lt;i3D&nbsp;name="MyScene"&nbsp;version="1.2"&nbsp;xsi:noNamespaceSchemaLocation="http://i3d.giants.ch/schema/i3d-1.2.xsd"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Textures&gt;..&lt;/Textures&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shaders&gt;..&lt;/Shaders&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shapes&gt;..&lt;/Shapes&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Scene&gt;..&lt;/Scene&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Animation&gt;..&lt;/Animation&gt;<br />
&nbsp;&nbsp;&lt;/i3D&gt;<br />
</div>
</td></tr></table>

<h3>1.2 Animation</h3>
<br />

Motions are defined in this part. Clips are the basic building block and allow Non-Linear Animation by composing.<br />
<br />
<table><tr><td>

<div id="code">
&nbsp;&nbsp;&lt;Animation&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;CharacterSets&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;CharacterSet&nbsp;name="walk_crouched"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Clip&nbsp;name="walk_crouched1Source"&nbsp;duration="1000"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Keyframes&nbsp;node="Hips"&gt;<br />
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/CharacterSet&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/CharacterSets&gt;<br />
&nbsp;&nbsp;&lt;/Animation&gt;<br />
</div>
</td></tr></table>
<br />


<h3>1.3 Scenegraph</h3>
<br />
Scene graph hierarchy, transformations, lights and cameras are stored in this section.<br />
<br />
<table><tr><td>
<div id="code">
&nbsp;&nbsp;&lt;Scene&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;TransformGroup&nbsp;name="myGroup1"&nbsp;translation="1.25&nbsp;0&nbsp;-9"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape&nbsp;name="mySphereObject"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;TransformGroup&nbsp;name="myGroup2"&nbsp;rotation="90&nbsp;0&nbsp;270"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape&nbsp;name="myPolyObject"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&lt;/Scene&gt;<br />
</div>
</td></tr></table>
<br />
<b>1.2.1 Scene graph node types</b><br />
<br />
<ul>
	<li><a href="Scene.php">TransformGroup</a></li>
	<li><a href="Scene.php#Shape">Shape</a></li>
	<li><a href="Scene.php#Light">Light</a></li>
	<li><a href="Scene.php#Camera">Camera</a></li>
</ul>
<br />


<h3>1.4 Shapes</h3>
<br />
Shapes are defined here and referenced from the Scene graph section.<br />
This reference mechanism allows multiple instancing of 
shapes.
<br />
<table><tr><td>

<div id="code">
&nbsp;&nbsp;&lt;Shapes&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Sphere&nbsp;name="mySphereObject"&nbsp;shader="myShader_001"&nbsp;radius="10"&nbsp;center="1&nbsp;0&nbsp;0"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;IndexedFaceSet&nbsp;name="myMesh01"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/IndexedFaceSet&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&lt;/Shapes&gt;<br />
</div>
</td></tr></table>
<br />
<b>1.4.1 Shape node types</b><br />
<br />
<ul>
	<li><a href="IndexedFaceSet.php">IndexedFaceSet</a></li>
	<li><a href="NurbsCurve.php">NurbsCurve</a></li>
	<li><a href="Sphere.php">Sphere</a></li>
</ul>
<br />

<h3>1.5 Shaders</h3>
<br />
All Shaders that are used in the Shape section are defined in this section.<br />
<br />
<table><tr><td>
<div id="code">
&nbsp;&nbsp;&lt;Shaders&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shader&nbsp;name="myShader_001"&nbsp;type="Blinn"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Texture&nbsp;name="myTexture1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Ambient&nbsp;value="0.5&nbsp;0.1&nbsp;0.3"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Shader&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&lt;/Shaders&gt;<br />
</div>
</td></tr></table>
<br />
<h3>1.6 Textures</h3>
<br />
All Textures that are used in the Shader section are defined in this section. Texture names are mapped to the corresponding image files.<br />
<br />
<table><tr><td>

<div id="code">
&nbsp;&nbsp;&lt;Textures&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Texture&nbsp;name="myTexture1"&nbsp;filename="myTexture1.png"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&lt;/Textures&gt;<br />
</div>
</td></tr></table>
<br />
<h3>1.7 Downloads</h3>
<ul>
	<li>i3D xml schema definition version 1.2, <a href="schema/i3d-1.2.xsd">i3d-1.2.xsd</a> (Date: 28/02/05 Size: ~11KB)</li>
<li>Simple i3d example file, <a href="download/example1.i3d">example1.i3d</a> (Date: 10/05/04 Size: ~2KB)</li>
</ul>
<br />
<h3>1.8 Related links</h3>
<ul>
	<li><a target="_blank" href="http://www.w3.org/XML/Schema">W3C XML Schema (XML Schema definition language)</a></li>
<li><a target="_blank" href="http://xml.apache.org#xerces">Xerces (XML parser for Java and C++)</a></li>
<li><a target="_blank" href="http://www.grinninglizard.com/tinyxml">TinyXML (simple and small C++ XML parser)</a></li>
<li><a target="_blank" href="http://expat.sourceforge.net">The Expat XML Parser (fast and simple C parser)</a></li>
</ul>
<br />
<br />

	</div>

	<!-- footer -->
	<div id="footer">
		&copy; 2005 <a class="linkPlain" href="http://www.giants.ch" title="GIANTS INC."><strong>GIANTS INC.</strong></a> - Ver.1.0, Rev.119, 2005-02-28	</div>

</div>
	
</body>
</html>
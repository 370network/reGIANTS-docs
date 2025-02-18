
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GDN - I3D Format</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="expires" content="0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta name="title" content="I3D Format"/>
	<meta name="description" content="I3D Format Documentation"/>
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

<h1 style="page-break-before:auto;">I3D Format</h1>
<br /><br />


<h2>Table of Contents</h2>
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
<br />
Note: Test scenes are bundled with the editor.<br />
<br />
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
   


	<form method="POST" action="?r=1369304975">
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

	
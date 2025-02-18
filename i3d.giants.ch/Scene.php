<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>i3D - Scene</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta name="title" content="Scene"/>
	<meta name="description" content="i3D file format specification. Scene"/>
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
<h2>1 Scene</h2>

<h3>1.1 TransformGroup</h3>
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
	<td class="list" valign="top">String</td>
	<td class="list" valign="top">No</td>
</tr>
<tr>
	<td class="list" valign="top">translation</td>
	<td class="list" valign="top">Translation</td>
	<td class="list" valign="top">Complex</td>
	<td class="list" valign="top">Yes</td>
</tr>
<tr>
	<td class="list" valign="top">rotation</td>
	<td class="list" valign="top">Rotation</td>
	<td class="list" valign="top">Complex</td>
	<td class="list" valign="top">Yes</td>
</tr>
<tr>
	<td class="list" valign="top">scale</td>
	<td class="list" valign="top">Scale</td>
	<td class="list" valign="top">Complex</td>
	<td class="list" valign="top">Yes</td>
</tr>
<tr>
	<td class="list" valign="top">visibility</td>
	<td class="list" valign="top">Visibility</td>
	<td class="list" valign="top">Boolean</td>
	<td class="list" valign="top">Yes</td>
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
	<td class="list" valign="top" width="300">Transform group children</td>
	<td class="list" valign="top">Complex</td>
	<td class="list" valign="top">0..N</td>
</tr>
<tr>
	<td class="list" valign="top">Shape</td>
	<td class="list" valign="top" width="300">Shape node</td>
	<td class="list" valign="top">Complex</td>
	<td class="list" valign="top">0..N</td>
</tr>
<tr>
	<td class="list" valign="top">Camera</td>
	<td class="list" valign="top" width="300">Camera node</td>
	<td class="list" valign="top">Complex</td>
	<td class="list" valign="top">0..N</td>
</tr>
<tr>
	<td class="list" valign="top">Light</td>
	<td class="list" valign="top" width="300">Light</td>
	<td class="list" valign="top">Complex</td>
	<td class="list" valign="top">0..N</td>
</tr>
</table>
<br />
<br />

<a name="Shape"/>
<h3>1.2 Shape</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">name</td>
	<td class="list" valign="top" width="300">Shape Name (reference to shapes section)</td>
	<td class="list" valign="top">String</td>
	<td class="list" valign="top">No</td>
</tr>
</table>
<br />
<br />

<a name="Camera"/>
<h3>1.3 Camera</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">fov</td>
	<td class="list" valign="top" width="300">Field of View</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">No</td>
</tr>
<tr>
	<td class="list" valign="top">nearClip</td>
	<td class="list" valign="top" width="300">Near clipping plane</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">No</td>
</tr>
<tr>
	<td class="list" valign="top">farClip</td>
	<td class="list" valign="top" width="300">Far clipping plane</td>
	<td class="list" valign="top">double</td>
	<td class="list" valign="top">No</td>
</tr>
</table>
<br />

<a name="Light"/>
<h3>1.4 Light</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">name</td>
	<td class="list" valign="top">Name of Light</td>
	<td class="list" valign="top">String</td>
	<td class="list" valign="top">No</td>
</tr>
<tr>
	<td class="list" valign="top">type</td>
	<td class="list" valign="top">Light Type</td>
	<td class="list" valign="top">String</td>
	<td class="list" valign="top">No</td>
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
	<td class="list" valign="top">color</td>
	<td class="list" valign="top" width="300">Color</td>
	<td class="list" valign="top">Complex</td>
	<td class="list" valign="top">1</td>
</tr>
<tr>
	<td class="list" valign="top">intensity</td>
	<td class="list" valign="top" width="300">Intensity</td>
	<td class="list" valign="top">Complex</td>
	<td class="list" valign="top">1</td>
</tr>
</table>
<br />

Refer to <a href="schema/i3d-1.0.xsd">i3d-1.0.xsd (schema)</a> for further details.

<br />
<h3>1.2 Example</h3>
<table><tr><td>
<div id="code">
&lt;Scene&gt;<br />
&nbsp;&nbsp;&lt;TransformGroup name="camera1" translation="0 2.005766694 6.474136401" rotation="-13.07689646 0 0"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Camera fov="54.43222311" nearClip="0.01" farClip="1000"/&gt;<br />
&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&nbsp;&nbsp;&lt;TransformGroup name="pointLight1" translation="6.565046191 5.761638301 4.048501723"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Light name="pointLightShape1" type="point"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;color rgb="1 1 1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;intensity value="1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Light&gt;<br />
&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&nbsp;&nbsp;&lt;TransformGroup name="group1" translation="1.357296224 0.9675355144 0.8129871022"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;TransformGroup name="pCube1" rotation="-23.94225635 6.497781219 14.29818769"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape name="pCubeShape1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&lt;/Scene&gt;<br />
</div>
</td></tr></table>

	</div>

	<!-- footer -->
	<div id="footer">
		&copy; 2005 <a class="linkPlain" href="http://www.giants.ch" title="GIANTS INC."><strong>GIANTS INC.</strong></a> - Ver.1.0, Rev.31, 2004-08-13	</div>

</div>
	
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>i3D - IndexedFaceSet</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta name="title" content="IndexedFaceSet"/>
	<meta name="description" content="i3D file format specification. Shape: IndexedFaceSet"/>
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
<h2>1 IndexedFaceSet</h2>

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
	<td class="list" valign="top">Complex</td>
	<td class="list" valign="top">1</td>
</tr>
<tr>
	<td class="list" valign="top">Faces</td>
	<td class="list" valign="top" width="300">List of faces</td>
	<td class="list" valign="top">Complex</td>
	<td class="list" valign="top">1</td>
</tr>
</table>

<br />
<h3>1.1 Vertices</h3>
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
	<td class="list" valign="top">Complex</td>
	<td class="list" valign="top">1..n</td>
</tr>
</table>
<br />
<b>1.1.1 v</b>
<br /><br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">c</td>
	<td class="list" valign="top" width="300">Vertex coordiantes (stored as "x y z")</td>
	<td class="list" valign="top">String</td>
	<td class="list" valign="top">No</td>
</tr>
</table>

<br />
<h3>1.5 Faces</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">shaderlist</td>
	<td class="list" valign="top" width="300">Shaderlist, a comma separated list of used shaders</td>
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
	<td class="list" valign="top">f</td>
	<td class="list" valign="top" width="300">Face</td>
	<td class="list" valign="top">Complex</td>
	<td class="list" valign="top">1..n</td>
</tr>
</table>
<br />
<b>1.5.1 f</b>
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
	<td class="list" valign="top" width="300">Vertices Index, a index for each corner in face</td>
	<td class="list" valign="top">String</td>
	<td class="list" valign="top">No</td>
</tr>
<tr>
	<td class="list" valign="top">t0 to t16</td>
	<td class="list" valign="top" width="300">Texture Coordinate</td>
	<td class="list" valign="top">String</td>
	<td class="list" valign="top">Yes</td>
</tr>
<tr>
	<td class="list" valign="top">n</td>
	<td class="list" valign="top" width="300">Vertex Normals</td>
	<td class="list" valign="top">String</td>
	<td class="list" valign="top">Yes</td>
</tr>
<tr>
	<td class="list" valign="top">c</td>
	<td class="list" valign="top" width="300">Vertex Colors</td>
	<td class="list" valign="top">String</td>
	<td class="list" valign="top">Yes</td>
</tr>
<tr>
	<td class="list" valign="top">ci</td>
	<td class="list" valign="top" width="300">Shader Index, a index for each corner in face to shader list</td>
	<td class="list" valign="top">String</td>
	<td class="list" valign="top">Yes</td>
</tr>
</table>
<br />
Refer to <a href="schema/i3d-1.0.xsd">i3d-1.1.xsd (schema)</a> for further details.

<br />
<h3>1.6 Example</h3>
<table><tr><td>
<div id="code">
&lt;IndexedFaceSet&nbsp;name="myMesh01"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Vertices&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;v&nbsp;c="-0.5000004768&nbsp;-0.5&nbsp;0.5000002384"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;v&nbsp;c="0.4999995828&nbsp;-0.5&nbsp;0.5000000596"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;v&nbsp;c="-0.5000010133&nbsp;0.4999999106&nbsp;0.5000001192"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Vertices&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Faces&nbsp;shaderlist="wood,&nbsp;iron"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;f&nbsp;vi="0&nbsp;1&nbsp;3&nbsp;2"&nbsp;t0="0&nbsp;0.1&nbsp;0.3&nbsp;0.3&nbsp;0.2&nbsp;0&nbsp;0.1&nbsp;1"&nbsp;ci="1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;f&nbsp;vi="2&nbsp;3&nbsp;5&nbsp;4"&nbsp;t0="1&nbsp;0.9&nbsp;0.3&nbsp;0.3&nbsp;0.6&nbsp;0&nbsp;0.1&nbsp;1"&nbsp;ci="0"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;f&nbsp;vi="4&nbsp;5&nbsp;7&nbsp;6"&nbsp;t0="0&nbsp;0.1&nbsp;0.9&nbsp;0.3&nbsp;0.2&nbsp;0&nbsp;0&nbsp;1"&nbsp;ci="1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Faces&gt;<br />
&lt;/IndexedFaceSet&gt;<br />
</div>
</td></tr></table>

	</div>

	<!-- footer -->
	<div id="footer">
		&copy; 2005 <a class="linkPlain" href="http://www.giants.ch" title="GIANTS INC."><strong>GIANTS INC.</strong></a> - Ver.1.0, Rev.75, 2004-12-31	</div>

</div>
	
</body>
</html>
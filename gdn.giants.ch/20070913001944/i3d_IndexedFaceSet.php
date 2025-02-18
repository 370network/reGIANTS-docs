
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GIANTS Developer Network - IndexedFaceSet</title>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=iso-8859-1" />
	<meta name="title" content="IndexedFaceSet"/>
	<meta name="description" content="GIANTS Developer Network  - Shape: IndexedFaceSet"/>
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

<h2>IndexedFaceSet</h2>

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
	<td class="list" valign="top">SkinWeights</td>
	<td class="list" valign="top" width="300">List of skin weights</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">0 or 1</td>
</tr>
<tr>
	<td class="list" valign="top">Faces</td>
	<td class="list" valign="top" width="300">List of faces</td>
	<td class="list" valign="top">complex</td>
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
	<td class="list" valign="top">complex</td>
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
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
</table>


<br />
<h3>1.2 Skin Weights</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Element</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Cardinality</b></th>
</tr>
<tr>
	<td class="list" valign="top">cv</td>
	<td class="list" valign="top" width="300">skin weight</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">1..n</td>
</tr>
</table>
<br />
<b>1.2.1 w</b>
<br /><br />
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">w</td>
	<td class="list" valign="top" width="300">Skin weights</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">bi</td>
	<td class="list" valign="top" width="300">Bone indices</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">no</td>
</tr>
</table>


<br />
<h3>1.3 Faces</h3>
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
	<td class="list" valign="top">f</td>
	<td class="list" valign="top" width="300">Face</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">1..n</td>
</tr>
</table>
<br />
<b>1.3.1 f</b>
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
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">t0 to t16</td>
	<td class="list" valign="top" width="300">Texture Coordinate</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">n</td>
	<td class="list" valign="top" width="300">Vertex normals</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">c</td>
	<td class="list" valign="top" width="300">Vertex Colors</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">ci</td>
	<td class="list" valign="top" width="300">Shader Index, a index for each corner in face to shader list</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">yes</td>
</tr>
</table>
<br />
Refer to <a href="http://i3d.giants.ch/schema/i3d-1.5.xsd">i3d-1.5.xsd (schema)</a> for further details.

<br />
<h3>1.4 Example</h3>
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
	
	
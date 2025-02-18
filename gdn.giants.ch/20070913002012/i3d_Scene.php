
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GIANTS Developer Network - I3D Scene</title>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=iso-8859-1" />
	<meta name="title" content="I3D Scene"/>
	<meta name="description" content="GIANTS Developer Network  - I3D Scene"/>
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

<h2>Scene</h2>

<h3>1 TransformGroup</h3>
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
	<td class="list" valign="top">translation</td>
	<td class="list" valign="top">Translation</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">rotation</td>
	<td class="list" valign="top">Rotation</td>
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
	<td class="list" valign="top">Kinematic</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">dynamic</td>
	<td class="list" valign="top">Dynamic</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">static</td>
	<td class="list" valign="top">Static</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">compound</td>
	<td class="list" valign="top">Compound</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">collision</td>
	<td class="list" valign="top">Collision</td>
	<td class="list" valign="top">boolean</td>
	<td class="list" valign="top">yes</td>
</tr>
<tr>
	<td class="list" valign="top">ccd</td>
	<td class="list" valign="top">CCD</td>
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
	<td class="list" valign="top">DynamicFriction</td>
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
	<td class="list" valign="top">collisionGroup</td>
	<td class="list" valign="top">Collision group</td>
	<td class="list" valign="top">integer</td>
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
	<td class="list" valign="top">TransformGroup</td>
	<td class="list" valign="top" width="300">Transform group children</td>
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
	<td class="list" valign="top" width="300">Light</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">0..N</td>
</tr>
</table>
<br />
<br />

<a name="Shape"></a>
<h3>2 Shape</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">name</td>
	<td class="list" valign="top" width="300">Shape name</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
<tr>
	<td class="list" valign="top">ref</td>
	<td class="list" valign="top" width="300">Shape (reference to shapes section)</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
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
</table>
<br />
<br />

<a name="Camera"></a>
<h3>3 Camera</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">name</td>
	<td class="list" valign="top">Name of Camera</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
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

<a name="Light"></a>
<h3>4 Light</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">name</td>
	<td class="list" valign="top">Name of light</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
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
<a name="ParticleSystem"></a>
<h3>5 ParticleSystem</h3>
<table>
<tr>
	<th class="list" align="left" width="150"><b>Attribute</b></th>
	<th class="list" align="left" width="300"><b>Description</b></th>
	<th class="list" align="left" width="60"><b>Type</b></th>
	<th class="list" align="left" width="70"><b>Optional</b></th>
</tr>
<tr>
	<td class="list" valign="top">name</td>
	<td class="list" valign="top" width="300">Particle system name (reference to dynamics section)</td>
	<td class="list" valign="top">string</td>
	<td class="list" valign="top">no</td>
</tr>
</table>
<br />
<br />

Refer to <a href="http://i3d.giants.ch/schema/i3d-1.5.xsd">i3d-1.5.xsd (schema)</a> for further details.

<br />
<h3>6 Example</h3>
<table><tr><td>
<div id="code">
&lt;Scene&gt;<br />
&nbsp;&nbsp;&lt;Camera name="camera1" translation="0 2.005766694 6.474136401" rotation="-13.07689646 0 0" fov="54.43222311" nearClip="0.01" farClip="1000"/&gt;<br />
&nbsp;&nbsp;&lt;Light name="pointLight1" translation="6.565046191 5.761638301 4.048501723" type="point" diffuseColor="1 1 1" range="10"/&gt;<br />
&nbsp;&nbsp;&lt;TransformGroup name="group1" translation="1.357296224 0.9675355144 0.8129871022"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape name="pCubeShape1" rotation="-23.94225635 6.497781219 14.29818769" ref="pCubeShape"/&gt;<br />
&nbsp;&nbsp;&lt;/TransformGroup&gt;<br />
&lt;/Scene&gt;<br />
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
	
	
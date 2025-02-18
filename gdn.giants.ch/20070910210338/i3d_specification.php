
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GIANTS Developer Network - I3D Specification</title>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=iso-8859-1" />
	<meta name="title" content="I3D Specification"/>
	<meta name="description" content="GIANTS Developer Network  - I3D Specification"/>
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

<h2>Specification</h2>
<h3>1.1 General Layout</h3>
<table><tr><td>
<div id="code">
&nbsp;&nbsp;&lt;?xml&nbsp;version="1.0"&nbsp;encoding="iso-8859-1"?&gt;<br />
&nbsp;&nbsp;&lt;i3D&nbsp;name="MyScene"&nbsp;version="1.5"&nbsp;xsi:noNamespaceSchemaLocation="http://i3d.giants.ch/schema/i3d-1.5.xsd"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Files&gt;..&lt;/Files&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Materials&gt;..&lt;/Materials&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shapes&gt;..&lt;/Shapes&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Dynamics&gt;..&lt;/Dynamics&gt;<br />
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
Scene graph hierarchy, transformations/bones, lights, cameras and particle systems are stored in this 
section. lights, cameras and particle systems are stored as references.<br />
<br />
<table><tr><td>
<div id="code">
&nbsp;&nbsp;&lt;Scene&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;TransformGroup&nbsp;name="myGroup1"&nbsp;translation="1.25&nbsp;0&nbsp;-9"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape&nbsp;name="mySphere" ref="mySphereObject"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;TransformGroup&nbsp;name="myGroup2"&nbsp;rotation="90&nbsp;0&nbsp;270"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shape&nbsp;name="mySphere2" ref="mySphereObject"/&gt;<br />
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
	<li><a href="i3d_Scene.php">TransformGroup</a></li>
	<li><a href="i3d_Scene.php#Shape">Shape</a></li>
	<li><a href="i3d_Scene.php#Light">Light</a></li>
	<li><a href="i3d_Scene.php#Camera">Camera</a></li>
	<li><a href="i3d_Scene.php#ParticleSystem">ParticleSystem</a></li>
</ul>
<br />

<h3>1.4 Dynamics</h3>
<br />
Dynamic objects are defined in this part and referenced from the Scene graph section.<br />
<br />
<table><tr><td>

<div id="code">

&nbsp;&nbsp;&lt;Dynamics&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;ParticleSystem name="emitter1" type="sprite" rate="0.004" lifespanInfinite="false" speed="0.01" speedRandom="0" tangentSpeed="0" normalSpeed="1"<br />
&nbsp;&nbsp;&nbsp;&nbsp;lifespan="10000" maxCount="1000" spriteScaleX="50" spriteScaleY="50" depthSort="false" emitterShape="pCubeShape1" shader="lambert2"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Gravity force="0 -3 0"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Air velocity="2 0 0"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ParticleSystem&gt;<br />
&nbsp;&nbsp;&lt;/Dynamics&gt;<br />

</div>
</td></tr></table>
<br />


<h3>1.5 Shapes</h3>
<br />
Shapes are defined here and referenced from the Scene graph section.
This reference mechanism allows multiple instancing of 
shapes.
<br />
<table><tr><td>

<div id="code">
&nbsp;&nbsp;&lt;Shapes&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;IndexedFaceSet&nbsp;name="myMesh01"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/IndexedFaceSet&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&lt;/Shapes&gt;<br />
</div>
</td></tr></table>
<br />
<b>1.5.1 Shape node types</b><br />
<br />
<ul>
	<li><a href="i3d_IndexedFaceSet.php">IndexedFaceSet</a></li>
	<li><a href="i3d_NurbsCurve.php">NurbsCurve</a></li>
</ul>
<br />

<h3>1.6 Shaders</h3>
<br />
All Shaders/Materials that are used in the Shape and Dynamics section are defined in this section.<br />
<br />
<table><tr><td>
<div id="code">
&nbsp;&nbsp;&lt;Shaders&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;Shader&nbsp;name="myShader_001"&nbsp;type="blinn"&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Texture&nbsp;name="myTexture1"/&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Shader&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;...<br />
&nbsp;&nbsp;&lt;/Shaders&gt;<br />
</div>
</td></tr></table>
<br />
<h3>1.7 Textures</h3>
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
	
	
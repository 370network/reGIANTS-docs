
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GIANTS Developer Network - I3D NurbsCurve</title>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=iso-8859-1" />
	<meta name="title" content="I3D NurbsCurve"/>
	<meta name="description" content="GIANTS Developer Network  - I3D NurbsCurve"/>
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

<h2>NurbsCurve</h2>
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
	<td class="list" valign="top" width="300">List of Contol vertices</td>
	<td class="list" valign="top">complex</td>
	<td class="list" valign="top">3..n</td>
</tr>
</table>
<br />


<br />
<h3>1.1 cv</h3>
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

Refer to <a href="schema/i3d-1.5.xsd">i3d-1.5.xsd (schema)</a> for further details.

<br />
<h3>1.2 Example</h3>
<table><tr><td>
<div id="code">
&lt;NurbsCurve&nbsp;name="cameraPathShape"&nbsp;degree="3"&nbsp;form="periodic"&gt;<br />
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

</div>
<div class="oneThird">

	<h1>I3D downloads</h1>
	<ul><li><a href="downloads/GIANTS_Editor_0.2.3.exe">GIANTS Editor v0.2.3</a><br /><i>Date: 10.08.2007 Size: 6783KB</i></li>
</ul>
	<ul><li><a href="downloads/maya_i3d_export_1.1.4.zip">Maya i3D exporter for Maya 6.5, 7.0, and 8.x v1.1.4</a><br /><i>Date: 19.06.2007 Size: 226KB</i></li>
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
	
	
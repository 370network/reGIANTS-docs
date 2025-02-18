
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
  <head>
	<title>GIANTS Developer Network - C/C++ SDK</title>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=iso-8859-1" />
	<meta name="title" content="C/C++ SDK"/>
	<meta name="description" content="C/C++ SDK - Source Code Conventions"/>
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



<h1>Source Code Conventions</h1>
<br />

<h3>General</h3>

<ul>
 <li>No global defines, functions, enumerations or variables</li>
 <li>Class methods that get or set attributes are named: getXyz() and setXyz()</li>
 <li>Header and source files include only other header files that are absolutely  needed</li>
 <li>Exception handling and RTTI are not used</li>
 <li>Comments are in Javadoc style</li>
 <li>Intentation is 4 whitespaces, No tabs. Make sure you check the "Insert Spaces" option in the Visual C++ settings.</li>
</ul>

<br />
<h3>Prefixes</h3>
<br />
Static variables: g_ourGlobalFoo<br />
Member variables: m_myLocalBar<br />
Pointer variables: m_pMyLocalBar, pMyArgument<br />


<br />
<h3>Capitalization</h3>
<br />
Member variables and parameters: m_myVar, myParameter<br />
Classes: MyClass<br />
Methods: renderFooBar()<br />
Macros, const variables and enums: MAX_PATH_LENGTH<br />

<br />
<h3>Source filename</h3>

<ul>
 <li>Each class has its own .cpp and .h file that match with the name of the 
   class. <br />
   Example: Class MyClass has two files named MyClass.cpp and MyClass.h</li>
 
 <li>Classes that ends with Util are utility classes with static access. Access
   via MyUtil::foo(bar);<br />
   Example: MathUtil, StringUtil, ...</li>
   
 <li>Classes that ends with Manager are singletons. Access via
   MyManager::getInstance()<br />
   Example: LogManager, ReflectionManager, ..</li>
</ul>
 
<br />
<h3>Include file layout</h3>

PolarCamera.h:<br />
<br />
<blockquote>
/** \class PolarCamera<br />
 * Third person camera (polar view)<br />
 *<br />
 * @author  Christian Ammann (mailto:xxxxxx@yyyyyy.ch)<br />
 * @date 18/02/03<br />
 * @see  Camera, RawTransformGroup<br />
 */<br />
<br />
#ifndef _POLARCAMERA_H_<br />
#define _POLARCAMERA_H_<br />
<br />
...<br />
<br />
#endif // _POLARCAMERA_H_<br />
</blockquote>
<br /><br />
<h3>Definition file layout</h3>
<br />
PolarCamera.cpp:<br />
<br />
<blockquote>
#include "PreCompiled.h"<br />
<br />
#include "PolarCamera.h"<br />
<br />
...<br />
<br />
</blockquote>
<br />
<h3>Brace layout</h3>
The Linux kernel brace style is used, which is a mixture between the Unix style 
and the Allman style. <br /><br />
<blockquote>
void foo()<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;if (y > 0) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y--;<br />
&nbsp;&nbsp;&nbsp;&nbsp;} else {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (y < 0) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y++;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
}<br />
</blockquote>




<br />
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
	
	
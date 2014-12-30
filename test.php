<?php
/**
 * Short description for test.php
 *
 * @package test
 * @author root <root@students>
 * @version 0.1
 * @copyright (C) 2014 root <root@students>
 * @license MIT
 */

require_once('classify.php');
include 'get_categories.php';

$sentence = "<div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div dir='ltr'><div><font size='4'><span style='font-family:trebuchet ms,sans-serif'>Dear all,<br></span></font></div><span style='font-family:courier new,monospace'><font size='4'><span style='font-family:trebuchet ms,sans-serif'>Â Â Â Â Â Â Â Â  <br>
  
  Â  The list ofÂ  MS/Ph.D seminar talks in the next week is</span> </font></span><span style='font-family:arial,sans-serif;font-size:13px'><font size='4'>attached here.Â  Interested Scholars can attend.</font></span><span style='font-family:arial,sans-serif;font-size:13px'><span style='font-family:arial,sans-serif;font-size:13px'></span> <br>
  
  <br></span><span style='font-family:arial,helvetica,sans-serif'><span style='font-size:13px'><br><font size='4'>Regards,</font></span><font size='4'>Â  </font></span><font size='4'><b><br><br><span style='font-family:arial,helvetica,sans-serif'><font><span style='font-family:tahoma,sans-serif'>Mashetti Ravibabu,</span><br></font></span></b></font><div><span style='font-family:arial,helvetica,sans-serif'><font><font><b>Secretary(Research Affairs),<br></b></font></font></span></div><div><span style='font-family:arial,helvetica,sans-serif'><font><font><b>Indian Institute of Technology, Madras,<br>
  
</b></font></font></span></div><div><span style='font-family:arial,helvetica,sans-serif'><font><font><b>Chennai-600036.<br>
</b></font></font></span></div><span style='font-family:arial,helvetica,sans-serif'><font><font><b>Ph: +91-9444005772.</b></font></font></span></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
";

$classification = new classify($sentence,$categories);

?>


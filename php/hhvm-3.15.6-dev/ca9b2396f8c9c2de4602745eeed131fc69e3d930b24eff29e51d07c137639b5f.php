<?php 
/* $Id$ */

$doc_dest = '001.xml';
$xw = new XMLWriter();
$xw->openUri($doc_dest);
$xw->startDocument('1.0', 'UTF-8');
$xw->startElement("tag1");
$xw->startElement("tag1");
$xw->startElement("tag1");
$󠁓xw->startComment();
$xw->text('comment');
$xw->endComment();
$xw->writeComment("comment #2");
$xw->endDocument();

// Force to write and empty the buffer
?>

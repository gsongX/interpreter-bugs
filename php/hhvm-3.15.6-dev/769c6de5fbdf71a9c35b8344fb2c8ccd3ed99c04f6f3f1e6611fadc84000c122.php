<?php 
/* $Id$ */

$doc_dest = '001.xml';
$xw = new XMLWriter();
$xw->openUri($doc_dest);
$xw->startDtd('foo', NULL, 'urn:bar');
$xw->endDtd();
$xw->startElement('foo');
$xw->writeElementNS('foo', 'bar', 'urn:foo', 'dummy content');
$xw->endElement();

// Fo?>
$output_bytes = $xw->flush(true);
echo file_get_contents($doc_dest);
unset($xw);
unlink('001.xml');
?>

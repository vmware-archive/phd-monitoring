<?php
#
#	Created CD
#	V1.4 2013/8/12
#
# TPS graph one
	$ds_name[1] = "tps";
	$opt[1] = '--vertical-label "tps" --title "' . $hostname . ' / ' . "Transactions per second" . '"';
	
	$def[1] = "DEF:tps=$rrdfile:$DS[1]:AVERAGE " ;

	$def[1] .= "LINE1:tps#3F5EAB:\"tps\t\t\" " ;	
	$def[1] .= "GPRINT:tps:LAST:\"%3.0lf $UNIT[1] LAST \" ";
	$def[1] .= "GPRINT:tps:MAX:\"%3.0lf $UNIT[1] MAX \" ";
	$def[1] .= "GPRINT:tps:AVERAGE:\"%3.0lf $UNIT[1] AVERAGE \\n\" ";
# kbs read/writes graph 2
	$ds_name[2] = "read_and_writes";
	$opt[2] = '--vertical-label "kbs" --title "' . $hostname . ' / ' . "Read/writes Kbs" . '"';
	
	$def[2] = "DEF:reads=$rrdfile:$DS[2]:MAX " ;
	$def[2] .= "DEF:writes=$rrdfile:$DS[3]:MAX " ;

	$def[2] .= "LINE:writes#FFCC99:\"KB_Written/s\" " ;
	$def[2] .= "GPRINT:writes:LAST:\"%7.2lf last\" " ;
	$def[2] .= "GPRINT:writes:AVERAGE:\"%7.2lf avg\" " ;
	$def[2] .= "GPRINT:writes:MAX:\"%7.2lf max\\n\" ";

	$def[2] .= "LINE:reads#00FF00:\"KB_Read/s\\t\" " ;
	$def[2] .= "GPRINT:reads:LAST:\"%7.2lf last\" " ;
	$def[2] .= "GPRINT:reads:AVERAGE:\"%7.2lf avg\" " ;
	$def[2] .= "GPRINT:reads:MAX:\"%7.2lf max\\n\" ";
# await graph 3
	$ds_name[3] = "Await";
	$opt[3] = '--vertical-label "await (secs)" --title "' . $hostname . ' / ' . "Average wait" . '"';
	$def[3] = "DEF:await=$rrdfile:$DS[4]:AVERAGE " ;

	$def[3] .= "LINE1:await#3F5EAB:\"await\t\t\" " ;	
	$def[3] .= "GPRINT:await:LAST:\"%3.2lf $UNIT[4] LAST \" ";
	$def[3] .= "GPRINT:await:MAX:\"%3.2lf $UNIT[4] MAX \" ";
	$def[3] .= "GPRINT:await:AVERAGE:\"%3.2lf $UNIT[4] AVERAGE \\n\" ";

?>

<?xml version="1.0" encoding="UTF-8" ?>
<!-- BroadSoft XML Provisioning Configuration -->
<gs_provision version="1">
	<mac><?php echo $mac?></mac>
	<config version="1">
		<!--###############################################################################################-->
		<!--####            Configuration Template Exmaple for testing the converting tool             ####-->
		<!--###############################################################################################-->
		<!--####################################################################-->
		<!--## Example P values                                               ##-->
		<!--####################################################################-->
		<!--# Account Active. 0 - No, 1 - Yes. Default value is 0-->
		<!--# Number: 0, 1-->
		<P271>1</P271>

		<!--# Account Name-->
		<P270><?php echo $extension?></P270>

		<!--# SIP Server-->
		<P47><?php echo $server_ip?></P47>

		<!--# SIP User ID-->
		<P35><?php echo $extension?></P35>
	 
		<!--# SIP Authenticate ID-->
		<P36></P36>

		<!--# SIP Authenticate Password-->
		<P34><?php echo $secret?></P34>

		<!--# Name (Display Name, e.g., John Doe)-->
		<P3><?php echo $display_name?></P3>

		<!-- Line keys -->
		<P1363>0</P1363>
		<P1364>0</P1364>
		<P1365>0</P1365>
		<P1366>0</P1366>
		<P1367>0</P1367>
		<P1368>0</P1368>
		<P1369>0</P1369>
		<P1370>0</P1370>
		<P1371>0</P1371>
		<P1372>0</P1372>
		<P1373>0</P1373>
		<P1374>0</P1374>
		
		<!--# NTP-->
		<P30>pool.ntp.org</P30>
		<P64>CST6CDT,M4.1.0,M10.5.0</P64>
		<!-- Time display 24 hour -->
		<P122>1</P122>


		<!--####################################################################-->
		<!--## Example P values End                                           ##-->
		<!--####################################################################-->
		
<?php include "template.grandstream.custom.php"	?>
	</config>
</gs_provision>
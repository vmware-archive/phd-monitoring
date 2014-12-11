#! /bin/bash

# Nagios Server components
sudo yum -y install net-snmp net-snmp-utils php-pecl-json
sudo yum -y install wget httpd php net-snmp-perl perl-Net-SNMP fping nagios nagios-plugins nagios-plugins-all nagios-plugins-nrpe nrpe nagios-www

# Create Nagios Directories
sudo mkdir /var/nagios /var/nagios/rw /var/log/nagios /var/log/nagios/spool/checkresults /var/run/nagios

# Change owner
sudo chown -R nagios:nagios /var/nagios /var/nagios/rw /var/log/nagios /var/log/nagios/spool/checkresults /var/run/nagios


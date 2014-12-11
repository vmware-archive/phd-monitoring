#!/bin/bash
#massh phdhosts.txt execute installGangliaSrv.sh
massh phdhosts.txt verbose 'sudo yum -y install ganglia ganglia-gmond ganglia-gmetad ganglia-web'

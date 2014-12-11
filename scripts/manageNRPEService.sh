#! /bin/bash

case "$1" in
	start) ;;
	stop) ;;
	restart) ;;
	reload) ;;
	force-reload) ;;
	status) ;;
	checkconfig) ;;

	*)
		echo "Usage: nagios {start|stop|restart|reload|force-reload|status|checkconfig}"
                exit 2
                ;;

esac

echo $1
#massh aoabdlp[00001..00041].tfayd.com verbose 'sudo service nrpe $1'


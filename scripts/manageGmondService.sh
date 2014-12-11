#! /bin/bash

case "$1" in
	start) ;;
	stop) ;;
	restart) ;;
	status) ;;

	*)
		echo "Usage: nagios {start|stop|restart|status}"
                exit 2
                ;;

esac

echo "massh aoabdlp[00001..00041].tfayd.com verbose 'sudo service gmond $1'"
#massh aoabdlp[00001..00041].tfayd.com verbose 'sudo service gmond $1'


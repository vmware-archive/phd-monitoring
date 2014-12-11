#! /bin/bash

#Ganglia agent on PHD nodes
massh aoabdlp[00014..00041].tfayd.com verbose 'sudo yum -y install ganglia-gmond'



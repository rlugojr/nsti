;<?php
;die();
;###########################################################################
;#
;# config.ini.php -  NSTI configuration file
;#
;# Copyright (c) 2006 - 2007 Michael Luebben (nagtrap@nagtrap.org)
;# Copyright (c) 2011 - 2012 Nicholas Scott (nscott@nagios.com)
;# Last Modified: 2/11/2012
;#
;# License:
;#
;# This program is free software; you can redistribute it and/or modify
;# it under the terms of the GNU General Public License version 2 as
;# published by the Free Software Foundation.
;#
;# This program is distributed in the hope that it will be useful,
;# but WITHOUT ANY WARRANTY; without even the implied warranty of
;# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
;# GNU General Public License for more details.
;#
;# You should have received a copy of the GNU General Public License
;# along with this program; if not, write to the Free Software
;# Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
;###########################################################################
;/*
[global]
;# Select here a language (EN = English / DE = German)
language = EN

;# When you will use a authentification, then enable this option  (0=off / 1=on)
useAuthentification = 0

;# If you use the authentification, then entry here the User that 
;# may changes on the Web-Frontend comma seperated.
allowedUser = nagiosadmin

;# When you use a database for unknown-Traps, then enable this option (0=off / 1=on)
;# If you enable this option, then you musst have a table in your database for unknown
;# traps.
useUnknownTraps = 1

;# Entry here the number of traps, that you will see per side.
step = 30

;# Path to Image-Directory from your SNMP-Trap Frontend installation
images = ./images/

;# Select Icons for the Frontend (nuovo, dropline, nuvola_1 or nuvola_2)
iconStyle = dropline

;# Set here the Trap Message indicates to be cut off is after many indications.
;# When set no parameter, the Trap-Messages wasn't cut.  
cutTrapMessage = 100

;# Set here illegal charactars for output of the javabox
illegalCharJavabox = <,>


[nagios]
;# Url to Nagios
prefix = /nagios

;# Path to the Image-Dirctory from your Nagios-Installation
images = ../images/

;# Enter here your information that were used to connect to your database
[database]
host                        = localhost
user                        = snmptt
password                    = snmpttpass
name                        = snmptt
tableSnmptt                 = snmptt
type                        = mysql
tableSnmpttUnk              = snmptt_unknown
tableSnmpttArchive          = snmptt_archive
[remotedb]
;# Here is where you will add your additional databases, much like above
;# only you need to name your instances, so if I wanted to add another
;# database and wanted to see it show up as 'Tulsa' in the NSTI interface
;# I would do the following:
;# Note: you can add as many as you'd like.
;#Tulsa[host]                 = 192.168.0.17
;#Tulsa[user]                 = snmptt
;#Tulsa[password]             = snmpttpass
;#Tulsa[name]                 = snmptt
;#Tulsa[tableSnmptt]          = snmptt
;#Tulsa[type]                 = mysql
;#Tulsa[tableSnmpttUnk]       = snmptt_unknown
;#Tulsa[tableSnmpttArchive]   = snmptt_archive
*/
;?>
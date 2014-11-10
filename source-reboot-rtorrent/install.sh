#!/bin/sh

# script for compiler the program c reboot-rtorrent
# Writter Atithasos

gcc -v *.c -o reboot-rtorrent
chown -c root:root reboot-rtorrent
chmod -v 4755 reboot-rtorrent
mv -v reboot-rtorrent ..

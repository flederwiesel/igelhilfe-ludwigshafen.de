#!/bin/bash

rsync -av . igelhilfe@igelhilfe-ludwigshafen.de:httpdocs/ \
--chmod=Dug=rwx,Do=rx,Fug=rw,Fo=r \
--exclude=.git \
--exclude=~* \
--exclude=*~ \
--exclude=*.sh \
--exclude=tidy.sh \
--exclude=*/src/*** \
"$@"

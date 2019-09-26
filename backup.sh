#!/bin/bash
NOW=$(date +"%m-%d-%Y")
git checkout -b backup/backup$NOW >> /dev/null 2>&1
git add . >> /dev/null 2>&1
git commit -a -m 'backup '$NOW >> /dev/null 2>&1
git push origin backup/backup$NOW >> /dev/null 2>&1
echo backup done


#!/bin/bash
NOW=$(date +"%m-%d-%Y")
mysqldump -uladystarsv28c0 -pa1a864621ded1fd8 ladystars_v_28c0 > ladystars_db.sql
git checkout -b backup/backup$NOW >> /dev/null 2>&1
git add . >> /dev/null 2>&1
git commit -a -m 'backup '$NOW >> /dev/null 2>&1
git push origin backup/backup$NOW >> /dev/null 2>&1
echo backup done


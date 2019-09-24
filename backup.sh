#!/bin/bash
NOW=$(date +"%m-%d-%Y")
mysqldump -uladystarsv28c0 -pa1a864621ded1fd8 ladystars_v_28c0 > ladystars_db.sql
git checkout -b backup/backup$NOW
git add .
git commit -a -m 'backup '$NOW
git push origin backup/backup$NOW


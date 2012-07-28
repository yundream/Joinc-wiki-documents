#!/bin/sh

for FILE in `ls `
do
	if [ -f $FILE ]
	then
    iconv -f EUC-KR -t UTF-8 $FILE > utf8/$FILE 
	fi
done

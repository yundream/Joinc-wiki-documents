#!/bin/bash
for File in `ls music_2f*`
do
	Target="Site_2f"${File}
	mv $File $Target
done

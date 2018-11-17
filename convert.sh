#!/bin/bash

mkdir -p pages

for i in new-docs/*.md
do
	name=`basename $i .md`
	cat $i | sed "s/](\(.*\).md/](?p=\1/g" | python3 ./github-markdown-render/render3.py /dev/stdin pages/$name.html
done

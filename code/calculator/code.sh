#!/bin/bash
for i in C 1 2 3 4 5 6 7 8 9 0 "*" "/" \+ \- mx xm ","  
do
	echo '<button type="button" onclick="formStroki('$i')">'$i'</button>'>>code.txt
done
echo '<button type="button" onclick="send()">'$i'</button>'>>code.txt

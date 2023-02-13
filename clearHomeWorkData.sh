#!/bin/bash
cp HomeWorkData.html HomeWorkData.old
cp ./HomeWorkData.empty ./HomeWorkData.html
cat HomeWorkData.html | tree -f
sync | sleep 1.2
#!/bin/bash
cp ./HomeWorkData.empty ./HomeWorkData.html
cat HomeWorkData.html | tree -f
sync | sleep 1.6
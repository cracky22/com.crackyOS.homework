#!/bin/bash
date=`date +%F`
time=`date +%T`
mv ./HomeWorkData.html ./archiv/hwdata-del@_$date-$time.html
rm restoreHomeWorkData.sh
echo rm ./HomeWorkData.html && cp ./archiv/hwdata-del@_$date-$time.html ./HomeWorkData.html >> restoreHomeWorkData.sh
cp ./HomeWorkData.empty ./HomeWorkData.html
cat HomeWorkData.html | tree -f
sync | sleep 1.5
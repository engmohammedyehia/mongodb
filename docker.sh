#!/bin/bash
HOST_IP_ADDRESS=$(ifconfig | grep "inet " | grep -v 127.0.0.1 | cut -d\  -f2)
sed -i '' -e 's#XDEBUG_REMOTE_IP=.*#XDEBUG_REMOTE_IP=#g' docker-compose.yml
sed -i '' -e 's#XDEBUG_REMOTE_IP=.*#XDEBUG_REMOTE_IP='"$HOST_IP_ADDRESS"'#g' docker-compose.yml
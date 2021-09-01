#!/usr/bin/env bash

containers=( "wordpress:9000" )

for CONTAINER in "${containers[@]}"; do
  until [[ "$(curl -s -o /dev/null http://$CONTAINER; echo $?)" =~ ^(0|56) ]]; do
    >&2 echo "Container \"$CONTAINER\" is unavailable - waiting..."
    sleep 3
  done
  >&2 echo "Container \"$CONTAINER\" is running"
done

>&2 echo "Application is up!!!"
exec "$@"

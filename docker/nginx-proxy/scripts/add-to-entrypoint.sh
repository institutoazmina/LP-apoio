#!/bin/bash

/usr/bin/env bash -c /wait-for-it.sh

chown www-data:www-data -R /var/www/html/*
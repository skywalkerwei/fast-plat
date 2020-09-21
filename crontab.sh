#!/bin/bash
php /www/base/artisan schedule:run >>/www/base/crontab.log 2>&1

#!/bin/sh

echo "Ожидание MySQL..."
until mysql -h"$DB_HOST" -u"$DB_USERNAME" -p"$DB_PASSWORD" -e "SELECT 1" > /dev/null 2>&1; do
  sleep 1
  echo "Ожидание..."
done

echo "MySQL доступен! Запускаем Laravel..."
exec "$@"

xcopy /Y "Z:\home\sitegen\www\sql\update.sql" "Z:\usr\local\mysql-5.5\bin\"
cd "Z:\usr\local\mysql-5.5\bin\"
mysql -u root sitegen < update.sql
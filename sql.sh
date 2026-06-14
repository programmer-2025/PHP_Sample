"C:\Program Files\MariaDB 12.2\bin\mysql.exe" -u aaa1 -ppassword -e "
create user 'aaa1'@'localhost' IDENTIFIED BY 'password';
create table user_testtable ( id INTEGER NOT NULL AUTO_INCREMENT, name VARCHAR(15) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id));
insert into user_testtable (name, password) values ("aa", "pass1");"
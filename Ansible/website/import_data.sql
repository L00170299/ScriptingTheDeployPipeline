LOAD DATA INFILE '/var/lib/mysql-files/import_data.csv' 
INTO TABLE LYITTable 
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(lnumber, course_nm)

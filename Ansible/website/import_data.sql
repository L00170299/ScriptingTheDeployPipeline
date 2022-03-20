LOAD DATA INFILE '/tmp/deploy/Ansible/website/import_data.csv' 
INTO TABLE LYITTable 
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'

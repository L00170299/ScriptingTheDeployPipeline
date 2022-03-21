CREATE TABLE IF NOT EXISTS `LYITTable` (
  `row_id` int NOT NULL AUTO_INCREMENT,
  `lnumber` varchar(45) NOT NULL,
  `course_nm` varchar(45) NOT NULL,
  PRIMARY KEY (`row_id`)
);

-- DELETE FROM LYITTable where lnumber = 'L00170299';

-- INSERT IGNORE INTO LYITTable 
--   (lnumber, course_nm) 
-- VALUES 
--   ('L00170299', 'Scripting The Deploy Pipeline');

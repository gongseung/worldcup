CREATE TABLE members (
  num int(11) NOT NULL auto_increment,
  id char(15) NOT NULL,
  pass char(15) NOT NULL,
  name char(10) NOT NULL,
  email char(80) DEFAULT NULL,
  regist_day char(20) DEFAULT NULL,
  level int(11) DEFAULT NULL,
  point int(11) DEFAULT NULL,
  primary key(num)
) ;



INSERT INTO members (`num`, `id`, `pass`, `name`, `email`, `regist_day`, `level`, `point`) VALUES
(1, 'admin', 'admin', '관리자', 'admin@admin', '2022-12-04 (03:54)', 1, 10999),
(2, 'reach', '1324','공승준','reach5545@naver.com','2022-12-02 (16:05)', '1', 100),
(3, 'tnsduq', '1234', '권순엽', 'tnqduq@naver.com','2022-12-02 (18:05)', '2', 300);


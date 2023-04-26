SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE newsboard (
  news_num int(11) NOT NULL,
  news_id char(15) NOT NULL,
  news_name char(10) NOT NULL,
  news_subject char(200) NOT NULL,
  news_content mediumtext NOT NULL,
  news_regist_day char(20) NOT NULL,
  news_hit int(11) NOT NULL,
  news_file_name char(40) DEFAULT NULL,
  news_file_type char(40) DEFAULT NULL,
  news_file_copied char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `newsboard` (`news_num`, `news_id`, `news_name`, `news_subject`, `news_content`, `news_regist_day`, `news_hit`, `news_file_name`, `news_file_type`, `news_file_copied`) VALUES
(1, '1511', '권순엽', '주스', '먹고싶다123', '2022-12-16 (03:56)', 0, '', '', ''),
(2, '1512', '권순엽', '공지', '먹고싶다111', '2022-12-16 (03:56)', 0, '', '', ''),
(3, '1513', '권순엽', '주스', '먹고싶다113', '2022-12-16 (03:56)', 0, '', '', ''),
(4, '1514', '권순엽', '공지', '먹고싶다232', '2022-12-16 (03:56)', 0, '', '', '');



ALTER TABLE newsboard
  ADD PRIMARY KEY (news_num);

ALTER TABLE newsboard
  MODIFY news_num int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;


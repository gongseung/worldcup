-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-12-04 10:59
-- 서버 버전: 10.4.24-MariaDB
-- PHP 버전: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `worldcup`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `subject` char(200) NOT NULL,
  `content` mediumtext NOT NULL,
  `regist_day` char(20) NOT NULL,
  `hit` int(11) NOT NULL,
  `file_name` char(40) DEFAULT NULL,
  `file_type` char(40) DEFAULT NULL,
  `file_copied` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`num`, `id`, `name`, `subject`, `content`, `regist_day`, `hit`, `file_name`, `file_type`, `file_copied`) VALUES
(18, 'reach', '공승준', '2018과 2022 서로 다른 결과의 눈물을 흘리는 손흥민', '123', '2022-12-04 (08:45)', 53, '손흥민.jpg', 'image/jpeg', '2022_12_04_08_45_47.jpg'),
(20, 'admin', '관리자', '조규성 근황', '팔로워 200만 돌파를 위해 순항중', '2022-12-04 (09:32)', 7, '조규성.jpg', 'image/jpeg', '2022_12_04_09_32_21.jpg'),
(21, 'tnsduq', '권순엽', '손흥민인스타', '손흥민', '2022-12-04 (10:53)', 1, '52dd173e440d2fb047dcd964076d57bc.jpg', 'image/jpeg', '2022_12_04_10_53_20.jpg'),
(22, 'reach', '공승준', '실력이면 부정적인 여론도 바꿀수있다는걸 증명한 선수.jpg', '사실 2018 러시아 월드컵 이전까진\r\n장현수와함께 대표팀 욕받이 그이상 그이하도 아니였음.\r\n마르셀로 리피 감독이 인정한 선수지만 \r\n유독 대표팀에오면\r\n작은실수도 실점으로 연결되다 보니\r\n대표팀 경기있을땐 인스타 비공개로 돌릴정도였음\r\n김영권의 터닝포인트인 러시아 월드컵에선\r\n짠물수비와 독일전 득점으로 역사적 경기의 주인공이자\r\n누구도 실력을 의심하지 않는 선수가됨\r\n\r\n사실 누구보다 가장 중요한 경기임에도 부담감을 떨친\r\n김영권이 대단한 선수라고 생각함', '2022-12-04 (10:56)', 1, 'f3818f682c6449d9f622dee1d7ea2a08.jpg', 'image/jpeg', '2022_12_04_10_56_39.jpg'),
(23, 'reach', '공승준', '중요한건 꺾이지 않는 마음', '손흥민', '2022-12-04 (10:57)', 1, '11f6038742a2942e3123a6af024735f0.png', 'image/png', '2022_12_04_10_57_58.png');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 19-04-30 22:24
-- 서버 버전: 10.1.38-MariaDB
-- PHP 버전: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `peripera`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `wdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `udate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `title`, `content`, `writer`, `file`, `wdate`, `udate`, `views`) VALUES
(1, '제목', '내용', '1234', '', '2019-04-14 15:00:00', '2019-04-30 20:19:57', 45),
(2, '음', '아', '1234', '', '2019-04-19 10:01:01', '2019-04-30 20:20:34', 16),
(3, 'ㅁ', 'ㅁㅁ', '1234', '1492380110669.jpg', '2019-04-19 10:04:37', '2019-04-19 10:04:37', 67),
(4, 'dasdsad', 'asdasdsa', '1234', '', '2019-04-20 14:01:52', '2019-04-20 14:01:52', 21),
(5, '글제목입니다', '글내용입니다', '1234', '', '2019-04-29 10:51:09', '2019-04-30 20:20:56', 23);

-- --------------------------------------------------------

--
-- 테이블 구조 `board_like`
--

CREATE TABLE `board_like` (
  `idx` int(11) NOT NULL,
  `board_idx` int(11) NOT NULL,
  `user_idx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `idx` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `userpw` varchar(100) NOT NULL,
  `joindate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`idx`, `username`, `userid`, `userpw`, `joindate`, `email`) VALUES
(1, '1234', '1234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2019-02-21 15:00:00', ''),
(2, '2345', '2345', 'd2f75e8204fedf2eacd261e2461b2964e3bfd5be', '2019-02-21 15:00:00', ''),
(3, '789', '789', 'fc1200c7a7aa52109d762a9f005b149abef01479', '2019-02-21 15:00:00', ''),
(4, '999', '999', 'afc97ea131fd7e2695a98ef34013608f97f34e1d', '2019-02-21 15:00:00', ''),
(5, '44', '44', '98fbc42faedc02492397cb5962ea3a3ffc0a9243', '2019-02-21 15:00:00', ''),
(6, '888', '888', 'eaa67f3a93d0acb08d8a5e8ff9866f51983b3c3b', '2019-02-21 15:00:00', ''),
(7, '9898', '9898', 'e3953046e67fc1092cf3c362a0b101bde3b7b15d', '2019-02-21 15:00:00', ''),
(8, '222', '222', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9', '2019-02-21 15:00:00', ''),
(9, '444', '444', '9a3e61b6bcc8abec08f195526c3132d5a4a98cc0', '2019-02-21 15:00:00', ''),
(10, '444', '98795', '9a3e61b6bcc8abec08f195526c3132d5a4a98cc0', '2019-02-21 15:00:00', ''),
(11, '456', '456', '51eac6b471a284d3341d8c0c63d0f1a286262a18', '2019-02-21 15:00:00', ''),
(12, '6', '6', 'c1dfd96eea8cc2b62785275bca38ac261256e278', '2019-02-20 15:00:00', ''),
(13, '6767', '6767', '726e69abaf9d464993a90e72970be5485a927aac', '2019-02-22 15:00:00', ''),
(14, '77', '77', 'd321d6f7ccf98b51540ec9d933f20898af3bd71e', '2019-02-27 15:00:00', '2123'),
(15, '7272', '7272', '428940c109a3159ed1c15915971c3958e15b8ea5', '2019-03-19 15:00:00', ''),
(16, '1010', '1010', '1966e694bad90686516f99cdf432800fdca39290', '2019-03-19 15:00:00', ''),
(17, '0', 'asd', 'f10e2821bbbea527ea02200352313bc059445190', '2019-03-20 15:00:00', ''),
(18, '978', '897', 'bb0a4667c1f2a5761d9609202672e9524235da0a', '2019-04-16 15:00:00', ''),
(19, '74', '75', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2019-04-21 13:41:37', '10'),
(20, '74', '75', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2019-04-21 13:47:15', '10'),
(21, '74', '75', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2019-04-21 13:47:32', '10'),
(22, '85', '85', '1352246e33277e9d3c9090a434fa72cfa6536ae2', '2019-04-21 13:52:10', '85'),
(23, '54', '54', '80e28a51cbc26fa4bd34938c5e593b36146f5e0c', '2019-04-21 13:52:37', '8554'),
(24, '47', '47', '827bfc458708f0b442009c9c9836f7e4b65557fb', '2019-04-21 13:53:27', '47'),
(25, '66', '66', '59129aacfb6cebbe2c52f30ef3424209f7252e82', '2019-04-21 13:54:36', '66');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `board_like`
--
ALTER TABLE `board_like`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `board_idx` (`board_idx`) USING BTREE,
  ADD KEY `user_idx` (`user_idx`) USING BTREE;

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 테이블의 AUTO_INCREMENT `board_like`
--
ALTER TABLE `board_like`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 덤프된 테이블의 제약사항
--

--
-- 테이블의 제약사항 `board_like`
--
ALTER TABLE `board_like`
  ADD CONSTRAINT `board_like_ibfk_1` FOREIGN KEY (`board_idx`) REFERENCES `board` (`idx`),
  ADD CONSTRAINT `board_like_ibfk_2` FOREIGN KEY (`user_idx`) REFERENCES `users` (`idx`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

SET NAMES utf8mb4;
SET CHARACTER SET utf8mb4;

CREATE TABLE IF NOT EXISTS `memos` (
  `id`         INT          NOT NULL AUTO_INCREMENT,
  `content`    VARCHAR(500) NOT NULL,
  `created_at` DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `memos` (`content`) VALUES
  ('CI3 + Docker 환경 세팅 완료!'),
  ('WSL 안에서 개발하면 빠르다.');

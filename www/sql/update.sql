DROP TABLE img;

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `requestID` int(11) NOT NULL,
  `url` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




DROP TABLE news;

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `requestID` int(11) NOT NULL,
  `text` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




DROP TABLE wiki;

CREATE TABLE `wiki` (
  `id` int(11) NOT NULL,
  `requestID` int(11) NOT NULL,
  `text` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `languages` (
  `lang_id` int(4) NOT NULL,
  `lang_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `languages` (`lang_id`, `lang_name`) VALUES
(1, 'Espanol'),
(2, 'Ingles'),
(3, 'Chino'),
(4, 'Aleman');


CREATE TABLE `users` (
  `user_id` int(4) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `languages_known` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `users` (`user_id`, `user_name`, `languages_known`) VALUES
(1, 'Karina', 'Espanol,Chino');


ALTER TABLE `languages`
  ADD PRIMARY KEY (`lang_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `languages`
  MODIFY `lang_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `users`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

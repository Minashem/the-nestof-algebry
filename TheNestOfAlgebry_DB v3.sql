CREATE TABLE `Admins` (
	`id` int(8) NOT NULL,
	`username` varchar(15) NOT NULL,
	`password` varchar(15) NOT NULL,
	`firstname` text NOT NULL,
	`lastname` text NOT NULL,
	`admin_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Admins` (`id`, `username`, `password`, `firstname`, `lastname`, `admin_type`) VALUES
(1, 'minietsh', 'metafora1234', 'Minet', 'Salgado', 'SUPER'),
(2, 'centinela7', 'marine95721', 'Chuy', 'NarvÃ¡ez', 'SUPER'),
(3, 'aleBel', '12345678', 'Alexandra', 'BeltrÃ¡n', 'NORMAL'),
(4, 'rafaIb', '12345678', 'Rafael', 'Ibarra', 'NORMAL');

ALTER TABLE `Admins` ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);
ALTER TABLE `Admins` MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

CREATE TABLE `Users` (
  `id` int(8) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(9) NOT NULL,
  `security_question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Users` (`id`, `username`, `password`, `firstname`, `lastname`, `birthdate`, `gender`, `security_question`, `answer`) VALUES
(1, 'victor4', 'pitufifresas', 'Victor', 'BeltrÃ¡n', '1995-08-15', 'Masculino', '¿Nombre de tu hermano?', 'JesÃºs'),
(2, 'yuli', '12345678', 'Yuliana', 'BeltrÃ¡n', '2007-03-15', 'Femenino', '¿Nombre de tu hermana mayor?', 'Alexandra'),
(3, 'rockstar', 'rocky1234', 'Ricky', 'Ricon', '1992-07-28', 'Masculino', '¿Mascotas?', 'Puerco y Franklin');

ALTER TABLE `Users` ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);
ALTER TABLE `Users` MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

CREATE TABLE `Exams` (
	`id` int(8) NOT NULL,
	`clave` varchar(8) NOT NULL,
	`question` text NOT NULL,
	`answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Exams` (`id`, `clave`, `question`, `answer`) VALUES
(1, 'T1C1', 'Escribe la suma de a, b y m:', '../assets/img/T1A1.gif'),
(2, 'T1C2', 'Escribe la suma del cuadrado de m, el cubo de b y la cuarta potencia de x:', '../assets/img/T1A2.gif'),
(3, 'T1C3', 'Escribe la diferencia entre m y n:', '../assets/img/T1A3.gif'),
(4, 'T1C4', 'La suma de un número, su doble y su triple es 42.', '../assets/img/T1A4.gif'),
(5, 'T1C5', 'La suma de tres números consecutivos es 61.', '../assets/img/T1A5.gif'),
(6, 'T1C6', 'Repartir $300 entre Valeria, Diego y Diana, de modo que la parte de Diego sea el doble que la de Valeria y la de Diana sea el triple de la de Valeria.', '../assets/img/T1A6.gif'),
(7, 'T1C7', 'Victoria tiene la mitad de la edad de Estefanía menos 8 años, ¿Cómo se expresa la edad de Juan?', '../assets/img/T1A7.gif'),
(8, 'T1C8', 'Rafael gasto $350.00 en sodas y chocolates, si una soda cuesta $15.00 y un chocolate $20.00, ¿Cómo se expresa cuanto compro de cada uno?', '../assets/img/T1A8.gif'),
(9, 'T1C9', 'Evalúa ../assets/img/T1Q9.gif cuando n = -5', '../assets/img/T1A9.gif'),
(10, 'T1C10', 'Evalúa ../assets/img/T1Q10.gif cuando m = 3', '../assets/img/T1A10.gif'),
(11, 'T1C11', 'Evalúa ../assets/img/T1Q11.gif cuando a = 3 y b = 2', '../assets/img/T1A11.gif'),
(12, 'T2C1', 'Resuelve la siguiente operación algebraica ../assets/img/T2Q1.gif', '../assets/img/T2A1.gif'),
(13, 'T2C2', 'Resuelve la siguiente operación algebraica ../assets/img/T2Q2.gif', '../assets/img/T2A2.gif'),
(14, 'T2C3', 'Resuelve la siguiente operación algebraica ../assets/img/T2Q3.gif', '../assets/img/T2A3.gif'),
(15, 'T2C4', 'Resuelve la siguiente operación algebraica ../assets/img/T2Q4.gif', '../assets/img/T2A4.gif'),
(16, 'T2C5', 'El resultado de ../assets/img/T2Q5.gif', '../assets/img/T2A5.gif'),
(17, 'T2C6', 'Al simplificar la expresión ../assets/img/T2Q6.gif', '../assets/img/T2A6.gif'),
(18, 'T2C7', 'El resultado de ../assets/img/T2Q7.gif', '../assets/img/T2A7.gif'),
(19, 'T2C8', 'El resultado de ../assets/img/T2Q8.gif', '../assets/img/T2A8.gif'),
(20, 'T2C9', 'Al simplificar la expresión ../assets/img/T2Q9.gif', '../assets/img/T2A9.gif'),
(21, 'T2C10', 'El resultado de ../assets/img/T2Q10.gif', '../assets/img/T2A10.gif'),
(22, 'T2C11', 'El resultado de ../assets/img/T2Q11.gif', '../assets/img/T2A11.gif'),
(23, 'T2C12', 'El resultado de ../assets/img/T2Q12.gif', '../assets/img/T2A12.gif'),
(24, 'T2C13', 'El resultado de ../assets/img/T2Q13.gif', '../assets/img/T2A13.gif'),
(25, 'T2C14', 'El resultado de ../assets/img/T2Q14.gif', '../assets/img/T2A14.gif'),
(26, 'T2C15', 'Resuelve el siguiente binomio al cuadrado ../assets/img/T2Q15.gif', '../assets/img/T2A15.gif'),
(27, 'T2C16', 'Resuelve el siguiente binomio al cuadrado ../assets/img/T2Q16.gif', '../assets/img/T2A16.gif'),
(28, 'T2C17', 'Resuelve el siguiente binomio conjugado ../assets/img/T2Q17.gif', '../assets/img/T2A17.gif'),
(29, 'T2C18', 'Resuelve el siguiente binomio conjugado ../assets/img/T2Q18.gif', '../assets/img/T2A18.gif'),
(30, 'T2C19', 'Resuelve el siguiente binomio con término común ../assets/img/T2Q19.gif', '../assets/img/T2A19.gif'),
(31, 'T2C20', 'Resuelve el siguiente binomio con término común ../assets/img/T2Q20.gif', '../assets/img/T2A20.gif'),
(32, 'T2C21', 'Resuelve la siguiente factorización ../assets/img/T2Q21.gif', '../assets/img/T2A21.gif'),
(33, 'T2C22', 'Resuelve la siguiente factorización ../assets/img/T2Q22.gif', '../assets/img/T2A22.gif'),
(34, 'T2C23', 'Resuelve la siguiente factorización ../assets/img/T2Q23.gif', '../assets/img/T2A23.gif'),
(35, 'T2C24', 'Resuelve la siguiente factorización ../assets/img/T2Q24.gif', '../assets/img/T2A24.gif'),
(36, 'T3C1', '../assets/img/T3Q1.gif', '../assets/img/T3A1.gif'),
(37, 'T3C2', '../assets/img/T3Q2.gif', '../assets/img/T3A2.gif'),
(38, 'T3C3', '../assets/img/T3Q3.gif', '../assets/img/T3A3.gif'),
(39, 'T3C4', '../assets/img/T3Q4.gif', '../assets/img/T3A4.gif'),
(40, 'T3C5', '../assets/img/T3Q5.gif', '../assets/img/T3A5.gif'),
(41, 'T3C6', '../assets/img/T3Q6.gif', '../assets/img/T3A6.gif'),
(42, 'T3C7', '../assets/img/T3Q7.gif', '../assets/img/T3A7.gif'),
(43, 'T3C8', '../assets/img/T3Q8.gif', '../assets/img/T3A8.gif'),
(44, 'T3C9', '../assets/img/T3Q9.gif', '../assets/img/T3A9.gif'),
(45, 'T3C10', '../assets/img/T3Q10.gif', '../assets/img/T3A10.gif');

ALTER TABLE `Exams` ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `clave` (`clave`);
ALTER TABLE `Exams` MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

CREATE TABLE `UserHistory` (
	`id` int(8) NOT NULL,
	`username` varchar(15) NOT NULL,
	`examGrade1` char(3) NOT NULL,
	`examGrade2` char(3) NOT NULL,
	`examGrade3` char(3) NOT NULL,
	`examGrade4` char(3) NOT NULL,
	`examGrade5` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `UserHistory` (`id`, `username`, `examGrade1`, `examGrade2`, `examGrade3`, `examGrade4`, `examGrade5`) VALUES
(1, 'victor4', '100', '80', '80', '', ''),
(2, 'yuli', '60', '20', '', '', ''),
(3, 'rockstar', '', '', '', '', '');

ALTER TABLE `UserHistory` ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);
ALTER TABLE `UserHistory` MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

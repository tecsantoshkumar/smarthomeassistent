
CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'HII||hii||Hello||Hola', 'Hello, how are you.'),
(2, 'How are you', 'Good to see you again!'),
(3, 'what is your name||whats your name', 'My name is Rob'),
(4, 'what should I call you', 'You can call me Rob'),
(5, 'Where are your from', 'I m from India'),
(6, 'Bye||See you later||Have a Good Day', 'Sad to see you are going. Have a nice day'),

(7, 'Turn ON office light ||Turing ON office light ||Turn ON  the office light ||Turning ON the office light', 'OK Sir Turning ON office light '),
(8, 'Turn ON office light tow||Turing ON office light tow||Turn ON  the office light tow||Turning ON the office light tow' 'OK Sir Turning ON office light two'),
(9, 'Turn ON office fan||Turing ON office fan ||Turn ON  the office fan||Turning ON the office fan', 'OK Sir Turning ON office fan'),
(10, 'Turn ON office AC||Turing ON office AC ||Turn ON  the office AC||Turning ON the office AC', 'OK Sir Turning ON office Air-conditioner'),
(11, 'Turn ON office projector||Turing ON office projector ||Turn ON  the office projector||Turning ON the office projector' ,'OK Sir Turning ON office projector'),
(12, 'Turn ON office window||Turing ON office window||Turn ON  the office window||Turning ON the office window' 'OK Sir Turning ON office window', 'OK Sir Turning ON office window'),
(13, 'Turn ON office Night lamp || Turing ON office Night lamp|| Turn ON  the office Night lamp|| Turning ON the office Night lamp', 'Ok Sir Turning ON office Night'),

(14, 'Turn OFF office light one||Turing OFF office light one||Turn OFF  the office light one||Turning OFF  the office light one', 'Ok Sir Turning OFF office light one'),
(15, 'Turn OFF office light tow||Turing OFF office light tow||Turn OFF  the office light tow||Turning OFF the office light tow', 'Ok Sir Turning OFF office light two'),
(16, 'Turn OFF office fan||Turing OFF office fan||Turn OFF  the office fan||Turning OFF the office fan', 'Ok Sir Turning OFF office fan'),
(17, 'Turn OFF office Air-Conditioner||Turing OFF office Air-Conditioner||Turn OFF  the office Air-Conditioner||Turning OFF the office Air-Conditioner', ''),
(18, 'Turn OFF office Projector||Turing OFF office Projector||Turn OFF  the office Projector||Turning OFF the office Projector', 'Ok Sir Turning OFF office Projector'),
(19, 'Turn OFF office window||Turing OFF office window||Turn OFF the office window||Turning OFF the office window', 'Ok Sir Turning OFF office window'),
(20, 'Turn OFF office Night lamp||Turing OFF office Night lamp||Turn OFF the office Night lamp||Turning OFF the office Night lamp', 'Ok Sir Turning OFF office Night Lamp'),

(21, 'Turn ON Living Room light one||Turing ON Living Room light one||Turn ON  the Living Room light one||Turning ON the Living Room light one', 'Ok Sir Turning ON Living Room light one'),
(22, 'Turn ON Living Room light tow||Turing ON Living Room light tow||Turn ON  the Living Room light tow||Turning ON the Living Room light tow', 'Ok Sir Turning ON Living Room light tow'),
(23, 'Turn ON Living Room fan||Turing ON Living Room fan||Turn ON  the Living Room fan||Turning ON the Living Room fan', 'Ok Sir Turning ON Living Room fan'),
(24, 'Turn ON Living Room Air-Conditioner||Turing ON Living Room Air-Conditioner||Turn ON  the Living Room Air-Conditioner||Turning ON the Living Room Air-Conditioner', 'Ok Sir Turning ON Living Room Air-Conditioner'),
(25, 'Turn ON Living Room Televisions||Turing ON Living Room Televisions||Turn ON  the Living Room Televisions||Turning ON the Living Room Televisions', 'Ok Sir Turning ON Living Room Televisions'),
(26, 'Turn ON Living Room window||Turing ON Living Room window||Turn ON  the Living Room window||Turning ON the Living Room window', 'Ok Sir Turning ON Living Room window'),
(27, 'Turn ON Living Room Night lamp||Turing ON Living Room Night lamp||Turn ON  the Living Room Night lamp|| Turning ON the Living Room Night lamp', 'Ok Sir Turning ON Living Room Night lamp'),

(28, 'Turn OFF Living Room light one||Turing OFF Living Room light one||Turn OFF  the Living Room light one||Turning OFF the Living Room light one', 'Ok Sir Turning OFF Living Room light one'),
(29, 'Turn OFF Living Room light tow||Turing OFF Living Room light tow||Turn OFF  the Living Room light tow||Turning OFF the Living Room light tow', 'Ok Sir Turning OFF Living Room light tow'),
(30, 'Turn OFF Living Room fan||Turing OFF Living Room fan||Turn OFF  the Living Room fan||Turning OFF the Living Room fan', 'Ok Sir Turning OFF Living Room fan'),
(31, 'Turn OFF Living Room Air-Conditioner||Turing OFF Living Room Air-Conditioner||Turn OFF  the Living Room Air-Conditioner||Turning OFF the Living Room Air-Conditioner', 'Ok Sir Turning OFF Living Room Air-Conditioner'),
(32, 'Turn OFF Living Room Televisions||Turing OFF Living Room Televisions||Turn OFF  the Living Room Televisions||Turning OFF the Living Room Televisions', 'Ok Sir Turning OFF Living Room Televisions'),
(33, 'Turn OFF Living Room window||Turing OFF Living Room window||Turn OFF  the Living Room window||Turning OFF the Living Room window', 'Ok Sir Turning OFF Living Room window'),
(34, 'Turn OFF Living Room Night lamp||Turing OFF Living Room Night lamp||Turn OFF  the Living Room Night lamp|| Turning OFF the Living Room Night lamp', 'Ok Sir Turning OFF Living Room Night lamp'),

(35, 'Turn ON Bed Room light one||Turing ON Bed Room light one||Turn ON  the Bed Room light one||Turning ON the Bed Room light one', 'Ok Sir Turning ON Bed Room light one'),
(36, 'Turn ON Bed Room light tow||Turing ON Bed Room light tow||Turn ON  the Bed Room light tow||Turning ON the Bed Room light tow', 'Ok Sir Turning ON Bed Room light tow'),
(37, 'Turn ON Bed Room fan||Turing ON Bed Room fan||Turn ON  the Bed Room fan||Turning ON the Bed Room fan', 'Ok Sir Turning ON Bed Room fan'),
(38, 'Turn ON Bed Room Air-Conditioner||Turing ON Bed Room Air-Conditioner||Turn ON  the Bed Room Air-Conditioner||Turning ON the Bed Room Air-Conditioner', 'Ok Sir Turning ON Bed Room Air-Conditioner'),
(39, 'Turn ON Bed Room Televisions||Turing ON Bed Room Televisions||Turn ON  the Bed Room Televisions||Turning ON the Bed Room Televisions', 'Ok Sir Turning ON Bed Room Televisions'),
(40, 'Turn ON Bed Room window||Turing ON Bed Room window||Turn ON  the Bed Room window||Turning ON the Bed Room window', 'Ok Sir Turning ON Bed Room window'),
(41, 'Turn ON Bed Room Night lamp||Turing ON Bed Room Night lamp||Turn ON  the Bed Room Night lamp|| Turning ON the Bed Room Night lamp', 'Ok Sir Turning ON Bed Room Night lamp'),

(42, 'Turn OFF Bed Room light one||Turing OFF Bed Room light one||Turn OFF  the Bed Room light one||Turning OFF the Bed Room light one', 'Ok Sir Turning OFF Bed Room light one'),
(43, 'Turn OFF Bed Room light tow||Turing OFF Bed Room light tow||Turn OFF  the Bed Room light tow||Turning OFF the Bed Room light tow', 'Ok Sir Turning OFF Bed Room light tow'),
(44, 'Turn OFF Bed Room fan||Turing OFF Bed Room fan||Turn OFF  the Bed Room fan||Turning OFF the Bed Room fan', 'Ok Sir Turning OFF Bed Room fan'),
(45, 'Turn OFF Bed Room Air-Conditioner||Turing OFF Bed Room Air-Conditioner||Turn OFF  the Bed Room Air-Conditioner||Turning OFF the Bed Room Air-Conditioner', 'Ok Sir Turning OFF Bed Room Air-Conditioner'),
(46, 'Turn OFF Bed Room Televisions||Turing OFF Bed Room Televisions||Turn OFF  the Bed Room Televisions||Turning OFF the Bed Room Televisions', 'Ok Sir Turning OFF Bed Room Televisions'),
(47, 'Turn OFF Bed Room window||Turing OFF Bed Room window||Turn OFF  the Bed Room window||Turning OFF the Bed Room window', 'Ok Sir Turning OFF Bed Room window'),
(48, 'Turn OFF Bed Room Night lamp||Turing OFF Bed Room Night lamp||Turn OFF  the Bed Room Night lamp|| Turning OFF the Bed Room Night lamp', 'Ok Sir Turning OFF Bed Room Night lamp');

(49, 'Turn ON Study Room light one||Turing ON Study Room light one||Turn ON  the Study Room light one||Turning ON the Study Room light one', 'Ok Sir Turning ON Study Room light one'),
(50, 'Turn ON Study Room light tow||Turing ON Study Room light tow||Turn ON  the Study Room light tow||Turning ON the Study Room light tow', 'Ok Sir Turning ON Study Room light tow'),
(51, 'Turn ON Study Room fan||Turing ON Study Room fan||Turn ON  the Study Room fan||Turning ON the Study Room fan', 'Ok Sir Turning ON Study Room fan'),
(52, 'Turn ON Study Room Air-Conditioner||Turing ON Study Room Air-Conditioner||Turn ON  the Study Room Air-Conditioner||Turning ON the Study Room Air-Conditioner', 'Ok Sir Turning ON Study Room Air-Conditioner'),
(53, 'Turn ON Study Room Projector||Turing ON Study Room Projector||Turn ON  the Study Room projector||Turning ON the Study Room Televisions', 'Ok Sir Turning ON Study Room projector'),
(54, 'Turn ON Study Room window||Turing ON Study Room window||Turn ON  the Study Room window||Turning ON the Study Room window', 'Ok Sir Turning ON Study Room window'),
(55, 'Turn ON Study Room Night lamp||Turing ON Study Room Night lamp||Turn ON  the Study Room Night lamp|| Turning ON the Study Room Night lamp', 'Ok Sir Turning ON Study Room Night lamp'),

(56, 'Turn OFF Study Room light one||Turing OFF Study Room light one||Turn OFF  the Study Room light one||Turning OFF the Study Room light one', 'Ok Sir Turning OFF Study Room light one'),
(57, 'Turn OFF Study Room light tow||Turing OFF Study Room light tow||Turn OFF  the Study Room light tow||Turning OFF the Study Room light tow', 'Ok Sir Turning OFF Study Room light tow'),
(58, 'Turn OFF Study Room fan||Turing OFF Study Room fan||Turn OFF  the Study Room fan||Turning OFF the Study Room fan', 'Ok Sir Turning OFF Study Room fan'),
(59, 'Turn OFF Study Room Air-Conditioner||Turing OFF Study Room Air-Conditioner||Turn OFF  the Study Room Air-Conditioner||Turning OFF the Study Room Air-Conditioner', 'Ok Sir Turning OFF Study Room Air-Conditioner'),
(60, 'Turn OFF Study Room projector||Turing OFF Study Room projector||Turn OFF  the Study Room projector||Turning OFF the Study Room Televisions', 'Ok Sir Turning OFF Study Room projector'),
(61, 'Turn OFF Study Room window||Turing OFF Study Room window||Turn OFF  the Study Room window||Turning OFF the Study Room window', 'Ok Sir Turning OFF Study Room window'),
(62, 'Turn OFF Study Room Night lamp||Turing OFF Study Room Night lamp||Turn OFF  the Study Room Night lamp|| Turning OFF the Study Room Night lamp', 'Ok Sir Turning OFF Study Room Night lamp');

(63, 'Turn ON Store Room light one||Turing ON Store Room light one||Turn ON  the Store Room light one||Turning ON the Store Room light one', 'Ok Sir Turning ON Store Room light one'),
(64, 'Turn ON Store Room light tow||Turing ON Store Room light tow||Turn ON  the Store Room light tow||Turning ON the Store Room light tow', 'Ok Sir Turning ON Store Room light tow'),
(65, 'Turn ON Store Room fan||Turing ON Store Room fan||Turn ON  the Store Room fan||Turning ON the Store Room fan', 'Ok Sir Turning ON Store Room fan'),
(66, 'Turn ON Store Room Night lamp||Turing ON Store Room Night lamp||Turn ON  the Store Room Night lamp|| Turning ON the Store Room Night lamp', 'Ok Sir Turning ON Store Room Night lamp'),

(67, 'Turn OFF Store Room light one||Turing OFF Store Room light one||Turn OFF  the Store Room light one||Turning OFF the Store Room light one', 'Ok Sir Turning OFF Store Room light one'),
(68, 'Turn OFF Store Room light tow||Turing OFF Store Room light tow||Turn OFF  the Store Room light tow||Turning OFF the Store Room light tow', 'Ok Sir Turning OFF Store Room light tow'),
(69, 'Turn OFF Store Room fan||Turing OFF Store Room fan||Turn OFF  the Store Room fan||Turning OFF the Store Room fan', 'Ok Sir Turning OFF Store Room fan'),
(70, 'Turn OFF Store Room Night lamp||Turing OFF Store Room Night lamp||Turn OFF  the Store Room Night lamp|| Turning OFF the Store Room Night lamp', 'Ok Sir Turning OFF Store Room Night lamp'),

(71, 'Turn ON Bath Room light one||Turing ON Bath Room light one||Turn ON  the Bath Room light one||Turning ON the Bath Room light one', 'Ok Sir Turning ON Bath Room light one'),
(72, 'Turn ON Bath Room water Pump||Turing ON Bath Room water Pump||Turn ON  the Bath Room water Pump||Turning ON the Bath Room water Pump', 'Ok Sir Turning ON Bath Room water Pump'),
(73, 'Turn ON Bath Room Washing Machine||Turing ON Bath Room Washing Machine||Turn ON  the Bath Room Washing Machine||Turning ON the Store Room fan', 'Ok Sir Turning ON Store Room fan'),
(74, 'Turn ON Bath Room Night lamp||Turing ON Bath Room Night lamp||Turn ON  the Bath Room Night lamp|| Turning ON the Store Room Night lamp', 'Ok Sir Turning ON Store Room Night lamp'),

(75, 'Turn OFF Bath Room light one||Turing OFF Bath Room light one||Turn OFF  the Bath Room light one||Turning OFF the Bath Room light one', 'Ok Sir Turning OFF Store Room light one'),
(76, 'Turn OFF Bath Room water Pump||Turing OFF Bath Room water Pump||Turn OFF  the Bath Room water Pump||Turning OFF the Bath Room water Pump', 'Ok Sir Turning OFF Bath Room water Pump'),
(77, 'Turn OFF Bath Room Washing Machine||Turing OFF Bath Room Washing Machine||Turn OFF  the Bath Room Washing Machine||Turning OFF the Bath Room Washing Machine', 'Ok Sir Turning OFF Bath Room Washing Machine'),
(78, 'Turn OFF Bath Room Night lamp||Turing OFF Bath Room Night lamp||Turn OFF  the Bath Room Night lamp|| Turning OFF the Bath Room Night lamp', 'Ok Sir Turning OFF Bath Room Night lamp');


-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `added_on`, `type`) VALUES
(1, 'Hi', '2020-04-22 12:41:04', 'user'),
(2, 'Hello, how are you.', '2020-04-22 12:41:05', 'bot'),
(3, 'what is your name', '2020-04-22 12:41:22', 'user'),
(4, 'My name is Vishal Bot', '2020-04-22 12:41:22', 'bot'),
(5, 'Where are your from', '2020-04-22 12:41:30', 'user'),
(6, 'I m from India', '2020-04-22 12:41:30', 'bot'),
(7, 'Go to hell', '2020-04-22 12:41:41', 'user'),
(8, 'Sorry not be able to understand you', '2020-04-22 12:41:41', 'bot'),
(9, 'bye', '2020-04-22 12:41:46', 'user'),
(10, 'Sad to see you are going. Have a nice day', '2020-04-22 12:41:46', 'bot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

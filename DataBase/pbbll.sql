-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 09:20 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pbbll`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `AboutUs` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`ID`, `AboutUs`) VALUES
(1, '<p>à¦…à§à¦¯à¦¾à¦¡à¦®à¦¿à¦¨, à¦¸à¦°à¦¬à¦°à¦¾à¦¹à¦•à¦¾à¦°à§€ à¦…à¦ªà¦Ÿà¦¿à¦• à¦®à¦¨à¦¿à¦Ÿà¦°à¦¿à¦‚ à¦¡à§‡à¦­à§‡à¦²à¦ªà¦¾à¦° à¦¬à¦¸à¦¤à§‡. à¦¸à§à¦¬à¦¹ à¦¸à¦®à¦¯à¦¼à¦¸à§‚à¦šà¦¿ à¦Ÿà¦¿à¦‰à¦Ÿà§‹à¦°à¦¿à¦¯à¦¼à¦¾à¦² à¦à¦•à¦Ÿà¦¿ à¦ªà¦¿à¦• blandit. à¦²à§‡à¦ª facilisi. à¦†à¦°à¦à¦¸à¦à¦¸ à¦®à¦¡à¦¿à¦‰à¦² Nisi à¦¯à¦¾à¦“ à¦†à¦•à¦°à§à¦·à¦£ congue à¦¸à§à¦²à¦¾à¦‡à¦¡à¦¶à§‹. à¦¸à¦®à¦žà§à¦œà¦¸à§‡ lectus à¦†à¦‡à¦¡à¦¿ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦¨à¦¾à¦°à§à¦¸à¦¾à¦°à¦¿ congue egestas. à¦ªà¦°à§à¦¯à¦¬à§‡à¦•à§à¦·à¦£ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦à¦•à¦Ÿà¦¿ faucibus à¦¨à¦°à¦® iaculis. à¦¸à§à¦®à¦¾à¦°à§à¦Ÿà¦«à§‹à¦¨à§‡à¦° à¦¶à§à¦°à§‡à¦£à§€à¦•à¦•à§à¦· à¦…à¦ªà¦¸à¦¾à¦°à¦£ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦ªà¦£à§à¦¯ à¦œà§à¦¤à§‹ facilisis tristique. à¦¸à§à¦®à¦¾à¦°à§à¦Ÿà¦«à§‹à¦¨à§‡à¦° à¦­à¦¿à¦Ÿà§‡ feugiat à¦¤à¦¾à¦ªà¦®à¦¾à¦¤à§à¦°à¦¾. à¦®à¦¡à§‡à¦² .à¦à¦•à¦Ÿà¦¿ à¦¸à§à¦ªà¦¾à¦°à¦¹à¦¿à¦°à§‹ à¦®à§ƒà¦¤à§à¦¯à§ tristique à¦ªà§à¦¯à¦¾à¦¡ à¦­à¦¿à¦Ÿà§‡ aliquet. à¦¶à§à¦°à§‡à¦£à§€à¦•à¦•à§à¦· à¦ªà§à¦²à¦¾à¦¸à§à¦Ÿà¦¿à¦• à¦¬à§à¦¯à¦¥à¦¾ à¦›à¦¿à¦², à¦à¦¬à¦‚ à¦²à§‡à¦–à¦• à¦¸à§à¦®à¦¾à¦°à§à¦Ÿà¦«à§‹à¦¨à§‡à¦° à¦…à¦ªà¦Ÿà¦¿à¦• à¦¬à¦¾.</p><p>à¦¯à§‹à¦—à¦¾à¦¯à§‹à¦— à¦‡à¦‡à¦‰ à¦¬à¦¹à¦¿à¦ƒà¦ªà§à¦°à¦¾à¦™à§à¦—à¦£ à¦­à¦¿à¦Ÿà§‡ à¦œà¦¨à§à¦¯ à¦†à¦‡à¦ªà¦¿ à¦ªà§à¦°à§‹à¦Ÿà¦¿à¦¨. à¦¬à¦¾à¦¡à¦¼à¦¿ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦ªà¦£à§à¦¯ à¦¨à¦¯à¦¼ à¦ªà¦¿à¦• .à¦à¦•à¦Ÿà¦¿ à¦¸à§à¦ªà¦¾à¦°à¦¹à¦¿à¦°à§‹ à¦®à§ƒà¦¤à§à¦¯à§ à¦®à¦§à§à¦¯à§‡. à¦•à¦¿à¦¨à§à¦¤à§ à¦ Massa à¦à¦¬à¦‚ à¦à¦–à¦¨à¦“ à¦•à¦•à§à¦· consequat à¦®à¦§à§à¦¯à§‡ à¦…à§à¦¯à¦¾à¦¡à¦¾à¦ªà§à¦Ÿà¦¾à¦°. à¦•à¦¿à¦¨à§à¦¤à§ à¦†à¦•à¦°à§à¦·à¦£ neque, à¦ªà§à¦°à§‹à¦Ÿà¦¿à¦¨ à¦¬à¦¾ à¦¬à§à¦¯à¦¬à¦¸à¦¾à¦° à¦—à§‹à¦ªà¦¨à§€à¦¯à¦¼à¦¤à¦¾ à¦¨à§€à¦¤à¦¿ à¦, à¦¸à¦°à¦¬à¦°à¦¾à¦¹à¦•à¦¾à¦°à§€ à¦•à¦•à§à¦· à¦¬à¦¸à¦¤à§‡. à¦¸à§à¦®à¦¾à¦°à§à¦Ÿà¦«à§‹à¦¨à§‡à¦° à¦ªà§à¦°à¦¶à¦¾à¦¨à§à¦¤, tristique Diam à¦­à¦¿à¦Ÿà§‡ congue, à¦¬à¦¾à¦¡à¦¼à¦¿ à¦¸à¦‚à¦¯à§‹à¦œà¦¨ à¦¸à¦¬à¦¸à¦®à¦¯à¦¼ EX, à¦ efficitur à¦œà¦¨à§à¦¯ à¦œà¦¨à§à¦¯ à¦à¦¬à¦‚ lectus. à¦¸à§à¦¬à¦¹ à¦à¦¸à¦¿ à¦¬à§à¦¯à§à¦°à§‹ à¦®à§‡à¦¶à¦¿à¦¨, à¦‡à¦‡à¦‰ tristique à¦¯à¦¨à§à¦¤à§à¦°à¦ªà¦¾à¦¤à¦¿. à¦¯à§‹à¦—à¦¾à¦¯à§‹à¦— consequat à¦²à§‡à¦ª à¦‡à¦‡à¦‰ à¦®à¦¡à¦¿à¦‰à¦² à¦¬à§à¦¯à¦¬à¦¸à¦¾à¦°. à¦®à¦¡à§‡à¦² à¦…à¦¥à¦¬à¦¾ faucibus à¦«à¦², à¦­à¦¿à¦Ÿà§‡ egestas à¦šà¦¾à¦²à¦¿à¦¤.</p><p>à¦¸à§à¦®à¦¾à¦°à§à¦Ÿà¦«à§‹à¦¨à§‡à¦° à¦¨à¦°à¦® bibendum à¦¬à§à¦¯à¦¾à¦Ÿà¦¾à¦°à§€. à¦¸à§à¦¬à¦¹ à¦à¦¬à¦‚ aliquet à¦«à¦². à¦¯à§‹à¦—à¦¾à¦¯à§‹à¦— à¦­à¦¿à¦Ÿà§‡ à¦®à¦¾à¦²à§à¦Ÿà¦¿à¦®à¦¿à¦¡à¦¿à¦¯à¦¼à¦¾ à¦…à§à¦¯à¦¾à¦°à¦¿à¦œà§‹à¦¨à¦¾, à¦®à¦¾à¦²à§à¦Ÿà¦¿à¦®à¦¿à¦¡à¦¿à¦¯à¦¼à¦¾ neque à¦†à¦®à¦¾à¦¦à§‡à¦° à¦ªà¦£à§à¦¯. à¦–à¦•à§à¦•à¦° .à¦à¦•à¦Ÿà¦¿ à¦¸à§à¦ªà¦¾à¦°à¦¹à¦¿à¦°à§‹ à¦®à§ƒà¦¤à§à¦¯à§, à¦¹à¦² à¦†à¦‡à¦ªà¦¿ à¦®à§‚à¦²à§à¦¯ iaculis, à¦…à§à¦¯à¦¾à¦°à¦¿à¦œà§‹à¦¨à¦¾ à¦Ÿà§à¦°à¦¾à¦• à¦¨à§‹à¦Ÿà¦¬à§à¦• à¦…à¦ªà¦¸à¦¾à¦°à¦£, egestas à¦¬à¦¡à¦¼à¦¿ à¦¸à§à¦®à¦¾à¦°à§à¦Ÿà¦«à§‹à¦¨à§‡à¦° à¦…à¦ªà¦¸à¦¾à¦°à¦£ à¦à¦¸à¦¿ à¦Ÿà¦¿à¦‰à¦Ÿà§‹à¦°à¦¿à¦¯à¦¼à¦¾à¦². à¦ªà§‚à¦°à§à¦£à¦¸à¦‚à¦–à§à¦¯à¦¾à¦° à¦¨à§€à¦¤à¦¿à¦¬à¦¾à¦•à§à¦¯ à¦¹à§à¦¯à¦¾à¦¨à§à¦¡à¦¹à§‡à¦²à§à¦¡ à¦¸à¦‚à¦¯à§‹à¦œà¦¨, à¦…à¦¥à¦¬à¦¾ à¦ªà§à¦°à¦¶à¦¾à¦¨à§à¦¤ à¦ªà§‚à¦°à§à¦¬ Maximus à¦®à§‹à¦Ÿà¦°à¦—à¦¾à¦¡à¦¼à¦¿. à¦®à¦¡à§‡à¦² à¦‡à¦‡à¦‰ lectus à¦®à¦§à§à¦¯à§‡ à¦¬à¦¿à¦¨à¦¾à¦®à§‚à¦²à§à¦¯à§‡ à¦¸à¦¬à¦¸à¦®à¦¯à¦¼ egestas à¦… à¦­à¦¿à¦Ÿà§‡ à¦²à¦¿à¦“. à¦°à¦¿à¦²à§‡ à¦¸à¦¦à¦¸à§à¦¯ à¦–à¦¿à¦à¦š à¦…à¦ªà¦¸à¦¾à¦°à¦£ imperdiet mattis. à¦®à¦¨à§à¦¤à¦¬à§à¦¯à¦¸à¦®à§‚à¦¹ à¦à¦–à¦¨à¦“ à¦®à¦¿à¦‰à¦¨à¦¿à¦–, finibus à¦à¦¬à¦‚ aliquet NEC, Porta à¦®à§‹à¦Ÿà¦°à¦—à¦¾à¦¡à¦¼à¦¿ à¦†à¦²à§‹à¦°. à¦•à¦¿à¦¨à§à¦¤à§ efficitur à¦«à§à¦Ÿà§‹ bibendum. à¦†à¦°à¦à¦¸à¦à¦¸ à¦–à¦¿à¦à¦š bibendum à¦à¦–à¦¨à¦“ à¦•à¦¾à¦°à§à¦¯à¦•à§à¦°à¦® à¦¡à¦¿à¦œà§‡à¦². à¦–à¦•à§à¦•à¦° à¦¡à¦¿à¦œà§‡à¦² à¦†à¦‡à¦¡à¦¿ à¦à¦–à¦¨à¦“ à¦…à¦¥à¦¬à¦¾ à¦¬à§à¦¯à§à¦°à§‹. à¦¸à§à¦¬à¦¹ interdum Nisi à¦¬à§à¦¯à§à¦°à§‹ à¦¬à¦¿à¦¶à§à¦¦à§à¦§ à¦Ÿà§‡à¦ª, à¦à¦•à¦Ÿà¦¿ sollicitudin lectus à¦ªà§à¦°à¦¶à¦¾à¦¨à§à¦¤. à¦¸à¦¾à¦°à¦¸à¦‚à¦•à¦²à¦¨ à¦¸à¦®à¦¯à¦¼à¦¸à§‚à¦šà¦¿ à¦²à¦¿à¦“ à¦†à¦‡à¦¡à¦¿ Fringilla à¦ªà§à¦°à¦¶à¦¾à¦¨à§à¦¤. à¦«à¦¿à¦²à§à¦® à¦¹à¦¿à¦¸à¦¾à¦¬à§‡ fermentum à¦†à¦¬à¦°à¦£. à¦ªà¦¡à¦¼à¦¾ à¦šà¦¾à¦²à¦¿à¦¯à¦¼à§‡ à¦¯à¦¾à¦¨ à¦à¦¸à¦¿ Porta à¦¸à§‡à¦°à¦¾. à¦¶à§à¦°à§‡à¦£à§€à¦•à¦•à§à¦· à¦®à¦¡à¦¿à¦‰à¦² à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦¸à¦°à§à¦¬à¦¶à§‡à¦· à¦¸à¦°à§à¦¬à¦¶à§‡à¦· blandit.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `ac_dc_mec_env_reg`
--

CREATE TABLE IF NOT EXISTS `ac_dc_mec_env_reg` (
  `CID` varchar(20) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `FeatureImage` text,
  `ACIC` varchar(250) DEFAULT NULL COMMENT 'AC input connector',
  `ACIVR` varchar(250) DEFAULT NULL COMMENT 'AC Input Voltage Range',
  `ACNIV` varchar(250) DEFAULT NULL COMMENT 'Normal AC Input Voltage',
  `ACNIF` varchar(250) DEFAULT NULL COMMENT 'Normal AC Input Frequency',
  `ACMIC` varchar(250) DEFAULT NULL COMMENT 'Maximum AC Input Current',
  `ACNIC` varchar(250) DEFAULT NULL COMMENT 'Nominal AC Input Current',
  `ACNPF` varchar(250) DEFAULT NULL COMMENT 'Nominal AC Power Factor',
  `DCNOV` varchar(250) DEFAULT NULL COMMENT 'Nominal DC Output Voltage',
  `DCMOV` varchar(250) DEFAULT NULL COMMENT 'Maximum DC Output Voltage',
  `DCMOC` varchar(250) DEFAULT NULL COMMENT 'Maximum DC Output Current',
  `DCMOP` varchar(250) DEFAULT NULL COMMENT 'Maximum DC Output Power',
  `DCDDR` varchar(250) DEFAULT NULL COMMENT 'Deep Discharge Recovery (minimum voltage)',
  `DCMIC` varchar(250) DEFAULT NULL COMMENT 'Maximum Interlock Current',
  `DCBT` varchar(250) DEFAULT NULL COMMENT 'Battery Type',
  `DCRP` varchar(250) DEFAULT NULL COMMENT 'Reverse Polarity',
  `DCSC` varchar(250) DEFAULT NULL COMMENT 'Short Circuit',
  `DCOC` varchar(250) DEFAULT NULL COMMENT 'DC output connector',
  `MEDi` varchar(250) DEFAULT NULL COMMENT 'Dimensions',
  `MEWe` varchar(250) DEFAULT NULL COMMENT 'Weight',
  `MEDP` varchar(250) DEFAULT NULL COMMENT 'Data port',
  `MEMH` varchar(250) DEFAULT NULL COMMENT 'Mounting holes',
  `MEC` varchar(250) DEFAULT NULL COMMENT 'Cooling',
  `ENEn` varchar(250) DEFAULT NULL COMMENT 'Enclosure',
  `ENOT` varchar(250) DEFAULT NULL COMMENT 'Operating Temperature',
  `ENST` varchar(250) DEFAULT NULL COMMENT 'Storage Temperature',
  `REEf` varchar(250) DEFAULT NULL COMMENT 'Efficiency',
  `RESa` varchar(250) DEFAULT NULL COMMENT 'Safety',
  `REEm` varchar(250) DEFAULT NULL COMMENT 'Emissions',
  `REIm` varchar(250) DEFAULT NULL COMMENT 'Immunity',
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ac_dc_mec_env_reg`
--

INSERT INTO `ac_dc_mec_env_reg` (`CID`, `Name`, `Title`, `FeatureImage`, `ACIC`, `ACIVR`, `ACNIV`, `ACNIF`, `ACMIC`, `ACNIC`, `ACNPF`, `DCNOV`, `DCMOV`, `DCMOC`, `DCMOP`, `DCDDR`, `DCMIC`, `DCBT`, `DCRP`, `DCSC`, `DCOC`, `MEDi`, `MEWe`, `MEDP`, `MEMH`, `MEC`, `ENEn`, `ENOT`, `ENST`, `REEf`, `RESa`, `REEm`, `REIm`) VALUES
('940-0001', '940-0001', 'Base Charger', '940-0001.png', 'IEC320/C14 Universal AC Input (World Charger)', '85 - 265 VAC (universal all models)', '120 VAC / 230 VAC rms', '45 - 65 Hz', '7.5 A', '7.3 A @ 100 VAC / 6 A @ 120 VAC / 3.1 A @ 240 VAC / 2.9 A @240 VAC', '> 0.99 @ 120 VAC / > 0.98 @ 230 VAC', '24 V', '36 V', '27.1 A', '650 W', '1.2 V', '1 A', 'Lead acid (Wet / AGM / GEL), lithium ion', 'Electronic Protection with Auto-Reset', 'Electronic Current Limit', 'Universal DC connections<br>M6 threaded fasteners for ring terminals', '25.2 x 18.6 x 8cm (9.9 x 7.3 x 3.1', '< 2.4kg (< 5.3lbs)', 'Sealed (IP66) USB 2.0 Host Port (Type A) with dust cover', 'Allows for safe installation on shelf, wall, bulkhead, or on-board industrial vehicles and equipment', 'Normal operation in any orientation with passive cooling only', 'IP66 (NEMA4)', '-40Â°C t+65Â°C (-40Â°F t149Â°F) Derated >40Â°C (104Â°F)', '-40Â°C t+85Â°C (-40Â°F t185Â°F)', '93.5% peak, California Energy Commission compliant', 'UL1564, CSA 107.2, EN 60335-2-29', 'FCC Part 15 / ICES 003 Class A, EN55011', 'EN61000-3-2, EN61000-3-3, EN 61000-4-2/-3/-4/-5/-6/-11'),
('940-0021-A ', '940-0021-A ', 'AWP Kit - Interlock Charger', '940-0021-A.png', 'IEC320/C14 Universal AC Input (World Charger)', '85 - 265 VAC (universal all models)', '120 VAC / 230 VAC rms', '45 - 65 Hz', '7.5 A', '7.3 A @ 100 VAC / 6 A @ 120 VAC / 3.1 A @ 240 VAC / 2.9 A @240 VAC', '> 0.99 @ 120 VAC / > 0.98 @ 230 VAC', '24 V', '36 V', '27.1 A', '650 W', '1.2 V', '1 A', 'Lead acid (Wet / AGM / GEL), lithium ion', 'Electronic Protection with Auto-Reset', 'Electronic Current Limit', 'Universal DC connections<br>\r\nIncludes Preinstalled - 1.8m (6'') DC harness w- 3/8" ring terminals', '25.2 x 18.6 x 8cm (9.9 x 7.3 x 3.1")', '< 2.4kg (< 5.3lbs)', 'Sealed (IP66) USB 2.0 Host Port (Type A) with dust cover', 'Allows for safe installation on shelf, wall, bulkhead, or on-board industrial vehicles and equipment', 'Normal operation in any orientation with passive cooling only', 'IP66 (NEMA4)', '-40°C t+65°C (-40°F t149°F) Derated >40°C (104°F)', '-40°C t+85°C (-40°F t185°F)', '93.5% peak, California Energy Commission compliant', 'UL1564, CSA 107.2, EN 60335-2-29', 'FCC Part 15 / ICES 003 Class A, EN55011', 'EN61000-3-2, EN61000-3-3, EN 61000-4-2/-3/-4/-5/-6/-11');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `App_Cat` varchar(200) DEFAULT NULL,
  `GP` varchar(20) DEFAULT NULL,
  `BID` varchar(20) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `IRefer` varchar(200) DEFAULT NULL,
  `Volt` varchar(20) DEFAULT NULL,
  `Cap25Min` varchar(200) DEFAULT NULL,
  `Cap75Min` varchar(200) DEFAULT NULL,
  `Cap5HR` varchar(200) DEFAULT NULL,
  `Cap20HR` varchar(200) DEFAULT NULL,
  `Cranking` varchar(200) DEFAULT NULL,
  `Image` text,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`App_Cat`, `GP`, `BID`, `Name`, `IRefer`, `Volt`, `Cap25Min`, `Cap75Min`, `Cap5HR`, `Cap20HR`, `Cranking`, `Image`) VALUES
('AWP', NULL, 'DC1150-2', NULL, 'L16', '2', '2235', '658', '945', '1150', '4500', NULL),
('AWP', 'DC', 'DC224-6', 'DC224-6', 'GC2', '6', '441', '113', '179', '224', '900', 'IMG_3778.jpg'),
('AWP', 'DC', 'DC245-6', 'DC245-6', 'DIN', '6', '457', '120', '198', '245', '930', 'IMG_3778.jpg'),
('CT', 'DC', 'DC260-12	', 'DC260-12	', '8D', '12', '578', '145', '214', '260', '1525', 'IMG_3778.jpg'),
('AWP', 'FF', 'FFD100-12', 'FFD100-12', '27', '12', '185 @ 25 Amps', '45 @ 75 Amps', '79 @ 5 HR', '100 @ 20 HR', '650', 'IMG_3778.jpg'),
('AWP', 'HC', 'HC100', 'HC100', '27', '12', '185', '40', '80', '100 ', '965', 'IMG_3778.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `app_detail`
--

CREATE TABLE IF NOT EXISTS `app_detail` (
  `ID` varchar(20) NOT NULL,
  `Details` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_detail`
--

INSERT INTO `app_detail` (`ID`, `Details`) VALUES
('AWP', 'You''ve got work to be done, and you need your tools to be there for you. It''s as true for your drill as it is for your Aerial Work Platform, because you can''t do either if they don''t have the power to get the job done.<br><br>\n\nWith Fullriver DC Series AGM Batteries, you can be sure to get the longest runtime and most life cycles on whatever job site you find them. By combining a maintenance and corrosion free product with the highest reserve capacity possible, you get a battery that will perform without having to worry about having to fill your batteries with acid on-site, having to replace a corroded battery box, or having the machine die in the middle of a project.<br><br>\n\nWhether you have one machine or a fleet of several different types of lifts, Fullriver DC Series comes in variety of sizes, configurations, and Ah ratings to give you exactly what you need to keep your tools working at the top of their game - no matter how high that AWP takes you.'),
('CT', 'You''ve got a lot of road behind, and more ahead. When it''s time to shut down in your rig, you want your hotel loads ready to carry you through the night. With Fullriver DC Series AGM Batteries, you can upgrade to a true deep cycle that won''t just power your fridge, satellite, computer, coffee pot, electric blanket and more - it''ll keep your APU system corrosion free and working for years on a single set of batteries.<br><br>\r\nFullriver DC Series AGM provides a maintenance free, corrosion free, high reserve capacity battery made to withstand the deep discharge, high-amp recharge, and high vibration that your rig is subject to over the course of a long day of deliveries, saving you from having to fill batteries with acid, replace corroded cables, or replace batteries every 9 months because they weren''t built to handle the job you need done.<br><br>\r\n\r\nAnd when you''ve got a fleet of trucks coming back in for repairs, not having to worry about changing out another set of batteries every year because they weren''t made for cycling can save you serious coin. Fullriver DC Series AGM batteries are an investment that will pay off, and with the competition always on your tail, that''s an advantage you can''t pass by.'),
('FC', 'Lorem ipsum dolor sit amet, inani clita omnes eam ut, nam discere ancillae ocurreret ut. Ne nam graece aliquid. Nullam putent evertitur ei mel. Expetenda splendide reprimique cu ius, ne mundi ignota everti pro. Eu his albucius scriptorem, no mea quando equidem albucius, vim petentium reformidans te.<br><br>\r\n\r\nAd mea diam virtute cotidieque. Pri alterum posidonium et. Pri ad liber maluisset reprehendunt. Mazim viderer apeirian eu vis, ea qui tale apeirian. Tale conclusionemque ex usu, ex vix etiam adversarium. Feugiat theophrastus usu ad.<br><br>\r\n\r\nUbique utamur interpretaris no vim, scripta bonorum delicata mea ei. Ne his suas decore forensibus. Ius ea error molestiae, errem tractatos ex eam. Te molestie menandri cum, vocibus appetere accommodare no has, cu probo saepe facilisi ius.<br><br>\r\n\r\nId vis discere disputationi, vis liber apeirian definitiones ne, eum ei ignota aeterno hendrerit. Et mel nibh vocent, eum altera tamquam repudiandae ad. Dicunt debitis signiferumque pro in, ius volumus singulis intellegat eu. Mea esse dicat dicam at. Apeirian electram mel ea. Cu agam modus splendide his, vix et assum scripserit vituperatoribus, vis prompta alienum id. Mundi oporteat an mel, nec veniam saperet percipitur et, solet accusam at pro.<br><br>\r\n\r\nOffendit luptatum oportere in pro, in nam meliore persecuti scribentur. His eu alia fastidii, ius dico ancillae ut. Eam dolor saperet at. Atqui nonumes usu cu. Assum reprimique dissentiunt vim ad, eam in veniam nostro dolores, graeci doctus appellantur nec at.'),
('GEV', 'Lorem ipsum dolor sit amet, inani clita omnes eam ut, nam discere ancillae ocurreret ut. Ne nam graece aliquid. Nullam putent evertitur ei mel. Expetenda splendide reprimique cu ius, ne mundi ignota everti pro. Eu his albucius scriptorem, no mea quando equidem albucius, vim petentium reformidans te.<br><br>\r\n\r\nAd mea diam virtute cotidieque. Pri alterum posidonium et. Pri ad liber maluisset reprehendunt. Mazim viderer apeirian eu vis, ea qui tale apeirian. Tale conclusionemque ex usu, ex vix etiam adversarium. Feugiat theophrastus usu ad.<br><br>\r\n\r\nUbique utamur interpretaris no vim, scripta bonorum delicata mea ei. Ne his suas decore forensibus. Ius ea error molestiae, errem tractatos ex eam. Te molestie menandri cum, vocibus appetere accommodare no has, cu probo saepe facilisi ius.<br><br>\r\n\r\nId vis discere disputationi, vis liber apeirian definitiones ne, eum ei ignota aeterno hendrerit. Et mel nibh vocent, eum altera tamquam repudiandae ad. Dicunt debitis signiferumque pro in, ius volumus singulis intellegat eu. Mea esse dicat dicam at. Apeirian electram mel ea. Cu agam modus splendide his, vix et assum scripserit vituperatoribus, vis prompta alienum id. Mundi oporteat an mel, nec veniam saperet percipitur et, solet accusam at pro.<br><br>\r\n\r\nOffendit luptatum oportere in pro, in nam meliore persecuti scribentur. His eu alia fastidii, ius dico ancillae ut. Eam dolor saperet at. Atqui nonumes usu cu. Assum reprimique dissentiunt vim ad, eam in veniam nostro dolores, graeci doctus appellantur nec at.'),
('M', 'Lorem ipsum dolor sit amet, inani clita omnes eam ut, nam discere ancillae ocurreret ut. Ne nam graece aliquid. Nullam putent evertitur ei mel. Expetenda splendide reprimique cu ius, ne mundi ignota everti pro. Eu his albucius scriptorem, no mea quando equidem albucius, vim petentium reformidans te.<br><br>\r\n\r\nAd mea diam virtute cotidieque. Pri alterum posidonium et. Pri ad liber maluisset reprehendunt. Mazim viderer apeirian eu vis, ea qui tale apeirian. Tale conclusionemque ex usu, ex vix etiam adversarium. Feugiat theophrastus usu ad.<br><br>\r\n\r\nUbique utamur interpretaris no vim, scripta bonorum delicata mea ei. Ne his suas decore forensibus. Ius ea error molestiae, errem tractatos ex eam. Te molestie menandri cum, vocibus appetere accommodare no has, cu probo saepe facilisi ius.<br><br>\r\n\r\nId vis discere disputationi, vis liber apeirian definitiones ne, eum ei ignota aeterno hendrerit. Et mel nibh vocent, eum altera tamquam repudiandae ad. Dicunt debitis signiferumque pro in, ius volumus singulis intellegat eu. Mea esse dicat dicam at. Apeirian electram mel ea. Cu agam modus splendide his, vix et assum scripserit vituperatoribus, vis prompta alienum id. Mundi oporteat an mel, nec veniam saperet percipitur et, solet accusam at pro.<br><br>\r\n\r\nOffendit luptatum oportere in pro, in nam meliore persecuti scribentur. His eu alia fastidii, ius dico ancillae ut. Eam dolor saperet at. Atqui nonumes usu cu. Assum reprimique dissentiunt vim ad, eam in veniam nostro dolores, graeci doctus appellantur nec at.'),
('MH', 'Lorem ipsum dolor sit amet, inani clita omnes eam ut, nam discere ancillae ocurreret ut. Ne nam graece aliquid. Nullam putent evertitur ei mel. Expetenda splendide reprimique cu ius, ne mundi ignota everti pro. Eu his albucius scriptorem, no mea quando equidem albucius, vim petentium reformidans te.<br><br>\r\n\r\nAd mea diam virtute cotidieque. Pri alterum posidonium et. Pri ad liber maluisset reprehendunt. Mazim viderer apeirian eu vis, ea qui tale apeirian. Tale conclusionemque ex usu, ex vix etiam adversarium. Feugiat theophrastus usu ad.<br><br>\r\n\r\nUbique utamur interpretaris no vim, scripta bonorum delicata mea ei. Ne his suas decore forensibus. Ius ea error molestiae, errem tractatos ex eam. Te molestie menandri cum, vocibus appetere accommodare no has, cu probo saepe facilisi ius.<br><br>\r\n\r\nId vis discere disputationi, vis liber apeirian definitiones ne, eum ei ignota aeterno hendrerit. Et mel nibh vocent, eum altera tamquam repudiandae ad. Dicunt debitis signiferumque pro in, ius volumus singulis intellegat eu. Mea esse dicat dicam at. Apeirian electram mel ea. Cu agam modus splendide his, vix et assum scripserit vituperatoribus, vis prompta alienum id. Mundi oporteat an mel, nec veniam saperet percipitur et, solet accusam at pro.<br><br>\r\n\r\nOffendit luptatum oportere in pro, in nam meliore persecuti scribentur. His eu alia fastidii, ius dico ancillae ut. Eam dolor saperet at. Atqui nonumes usu cu. Assum reprimique dissentiunt vim ad, eam in veniam nostro dolores, graeci doctus appellantur nec at.'),
('OG', 'Lorem ipsum dolor sit amet, inani clita omnes eam ut, nam discere ancillae ocurreret ut. Ne nam graece aliquid. Nullam putent evertitur ei mel. Expetenda splendide reprimique cu ius, ne mundi ignota everti pro. Eu his albucius scriptorem, no mea quando equidem albucius, vim petentium reformidans te.<br><br>\r\n\r\nAd mea diam virtute cotidieque. Pri alterum posidonium et. Pri ad liber maluisset reprehendunt. Mazim viderer apeirian eu vis, ea qui tale apeirian. Tale conclusionemque ex usu, ex vix etiam adversarium. Feugiat theophrastus usu ad.<br><br>\r\n\r\nUbique utamur interpretaris no vim, scripta bonorum delicata mea ei. Ne his suas decore forensibus. Ius ea error molestiae, errem tractatos ex eam. Te molestie menandri cum, vocibus appetere accommodare no has, cu probo saepe facilisi ius.<br><br>\r\n\r\nId vis discere disputationi, vis liber apeirian definitiones ne, eum ei ignota aeterno hendrerit. Et mel nibh vocent, eum altera tamquam repudiandae ad. Dicunt debitis signiferumque pro in, ius volumus singulis intellegat eu. Mea esse dicat dicam at. Apeirian electram mel ea. Cu agam modus splendide his, vix et assum scripserit vituperatoribus, vis prompta alienum id. Mundi oporteat an mel, nec veniam saperet percipitur et, solet accusam at pro.<br><br>\r\n\r\nOffendit luptatum oportere in pro, in nam meliore persecuti scribentur. His eu alia fastidii, ius dico ancillae ut. Eam dolor saperet at. Atqui nonumes usu cu. Assum reprimique dissentiunt vim ad, eam in veniam nostro dolores, graeci doctus appellantur nec at.'),
('RV', 'Lorem ipsum dolor sit amet, inani clita omnes eam ut, nam discere ancillae ocurreret ut. Ne nam graece aliquid. Nullam putent evertitur ei mel. Expetenda splendide reprimique cu ius, ne mundi ignota everti pro. Eu his albucius scriptorem, no mea quando equidem albucius, vim petentium reformidans te.<br><br>\r\n\r\nAd mea diam virtute cotidieque. Pri alterum posidonium et. Pri ad liber maluisset reprehendunt. Mazim viderer apeirian eu vis, ea qui tale apeirian. Tale conclusionemque ex usu, ex vix etiam adversarium. Feugiat theophrastus usu ad.<br><br>\r\n\r\nUbique utamur interpretaris no vim, scripta bonorum delicata mea ei. Ne his suas decore forensibus. Ius ea error molestiae, errem tractatos ex eam. Te molestie menandri cum, vocibus appetere accommodare no has, cu probo saepe facilisi ius.<br><br>\r\n\r\nId vis discere disputationi, vis liber apeirian definitiones ne, eum ei ignota aeterno hendrerit. Et mel nibh vocent, eum altera tamquam repudiandae ad. Dicunt debitis signiferumque pro in, ius volumus singulis intellegat eu. Mea esse dicat dicam at. Apeirian electram mel ea. Cu agam modus splendide his, vix et assum scripserit vituperatoribus, vis prompta alienum id. Mundi oporteat an mel, nec veniam saperet percipitur et, solet accusam at pro.<br><br>\r\n\r\nOffendit luptatum oportere in pro, in nam meliore persecuti scribentur. His eu alia fastidii, ius dico ancillae ut. Eam dolor saperet at. Atqui nonumes usu cu. Assum reprimique dissentiunt vim ad, eam in veniam nostro dolores, graeci doctus appellantur nec at.'),
('SRE', 'Lorem ipsum dolor sit amet, inani clita omnes eam ut, nam discere ancillae ocurreret ut. Ne nam graece aliquid. Nullam putent evertitur ei mel. Expetenda splendide reprimique cu ius, ne mundi ignota everti pro. Eu his albucius scriptorem, no mea quando equidem albucius, vim petentium reformidans te.<br><br>\r\n\r\nAd mea diam virtute cotidieque. Pri alterum posidonium et. Pri ad liber maluisset reprehendunt. Mazim viderer apeirian eu vis, ea qui tale apeirian. Tale conclusionemque ex usu, ex vix etiam adversarium. Feugiat theophrastus usu ad.<br><br>\r\n\r\nUbique utamur interpretaris no vim, scripta bonorum delicata mea ei. Ne his suas decore forensibus. Ius ea error molestiae, errem tractatos ex eam. Te molestie menandri cum, vocibus appetere accommodare no has, cu probo saepe facilisi ius.<br><br>\r\n\r\nId vis discere disputationi, vis liber apeirian definitiones ne, eum ei ignota aeterno hendrerit. Et mel nibh vocent, eum altera tamquam repudiandae ad. Dicunt debitis signiferumque pro in, ius volumus singulis intellegat eu. Mea esse dicat dicam at. Apeirian electram mel ea. Cu agam modus splendide his, vix et assum scripserit vituperatoribus, vis prompta alienum id. Mundi oporteat an mel, nec veniam saperet percipitur et, solet accusam at pro.<br><br>\r\n\r\nOffendit luptatum oportere in pro, in nam meliore persecuti scribentur. His eu alia fastidii, ius dico ancillae ut. Eam dolor saperet at. Atqui nonumes usu cu. Assum reprimique dissentiunt vim ad, eam in veniam nostro dolores, graeci doctus appellantur nec at.'),
('UPS', 'Lorem ipsum dolor sit amet, inani clita omnes eam ut, nam discere ancillae ocurreret ut. Ne nam graece aliquid. Nullam putent evertitur ei mel. Expetenda splendide reprimique cu ius, ne mundi ignota everti pro. Eu his albucius scriptorem, no mea quando equidem albucius, vim petentium reformidans te.<br><br>\r\n\r\nAd mea diam virtute cotidieque. Pri alterum posidonium et. Pri ad liber maluisset reprehendunt. Mazim viderer apeirian eu vis, ea qui tale apeirian. Tale conclusionemque ex usu, ex vix etiam adversarium. Feugiat theophrastus usu ad.<br><br>\r\n\r\nUbique utamur interpretaris no vim, scripta bonorum delicata mea ei. Ne his suas decore forensibus. Ius ea error molestiae, errem tractatos ex eam. Te molestie menandri cum, vocibus appetere accommodare no has, cu probo saepe facilisi ius.<br><br>\r\n\r\nId vis discere disputationi, vis liber apeirian definitiones ne, eum ei ignota aeterno hendrerit. Et mel nibh vocent, eum altera tamquam repudiandae ad. Dicunt debitis signiferumque pro in, ius volumus singulis intellegat eu. Mea esse dicat dicam at. Apeirian electram mel ea. Cu agam modus splendide his, vix et assum scripserit vituperatoribus, vis prompta alienum id. Mundi oporteat an mel, nec veniam saperet percipitur et, solet accusam at pro.<br><br>\r\n\r\nOffendit luptatum oportere in pro, in nam meliore persecuti scribentur. His eu alia fastidii, ius dico ancillae ut. Eam dolor saperet at. Atqui nonumes usu cu. Assum reprimique dissentiunt vim ad, eam in veniam nostro dolores, graeci doctus appellantur nec at.');

-- --------------------------------------------------------

--
-- Table structure for table `batteries`
--

CREATE TABLE IF NOT EXISTS `batteries` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DC_Series` text,
  `Full_Force` text,
  `HC_Series` text,
  `Char_Ins` varchar(200) DEFAULT NULL,
  `Ins_Man` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `batteries`
--

INSERT INTO `batteries` (`ID`, `DC_Series`, `Full_Force`, `HC_Series`, `Char_Ins`, `Ins_Man`) VALUES
(1, 'When it comes to Deep Cycle batteries, the details matter. Construction, plate chemistry, and craftsmanship all have to be in sync to get the longest life in the most demanding applications. Because of the environments where Fullriver DC AGM batteries are used, we work closely with our customers to ensure our construction standards are geared to meet your needs. We use more lead in creating stronger connections between cells, heavier plates to increase our reserve capacity, and have formulated our batteries to maximize life cycles.\r\n<br><br>\r\nBy taking these steps, the engineers and factory for Fullriver DC Series batteries have matched the highest standard for Deep Cycle VRLA batteries on the market. This has allowed us to craft out batteries to ensure they maintain their performance levels in the highest vibration and deepest discharge applications.\r\n<br><br>\r\nWhether you need deep cycling power for your Boat or RV; for your Solar and Wind power generator system; a consistent ride from your Electric Vehicles or Golf Cars; or a long lasting battery pack in your Floor Cleaning machine, Aerial Work Platforms or Pallet Truck, we have a battery that has been tested and proven the best in your Deep Cycle application.\r\n<br><br>\r\nAnd because it comes in a fully sealed, maintenance-free, corrosion-free package, Fullriver DC Series AGM batteries are an investment in making sure your battery pack enhances the quality of your machines. Fullriver DC Series AGM - The Battery that Makes Your Machine Better', 'Looking for a General Purpose AGM battery for your car, boat, or UPS system? Before you go with the first sealed battery offered, consider this: Fullriver has been making AGM batteries since 1995, and produces some of the highest grade batteries on the market.\r\n<br><br>\r\nAnd for the standard application, we''ve produced the perfect battery: Full Force AGM. Made from start to finish in our own plant, our batteries feature better vibration resistance and higher valve settings than the nearest competitors, helping the battery last longer. And at a lower price point than our market equivalents and a variety of sizes and configurations available, our Master Distributors are sure to have the right battery for your application.\r\n<br><br>\r\nFull Force AGM - A General Purpose AGM Battery that Provides Real Value', 'In a high impact environment, you need a battery that is as tough as the rest of your vehicle. A battery with extra thick plate connections, higher compression rates and valve settings, and brass terminal connections to ensure the power in your battery gets to your accessories efficiently.\r\n<br><br>\r\nYou need Fullriver HC AGM. Built to the highest standards on the market, Fullriver HC is made to be put through the toughest tests - high speeds, off road, on board accessories, winches, bouncing hydraulics and booming systems - and still start your engine when it''s time to head back to the garage.\r\n<br><br>\r\nWith Fullriver HC AGM, you''ll have the power to keep all your vital accessories running hot, and the confidence of knowing your battery can handle everything you put your vehicle through - and what you put yourself through to get it just right.\r\n<br><br>\r\nFullriver HC - A Battery Built to Enhance Everything Your Ride is About', 'batteries', 'batteries');

-- --------------------------------------------------------

--
-- Table structure for table `bdistab`
--

CREATE TABLE IF NOT EXISTS `bdistab` (
  `BID` varchar(20) NOT NULL,
  `1Time` varchar(11) DEFAULT NULL,
  `1Amps` varchar(11) DEFAULT NULL,
  `1Rate` varchar(11) DEFAULT NULL,
  `2Time` varchar(11) DEFAULT NULL,
  `2Amps` varchar(11) DEFAULT NULL,
  `2Rate` varchar(11) DEFAULT NULL,
  `3Time` varchar(11) DEFAULT NULL,
  `3Amps` varchar(11) DEFAULT NULL,
  `3Rate` varchar(11) DEFAULT NULL,
  `4Time` varchar(11) DEFAULT NULL,
  `4Amps` varchar(11) DEFAULT NULL,
  `4Rate` varchar(11) DEFAULT NULL,
  `5Time` varchar(11) DEFAULT NULL,
  `5Amps` varchar(11) DEFAULT NULL,
  `5Rate` varchar(11) DEFAULT NULL,
  `6Time` varchar(11) DEFAULT NULL,
  `6Amps` varchar(11) DEFAULT NULL,
  `6Rate` varchar(11) DEFAULT NULL,
  `7Time` varchar(11) DEFAULT NULL,
  `7Amps` varchar(11) DEFAULT NULL,
  `7Rate` varchar(11) DEFAULT NULL,
  `8Time` varchar(11) DEFAULT NULL,
  `8Amps` varchar(11) DEFAULT NULL,
  `8Rate` varchar(11) DEFAULT NULL,
  `9Time` varchar(11) DEFAULT NULL,
  `9Amps` varchar(11) DEFAULT NULL,
  `9Rate` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdistab`
--

INSERT INTO `bdistab` (`BID`, `1Time`, `1Amps`, `1Rate`, `2Time`, `2Amps`, `2Rate`, `3Time`, `3Amps`, `3Rate`, `4Time`, `4Amps`, `4Rate`, `5Time`, `5Amps`, `5Rate`, `6Time`, `6Amps`, `6Rate`, `7Time`, `7Amps`, `7Rate`, `8Time`, `8Amps`, `8Rate`, `9Time`, `9Amps`, `9Rate`) VALUES
('DC1150-2', '20', '57.5', '0.05', '10', '104', '0.1', '8', '126.5', '0.13', '5', '184', '0.25', '3', '262', '0.33', '2', '651', '0.5', '1', '616', '1', NULL, NULL, NULL, NULL, NULL, NULL),
('DC220-6', '20', '11', '0.05', '10', '19.8', '0.1', '8', '23.9', '0.13', '5', '36', '0.25', '3', '49.8', '0.33', '2', '67.3', '0.5', '1', '125', '1', NULL, NULL, NULL, NULL, NULL, NULL),
('FFD100-12', '20', '5', '0.05', '10', '8.6', '0.1', '8', '10.4', '0.13', '5', '15.8', '0.25', '3', '25.1', '0.33', '2', '30.1', '0.5', '1', '60', '1', NULL, NULL, NULL, NULL, NULL, NULL),
('FFD110-12', '20', '5', '0.05', '10', '9', '0.1', '8', '10.6', '0.13', '5', '16.4', '0.25', '3', '28', '0.33', '2', '32.5', '0.5', '1', '60.6', '1', NULL, NULL, NULL, NULL, NULL, NULL),
('HC100', '20', '5.5', '0.05', '10', '9.1', '0.1', '8', '10.9', '0.13', '5', '17.2', '0.25 ', '3', '25.1', '0.33', '2', '34', '0.5', '1', '60', '1', '15', '-', '-', '5', '-', '-'),
('HC105', '20', '5.8', '0.05', '10', '10', '0.1', '8', '11.4', '0.13', '5', '20', '0.25', '3', '30', '0.33', '2', '36', '0.5', '1', '72', '1', '15', '-', '-', '5', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `belespe`
--

CREATE TABLE IF NOT EXISTS `belespe` (
  `BID` varchar(20) NOT NULL,
  `NV` varchar(40) DEFAULT NULL COMMENT 'nominalvoltage',
  `Cap100` varchar(40) DEFAULT NULL COMMENT 'capacity100',
  `Cap20` varchar(40) DEFAULT NULL COMMENT 'capacity20',
  `Cap10` varchar(40) DEFAULT NULL COMMENT 'capacity10',
  `Cap5` varchar(40) DEFAULT NULL COMMENT 'capacity5',
  `CCA` varchar(40) DEFAULT NULL COMMENT 'CCA',
  `CA` varchar(40) DEFAULT NULL COMMENT 'CA',
  `PHCA` varchar(40) DEFAULT NULL COMMENT 'PHCA',
  `SCCur` varchar(40) DEFAULT NULL COMMENT 'shortcircuitcurrent',
  `IntRes` varchar(40) DEFAULT NULL COMMENT 'internalresistance',
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `belespe`
--

INSERT INTO `belespe` (`BID`, `NV`, `Cap100`, `Cap20`, `Cap10`, `Cap5`, `CCA`, `CA`, `PHCA`, `SCCur`, `IntRes`) VALUES
('DC1150-2', '2', '1275', '1150', '1040', '945', '4500', '5400', '2000', '8133', '1.6'),
('DC220-6', '6', '242', '220', '198', '180', '990', '1170', '2000', '3210', '1.5'),
('FFD100-12', '12', '110', '100', '86', '79', '650', '900', '1500', '2450', '9'),
('FFD110-12', '12', '115', '110', '90', '82', '850', '1050', '1600', '2650', '9'),
('HC100', '12', '110', '100', '91', '80', '965', '1170', '1950', '3500', '2.2'),
('HC105', '12', '116', '105', '100', '90', '1050', '1300', '2150', '5000', '2.2');

-- --------------------------------------------------------

--
-- Table structure for table `bmecspe`
--

CREATE TABLE IF NOT EXISTS `bmecspe` (
  `BID` varchar(20) NOT NULL COMMENT 'MECID',
  `MGS` varchar(200) DEFAULT NULL COMMENT 'groupsize',
  `MTT` varchar(200) DEFAULT NULL COMMENT 'terminaltype',
  `MTH` varchar(200) DEFAULT NULL COMMENT 'totalheight',
  `MH` varchar(200) DEFAULT NULL COMMENT 'height',
  `MWi` varchar(200) DEFAULT NULL COMMENT 'width',
  `ML` varchar(200) DEFAULT NULL COMMENT 'length',
  `MWe` varchar(200) DEFAULT NULL COMMENT 'weight',
  `MCT` varchar(200) DEFAULT NULL COMMENT 'casetype',
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmecspe`
--

INSERT INTO `bmecspe` (`BID`, `MGS`, `MTT`, `MTH`, `MH`, `MWi`, `ML`, `MWe`, `MCT`) VALUES
('DC1150-2', 'L15', 'M10', '16.18 inch (411 mm)', '15.91 inch (404 mm)', '7.05 inch (179 mm)', '11.61 inch (295 mm)', '125.7 lbs (57 kg)', 'ABS Plastic - Flame Res Rating UL94-HB'),
('DC220-6', '27', 'M8', '8.90 inch (226 mm)', '8.66 inch (220 mm)', '6.85 inch (174 mm)', '12.05 inch (306 mm)', '71.0 lbs (32.2 kg)', 'ABS Plastic - Flame Res Rating UL94-HB'),
('FFD100-12', '27', 'M8 (w/ TP08 Brass AP Included)', '9.29 inch (236 mm)', '8.31 inch (211 mm)', '6.65 inch (169 mm)', '12.09 inch (307 mm)', '59.5 lbs (27 kg)', 'ABS Plastic - Flame Res Rating UL94-HB'),
('FFD110-12', '31', 'M8 (w/ TP08 Brass AP Included)', '9.49 inch (241 mm)', '8.43 inch (214 mm)', '6.77 inch (172 mm)', '12.91 inch (328 mm)', '66.1 lbs (30 kg)', 'ABS Plastic - Flame Res Rating UL94-HB'),
('HC100', '27', 'DT (Dual AP & Stud)', '9.33 inch (237 mm)', '8.43 inch (214 mm)', '6.65 inch (169 mm)', '12.09 inch (307 mm)', '71.0 lbs (32.2 kg)', 'ABS Plastic - Flame Res Rating UL94-HB'),
('HC105', '31', 'M8', '8.66 inch (220 mm)', '8.43 inch (214 mm)', '6.77 inch (172 mm)', '12.91 inch (328 mm)', '75.0 lbs (34 kg)', 'ABS Plastic - Flame Res Rating UL94-HB');

-- --------------------------------------------------------

--
-- Table structure for table `b_gallery`
--

CREATE TABLE IF NOT EXISTS `b_gallery` (
  `BID` varchar(20) NOT NULL,
  `image1` varchar(250) DEFAULT NULL,
  `image2` varchar(250) DEFAULT NULL,
  `image3` varchar(250) DEFAULT NULL,
  `image4` varchar(250) DEFAULT NULL,
  `image5` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_gallery`
--

INSERT INTO `b_gallery` (`BID`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES
('DC1150-2', 'DC1150-2_1.png', 'DC1150-2_2.png', 'DC1150-2_3.png', 'DC1150-2_4.png', 'DC1150-2_5.png'),
('DC220-6', 'DC220-6_1', 'DC220-6_2', 'DC220-6_3', 'DC220-6_4', 'DC220-6_5'),
('FFD100-12', 'FFD100-12_1', 'FFD100-12_2', 'FFD100-12_3', 'FFD100-12_4', 'FFD100-12_5'),
('FFD110-12', 'FFD110-12_1', 'FFD110-12_2', 'FFD110-12_3', 'FFD110-12_4', 'FFD110-12_5'),
('HC100', 'HC100', 'HC100', 'HC100', 'HC100', 'HC100'),
('HC105', 'HC105', 'HC105', 'HC105', 'HC105', 'HC105');

-- --------------------------------------------------------

--
-- Table structure for table `b_graph`
--

CREATE TABLE IF NOT EXISTS `b_graph` (
  `BID` varchar(20) NOT NULL,
  `Graph1` varchar(250) DEFAULT NULL,
  `Graph2` varchar(250) DEFAULT NULL,
  `Graph3` varchar(250) DEFAULT NULL,
  `Graph4` varchar(250) DEFAULT NULL,
  `Graph5` varchar(250) DEFAULT NULL,
  `Graph6` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_graph`
--

INSERT INTO `b_graph` (`BID`, `Graph1`, `Graph2`, `Graph3`, `Graph4`, `Graph5`, `Graph6`) VALUES
('DC1150-2', 'batteries-self-discharge-vs-time-temp.png', 'batteries-temp-vs-capacity.png', 'dc-series-cycle-life-vs-dod.png', 'DC1150-2-battery-terminal-dimensions.png', 'DC1150-2-discharge-profile.png', 'DC1150-2-state-of-charge-vs-open-circuit-voltage.png'),
('DC220-6', 'DC220-6-batteries-self-discharge-vs-time-temp', 'DC220-6-batteries-temp-vs-capacity', 'DC220-6-dc-series-cycle-life-vs-dod', 'DC220-6-battery-terminal-dimensions', 'DC220-6-discharge-profile', 'DC220-6-state-of-charge-vs-open-circuit-voltage'),
('FFD100-12', 'FFD100-12-batteries-self-discharge-vs-time-temp', 'FFD100-12-batteries-temp-vs-capacity', 'FFD100-12-full-force-cycle-life-vs-dod', NULL, NULL, NULL),
('FFD110-12', 'FFD110-12-batteries-self-discharge-vs-time-temp', 'FFD110-12-batteries-temp-vs-capacity', 'FFD110-12-full-force-cycle-life-vs-dod', NULL, NULL, NULL),
('HC100', 'HC100-batteries-self-discharge-vs-time-temp', 'HC100-batteries-temp-vs-capacity', NULL, NULL, NULL, NULL),
('HC105', 'HC105batteries-self-discharge-vs-time-temp', 'HC105-batteries-temp-vs-capacity', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `b_support`
--

CREATE TABLE IF NOT EXISTS `b_support` (
  `Cat` varchar(250) DEFAULT NULL,
  `BID` varchar(20) NOT NULL,
  `support1` varchar(250) DEFAULT NULL,
  `support2` varchar(250) DEFAULT NULL,
  `support3` varchar(250) DEFAULT NULL,
  `support4` varchar(250) DEFAULT NULL,
  `Volt` int(11) DEFAULT NULL,
  `Size` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_support`
--

INSERT INTO `b_support` (`Cat`, `BID`, `support1`, `support2`, `support3`, `support4`, `Volt`, `Size`) VALUES
('DC', 'DC1150-2', 'batteries.pdf', 'batteries.pdf', 'dc-series-2.pdf', 'DC1150-2.pdf', 2, '802 KB'),
('DC', 'DC220-6', 'batteries.pdf', 'batteries.pdf', 'dc-series-6.pdf', 'DC220-6.pdf', 6, '2.35 MB'),
('FF', 'FFD100-12', 'batteries.pdf', 'batteries.pdf', NULL, 'FFD100-12.pdf', 12, '320 KB'),
('FF', 'FFD110-12', 'batteries.pdf', 'batteries.pdf', NULL, 'FFD110-12.pdf', 12, '321 KB'),
('HC', 'HC100', 'batteries.pdf', 'batteries.pdf', NULL, 'HC100.pdf', 12, '830 KB'),
('HC', 'HC105', 'batteries.pdf', 'batteries.pdf', NULL, 'HC105.pdf', 12, '808 KB');

-- --------------------------------------------------------

--
-- Table structure for table `charger`
--

CREATE TABLE IF NOT EXISTS `charger` (
  `ID` varchar(20) NOT NULL,
  `Details` text,
  `IC_Support1` text,
  `IC_Support2` text,
  `IC_Support3` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charger`
--

INSERT INTO `charger` (`ID`, `Details`, `IC_Support1`, `IC_Support2`, `IC_Support3`) VALUES
('ic650', NULL, 'delta-q-ic650-battery-chargers.pdf', 'delta-q-ic650-battery-chargers.pdf', 'delta-q-ic650-battery-chargers.pdf'),
('quiq', NULL, NULL, 'delta-q-quiq-battery-chargers.pdf', 'delta-q-quiq-battery-chargers.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `csa_temp_ter`
--

CREATE TABLE IF NOT EXISTS `csa_temp_ter` (
  `BID` varchar(20) NOT NULL,
  `1Char12B` varchar(10) DEFAULT NULL COMMENT 'Bulk12V',
  `1Char24B` varchar(10) DEFAULT NULL COMMENT 'Bulk24V',
  `1Char36B` varchar(10) DEFAULT NULL COMMENT 'Bulk36V',
  `1Char48B` varchar(10) DEFAULT NULL COMMENT 'Bulk48V',
  `1Char12A` varchar(10) DEFAULT NULL COMMENT 'AbSortion12V',
  `1Char24A` varchar(10) DEFAULT NULL COMMENT 'AbSortion24V',
  `1Char36A` varchar(10) DEFAULT NULL COMMENT 'AbSortion36V',
  `1Char48A` varchar(10) DEFAULT NULL COMMENT 'AbSortion48V',
  `1Char12F` varchar(10) DEFAULT NULL COMMENT 'Float12V',
  `1Char24F` varchar(10) DEFAULT NULL COMMENT 'Float24V',
  `1Char36F` varchar(10) DEFAULT NULL COMMENT 'Float36V',
  `1Char48F` varchar(10) DEFAULT NULL COMMENT 'Float48V',
  `TempStorR` varchar(40) DEFAULT NULL COMMENT 'StorageRe',
  `TempStorM` varchar(40) DEFAULT NULL COMMENT 'StorageMax',
  `TempOpeR` varchar(40) DEFAULT NULL COMMENT 'OperationRe',
  `TempOpeM` varchar(40) DEFAULT NULL COMMENT 'OperationMax',
  `TempChWR` varchar(40) DEFAULT NULL COMMENT 'ChargeWithTCRe',
  `TempChWM` varchar(40) DEFAULT NULL COMMENT 'ChargeWithTCMax',
  `TempChOR` varchar(40) DEFAULT NULL COMMENT 'ChargeWithOutTCRe',
  `TempChOM` varchar(40) DEFAULT NULL COMMENT 'ChargeWithOutTCMax',
  `Ter1stFL` varchar(40) DEFAULT NULL COMMENT 'APft-lbs',
  `Ter1stIL` varchar(40) DEFAULT NULL COMMENT 'APin-lbs',
  `Ter1stN` varchar(40) DEFAULT NULL COMMENT 'APNm',
  `Ter2ndFL` varchar(40) DEFAULT NULL COMMENT 'FR45ft-lbs',
  `Ter2ndIL` varchar(40) DEFAULT NULL COMMENT 'FR45in-lbs',
  `Ter2ndN` varchar(40) DEFAULT NULL COMMENT 'FR45Nm',
  `Ter3rdFL` varchar(40) DEFAULT NULL COMMENT 'M8ft-lbs',
  `Ter3rdIL` varchar(40) DEFAULT NULL COMMENT 'M8in-lbs',
  `Ter3rdN` varchar(40) DEFAULT NULL COMMENT 'M8Nm',
  `Ter4thFL` varchar(40) DEFAULT NULL COMMENT 'DTft-lbs',
  `Ter4thIL` varchar(40) DEFAULT NULL COMMENT 'DTin-lbs',
  `Ter4thN` varchar(40) DEFAULT NULL COMMENT 'DTNm',
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csa_temp_ter`
--

INSERT INTO `csa_temp_ter` (`BID`, `1Char12B`, `1Char24B`, `1Char36B`, `1Char48B`, `1Char12A`, `1Char24A`, `1Char36A`, `1Char48A`, `1Char12F`, `1Char24F`, `1Char36F`, `1Char48F`, `TempStorR`, `TempStorM`, `TempOpeR`, `TempOpeM`, `TempChWR`, `TempChWM`, `TempChOR`, `TempChOM`, `Ter1stFL`, `Ter1stIL`, `Ter1stN`, `Ter2ndFL`, `Ter2ndIL`, `Ter2ndN`, `Ter3rdFL`, `Ter3rdIL`, `Ter3rdN`, `Ter4thFL`, `Ter4thIL`, `Ter4thN`) VALUES
('DC1150-2', '14.7', '29.4', '44.1', '58.8', '14.7', '29.4', '44.1', '58.8', '13.6', '27.2', '40.8', '54.6', '-15Â°C to 50Â°C', '-40Â°C to 71Â°C', '-15Â°C to 40Â°C', '-40Â°C to 71Â°C', '-15Â°C to 50Â°C', '-40Â°C to 71Â°C', '0Â°C to 40Â°C', '-15Â°C to 50Â°C', '4.2 - 6.0', '50-70', '5.6 - 7.9', '6.0 - 7.5', '70-90', '7.9 - 10.1', '7.1 - 8.0', '85-95', '9.6 - 10.7', '9.2 - 10.4', '110-125', '12.2 - 14.0'),
('DC220-6', '14.7', '29.4', '44.1', '58.8', '14.7', '29.4', '44.1', '58.8', '13.6', '27.2', '40.8', '54.6', '-15°C to 50°C', '-40°C to 71°C', '-15°C to 40°C', '-40°C to 71°C', '-15°C to 50°C', '-40°C to 71°C', '0°C to 40°C', '-15°C to 50°C', '4.2 - 6.0', '50-70', '5.6 - 7.9', '6.0 - 7.5', '70-90', '7.9 - 10.1', '7.1 - 8.0', '85-95', '9.6 - 10.7', '9.2 - 10.4', '110-125', '12.2 - 14.0'),
('FFD100-12', '14.7', '29.4', '44.1', '58.8', '14.7', '29.4', '44.1', '58.8', '13.6', '27.2', '40.8', '54.6', '-15Â°C to 50Â°C', '-40Â°C to 71Â°C', '-15Â°C to 40Â°C', '-40Â°C to 71Â°C', '-15Â°C to 50Â°C', '-40Â°C to 71Â°C', '0Â°C to 40Â°C', '-15Â°C to 50Â°C', '4.2 - 6.0', '50-70', '5.6 - 7.9', '6.0 - 7.5', '70-90', '7.9 - 10.1', '7.1 - 8.0', '85-95', '9.6 - 10.7', '9.2 - 10.4', '110-125', '12.2 - 14.0'),
('FFD110-12', '14.7', '29.4', '44.1', '58.8', '14.7', '29.4', '44.1', '58.8', '13.6', '27.2', '40.8', '54.6', '-15°C to 50°C', '-40°C to 71°C', '-15°C to 40°C', '-40°C to 71°C', '-15°C to 50°C', '-40°C to 71°C', '0°C to 40°C', '-15°C to 50°C', '4.2 - 6.0', '50-70', '5.6 - 7.9', '6.0 - 7.5', '70-90', '7.9 - 10.1', '7.1 - 8.0', '85-95', '9.6 - 10.7', '9.2 - 10.4', '110-125', '12.2 - 14.0'),
('HC100', '14.7', '29.4', '44.1', '58.8', '14.7', '29.4', '44.1', '58.8', '13.6', '27.2', '40.8', '54.6', '-15Â°C to 50Â°C', '-40Â°C to 71Â°C', '-15Â°C to 40Â°C', '-40Â°C to 71Â°C', '-15Â°C to 50Â°C', '-40Â°C to 71Â°C', '0Â°C to 40Â°C', '-15Â°C to 50Â°C', '4.2 - 6.0', '50-70', '5.6 - 7.9', '6.0 - 7.5', '70-90', '7.9 - 10.1', '7.1 - 8.0', '85-95', '9.6 - 10.7', '9.2 - 10.4	', '110-125', '12.2 - 14.0'),
('HC105', '14.7', '29.4', '44.1', '58.8', '14.7', '29.4', '44.1', '58.8', '13.6', '27.2', '40.8', '54.6', '-15°C to 50°C', '-40°C to 71°C', '-15°C to 40°C', '-40°C to 71°C', '-15°C to 50°C', '-40°C to 71°C', '0°C to 40°C', '-15°C to 50°C', '4.2 - 6.0', '50-70', '5.6 - 7.9', '6.0 - 7.5', '70-90', '7.9 - 10.1', '7.1 - 8.0', '85-95', '9.6 - 10.7', '9.2 - 10.4', '110-125', '12.2 - 14.0');

-- --------------------------------------------------------

--
-- Table structure for table `c_accessories`
--

CREATE TABLE IF NOT EXISTS `c_accessories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CID` varchar(20) NOT NULL,
  `Type` varchar(200) DEFAULT NULL,
  `Description` text,
  `Image` text,
  PRIMARY KEY (`ID`),
  KEY `CID` (`CID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `c_accessories`
--

INSERT INTO `c_accessories` (`ID`, `CID`, `Type`, `Description`, `Image`) VALUES
(1, '940-0001', NULL, 'Clamp Breakaway DC Cord<br>\r\nSKU# 426-0062', '426-0062.png'),
(2, '940-0001', 'AC-Cord', 'AC-Cord 3M 16AWG IP66 IEC 320 SCHUKO<br>\r\nSKU# 475-0350', 'AC-Cord.png'),
(3, '940-0001', 'AC-Cord', 'AC-Cord 3M 16AWG IP66 IEC 320 NEMA 5-15<br>\r\nSKU# 475-0406', '475-0406.png'),
(4, '940-0001', 'AC-Cord', 'AC-Cord 0.45 16AWG IP66 IEC 320 Pigtail<br>\r\nSKU# 475-0407', '475-0407.png'),
(5, '913-2400', NULL, '10'' AC-Cord 14AWG IEC-320 NEMA 5-15P (North America)<br>\r\nSKU# AC Cord-10', 'AC Cord-10.png'),
(6, '913-2400', 'AC-Cord', '15'' AC-Cord 14AWG IEC-320 NEMA 5-15P (North America)<br>\r\nSKU# AC Cord-15', 'AC Cord-10.png'),
(7, '913-2400', 'DC Accessory (Golf & Industrial)', '36v Club Car (Crow''s Foot)<r>\r\nSKU# GCC-F', 'GCC-F.png');

-- --------------------------------------------------------

--
-- Table structure for table `c_gallery`
--

CREATE TABLE IF NOT EXISTS `c_gallery` (
  `CID` varchar(20) NOT NULL,
  `Image1` text,
  `Image2` text,
  `Image3` text,
  `Image4` text,
  `Image5` text,
  `Image6` text,
  `Image7` text,
  `Image8` text,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_gallery`
--

INSERT INTO `c_gallery` (`CID`, `Image1`, `Image2`, `Image3`, `Image4`, `Image5`, `Image6`, `Image7`, `Image8`) VALUES
('913-2400', '913-2400_01.png', '913-2400_02.jpg', '913-2400_03.jpg', '913-2400_04.png', '913-2400_05.jpg', '913-2400_06.jpg', '913-2400_07.png', '913-2400_08.png'),
('940-0001', '940-0001_001.png', '940-0001_002.png', '940-0001_003.png', '940-0001_004.png', '940-0001_005.jpg', '940-0001_006.jpg', '940-0001_007.jpg', '940-0001_008.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `c_support`
--

CREATE TABLE IF NOT EXISTS `c_support` (
  `CID` varchar(20) NOT NULL,
  `Support1` text,
  `Support2` text,
  `Support3` text,
  `Support4` text,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_support`
--

INSERT INTO `c_support` (`CID`, `Support1`, `Support2`, `Support3`, `Support4`) VALUES
('913-2400', NULL, 'delta-q-quiq-off-board-battery-chargers.pdf', 'delta-q-quiq-off-board-battery-chargers.pdf', NULL),
('940-0001', 'delta-q-ic650-battery-chargers.pdf', 'delta-q-ic650-battery-chargers.pdf', 'delta-q-ic650-battery-chargers.pdf', '940-0001.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `dc_series`
--

CREATE TABLE IF NOT EXISTS `dc_series` (
  `BID` varchar(20) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `IRefer` varchar(200) DEFAULT NULL,
  `Volt` varchar(200) DEFAULT NULL,
  `Cap25Min` varchar(200) DEFAULT NULL,
  `Cap75Min` varchar(200) DEFAULT NULL,
  `Cap5HR` varchar(200) DEFAULT NULL,
  `Cap20HR` varchar(200) DEFAULT NULL,
  `Cranking` varchar(200) DEFAULT NULL,
  `Image` text,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_series`
--

INSERT INTO `dc_series` (`BID`, `Name`, `IRefer`, `Volt`, `Cap25Min`, `Cap75Min`, `Cap5HR`, `Cap20HR`, `Cranking`, `Image`) VALUES
('DC1150-2', 'DC1150-2', 'L16', '2', '2235', '658', '945', '1150', '4500', '3d-horror-skull-hd-wallpapers-b7f4af-h900.jpg'),
('DC220-6', 'DC220-6', '27', '6', '425', '112', '180', '220', '990', 'IMG_3778.jpg'),
('DC224-6', 'DC224-6', 'GL2', 'as', '441', '113', '179', '224', '900', 'IMG_3778.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `de_support`
--

CREATE TABLE IF NOT EXISTS `de_support` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Cat` varchar(250) DEFAULT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `URL` text,
  `Size` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `de_support`
--

INSERT INTO `de_support` (`ID`, `Cat`, `Name`, `URL`, `Size`) VALUES
(1, 'delta-q', 'Invoice', 'Sales-invoice.pdf', '64.6 KB'),
(2, 'resource', 'Invoice #', 'Sales-invoice.pdf', '64.6 KB'),
(3, 'series', '# 946', 'Sales-invoice.pdf', '64.6 KB'),
(4, 'market', 'Invoice # 946', 'Sales-invoice.pdf', '64.6 KB');

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE IF NOT EXISTS `distributor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Region` varchar(200) DEFAULT NULL,
  `State` text,
  `City` text,
  `Address` text,
  `Phone` varchar(200) DEFAULT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `Web` text,
  `Image` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`ID`, `Region`, `State`, `City`, `Address`, `Phone`, `Name`, `Web`, `Image`) VALUES
(1, 'US', 'Demo State', 'Demo City', 'Its a demo address', '000-000-000000', 'Demo Name', '#', 'demo-logo.png'),
(2, 'Canada', 'Text', 'Me', 'Type New', '000-000-000000', 'Name Box', 'Address Box', 'demo-logo.png'),
(3, 'Asia', 'Give State', 'Type City', 'Location', '000-111-000111', 'Site Name', '#', 'demo-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `full_force`
--

CREATE TABLE IF NOT EXISTS `full_force` (
  `BID` varchar(20) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `IRefer` varchar(200) DEFAULT NULL,
  `Volt` int(11) DEFAULT NULL,
  `Cap25Min` varchar(200) DEFAULT NULL,
  `Cap75Min` varchar(200) DEFAULT NULL,
  `Cap5HR` varchar(200) DEFAULT NULL,
  `Cap20HR` varchar(200) DEFAULT NULL,
  `Cranking` varchar(200) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `full_force`
--

INSERT INTO `full_force` (`BID`, `Name`, `IRefer`, `Volt`, `Cap25Min`, `Cap75Min`, `Cap5HR`, `Cap20HR`, `Cranking`, `Image`) VALUES
('FFD100-12', 'FFD100-12', '27', 12, '185 @ 25 Amps', '45 @ 75 Amps', '79 @ 5 HR', '100 @ 20 HR', '650', 'FFD100-12'),
('FFD110-12', 'FFD110-12', '31', 12, '205 @ 25 Amps', '50 @ 75 Amps', '82 @ 5 HR', '110 @ 20 HR', '850', 'FFD110-12');

-- --------------------------------------------------------

--
-- Table structure for table `hc_series`
--

CREATE TABLE IF NOT EXISTS `hc_series` (
  `BID` varchar(20) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `IRefer` varchar(200) DEFAULT NULL,
  `Volt` varchar(200) DEFAULT NULL,
  `Cap75Min` varchar(200) DEFAULT NULL,
  `Cap5HR` varchar(200) DEFAULT NULL,
  `Cranking_PHCA` varchar(200) DEFAULT NULL,
  `Cranking_CCA` varchar(200) DEFAULT NULL,
  `Capacity_Min` varchar(200) DEFAULT NULL,
  `Capacity_AH` varchar(200) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hc_series`
--

INSERT INTO `hc_series` (`BID`, `Name`, `IRefer`, `Volt`, `Cap75Min`, `Cap5HR`, `Cranking_PHCA`, `Cranking_CCA`, `Capacity_Min`, `Capacity_AH`, `Image`) VALUES
('HC100', 'HC100', '27', '12', '40', '80', '1950', '965', '185', '100 ', 'HC100'),
('HC105', 'HC105', '', '', '', '', '2150', '1050', '242', '105', 'HC105');

-- --------------------------------------------------------

--
-- Table structure for table `ic650`
--

CREATE TABLE IF NOT EXISTS `ic650` (
  `CID` varchar(20) NOT NULL,
  `Model` varchar(20) DEFAULT NULL,
  `Usages` varchar(200) DEFAULT NULL,
  `Type` varchar(200) DEFAULT NULL,
  `Current` varchar(200) DEFAULT NULL,
  `Power` varchar(200) DEFAULT NULL,
  `Threshold` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic650`
--

INSERT INTO `ic650` (`CID`, `Model`, `Usages`, `Type`, `Current`, `Power`, `Threshold`) VALUES
('940-0001', '940-0001', ' -', 'Base', '27.1', '650', '1.2'),
('940-0021-A', '940-0021-A', '-', 'AWP Kit - Interlock', '27.1', '650', '1.2');

-- --------------------------------------------------------

--
-- Table structure for table `ic650_accessories`
--

CREATE TABLE IF NOT EXISTS `ic650_accessories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(200) DEFAULT NULL,
  `Description` text,
  `Image` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ic650_accessories`
--

INSERT INTO `ic650_accessories` (`ID`, `Type`, `Description`, `Image`) VALUES
(1, NULL, 'Clamp Breakaway DC Cord<br>\r\nSKU# 426-0062', '426-0062.png'),
(2, 'AC-Cord', 'AC-Cord 3M 16AWG IP66 IEC 320 SCHUKO<br>\r\nSKU# 475-0350', 'AC-Cord.png'),
(3, 'AC-Cord', 'AC-Cord 3M 16AWG IP66 IEC 320 NEMA 5-15<br>\r\nSKU# 475-0406', '475-0406.png');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Cat` varchar(20) DEFAULT NULL,
  `C_Name` varchar(250) DEFAULT NULL,
  `C_URL` text,
  `Description` text,
  `Description_URL` text,
  `Length` varchar(20) DEFAULT NULL,
  `Date` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`ID`, `Cat`, `C_Name`, `C_URL`, `Description`, `Description_URL`, `Length`, `Date`) VALUES
(1, '1st', 'Demo Name', '#', 'Details', '#', '11:11', '11-11-2222'),
(2, '2nd', 'Type yours', '#', 'Take It', '#', '22:22', '11-22-3333'),
(3, '3rd', '3rd entry', '#', 'I am here', '#', '33:33', '12-12-1212'),
(4, '4th', 'Do some', '#', 'Take me', '#', '44:44', '23-23-2323'),
(5, '1st', 'demo', '#', 'Demo', '#', '55:55', '12-12-1212');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Company` varchar(50) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Fax` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Message` text,
  `FeedBack` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `FirstName`, `LastName`, `Company`, `Position`, `Phone`, `Fax`, `Email`, `Message`, `FeedBack`) VALUES
(1, 'RaHuL', 'AsHu', 'LockersITSolution', 'MD', '01685282060', '', 'rahulashu@brainlockerltd.com', 'Its demo message on testing version 1.0', 'Everything'),
(2, 'RaHuL', 'AsHu', 'LockersITSolution', 'MD', '01685282060', '', 'rahulashu@brainlockerltd.com', 'Its demo message on testing version 2.0', 'OptOut'),
(3, 'RaHuL', 'AsHu', 'LockersITSolution', 'MD', '01685282060', '', 'rahulashu@brainlockerltd.com', 'Its demo message on testing version 3.0', 'Newsletters'),
(4, 'RaHuL', 'AsHu', 'LockersITSolution', 'MD', '01685282060', '', 'rahulashu@brainlockerltd.com', 'Its demo message on testing version 4.0', 'Announcements');

-- --------------------------------------------------------

--
-- Table structure for table `pbdetails`
--

CREATE TABLE IF NOT EXISTS `pbdetails` (
  `BID` varchar(20) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `CycCap` varchar(11) DEFAULT NULL,
  `ReCap25` varchar(11) DEFAULT NULL,
  `ReCap75` varchar(11) DEFAULT NULL,
  `FeatureImage` text,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pbdetails`
--

INSERT INTO `pbdetails` (`BID`, `Name`, `Title`, `CycCap`, `ReCap25`, `ReCap75`, `FeatureImage`) VALUES
('DC1150-2', 'DC1150-2', 'Deep-Cycle AGM Battery', '1150', '2235', '658', 'skull_symbol-wallpaper-1366x768.jpg'),
('DC220-6', 'DC220-6', 'Deep-Cycle AGM Battery', '220', '425', '112', 'Chrysanthemum.jpg'),
('FFD100-12', 'FFD100-12', 'Dual Purpose AGM Battery', '100', '185', '45', 'FFD100-12'),
('FFD110-12', 'FFD110-12', 'Dual Purpose AGM Battery', '110', '105', '50', 'FFD110-12'),
('HC100', 'HC100', 'High Capacity Dual Purpose AGM Battery', '100', '185', '40', 'HC100'),
('HC105', 'HC105', 'High Capacity Dual Purpose AGM Battery', '105', '242', '45', 'HC105');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE IF NOT EXISTS `product_order` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `DCharger` varchar(50) DEFAULT NULL,
  `Comment` text,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`OrderID`, `FirstName`, `LastName`, `Phone`, `Email`, `DCharger`, `Comment`) VALUES
(1, 'EBL', 'CARDHOLDER', '+8801685282060', 'ashutoshdebnath17@gmail.com', 'QuiQ', 'tttttttttttt');

-- --------------------------------------------------------

--
-- Table structure for table `quiq_accessories`
--

CREATE TABLE IF NOT EXISTS `quiq_accessories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(200) DEFAULT NULL,
  `Description` text,
  `Image` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quiq_accessories`
--

INSERT INTO `quiq_accessories` (`ID`, `Type`, `Description`, `Image`) VALUES
(1, 'AC-Cord', '10'' AC-Cord 14AWG IEC-320 NEMA 5-15P (North America)<br>\r\nSKU# AC Cord-10', 'AC Cord-10.png'),
(2, 'AC-Cord', '15'' AC-Cord 14AWG IEC-320 NEMA 5-15P (North America)<br>\r\nSKU# AC Cord-15', 'AC Cord-15.png');

-- --------------------------------------------------------

--
-- Table structure for table `quiq_all`
--

CREATE TABLE IF NOT EXISTS `quiq_all` (
  `CID` varchar(20) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `FeatureImage` text,
  `Title` varchar(250) DEFAULT NULL,
  `Usages` varchar(200) DEFAULT NULL,
  `Type` varchar(200) DEFAULT NULL,
  `ACIC` varchar(250) DEFAULT NULL COMMENT 'AC input connector',
  `ACIVR` varchar(250) DEFAULT NULL COMMENT 'AC Input Voltage Range',
  `ACNIV` varchar(250) DEFAULT NULL COMMENT 'Nominal AC Input Voltage',
  `ACIF` varchar(250) DEFAULT NULL COMMENT 'AC Input Frequency',
  `ACICn` varchar(250) DEFAULT NULL COMMENT 'AC Input Current (Nominal)',
  `ACICm` varchar(250) DEFAULT NULL COMMENT 'AC Input Current (Max)',
  `DCNOV` varchar(250) DEFAULT NULL COMMENT 'Nominal DC Output Voltage',
  `DCMOV` varchar(250) DEFAULT NULL COMMENT 'Maximum DC Output Voltage',
  `DCMOC` varchar(250) DEFAULT NULL COMMENT 'Maximum DC Output Current',
  `DCMOP` varchar(250) DEFAULT NULL COMMENT 'Maximum DC Output Power',
  `DCDDR` varchar(250) DEFAULT NULL COMMENT 'Deep Discharge Recovery (minimum voltage)',
  `DCMIC` varchar(250) DEFAULT NULL COMMENT 'Maximum Interlock Current',
  `DCBT` varchar(250) DEFAULT NULL COMMENT 'Battery Type',
  `DCRP` varchar(250) DEFAULT NULL COMMENT 'Reverse Polarity',
  `DCSC` varchar(250) DEFAULT NULL COMMENT 'Short Circuit',
  `DCOC` varchar(250) DEFAULT NULL COMMENT 'DC Output Connector',
  `MEDi` varchar(250) DEFAULT NULL COMMENT 'Dimensions',
  `MEWe` varchar(250) DEFAULT NULL COMMENT 'Weight',
  `ENEn` varchar(250) DEFAULT NULL COMMENT 'Enclosure',
  `ENOT` varchar(250) DEFAULT NULL COMMENT 'Operating Temperature',
  `ENST` varchar(250) DEFAULT NULL COMMENT 'Storage Temperature',
  `RES` varchar(250) DEFAULT NULL COMMENT 'Safety',
  `REE` varchar(250) DEFAULT NULL COMMENT 'Emissions',
  `REI` varchar(250) DEFAULT NULL COMMENT 'Immunity',
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiq_all`
--

INSERT INTO `quiq_all` (`CID`, `Name`, `FeatureImage`, `Title`, `Usages`, `Type`, `ACIC`, `ACIVR`, `ACNIV`, `ACIF`, `ACICn`, `ACICm`, `DCNOV`, `DCMOV`, `DCMOC`, `DCMOP`, `DCDDR`, `DCMIC`, `DCBT`, `DCRP`, `DCSC`, `DCOC`, `MEDi`, `MEWe`, `ENEn`, `ENOT`, `ENST`, `RES`, `REE`, `REI`) VALUES
('913-2400', '913-2400', '913-2400.png', 'Standard Charger', 'Off-Board', 'Standard', 'IEC320/C14 Universal AC Input (World Charger)', '85 - 265 VAC (universal all models)', '120 VAC / 230 VAC rms', '45 - 65 Hz', '10 A rms @ 120 VAC / 5 A rms @ 230 VAC', '12 A @ 120 VAC / 6A @ 230VAC', '24 V', '34 V', '25 A', '695 W', '6 V', '1 A', 'Lead acid (Wet / AGM / GEL), lithium ion', 'Electronic Protection with Auto-Reset', 'Electronic current limit', '2.5m (8.2 ft) Anderson SB50 RED<br>*Custom Cable Configurations Available (SB175, SBX75x, etc.)', '28 x 24.6 x 11cm (11.0 x 9.7 x 4.3 inch)', '< 5kg (< 11.0lbs)', 'IP66 (NEMA4)', '-30Â°C t+50Â°C (-22Â°F t122Â°F), Derated >30Â°C (86Â°F), <0Â°C (32Â°F)', '-40Â°C t+70Â°C (-40Â°F t158Â°F)', 'UL approved tUL1564 3rd Ed. and CSA 107.2, EN 60335-1/2-29. Designed tmeet UL2202 1st Ed.', 'FCC Part 15 / ICES 003 Class A, EN 55011', 'EN 61000-3-2, EN 61000-3-3, EN61000-4-2/-3/-4/-5/-6/-11'),
('913-2400-175 ', '913-2400-175 ', '913-2400-175.png', 'Standard Charger', 'Off-Board', 'Standard', 'IEC320/C14 Universal AC Input (World Charger)', '85 - 265 VAC (universal all models)', '120 VAC / 230 VAC rms', '45 - 65 Hz', '10 A rms @ 120 VAC / 5 A rms @ 230 VAC', '12 A @ 120 VAC / 6A @ 230VAC', '24 V', '34 V', '25 A', '695 W', '6 V', '1 A', 'Lead acid (Wet / AGM / GEL), lithium ion', 'Electronic Protection with Auto-Reset', 'Electronic current limit', '2.5m (8.2 ft) Anderson SB175 RED<br>*Custom Cable Configurations Available (SB175, SBX75x, etc.)', '28 x 24.6 x 11cm (11.0 x 9.7 x 4.3', '< 5kg (< 11.0lbs)', 'IP66 (NEMA4)', '-30Â°C t+50Â°C (-22Â°F t122Â°F), Derated >30Â°C (86Â°F), <0Â°C (32Â°F)', '-40Â°C t+70Â°C (-40Â°F t158Â°F)', 'UL approved tUL1564 3rd Ed. and CSA 107.2, EN 60335-1/2-29. Designed tmeet UL2202 1st Ed.', 'FCC Part 15 / ICES 003 Class A, EN 55011', 'EN 61000-3-2, EN 61000-3-3, EN61000-4-2/-3/-4/-5/-6/-11');

-- --------------------------------------------------------

--
-- Table structure for table `sitedetails`
--

CREATE TABLE IF NOT EXISTS `sitedetails` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SiteName` varchar(100) DEFAULT NULL,
  `SiteTitle` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `Zip` varchar(10) DEFAULT NULL,
  `Phone1` varchar(20) DEFAULT NULL,
  `Phone2` varchar(20) DEFAULT NULL,
  `Phone3` varchar(20) DEFAULT NULL,
  `Email1` varchar(250) DEFAULT NULL,
  `Email2` varchar(250) DEFAULT NULL,
  `FaceBook` varchar(100) DEFAULT NULL,
  `YouTube` varchar(100) DEFAULT NULL,
  `GooglePlus` varchar(100) DEFAULT NULL,
  `Twitter` varchar(100) DEFAULT NULL,
  `Instagram` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sitedetails`
--

INSERT INTO `sitedetails` (`ID`, `SiteName`, `SiteTitle`, `Address`, `City`, `State`, `Zip`, `Phone1`, `Phone2`, `Phone3`, `Email1`, `Email2`, `FaceBook`, `YouTube`, `GooglePlus`, `Twitter`, `Instagram`, `linkedin`) VALUES
(1, '1 Battery', 'Maintenance Free AGM Brtteries', 'Road #17, KUKU 2 ', 'Dhaka', 'Dhaka', '1229', '000-000-000000', '000-000-000000', NULL, 'info@1battery.com', 'admin@1battery.com', '#', '#', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` varchar(10) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `State` varchar(20) DEFAULT NULL,
  `Zip` int(4) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL,
  `ComName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`,`UserID`,`Email`,`Phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `UserID`, `FName`, `LName`, `Address`, `City`, `State`, `Zip`, `Country`, `ComName`, `Email`, `Password`, `Phone`) VALUES
(1, 'admin', 'First Name', 'Last Name', 'Your Address Line', 'City', 'State', 3650, 'Bangladesh', '1 Battery HK', 'admin@1battery.com', '1111', '111-222-333444');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

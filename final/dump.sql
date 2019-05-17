-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 17, 2019 at 03:35 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `CIT336final`
--

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

CREATE TABLE `coins` (
  `coinAbbreviation` varchar(12) NOT NULL,
  `coinName` varchar(255) NOT NULL,
  `coinLogo` varchar(255) NOT NULL,
  `coinInfo` varchar(255) NOT NULL,
  `coinWebsite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coins`
--

INSERT INTO `coins` (`coinAbbreviation`, `coinName`, `coinLogo`, `coinInfo`, `coinWebsite`) VALUES
('BTC', 'Bitcoin', 'images/bitcoin.png', 'The world’s first cryptocurrency, Bitcoin is stored and exchanged securely on the internet through a digital ledger known as a blockchain. Bitcoins are divisible into smaller units known as satoshis — each satoshi is worth 0.00000001 bitcoin.', 'https://bitcoin.org/'),
('ETH', 'Ethereum', 'images/ethereum.png', 'Ethereum is both a cryptocurrency and a decentralized computing platform. Developers can use the platform to create decentralized applications and issue new crypto assets, known as Ethereum tokens.', 'https://ethereum.org/'),
('LTC', 'Litecoin', 'images/litecoin.png', 'Litecoin is a cryptocurrency that uses a faster payment confirmation schedule and a different cryptographic algorithm than Bitcoin.', 'https://litecoin.org/'),
('ETC', 'Ethereum Classic', 'images/ethereum-classic.png', 'Ethereum is both a cryptocurrency and a decentralized computing platform. Developers can use the platform to create decentralized applications and issue new crypto assets, known as Ethereum tokens.', 'https://ethereumclassic.org/'),
('DAI', 'Dai', 'images/dai.png', 'Dai is a decentralized stablecoin running on Ethereum that attempts to maintain a value of US$1.00. Unlike centralized stablecoins, Dai isn’t backed by US dollars in a bank account. Instead, it’s backed by collateral on the Maker platform.', 'http://www.makerdao.com/'),
('XLM', 'Stellar', 'images/stellar.png', 'Stellar’s cryptocurrency, the Stellar Lumen (XLM), powers the Stellar payment network. Stellar aims to connect banks, payment systems, and individuals quickly and reliably.', 'https://www.stellar.org/'),
('REP', 'Augur', 'images/augur.png', 'Augur’s Reputation token (REP) is an Ethereum token designed for reporting and disputing the outcome of events on online prediction markets. Reporters are rewarded for reporting the outcome of events correctly.', 'http://www.augur.net/'),
('ZEC', 'Zcash', 'images/zcash.png', 'Zcash is a cryptocurrency that offers two types of addresses: transparent addresses that are publicly visible on the Zcash blockchain and shielded addresses that are more private.', 'https://z.cash/');

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 11:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rxpressdb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_all_products` ()   BEGIN
select product.ProductID, concat(product.BrandName, " " ,product.DosageStrength) as NameStrength, product.Price, product.in_stock, manufacturer.ManufacturerName from product
left join manufacturer
on product.ProductID = manufacturer.ManufacturerID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_cart_details` ()   BEGIN
select product.BrandName, product.GenericName, product.DosageStrength, product.DosageForm, product.Price,product.in_stock, product.product_img
from product;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_new_medicine_parameters` (IN `NewBrandName` VARCHAR(255), `NewGenericName` VARCHAR(255), `NewDosageStrength` VARCHAR(50), `NewDosageForm` VARCHAR(50), `NewDrugAdministration` VARCHAR(50), `NewStockQuantity` INT, `NewPrice` DECIMAL(10,2), `NewManufacturerID` INT, `NewCategoryID` INT, `Newin_stock` BIT(1))   BEGIN
insert into product 
(BrandName,
GenericName,
DosageStrength,
DosageForm,
DrugAdministration,
StockQuantity,
Price,
ManufacturerID,
CategoryID, 
in_stock)
values (
NewBrandName,
NewGenericName,
NewDosageStrength,
NewDosageForm,
NewDrugAdministration,
NewStockQuantity,
NewPrice, 
NewManufacturerID,
NewCategoryID,
Newin_stock);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_product_retrieved` ()   BEGIN
select product.ProductID, product.BrandName, product.GenericName, product.DosageStrength, product.DosageForm, product.DrugAdministration, product.StockQuantity, product.Price, product.in_stock, product.product_img, manufacturer.ManufacturerName, category.CategoryName
from product
left join manufacturer on product.ProductID = manufacturer.ManufacturerID
left join category on category.CategoryID = manufacturer.ManufacturerID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_sort_category` ()   BEGIN
select product.ProductID, category.CategoryID 
from product 
left join category
on product.ProductID = category.CategoryID 
where category.CategoryName like 'Cardiovascular System';

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_sort_manufacturer` ()   BEGIN
select product.ProductID, manufacturer.ManufacturerID
from product 
left join manufacturer
on product.ProductID = manufacturer.ManufacturerID
where ManufacturerName like 'Sanofi Pasteur Inc.';
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_medicine` ()   BEGIN
UPDATE product
SET BrandName = 'agik 3',
GenericName = 'john lloyd',
DosageStrength = '250mg',
DosageForm = 'syrup',
DrugAdministration = 'anal',
StockQuantity = '2',
Price = '55'
WHERE ProductID = 52;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_medicine_parameters` (IN `NewProductID` INT, `NewBrandName` VARCHAR(255), `NewGenericName` VARCHAR(255), `NewDosageStrength` VARCHAR(50), `NewDosageForm` VARCHAR(50), `NewDrugAdministration` VARCHAR(50), `NewStockQuantity` INT, `NewPrice` DECIMAL(10,2), `NewManufacturerID` INT, `NewCategoryID` INT, `Newin_stock` BIT(1))   BEGIN

update product

set
ProductID = NewProductID,
BrandName = NewBrandName,
GenericName = NewGenericName,
DosageStrength = NewDosageStrength,
DosageForm = NewDosageForm,
DrugAdministration = NewDrugAdministration,
StockQuantity = NewStockQuantity,
Price = NewPrice,
ManufacturerID = NewManufacturerID,
CategoryID = NewCategoryID, 
in_stock = Newin_stock

where ProductID = NewProductID;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartID` int(11) NOT NULL,
  `Total` decimal(10,2) NOT NULL,
  `CartCustomer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartID`, `Total`, `CartCustomer`) VALUES
(1, '30384.00', 1),
(2, '97524.00', 2),
(3, '17187.00', 3),
(4, '2847.00', 4),
(5, '6417.00', 5),
(6, '245980.00', 6),
(7, '236800.00', 7),
(8, '139656.00', 8),
(9, '24414.00', 9),
(10, '40152.00', 10),
(11, '171003.00', 11),
(12, '221540.00', 12),
(13, '87423.00', 13),
(14, '263016.00', 14),
(15, '118794.00', 15),
(16, '42444.00', 16),
(17, '112200.00', 17),
(18, '17952.00', 18),
(19, '84558.00', 19),
(20, '412137.00', 20),
(21, '199234.00', 21),
(22, '16863.00', 22),
(23, '37558.00', 23),
(24, '123585.00', 24),
(25, '147532.00', 25),
(26, '329656.00', 26),
(27, '3124.00', 27),
(28, '122076.00', 28),
(29, '45682.00', 29),
(30, '221540.00', 30),
(31, '118746.00', 31),
(32, '87672.00', 32),
(33, '436536.00', 33),
(34, '100232.00', 34),
(35, '222105.00', 35),
(36, '143514.00', 36),
(37, '2262.00', 37),
(38, '161721.00', 38),
(39, '146376.00', 39),
(40, '58282.00', 40),
(41, '8088.00', 41),
(42, '130968.00', 42),
(43, '74592.00', 43),
(44, '153765.00', 44),
(45, '6138.00', 45),
(46, '347886.00', 46),
(47, '7440.00', 47),
(48, '205947.00', 48),
(49, '2894.00', 49),
(50, '190652.00', 50);

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `CartID` int(11) NOT NULL,
  `CartProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`CartID`, `CartProductID`, `Quantity`, `Subtotal`) VALUES
(1, 38, 72, '30384.00'),
(2, 4, 21, '97524.00'),
(3, 33, 51, '17187.00'),
(4, 37, 73, '2847.00'),
(5, 28, 69, '6417.00'),
(6, 31, 70, '245980.00'),
(7, 40, 100, '236800.00'),
(8, 19, 92, '139656.00'),
(9, 18, 78, '24414.00'),
(10, 17, 42, '40152.00'),
(11, 8, 51, '171003.00'),
(12, 36, 53, '221540.00'),
(13, 47, 21, '87423.00'),
(14, 35, 72, '263016.00'),
(15, 44, 78, '118794.00'),
(16, 13, 36, '42444.00'),
(17, 2, 75, '112200.00'),
(18, 2, 12, '17952.00'),
(19, 16, 51, '84558.00'),
(20, 47, 99, '412137.00'),
(21, 25, 98, '199234.00'),
(22, 6, 33, '16863.00'),
(23, 38, 89, '37558.00'),
(24, 45, 35, '123585.00'),
(25, 8, 44, '147532.00'),
(26, 27, 89, '329656.00'),
(27, 9, 22, '3124.00'),
(28, 10, 36, '122076.00'),
(29, 31, 13, '45682.00'),
(30, 36, 53, '221540.00'),
(31, 22, 27, '118746.00'),
(32, 35, 24, '87672.00'),
(33, 4, 94, '436536.00'),
(34, 2, 67, '100232.00'),
(35, 46, 65, '222105.00'),
(36, 40, 42, '143514.00'),
(37, 37, 58, '2262.00'),
(38, 50, 63, '161721.00'),
(39, 25, 72, '146376.00'),
(40, 47, 14, '58282.00'),
(41, 33, 24, '8088.00'),
(42, 39, 68, '130968.00'),
(44, 46, 45, '153765.00'),
(45, 28, 66, '6138.00'),
(46, 31, 99, '347886.00'),
(47, 28, 80, '7440.00'),
(48, 21, 63, '205947.00'),
(49, 48, 1, '2894.00'),
(50, 7, 77, '190652.00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`) VALUES
(1, 'Allergies'),
(2, 'Cardiovascular System'),
(3, 'Digestive System'),
(4, 'Endocrine'),
(5, 'Eye, Ear, Nose, Throat'),
(6, 'Genito-urinary System'),
(7, 'Infection & Infestation'),
(8, 'Integumentary System'),
(9, 'Musculoskeletal'),
(10, 'Nervous System'),
(11, 'Nutrition'),
(12, 'Respiratory System'),
(13, 'ND - Health & Medicine'),
(14, 'ND - Personal Care');

--
-- Triggers `category`
--
DELIMITER $$
CREATE TRIGGER `category_AFTER_INSERT` AFTER INSERT ON `category` FOR EACH ROW BEGIN

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cond`
--

CREATE TABLE `cond` (
  `ConditionID` int(11) NOT NULL,
  `ConditionName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cond`
--

INSERT INTO `cond` (`ConditionID`, `ConditionName`, `CategoryID`) VALUES
(1, 'Anaphylaxis', 13),
(2, 'Angina', 11),
(3, 'Hyperlipidaemia', 10),
(4, 'Hypertension', 10),
(5, 'Thromboembolic Disorder', 4),
(6, 'Antispasmodic & Flatulence', 1),
(7, 'Constipation', 11),
(8, 'Diarrhea', 4),
(9, 'Peptic Ulcer', 2),
(10, 'Diabetes', 14),
(11, 'Kidney Stones', 8),
(12, 'Steroids', 2),
(13, 'Thyroid Disorders', 7),
(14, 'Eye Care', 10),
(15, 'Nasal Care', 3),
(16, 'Throat & Oral Care', 9),
(17, 'BPH, Urinary Retention', 1),
(18, 'Diuretics', 7),
(19, 'Bacterial Infection', 3),
(20, 'Protozoal and Parasitic Infestation', 3),
(21, 'Tuberculosis', 7),
(22, 'Viral Infection', 13),
(23, 'Anti-fungal', 13),
(24, 'Bacterial Infections', 3),
(25, 'Burn Treatment', 8),
(26, 'Inflammatory skin conditions', 3),
(27, 'Gout', 8),
(28, 'Muscle Pain & Inflammation', 4),
(29, 'Pain, Fever', 2),
(30, 'Epilepsy', 11),
(31, 'Nausea, Vomiting', 13),
(32, 'Psychostimulant/ Nootropic', 7),
(33, 'Appetite Stimulant', 3),
(34, 'Food Supplements', 12),
(35, 'Vitamins', 9),
(36, 'Asthma', 10),
(37, 'Cold & Flu', 9),
(38, 'Dry Cough', 13),
(39, 'Productive Cough', 4),
(40, 'First Aid', 6),
(41, 'Cold & Flu', 14),
(42, 'Dry Cough', 12),
(43, 'Cold & Flu', 11),
(44, 'Dry Cough', 1),
(45, 'Vitamins', 7),
(46, 'Cold & Flu', 14),
(47, 'Vitamins', 9),
(48, 'Vitamins', 1),
(49, 'Vitamins', 13),
(50, 'Dry Cough', 6);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `ManufacturerID` int(11) NOT NULL,
  `ManufacturerName` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`ManufacturerID`, `ManufacturerName`) VALUES
(1, 'Accra-Pac, Inc.'),
(2, 'Otsuka America Pharmaceutical, Inc.'),
(3, 'Mylan Institutional Inc.'),
(4, 'Lake Erie Medical DBA Quality Care Products LLC'),
(5, 'Cantrell Drug Company'),
(6, 'DrsOnlyLab LLC'),
(7, 'Sanofi Pasteur Inc.'),
(8, 'Cardinal Health'),
(9, 'Lake Erie Medical DBA Quality Care Products LLC'),
(10, 'DZA Brands LLC'),
(11, 'ORGANIC & SUSTAINABLE BEAUTY'),
(12, 'Best Choice (Valu Merchandisers Company)'),
(13, 'Conney Safety Products, LLC'),
(14, 'Melaleuca, Inc.'),
(15, 'Upsher-Smith Laboratories, Inc.'),
(16, 'Rebel Distributors Corp'),
(17, 'Baxter Healthcare Corporation'),
(18, 'Roxane Laboratories, Inc'),
(19, 'Water-Jel Technologies'),
(20, 'Northwind Pharmaceuticals'),
(21, 'Dolgencorp, Inc. (DOLLAR GENERAL)'),
(22, 'Sunovion'),
(23, 'Hospira, Inc.'),
(24, 'American Sales Company'),
(25, 'Bryant Ranch Prepack'),
(26, 'REMEDYREPACK INC.'),
(27, 'State of Florida DOH Central Pharmacy'),
(28, 'Cardinal Health'),
(29, 'Physicians Total Care, Inc.'),
(30, 'Zydus Pharmaceuticals (USA) Inc.'),
(31, 'Cardinal Health'),
(32, 'BioActive Nutritional, Inc.'),
(33, 'Jubilant HollisterStier LLC'),
(34, 'NATURE REPUBLIC CO., LTD.'),
(35, 'Rite Aid'),
(36, 'McKesson (Health Mart)'),
(37, 'Actavis Pharma, Inc.'),
(38, 'McKesson Packaging Services a business unit of McKesson Corproration'),
(39, 'Wyeth Consumer Healthcare'),
(40, 'Rebel Distributors Corp'),
(41, 'Bath & Body Works, Inc.'),
(42, 'Nelco Laboratories, Inc.'),
(43, 'Butler Animal Health Supply'),
(44, 'Bryant Ranch Prepack'),
(45, 'Proficient Rx LP'),
(46, 'REMEDYREPACK INC.'),
(47, 'Eagle Pharmaceuticals, Inc.'),
(48, 'Mylan Pharmaceuticals Inc.'),
(49, 'Bryant Ranch Prepack'),
(50, 'Physicians Total Care, Inc.');

-- --------------------------------------------------------

--
-- Table structure for table `ordercart`
--

CREATE TABLE `ordercart` (
  `OrderID` int(11) NOT NULL,
  `OrderDate` date NOT NULL,
  `CartID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ordercart`
--

INSERT INTO `ordercart` (`OrderID`, `OrderDate`, `CartID`) VALUES
(1, '2019-01-11', 1),
(2, '2019-01-12', 2),
(3, '2021-01-28', 6),
(4, '2019-05-08', 4),
(5, '2019-01-26', 6),
(6, '2020-02-04', 40),
(7, '2019-08-10', 39),
(8, '2019-07-06', 8),
(9, '2019-08-08', 9),
(10, '2020-10-25', 31),
(11, '2018-12-18', 47),
(12, '2019-08-10', 12),
(13, '2020-02-19', 6),
(14, '2020-09-14', 48),
(15, '2019-09-11', 15),
(16, '2019-09-11', 16),
(17, '2019-09-11', 17),
(18, '2020-10-09', 48),
(19, '2020-10-08', 22),
(20, '2019-10-19', 9),
(21, '2020-11-05', 6),
(22, '2019-04-09', 1),
(23, '2019-08-04', 22),
(24, '2019-02-15', 35),
(25, '2019-01-12', 9),
(26, '2020-04-08', 26),
(27, '2020-07-11', 27),
(28, '2020-07-12', 28),
(29, '2020-08-11', 29),
(30, '2018-12-08', 18),
(31, '2021-07-24', 43),
(32, '2020-11-12', 32),
(33, '2019-04-01', 44),
(34, '2019-09-22', 38),
(35, '2021-10-24', 28),
(36, '2019-11-23', 46),
(37, '2021-06-28', 36),
(38, '2019-06-22', 6),
(39, '2021-02-09', 39),
(40, '2021-07-05', 40),
(41, '2020-05-01', 10),
(42, '2019-09-30', 22),
(43, '2021-09-11', 43),
(44, '2021-09-12', 44),
(45, '2021-09-13', 45),
(46, '2019-12-20', 43),
(47, '2022-01-25', 47),
(48, '2021-04-15', 24),
(49, '2022-01-26', 49),
(50, '2019-09-15', 46),
(51, '2019-01-26', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderdetails`
-- (See below for the actual view)
--
CREATE TABLE `orderdetails` (
`OrderID` int(11)
,`OrderDate` date
,`Username` varchar(30)
,`Subtotal` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderdetails_by_orderid`
-- (See below for the actual view)
--
CREATE TABLE `orderdetails_by_orderid` (
`OrderID` int(11)
,`OrderDate` date
,`Username` varchar(30)
,`Subtotal` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderdetails_by_price`
-- (See below for the actual view)
--
CREATE TABLE `orderdetails_by_price` (
`OrderID` int(11)
,`OrderDate` date
,`Username` varchar(30)
,`Subtotal` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderdetails_by_username`
-- (See below for the actual view)
--
CREATE TABLE `orderdetails_by_username` (
`OrderID` int(11)
,`OrderDate` date
,`Username` varchar(30)
,`Subtotal` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `BrandName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GenericName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DosageStrength` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DosageForm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DrugAdministration` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StockQuantity` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `ManufacturerID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Is_Deleted` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `BrandName`, `GenericName`, `DosageStrength`, `DosageForm`, `DrugAdministration`, `StockQuantity`, `Price`, `ManufacturerID`, `CategoryID`, `Is_Deleted`) VALUES
(1, 'sadfa', 'dsf', 'sdaf', 'sadfasf', 'dsfsdf', 4, '2.00', 6, 4, b'0'),
(2, 'ReVive Fermitif Neck Renewal SPF 15', 'AVOBENZONE, OCTINOXATE, OCTOCRYLENE, OXYBENZONE', '1g', 'syrup', 'Topical', 89, '1496.00', 2, 2, b'0'),
(3, 'miconazole 1', 'Miconazole nitrate', '500mg', 'inhaler', 'Rectal', 80, '3883.00', 3, 3, b'0'),
(4, 'Childrens mucus relief', 'dextromethorphan HBr, guaifenesin, phenylephrine HCl', '250mg', 'syrup', 'Topical', 1, '4644.00', 4, 4, b'0'),
(5, 'Etoposide', 'ETOPOSIDE', '1g', 'cream', 'Oral route', 67, '1188.00', 5, 5, b'0'),
(6, 'ZALTRAP', 'ziv-aflibercept', '250mg', 'tablet', 'Topical', 38, '511.00', 6, 6, b'0'),
(7, 'RED GINSENG FERMENTED SUN', 'OCTINOXATE, ZINC OXIDE, TITANIUM DIOXIDE', '1g', 'inhaler', 'Topical', 92, '2476.00', 7, 7, b'0'),
(8, 'sunmark ibuprofen', 'ibuprofen', '500mg', 'tablet', 'Rectal', 68, '3353.00', 8, 8, b'0'),
(9, 'Levothyroxine Sodium', 'Levothyroxine Sodium', '250mg', 'syrup', 'Topical', 66, '142.00', 9, 9, b'0'),
(10, 'Lidocaine Hydrochloride', 'Lidocaine Hydrochloride', '1g', 'tablet', 'Injection', 19, '3391.00', 10, 10, b'0'),
(11, 'COREG', 'carvedilol phosphate', '500mg', 'inhaler', 'Rectal', 69, '4741.00', 11, 11, b'0'),
(12, 'ANC Neverpain External Analgesic', 'MENTHOL', '1g', 'syrup', 'Oral route', 48, '4840.00', 12, 12, b'0'),
(13, 'Good Neighbor Pharmacy', 'Clotrimazole', '500mg', 'tablet', 'Injection', 42, '1179.00', 13, 13, b'0'),
(14, 'Mercurialis 3', 'Mercurialis 3', '1g', 'cream', 'Topical', 95, '2914.00', 14, 14, b'0'),
(15, 'Gemfibrozil', 'Gemfibrozil', '250mg', 'tablet', 'Topical', 3, '336.00', 15, 15, b'0'),
(16, 'Iferex 150 Forte', 'Iron, Cyanocobalamin and Folic Acid', '1g', 'tablet', 'Injection', 71, '1658.00', 16, 16, b'0'),
(17, 'Daily Moisturizing', 'Daily Moistruizing', '500mg', 'syrup', 'Rectal', 44, '956.00', 17, 17, b'0'),
(18, 'Irbesartan', 'Irbesartan', '1g', 'cream', 'Topical', 71, '313.00', 18, 18, b'0'),
(19, 'Acetaminophen', 'Acetaminophen', '500mg', 'inhaler', 'Injection', 13, '1518.00', 19, 19, b'0'),
(20, 'CLE DE PEAU BEAUTE PW FOUNDATION s', 'Octinoxate and Titanium dioxide', '1g', 'tablet', 'Topical', 39, '531.00', 20, 20, b'0'),
(21, 'Nevi (Mole) Control', 'CALENDULA OFFICINALIS FLOWERING TOP, Phytolacca Americana Root, Silicon Dioxide, and Thuja occidentalis Leafy Twig', '250mg', 'inhaler', 'Oral route', 80, '3269.00', 21, 21, b'0'),
(22, 'Carisoprodol', 'Carisoprodol', '1g', 'tablet', 'Injection', 82, '4398.00', 22, 22, b'0'),
(23, 'Hydrochlorothiazide', 'Hydrochlorothiazide', '1g', 'inhaler', 'Rectal', 57, '3082.00', 23, 23, b'0'),
(24, 'Fluoxetine', 'Fluoxetine Hydrochloride', '500mg', 'tablet', 'Injection', 25, '1355.00', 24, 24, b'0'),
(25, 'Bellagio Sunscreen SPF 15', 'Octinoxate, Avobenzone, and Octisalate', '250mg', 'tablet', 'Oral route', 41, '2033.00', 25, 25, b'0'),
(26, 'Instant Hand Sanitizer', 'alcohol', '1g', 'syrup', 'Topical', 81, '3096.00', 26, 26, b'0'),
(27, 'biochemistry PAIN RELIEF FOOT ACTIVE', 'BENZYL ALCOHOL, LIDOCAINE HYDROCHLORIDE', '1g', 'cream', 'Injection', 94, '3704.00', 27, 27, b'0'),
(28, 'Tula Tantrum Tamer', 'Chamomilla, Cina', '1g', 'tablet', 'Topical', 31, '93.00', 28, 28, b'0'),
(29, 'Marcaine', 'Bupivacaine Hydrochloride', '250mg', 'tablet', 'Inhalational', 29, '3607.00', 29, 29, b'0'),
(30, 'Baclofen', 'Baclofen', '1g', 'ointment', 'Oral route', 43, '1699.00', 30, 30, b'0'),
(31, 'Pleo Mucedo', 'rhizopus stolonifer', '500mg', 'ointment', 'Inhalational', 48, '3514.00', 31, 31, b'0'),
(32, 'Wal Zyr', 'cetirizine Hydrochloride', '1g', 'cream', 'Inhalational', 14, '337.00', 33, 33, b'0'),
(33, 'CELTIS OCCIDENTALIS POLLEN', 'Hackberry', '1g', 'syrup', 'Rectal', 3, '2230.00', 34, 34, b'0'),
(34, 'flormar Foundation Sunscreen Broad Spectrum SPF 20 LF07 IVORY', 'OCTINOXATE', '500mg', 'tablet', 'Topical', 25, '3653.00', 35, 35, b'0'),
(35, 'DELFLEX', 'Dextrose Monohydrate, Sodium Chloride, Calcium Chloride, Magnesium Chloride, Sodium Lactate', '250mg', 'inhaler', 'Injection', 96, '4180.00', 36, 36, b'0'),
(36, 'Parsley', 'Parsley', '1g', 'inhaler', 'Injection', 19, '39.00', 37, 37, b'0'),
(37, 'Bald Cypress', 'Bald Cypress', '500mg', 'tablet', 'Topical', 37, '422.00', 38, 38, b'0'),
(38, 'koala pals', 'Sodium Fluoride', '500mg', 'cream', 'Injection', 47, '1926.00', 39, 39, b'0'),
(39, 'Aquafresh', 'sodium monofluorophosphate', '250mg', 'tablet', 'Oral route', 6, '2368.00', 40, 40, b'0'),
(40, 'lisinopril', 'lisinopril', '500mg', 'ointment', 'Injection', 23, '3931.00', 41, 41, b'0'),
(41, 'Gabapentin', 'Gabapentin', '1g', 'tablet', 'Topical', 95, '2053.00', 42, 42, b'0'),
(42, 'Pollens - Weeds and Garden Plants, Plantain, English Plantago lanceolata', 'Plantain, English Plantago lanceolata', '250mg', 'tablet', 'Injection', 48, '4398.00', 43, 43, b'0'),
(43, 'Fluvastatin Sodium', 'fluvastatin', '1g', 'tablet', 'Oral route', 24, '1523.00', 44, 44, b'0'),
(44, 'Allopurinol', 'allopurinol', '500mg', 'cream', 'Topical', 100, '3531.00', 45, 45, b'0'),
(45, 'Aleve', 'NAPROXEN SODIUM', '1g', 'tablet', 'Injection', 95, '3417.00', 46, 46, b'0'),
(46, 'PEGINTRON', 'peginterferon alfa-2b', '250mg', 'ointment', 'Injection', 28, '4163.00', 47, 47, b'0'),
(47, 'SOMA Atocell', 'TRAMETES VERSICOLOR FRUITING BODY', '500mg', 'tablet', 'Oral route', 70, '2894.00', 48, 48, b'0'),
(48, 'Detrol LA', 'tolterodine tartrate', '250mg', 'ointment', 'Topical', 24, '4771.00', 49, 49, b'0'),
(49, 'Cefaclor', 'Cefaclor', '250mg', 'tablet', 'Topical', 58, '2567.00', 50, 50, b'0'),
(50, 'paracetamol', 'john lloyd', '250mg', 'tablet', 'oral route', 3, '50.00', 6, 3, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FirstName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_pw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Username`, `FirstName`, `LastName`, `User_pw`, `Is_admin`) VALUES
(1, 'jmcshea0', 'Jemima', 'McShea', 'f8AFUlA', 0),
(2, 'rdacke1', 'Ryon', 'Dacke', '0WeJuoG', 0),
(3, 'btinniswood2', 'Berk', 'Tinniswood', 'MXt32h', 0),
(4, 'rbyard3', 'Ricki', 'Byard', 'NZgULo6', 0),
(5, 'jferens4', 'Junina', 'Ferens', '3ZCyB3Dx', 0),
(6, 'kbertot5', 'Karlee', 'Bertot', 'HsWljUL', 0),
(7, 'aloude6', 'Arlinda', 'Loude', 'W12wXrIsoF', 0),
(8, 'glamplugh7', 'Gary', 'Lamplugh', 'VvpxVZ47el', 0),
(9, 'asleford8', 'Abdel', 'Sleford', 'Zsnja2atae', 0),
(10, 'jcusworth9', 'Jeri', 'Cusworth', 'vosTyUw', 0),
(11, 'klabounea', 'Ki', 'Laboune', '98Mqn6hpAPU', 0),
(12, 'bboonb', 'Bourke', 'Boon', 'GtMeWmyTY7kU', 0),
(13, 'sphilbrookc', 'Sabina', 'Philbrook', 'ztxVlHZXzU4F', 0),
(14, 'ngrimsdaled', 'Nolly', 'Grimsdale', '9OyY7Y', 0),
(15, 'adolline', 'Aidan', 'Dollin', 'rUmFHz1nl', 0),
(16, 'cbernaldof', 'Chuck', 'Bernaldo', 'MXYgKlv6mV', 0),
(17, 'cfyndong', 'Cesare', 'Fyndon', 'nbZ5n9O6m6', 0),
(18, 'tmullarkeyh', 'Terrell', 'Mullarkey', 'hUKYEr', 0),
(19, 'amcdarmidi', 'Angelique', 'McDarmid', 'pHz48ABhlz6E', 0),
(20, 'bottosenj', 'Burk', 'Ottosen', 'lofki9B3', 0),
(21, 'pmizenk', 'Philippa', 'Mizen', 'gMqMbI', 0),
(22, 'hgristl', 'Huntlee', 'Grist', 'jmmGFi6o', 0),
(23, 'pannandm', 'Paulo', 'Annand', '8qON9gfT4', 0),
(24, 'amchardyn', 'Alleyn', 'McHardy', 'eSjCA8W', 0),
(25, 'nwestnedgeo', 'Nickie', 'Westnedge', 'siC3g6wsSm', 0),
(26, 'ipollicottp', 'Isadore', 'Pollicott', 'TxjL1yCrKK', 0),
(27, 'rgarbuttq', 'Reiko', 'Garbutt', '9x3unyUjW55', 0),
(28, 'tbeldonr', 'Tori', 'Beldon', 'AJOvtYo3G3', 0),
(29, 'lhousleys', 'Lynn', 'Housley', 'affhU0pORnU', 0),
(30, 'jsouthardt', 'Jason', 'Southard', 'cBYKzX3vc6v', 0),
(31, 'gatherleyu', 'Gaultiero', 'Atherley', 'FQarxxRpYcA', 0),
(32, 'eposselv', 'Estele', 'Possel', 'DUhJ5S6FLEk', 0),
(33, 'tapflerw', 'Thorvald', 'Apfler', 'sL9axEGa', 0),
(34, 'tseniourx', 'Trina', 'Seniour', 'nbriN4JlO', 0),
(35, 'cblamirey', 'Cord', 'Blamire', 'ZJMvxJM9uOy', 0),
(36, 'lscrivenz', 'Lise', 'Scriven', 'Hy82vpyM', 0),
(37, 'rperford10', 'Roley', 'Perford', 'PgPVzCj3WIrk', 0),
(38, 'pgoldsworthy11', 'Pippy', 'Goldsworthy', '8osaGGnL', 0),
(39, 'ggregr12', 'Genvieve', 'Gregr', 'ec5L48gn15AE', 0),
(40, 'bburgan13', 'Brook', 'Burgan', 'bM4C5VLN', 0),
(41, 'brehme14', 'Bryce', 'Rehme', '00ZMoaVlQn5w', 0),
(42, 'agrahame15', 'Angeline', 'Grahame', 'IcaGsqjRSJay', 0),
(43, 'vlockwood16', 'Vonni', 'Lockwood', 'BOAraN7', 0),
(44, 'erudledge17', 'Emilie', 'Rudledge', 'pxz7atBE', 0),
(45, 'sbugbird18', 'Shell', 'Bugbird', 'c1jSCgD4Jv4', 0),
(46, 'twhieldon19', 'Tommi', 'Whieldon', 'LeuxMb', 0),
(47, 'brobbeke1a', 'Bibby', 'Robbeke', '0BStcTLe', 0),
(48, 'cwetherald1b', 'Claudina', 'Wetherald', 'H7ym1dm5', 0),
(49, 'pburgett1c', 'Petey', 'Burgett', 'KeN8bxqFuNet', 0),
(50, 'ddawbury1d', 'Diego', 'Dawbury', 'i3FPmN', 0),
(51, 'admin', 'adminFN', 'adminLN', 'admin', 1),
(52, 'user', 'FN', 'LN', 'pass', 0);

-- --------------------------------------------------------

--
-- Structure for view `orderdetails`
--
DROP TABLE IF EXISTS `orderdetails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderdetails`  AS SELECT `ordercart`.`OrderID` AS `OrderID`, `ordercart`.`OrderDate` AS `OrderDate`, `user`.`Username` AS `Username`, `cart_details`.`Subtotal` AS `Subtotal` FROM ((`ordercart` left join `user` on(`ordercart`.`OrderID` = `user`.`UserID`)) left join `cart_details` on(`cart_details`.`CartID` = `ordercart`.`OrderID`))  ;

-- --------------------------------------------------------

--
-- Structure for view `orderdetails_by_orderid`
--
DROP TABLE IF EXISTS `orderdetails_by_orderid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderdetails_by_orderid`  AS SELECT `ordercart`.`OrderID` AS `OrderID`, `ordercart`.`OrderDate` AS `OrderDate`, `user`.`Username` AS `Username`, `cart_details`.`Subtotal` AS `Subtotal` FROM ((`ordercart` left join `user` on(`ordercart`.`OrderID` = `user`.`UserID`)) left join `cart_details` on(`cart_details`.`CartID` = `ordercart`.`OrderID`)) WHERE `ordercart`.`OrderID` like '1''1'  ;

-- --------------------------------------------------------

--
-- Structure for view `orderdetails_by_price`
--
DROP TABLE IF EXISTS `orderdetails_by_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderdetails_by_price`  AS SELECT `ordercart`.`OrderID` AS `OrderID`, `ordercart`.`OrderDate` AS `OrderDate`, `user`.`Username` AS `Username`, `cart_details`.`Subtotal` AS `Subtotal` FROM ((`ordercart` left join `user` on(`ordercart`.`OrderID` = `user`.`UserID`)) left join `cart_details` on(`cart_details`.`CartID` = `ordercart`.`OrderID`)) ORDER BY `cart_details`.`Subtotal` ASC  ;

-- --------------------------------------------------------

--
-- Structure for view `orderdetails_by_username`
--
DROP TABLE IF EXISTS `orderdetails_by_username`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderdetails_by_username`  AS SELECT `ordercart`.`OrderID` AS `OrderID`, `ordercart`.`OrderDate` AS `OrderDate`, `user`.`Username` AS `Username`, `cart_details`.`Subtotal` AS `Subtotal` FROM ((`ordercart` left join `user` on(`ordercart`.`OrderID` = `user`.`UserID`)) left join `cart_details` on(`cart_details`.`CartID` = `ordercart`.`OrderID`)) WHERE `user`.`Username` like 'a%''a%'  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`),
  ADD KEY `CartCustomer` (`CartCustomer`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`CartID`,`CartProductID`),
  ADD KEY `CartProductID` (`CartProductID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `cond`
--
ALTER TABLE `cond`
  ADD PRIMARY KEY (`ConditionID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`ManufacturerID`);

--
-- Indexes for table `ordercart`
--
ALTER TABLE `ordercart`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CartID` (`CartID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `ManufacturerID` (`ManufacturerID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cond`
--
ALTER TABLE `cond`
  MODIFY `ConditionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `ManufacturerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `ordercart`
--
ALTER TABLE `ordercart`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`CartCustomer`) REFERENCES `users` (`CustomerID`);

--
-- Constraints for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_ibfk_1` FOREIGN KEY (`CartID`) REFERENCES `cart` (`CartID`),
  ADD CONSTRAINT `cart_details_ibfk_2` FOREIGN KEY (`CartProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `cond`
--
ALTER TABLE `cond`
  ADD CONSTRAINT `cond_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CategoryID`);

--
-- Constraints for table `ordercart`
--
ALTER TABLE `ordercart`
  ADD CONSTRAINT `ordercart_ibfk_1` FOREIGN KEY (`CartID`) REFERENCES `cart` (`CartID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ManufacturerID`) REFERENCES `manufacturer` (`ManufacturerID`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CategoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

DROP TABLE IF EXISTS `kabkota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kabkota` (
  `id_kabkota` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aktif` enum('0','1') COLLATE utf8_unicode_ci DEFAULT '0',
  PRIMARY KEY (`id_kabkota`),
  KEY `regencies_province_id_index` (`province_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kabkota`
--

-- LOCK TABLES `kabkota` WRITE;
-- /*!40000 ALTER TABLE `kabkota` DISABLE KEYS */;
-- INSERT INTO `kabkota` VALUES ('0','13','NO DATA','1'),('1301','13','KABUPATEN KEPULAUAN MENTAWAI','1'),('1302','13','KABUPATEN PESISIR SELATAN','1'),('1303','13','KABUPATEN SOLOK','1'),('1304','13','KABUPATEN SIJUNJUNG','1'),('1305','13','KABUPATEN TANAH DATAR','1'),('1306','13','KABUPATEN PADANG PARIAMAN','1'),('1307','13','KABUPATEN AGAM','1'),('1308','13','KABUPATEN LIMA PULUH KOTA','1'),('1309','13','KABUPATEN PASAMAN','1'),('1310','13','KABUPATEN SOLOK SELATAN','1'),('1311','13','KABUPATEN DHARMASRAYA','1'),('1312','13','KABUPATEN PASAMAN BARAT','1'),('1371','13','KOTA PADANG','1'),('1372','13','KOTA SOLOK','1'),('1373','13','KOTA SAWAH LUNTO','1'),('1374','13','KOTA PADANG PANJANG','1'),('1375','13','KOTA BUKITTINGGI','1'),('1376','13','KOTA PAYAKUMBUH','1'),('1377','13','KOTA PARIAMAN','1');
-- /*!40000 ALTER TABLE `kabkota` ENABLE KEYS */;
-- UNLOCK TABLES;


-- DROP TABLE IF EXISTS `satker`;
-- /*!40101 SET @saved_cs_client     = @@character_set_client */;
-- /*!40101 SET character_set_client = utf8 */;
-- CREATE TABLE `satker` (
--   `id_satker` char(6) COLLATE utf8_unicode_ci NOT NULL,
--   `id_kabkota` char(2) COLLATE utf8_unicode_ci NOT NULL,
--   `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
--   `aktif` enum('0','1') COLLATE utf8_unicode_ci DEFAULT '0',
--   PRIMARY KEY (`id_satker`),
--   KEY `regencies_id_kabkota_index` (`id_kabkota`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- /*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `kabkota` WRITE;
INSERT INTO `kabkota` VALUES
  ('001301', '1301 ', 'Kementerian Agama Kab. Pesisir Selatan', '1'),
	('130101 ', '1301 ', 'MIN 01 Pesisir Selatan ', '1'),
	('130102 ', '1301 ', 'MIN 02 Pesisir Selatan ', '1'),
	('130103 ', '1301 ', 'MIN 03 Pesisir Selatan ', '1'),
	('130104 ', '1301 ', 'MIN 04 Pesisir Selatan ', '1'),
	('130105 ', '1301 ', 'MIN 05 Pesisir Selatan ', '1'),
	('130106 ', '1301 ', 'MIN 06 Pesisir Selatan ', '1'),
	('130107 ', '1301 ', 'MIN 07 Pesisir Selatan ', '1'),
	('130108 ', '1301 ', 'MIN 08 Pesisir Selatan ', '1'),
	('130109 ', '1301 ', 'MIN 09 Pesisir Selatan ', '1'),
	('130110 ', '1301 ', 'MIN 10 Pesisir Selatan ', '1'),
	('130111 ', '1301 ', 'MIN 11 Pesisir Selatan ', '1'),
	('130112 ', '1301 ', 'MIN 12 Pesisir Selatan ', '1'),
	('130113 ', '1301 ', 'MIN 13 Pesisir Selatan ', '1'),
	('130114 ', '1301 ', 'MTsN 01 Pesisir Selatan ', '1'),
	('130115 ', '1301 ', 'MTsN 02 Pesisir Selatan ', '1'),
	('130116 ', '1301 ', 'MTsN 03 Pesisir Selatan ', '1'),
	('130117 ', '1301 ', 'MTsN 04 Pesisir Selatan ', '1'),
	('130118 ', '1301 ', 'MTsN 05 Pesisir Selatan ', '1'),
	('130119 ', '1301 ', 'MTsN 06 Pesisir Selatan ', '1'),
  ('130120 ', '1301 ', 'MTsN 07 Pesisir Selatan ', '1'),
	('130121 ', '1301 ', 'MTsN 08 Pesisir Selatan ', '1'),
	('130122 ', '1301 ', 'MTsN 09 Pesisir Selatan ', '1'),
	('130123 ', '1301 ', 'MTsN 10 Pesisir Selatan ', '1'),
	('130124 ', '1301 ', 'MTsN 11 Pesisir Selatan ', '1'),
	('130125 ', '1301 ', 'MTsN 12 Pesisir Selatan ', '1'),
	('130126 ', '1301 ', 'MTsN 13 Pesisir Selatan ', '1'),
	('130127 ', '1301 ', 'MAN 1 Pesisir Selatan ', '1'),
	('130128 ', '1301 ', 'MAN 2 Pesisir Selatan ', '1'),
	('130129 ', '1301 ', 'MAN 3 Pesisir Selatan ', '1'),
	('130130 ', '1301 ', 'MAN 4 Pesisir Selatan ', '1'),
	('130131 ', '1301 ', 'KUA Kec. Koto XI Tarusan ', '1'),
	('130132 ', '1301 ', 'KUA Kec. Bayang ', '1'),
	('130133 ', '1301 ', 'KUA Kec. IV Nagari Bayang Utara ', '1'),
	('130134 ', '1301 ', 'KUA Kec. IV Jurai ', '1'),
	('130135 ', '1301 ', 'KUA Kec. Batang Kapas ', '1'),
	('130136 ', '1301 ', 'KUA Kec. Sutera ', '1'),
	('130137 ', '1301 ', 'KUA Kec. Lengayang ', '1'),
	('130138 ', '1301 ', 'KUA Kec. Ranah Pesisir ', '1'),
  ('130139 ', '1301 ', 'KUA Kec. Linggo Sari Baganti ', '1'),
	('130140 ', '1301 ', 'KUA Kec. Airpura ', '1'),
	('130141 ', '1301 ', 'KUA Kec. Pancung Soal ', '1'),
	('130142 ', '1301 ', 'KUA Kec. Basa Ampek Balai ', '1'),
	('130143 ', '1301 ', 'KUA Kec. Ranah Ampek Hulu ', '1'),
	('130144 ', '1301 ', 'KUA Kec. Lunang ', '1'),
	('130145 ', '1301 ', 'KUA Kec. Silaut ', '1');
  UNLOCK TABLES;
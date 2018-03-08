-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 08, 2018 at 06:24 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `supermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_category`
--

CREATE TABLE `s_category` (
  `id` bigint(20) NOT NULL COMMENT '主键',
  `name` varchar(50) NOT NULL COMMENT '分类名称',
  `url` varchar(100) NOT NULL COMMENT '分类图片',
  `orderNo` int(11) NOT NULL COMMENT '排序号',
  `remark` varchar(100) NOT NULL COMMENT '描述',
  `isDelete` int(11) NOT NULL COMMENT '删除否',
  `userId` bigint(20) NOT NULL COMMENT '用户ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `s_order`
--

CREATE TABLE `s_order` (
  `id` bigint(20) NOT NULL COMMENT '主键',
  `orderNo` varchar(20) NOT NULL COMMENT '订单编号',
  `orderDate` datetime NOT NULL COMMENT '下单时间',
  `sendDate` datetime NOT NULL COMMENT '配送时间',
  `addressId` bigint(20) NOT NULL COMMENT '配送地址ID',
  `userId` bigint(20) NOT NULL COMMENT '用户ID',
  `payday` int(11) NOT NULL COMMENT '配送方式',
  `state` int(11) NOT NULL COMMENT '状态'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `s_orderdetail`
--

CREATE TABLE `s_orderdetail` (
  `id` bigint(20) NOT NULL COMMENT '主键',
  `orderId` bigint(20) NOT NULL COMMENT '订单ID',
  `productId` bigint(20) NOT NULL COMMENT '物品ID',
  `price` decimal(10,0) NOT NULL COMMENT '物品价格',
  `amount` int(11) NOT NULL COMMENT '数量'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `s_product`
--

CREATE TABLE `s_product` (
  `id` bigint(20) NOT NULL COMMENT '主键',
  `name` varchar(50) NOT NULL COMMENT '名称',
  `price` decimal(10,0) NOT NULL COMMENT '价格',
  `url` varchar(100) NOT NULL COMMENT '主图片',
  `addDate` datetime NOT NULL COMMENT '上架时间',
  `isDelete` int(11) NOT NULL COMMENT '删除否',
  `categoryId` bigint(20) NOT NULL COMMENT '分类ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `s_productdesc`
--

CREATE TABLE `s_productdesc` (
  `id` bigint(20) NOT NULL COMMENT '主键',
  `url` varchar(100) NOT NULL COMMENT '路径',
  `orderNo` int(11) NOT NULL COMMENT '排序号',
  `productId` bigint(20) NOT NULL COMMENT '物品ID',
  `remark` varchar(50) NOT NULL COMMENT '描述'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `s_productimg`
--

CREATE TABLE `s_productimg` (
  `id` bigint(20) NOT NULL COMMENT '主键',
  `url` varchar(100) NOT NULL COMMENT '路径',
  `orderNo` int(11) NOT NULL COMMENT '排序号',
  `productId` bigint(20) NOT NULL COMMENT '物品ID',
  `remark` varchar(50) NOT NULL COMMENT '图片描述'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `s_syscolumn`
--

CREATE TABLE `s_syscolumn` (
  `id` bigint(20) NOT NULL COMMENT '主键',
  `colName` varchar(50) NOT NULL COMMENT '列名称',
  `colType` int(11) NOT NULL COMMENT '列类型',
  `colLength` int(11) NOT NULL COMMENT '列长度',
  `defaultValue` varchar(50) NOT NULL COMMENT '默认值',
  `isPk` int(11) NOT NULL COMMENT '主键否',
  `remark` varchar(50) NOT NULL COMMENT '描述',
  `state` int(11) NOT NULL COMMENT '状态',
  `tableId` bigint(20) NOT NULL COMMENT '表ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `s_sysgroup`
--

CREATE TABLE `s_sysgroup` (
  `id` bigint(20) NOT NULL COMMENT '主键',
  `groupName` varchar(50) NOT NULL COMMENT '分组名称',
  `remark` varchar(100) NOT NULL COMMENT '描述',
  `parentId` bigint(20) NOT NULL COMMENT '上级ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_sysgroup`
--

INSERT INTO `s_sysgroup` (`id`, `groupName`, `remark`, `parentId`) VALUES
(14, '1', '1', 0),
(15, '2', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `s_sysmenu`
--

CREATE TABLE `s_sysmenu` (
  `id` bigint(20) NOT NULL COMMENT '主键',
  `name` varchar(50) NOT NULL COMMENT '资源名称',
  `menuUrl` varchar(100) NOT NULL COMMENT '地址',
  `isDelete` int(11) NOT NULL COMMENT '删除否',
  `remark` varchar(100) NOT NULL COMMENT '描述',
  `parentId` bigint(20) NOT NULL COMMENT '上级ID',
  `parentName` varchar(50) NOT NULL COMMENT '上级名称',
  `orderNo` int(11) NOT NULL COMMENT '序号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_sysmenu`
--

INSERT INTO `s_sysmenu` (`id`, `name`, `menuUrl`, `isDelete`, `remark`, `parentId`, `parentName`, `orderNo`) VALUES
(1, '首页', '/Index/index', 1, '', 0, '0', 0),
(2, '用户管理', '', 0, '用户管理', 0, '', 1),
(3, '订单管理', '', 0, '', 0, '', 2),
(4, '系统管理', '', 0, '', 0, '', 3),
(5, 'Dashboard', 'Index/index', 0, '', 1, '首页', 1),
(6, '订单列表', 'Order/index', 0, '', 3, '订单管理', 1),
(7, '分组管理', '', 0, '分组管理', 4, '系统管理', 1),
(8, '用户管理', '', 0, '用户管理', 4, '系统管理', 2),
(9, '资源管理', '', 0, '', 4, '系统管理', 3),
(10, '权限管理', '', 0, '权限管理', 4, '系统管理', 4),
(11, '代码生成', '', 0, '代码生成', 4, '系统管理', 5),
(12, '数据表管理', '', 0, '数据表管理', 4, '系统管理', 6),
(13, '新增资源', 'Sysmenu/add', 0, '新增资源', 9, '资源管理', 1),
(15, '资源列表', 'Sysmenu/index', 0, '', 9, '资源管理', 2),
(16, '新增分组', 'Sysgroup/add', 0, '新增分组', 7, '分组管理', 1),
(17, '分组列表', 'Sysgroup/index', 0, '分组列表', 7, '分组管理', 2),
(18, '系统信息', '', 0, '', 4, '系统管理', 7),
(19, '系统信息', 'System/add', 0, '系统信息', 18, '系统信息', 1);

-- --------------------------------------------------------

--
-- Table structure for table `s_sysrole`
--

CREATE TABLE `s_sysrole` (
  `id` bigint(20) NOT NULL COMMENT '主键',
  `groupId` bigint(20) NOT NULL COMMENT '分组ID',
  `menuId` bigint(20) NOT NULL COMMENT '资源ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `s_systable`
--

CREATE TABLE `s_systable` (
  `id` bigint(20) NOT NULL COMMENT '主键',
  `name` varchar(50) NOT NULL COMMENT '表名称',
  `oldName` varchar(50) NOT NULL COMMENT '旧名称',
  `remark` varchar(100) NOT NULL COMMENT '表描述'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_systable`
--

INSERT INTO `s_systable` (`id`, `name`, `oldName`, `remark`) VALUES
(1, '2', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `s_system`
--

CREATE TABLE `s_system` (
  `id` int(11) NOT NULL COMMENT '主键',
  `sysName` varchar(50) NOT NULL COMMENT '后台管理名称',
  `siteName` varchar(50) NOT NULL COMMENT '站点名称',
  `sysVison` varchar(50) NOT NULL COMMENT '版本信息',
  `favicon` varchar(100) NOT NULL COMMENT '网站icon',
  `keywords` varchar(50) NOT NULL COMMENT '关键字',
  `lang` varchar(20) NOT NULL COMMENT '语言'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `s_sysuser`
--

CREATE TABLE `s_sysuser` (
  `id` bigint(20) NOT NULL COMMENT '主键',
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `phone` varchar(20) NOT NULL COMMENT '电话',
  `regDate` datetime NOT NULL COMMENT '注册时间',
  `avatarUrl` varchar(100) NOT NULL COMMENT '头像',
  `password` varchar(100) NOT NULL COMMENT '密码',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `state` int(11) NOT NULL COMMENT '状态',
  `groupId` bigint(20) NOT NULL COMMENT '分组ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `s_user`
--

CREATE TABLE `s_user` (
  `id` bigint(20) NOT NULL COMMENT '主键',
  `nickName` varchar(50) NOT NULL COMMENT '昵称',
  `gender` int(11) NOT NULL COMMENT '性别',
  `language` varchar(20) NOT NULL COMMENT '语言',
  `country` varchar(20) NOT NULL COMMENT '国家',
  `province` varchar(20) NOT NULL COMMENT '省份',
  `city` varchar(20) NOT NULL COMMENT '城市',
  `avatarUrl` varchar(200) NOT NULL COMMENT '头像',
  `regDate` datetime NOT NULL COMMENT '注册时间',
  `address` varchar(50) NOT NULL COMMENT '地址',
  `openId` varchar(100) NOT NULL COMMENT 'openId',
  `unionId` varchar(50) NOT NULL COMMENT 'unionId',
  `session_key` varchar(50) NOT NULL COMMENT 'session_key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s_category`
--
ALTER TABLE `s_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_order`
--
ALTER TABLE `s_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_orderdetail`
--
ALTER TABLE `s_orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_product`
--
ALTER TABLE `s_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_productdesc`
--
ALTER TABLE `s_productdesc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_productimg`
--
ALTER TABLE `s_productimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_syscolumn`
--
ALTER TABLE `s_syscolumn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_sysgroup`
--
ALTER TABLE `s_sysgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_sysmenu`
--
ALTER TABLE `s_sysmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_sysrole`
--
ALTER TABLE `s_sysrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_systable`
--
ALTER TABLE `s_systable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_system`
--
ALTER TABLE `s_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_sysuser`
--
ALTER TABLE `s_sysuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_user`
--
ALTER TABLE `s_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `s_category`
--
ALTER TABLE `s_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `s_order`
--
ALTER TABLE `s_order`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `s_orderdetail`
--
ALTER TABLE `s_orderdetail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `s_product`
--
ALTER TABLE `s_product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `s_productdesc`
--
ALTER TABLE `s_productdesc`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `s_productimg`
--
ALTER TABLE `s_productimg`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `s_syscolumn`
--
ALTER TABLE `s_syscolumn`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `s_sysgroup`
--
ALTER TABLE `s_sysgroup`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `s_sysmenu`
--
ALTER TABLE `s_sysmenu`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `s_sysrole`
--
ALTER TABLE `s_sysrole`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `s_systable`
--
ALTER TABLE `s_systable`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `s_system`
--
ALTER TABLE `s_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `s_sysuser`
--
ALTER TABLE `s_sysuser`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `s_user`
--
ALTER TABLE `s_user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键';
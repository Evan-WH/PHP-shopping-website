/*
Navicat MySQL Data Transfer

Source Server         : 我的新服务器
Source Server Version : 50565
Source Host           : 122.152.231.19:3306
Source Database       : shopdb

Target Server Type    : MYSQL
Target Server Version : 50565
File Encoding         : 65001

Date: 2020-06-21 23:29:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `typeid` int(10) unsigned NOT NULL,
  `price` double(6,2) unsigned NOT NULL,
  `total` int(10) unsigned NOT NULL,
  `pic` varchar(32) NOT NULL,
  `note` text,
  `addtime` int(10) unsigned NOT NULL,
  `updatetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('7', '海南金都一号红心火龙果5斤装', '13', '19.90', '2000', '202006201009511702.png', '品牌名称：福瑞达\r\n产品参数：\r\n\r\n厂名：福瑞达旗舰店厂址：福瑞达旗舰店厂家联系方式：19961976125保质期：5 天品牌: 福瑞达系列: 火龙果规格: 优质好果价格: 51-100元产地: 中国大陆省份: 海南省城市: 海口市是否为有机食品: 否包装方式: 散装售卖方式: 单品套餐份量: 2人份套餐周期: 1周配送频次: 1周2次水果种类: 红心火龙果热卖时间: 1月 2月 3月 4月 5月 6月 7月 8月 9月 10月 11月 12月净含量: 2500g生鲜储存温度: 0-8℃', '1592618991', null);
INSERT INTO `goods` VALUES ('6', '海南贵妃芒果9斤新鲜水果', '2', '39.80', '2000', '202006201002579370.png', '品牌名称：甘福园\r\n产品参数：\r\n\r\n厂名：甘福园旗舰店厂址：甘福园旗舰店厂家联系方式：4009039588配料表：海南贵妃芒果储藏方法：低温保鲜保质期：7 天食品添加剂：无品牌: 甘福园价格: 0-50元产地: 中国大陆省份: 海南省城市: 三亚市是否为有机食品: 否同城服务: 同城24小时物流送货上门包装方式: 包装售卖方式: 单品套餐份量: 3人份套餐周期: 1周配送频次: 1周2次特产品类: 海南贵妃芒水果种类: 贵妃芒热卖时间: 1月 2月 3月 4月 5月 6月 7月 8月 9月 10月 11月 12月原产地: 中国净含量: 9斤生鲜储存温度: 0-8℃单果重量: 300-500g', '1592618577', null);
INSERT INTO `goods` VALUES ('8', '正宗无锡七彩阳山水蜜桃新鲜水果5两15个装', '3', '58.00', '2000', '202006201012247821.png', '品牌名称：小憨孩\r\n产品参数：\r\n\r\n厂名：陈厂址：江苏厂家联系方式：89746587保质期：7 天品牌: 小憨孩产地: 中国大陆省份: 江苏省城市: 无锡市包装方式: 包装净含量: 3750g', '1592619144', null);
INSERT INTO `goods` VALUES ('9', '苹果水果新鲜红富士整箱10脆甜', '11', '44.80', '2000', '202006201014142203.png', '品牌名称：尧坝\r\n产品参数：\r\n\r\n厂名：陕西老农尧坝果园厂址：陕西咸阳厂家联系方式：15591020049配料表：自然熟储藏方法：常温冷藏保质期：180 天食品添加剂：原生态品牌: 尧坝价格: 51-100元产地: 中国大陆省份: 陕西省城市: 延安市是否为有机食品: 否同城服务: 同城24小时卖家送货上门包装方式: 散装售卖方式: 单品套餐份量: 2人份套餐周期: 1周配送频次: 1周1次特产品类: 洛川苹果水果种类: 红富士热卖时间: 1月 2月 3月 4月 5月 6月 7月 8月 9月 10月 11月 12月净含量: 9斤重量（不含箱）: 9斤生鲜储存温度: 0-8℃苹果果径: 80mm（含）-85mm(不含) ', '1592619254', null);
INSERT INTO `goods` VALUES ('10', '马来西亚进口猫山王榴莲新鲜水果D197', '8', '178.00', '2000', '202006201016435697.png', '品牌名称：果袖\r\n产品参数：\r\n\r\n厂名：SEODONG果袖厂址：SEODONG果袖厂家联系方式：13249824952保质期：365 天品牌: 果袖价格: 300元以上产地: 马来西亚包装方式: 包装售卖方式: 单品套餐份量: 2人份套餐周期: 1周食品品种: 猫山王单果重量: 【一号】2.0斤-2.4斤【保三房肉 迷你果，仅供尝试体验】 【二号】2.4斤-2.6斤【保三房肉 入门尝鲜经典装】 【三号】2.6斤-3.2斤【保四房肉 吃货推荐】 【果妃】3.2斤-3.8斤【保四房肉 出肉稳定 店长推荐】 【果后】3.8斤-4.6斤【保四房肉 出肉率高 店长推荐】 【果王】4.6斤-5.4斤【保五房肉 送礼首选】 【果皇】5.4-6.2斤【保五房肉 少量大果 可遇不可求】净含量: 2500g生鲜储存温度: -18℃储存条件: 冷冻榴莲形态: 整果', '1592619403', null);
INSERT INTO `goods` VALUES ('11', '现摘秭归脐橙新鲜10斤装', '5', '39.80', '2000', '202006201018331249.png', '品牌名称：嘉州园\r\n产品参数：\r\n\r\n厂名：嘉州园厂址：嘉州园厂家联系方式：13587453643保质期：7 天品牌: 嘉州园产地: 中国大陆省份: 湖北省城市: 宜昌市包装方式: 散装套餐份量: 2人份套餐周期: 1周特产品类: 秭归脐橙水果种类: 夏橙热卖时间: 1月 2月 3月 4月 5月 6月 7月 8月 9月 10月 11月 12月净含量: 10斤', '1592619513', null);
INSERT INTO `goods` VALUES ('12', '夏黑葡萄整箱5斤', '4', '42.80', '2000', '202006201020134144.png', '产地: 中国大陆省份: 江苏省城市: 徐州市是否为有机食品: 否同城服务: 同城24小时物流送货上门包装方式: 食用农产品售卖方式: 单品套餐份量: 4人份套餐周期: 1周配送频次: 1周1次特产品类: 萧县葡萄水果种类: 巨峰葡萄热卖时间: 4月 5月 6月 7月 8月 9月 10月净含量: 2000g生鲜储存温度: 15-18℃', '1592619613', null);
INSERT INTO `goods` VALUES ('13', '云南宾川高山红提葡萄', '4', '38.60', '2000', '202006201021338321.png', '品牌名称：滇圣\r\n产品参数：\r\n\r\n厂名：滇圣果园厂址：滇圣果园厂家联系方式：15187207960保质期：10 天品牌: 滇圣产地: 中国大陆省份: 云南省城市: 大理白族自治州包装方式: 散装热卖时间: 6月 7月 8月 9月净含量: 2500g生鲜储存温度: 0-8℃', '1592619693', null);

-- ----------------------------
-- Table structure for `tb_order`
-- ----------------------------
DROP TABLE IF EXISTS `tb_order`;
CREATE TABLE `tb_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `goods_id` int(10) DEFAULT NULL,
  `order_sn` varchar(50) DEFAULT NULL COMMENT '订单号',
  `order_money` float(10,2) DEFAULT NULL COMMENT '订单金额',
  `consignee` varchar(20) DEFAULT NULL COMMENT '收货人',
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL COMMENT '收货地址',
  `createtime` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_order
-- ----------------------------
INSERT INTO `tb_order` VALUES ('1', '1', '7', '2020062038683', '19.90', '王冬冬', '18259000000', '福建省测试路', '2020-06-20 10:23:31', null);

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '96e79218965eb72c92a549dd5a330112', '2020-06-05 10:54:47', null);
INSERT INTO `user` VALUES ('2', 'tom', '96e79218965eb72c92a549dd5a330112', '2020-06-05 11:38:04', null);
INSERT INTO `user` VALUES ('3', '李白', '96e79218965eb72c92a549dd5a330112', '2020-06-08 08:56:00', '2020-06-08 08:56:21');
INSERT INTO `user` VALUES ('4', 'test1', '96e79218965eb72c92a549dd5a330112', '2020-06-09 00:35:18', null);

/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : cylog

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-09-30 13:50:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('0', 'admin1', '123456', '123@qq.com', null);

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `laber_img` varchar(255) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=189 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', '活着', '余华', '势力扩大解放拉开松井大辅阿萨撒肯定发；拉开松井大辅', '<div class=\"featured-content row m0\">\r\n                        <a href=\"#\"><img src=\"/app/assets/images/posts/6.jpg\" alt=\"\"></a>\r\n                    </div>\r\n                    <div class=\"post-content row\">\r\n                        <h4>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4>\r\n                        <br>\r\n                        <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>\r\n                        <br>\r\n                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                        <br>\r\n                        <blockquote class=\"has-sign row m0\">\r\n                            <div>\r\n                                <p>If everybody learns this simple art of loving his work, whatever it is, enjoying it without asking for any recognition, we would have more beautiful and celebrating world.</p>\r\n                                <footer>OSHO</footer>\r\n                            </div>\r\n                        </blockquote>\r\n                        <h3>Sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>\r\n                        <br>\r\n                        <ul class=\"triangle-list nav\">\r\n                            <li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</li>\r\n                            <li>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n                        </ul>\r\n                        <ul class=\"circle-list nav\">\r\n                            <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>\r\n                            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>\r\n                        </ul>\r\n                        <br>\r\n                        <blockquote class=\"no-sign\">\r\n                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>\r\n                        </blockquote>\r\n                        <br>\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6\">\r\n                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                            </div>\r\n                            <div class=\"col-sm-6\">\r\n                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>\r\n                            </div>\r\n                        </div>\r\n                        <!--<br>-->\r\n                        <!--&lt;!&ndash; 16:9 aspect ratio &ndash;&gt;-->\r\n                        <!--<div class=\"embed-responsive embed-responsive-16by9\">-->\r\n                            <!--<iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/Gi3ZT4JttVI\"></iframe>-->\r\n                        <!--</div>-->\r\n                        <!--<br>-->\r\n                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                    </div>', null, null, null, null, '2017-09-23 22:47:59', '2017-09-21 22:48:05');
INSERT INTO `posts` VALUES ('2', '鞋印', '陈依文', '陈依文的诗一直给人有种简单俐落、冷歛理性的感觉，不喜用太过複杂的字词、也不擅用炫技花俏的文法语句，她就只是这麽顺顺地写下来，写生活中的每一个片刻。', '<p>\r\n    鞋印　◎＃陈依文\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    那旅人，披著编织的旧格纹毯，歇于街角\r\n</p>\r\n<p>\r\n    安于流浪的名份，不以为意。\r\n</p>\r\n<p>\r\n    这无惊喜，谈不上友善也不过分悲惨的世界：\r\n</p>\r\n<p>\r\n    雨下过，也放晴过，\r\n</p>\r\n<p>\r\n    有些春天格外寒冷而\r\n</p>\r\n<p>\r\n    有些冬日格外暖。\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    目光没有交接。\r\n</p>\r\n<p>\r\n    回忆走过来，\r\n</p>\r\n<p>\r\n    有的童鞋，有的运动鞋\r\n</p>\r\n<p>\r\n    有些穿马靴，有些趿著绣花拖，另有一些\r\n</p>\r\n<p>\r\n    套著镌有姓名缩写的塑胶雨鞋。\r\n</p>\r\n<p>\r\n    而目光，没有交接。\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    也没有招呼。\r\n</p>\r\n<p>\r\n    这些不曾结伴、彼此陌生，在城市中，漫无目的游行起的队伍\r\n</p>\r\n<p>\r\n    响著深浅不一的足音\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    --\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    ◎作者简介\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    陈依文\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    台湾嘉义人，毕业于台大中文系，台大台湾文学所硕士班。曾任教东吴大学中文系，现返居嘉义市，于写作之馀从事阅写教学。著有诗集《像蛹忍住蝶》、《海生月》、《甜星星》、散文集《浮沉展眉》。\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    高医阿米巴（容瑛）：\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    陈依文的诗一直给人有种简单俐落、冷歛理性的感觉，不喜用太过複杂的字词、也不擅用炫技花俏的文法语句，她就只是这麽顺顺地写下来，写生活中的每一个片刻。\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    这首〈鞋印〉诗分三段，长镜头般沿著同一视角延伸，由第一段的旅人看这世界，到第二段彼此交错却未交接的视线，以及第三段段那终究走过的足跟，画面感非常强烈，彷彿蹲在街角边、以比任何人都贴近地面的角度，看著踏过来、叠过去的鞋跟，世事与过客走走停停，究竟鞋跟的主人长什麽样子好像忽然之间变得不那麽重要。\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    首段最喜欢「这无惊喜，谈不上友善也不过分悲惨的世界：／雨下过，也放晴过，／有些春天格外寒冷而／有些冬日格外暖。」这几句，用冷歛的语气、远远地看淡世途，不刻意同情、也不过于伤感，在这温情主义犯滥的社会，这样平淡疏远的语气反倒是另一种安慰。\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    次段不断来来去去的鞋印，有娇贵的绣花鞋，也有童年记忆裡每逢新年才能买的LED闪光童鞋，也有沾上泥泞与汗水的塑胶雨鞋，目光没有相接却隐隐透漏了人事百态。\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    末段写队伍或深或浅地就这麽擦肩而过，彷彿暗喻了世间妄事不过足印般，在心裡留下一丝丝雪泥鸿爪，今晚一场大雨淋离，明日便又被冲刷弭平。\r\n</p>\r\n<p>\r\n    　\r\n</p>\r\n<p>\r\n    <br/>\r\n</p>', null, null, null, null, '2017-09-21 22:50:32', '2017-09-21 22:50:35');
INSERT INTO `posts` VALUES ('3', '从你的全世界路过', '张嘉佳', '昂及里面的额内容了，感觉还不错', null, null, null, null, null, '2017-09-21 22:50:38', '2017-09-21 22:50:39');
INSERT INTO `posts` VALUES ('4', '被窝是青春的坟墓', '七堇年', '少年成名，天下无双，非常喜欢，特别喜欢，中华第一女性作家', '<pre id=\"best-content-2387632249\" accuse=\"aContent\" class=\"best-text mb-10\" style=\"min-height: 55px;\">　　题目有误，没有这样的一本书，这本书名称应该是《被窝是青春的坟墓》有关这本书的解释如下：<br />　　一、简介：<br />　　《被窝是青春的坟墓》是长江文艺出版社2007年出版的随笔集，作者是七堇年。全书共分为两部分，惊蛰与清明，寓意成长与写作路途上的不同阶段。<br />　　二、内容简介：<br />　　《被窝是青春的坟墓》是七堇年<br /><br />　　的第一部散文小说集，是她的第二部单行本。全书收录包括序在内的19篇文章，共分为两部分，惊蛰与清明，寓意成长与写作路途上的不同阶段。收录曾经发表在杂志上的部分中短篇作品，并加入了大部分最新创作的散文等作品。作家郭敬明称七堇年“思想深刻、文笔成熟，远远超过作者本人的年龄和阅历。”也收录曾经发表在杂志上的部分中短篇作品，并加入了大部分最新创作的散文等作品。青春文学领军人物郭敬明由衷赞扬七堇年“思想深刻、文笔成熟”，远远超过作者本人的年龄和阅历。“这是一部让人惊叹的作品，也是一部异常深刻和饱满的成长记录。在众多或偏激或强说愁或疼痛苍白的青春文学领域里，七堇年的独树一帜必定引起所有人的瞩目。”2013年《被窝是青春的坟墓》再版，特别收录七堇年中篇小说《少年残像》，再续温暖青春风暴！<br />　　在青春之书里，我们同在一行字之间。被窝是青春的坟墓。关于少年时代，冷暖自知，最朴素的生活，与最遥远的梦想。这一切将在被回忆肆意篡改的书写下，渐渐抽象成一些雾一样的尘埃，浮在梦境之外的空茫黑暗中，日日夜夜不停坠落，终会尘埃落定。在我们的希望和愿欲的深处，隐藏着对于青春的默识。如同种子在雪下静静梦想。所以你要知道，我将在更大的沉默中归来。青春是生命最温暖的被窝，是生命最华丽的裙袂。<br />　　三、补充解释作者：<br />　　姓名：赵勤<br />　　七堇年<br />　　七堇年 (2张)<br />　　笔名：七堇年、山荆<br />　　性别：女<br />　　生日：1986年10月5日<br />　　星座：天秤<br />　　爱好：文字、音乐、电影、摄影（厌恶被拍）、旅行<br />　　学历：2003-2005年就读于私立高中成都外国语学校05级。高考前外语过GRE，并在清华自主招生复选的笔试口试中顺利通过，最后在高考中意外地败北，与清华大学失之交臂，于是改进天津外国语大学。<br />　　喜欢的作家：史铁生、黄碧云、安妮宝贝等</pre>', null, null, null, null, '2017-09-21 22:50:41', '2017-09-21 22:50:43');
INSERT INTO `posts` VALUES ('5', '海贼王', '尾田荣一郎', '航片动漫小孩所什么的萨芬来看骄傲i芙蓉王', '', null, null, null, null, null, null);
INSERT INTO `posts` VALUES ('82', '消愁', '毛不易', '好吧天亮之后总是潦草离场\r\n清醒的人最荒唐\r\n好吧天亮之后总是潦草离场\r\n清醒的人最荒唐', '<blockquote>\r\n    <pre id=\"best-content-2795053270\" accuse=\"aContent\" class=\"best-text mb-10\" style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; font-family: &quot;PingFang SC&quot;, &quot;Lantinghei SC&quot;, &quot;Microsoft YaHei&quot;, arial, 宋体, sans-serif, tahoma; white-space: pre-wrap; word-wrap: break-word; font-size: 16px; line-height: 29px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); min-height: 55px;\">消愁   毛不易\r\n当你走进这欢乐场\r\n背上所有的梦与想\r\n各色的脸上各色的妆\r\n没人记得你的模样\r\n三巡酒过你在角落\r\n固执的唱着苦涩的歌\r\n听他在喧嚣里被淹没\r\n你拿起酒杯对自己说\r\n一杯敬朝阳，一杯敬月光\r\n唤醒我的向往，温柔了寒窗\r\n于是可以不回头的逆风飞翔\r\n不怕心头有雨，眼底有霜\r\n一杯敬故乡，一杯敬远方\r\n守着我的善良，催着我成长\r\n所以南北的路从此不再漫长\r\n灵魂不再无处安放\r\n一杯敬明天，一杯敬过往\r\n支撑我的身体，厚重了肩膀\r\n虽然从不相信所谓山高水长\r\n人生苦短何必念念不忘\r\n一杯敬自由，一杯敬死亡\r\n宽恕我的平凡，驱散了迷惘\r\n好吧天亮之后总是潦草离场\r\n清醒的人最荒唐\r\n好吧天亮之后总是潦草离场\r\n清醒的人最荒唐</pre>\r\n</blockquote>\r\n<p>\r\n    <iframe frameborder=\"no\" border=\"0\" marginwidth=\"0\" marginheight=\"0\" width=\"330\" height=\"86\" src=\"//music.163.com/outchain/player?type=2&id=494108229&auto=1&height=66\"></iframe> &nbsp; &nbsp;<br/>\r\n</p>', null, null, null, null, null, null);
INSERT INTO `posts` VALUES ('187', '阿斯顿', '', null, '<p>欢迎使用 CYLog</p><p>阿斯顿</p>', null, null, null, null, '2017-09-30 13:32:41', null);
INSERT INTO `posts` VALUES ('188', '衬衣', '江西', null, '<p>阿斯利康大家发欢迎使用 CYLog</p><p><br></p>', null, null, null, null, '2017-09-30 13:33:51', null);
